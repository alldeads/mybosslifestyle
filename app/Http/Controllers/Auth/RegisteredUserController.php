<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\User;
use App\Rules\AccountNumberRule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request): View
    {
        return view('auth.register', [
            'referral' => $request->get('referral', Str::random(5))
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:11', 'max:11'],
            'address' => ['required', 'string', 'max:255'],
            'number' => ['required', 'numeric', new AccountNumberRule],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $referral = 1; // Admin

        if ($request->get('referral')) {
            $result = User::where('referral', $request->get('referral'))->first();

            if ($result) {
                $referral = $result->id;
            }
        }

        $username = str_replace(' ', '', strtolower($request->first_name) . '.' . strtolower($request->last_name));

        $duplicateUsername = User::where('username', $username)->first();

        if ($duplicateUsername) {
            $username .= rand(10, 1000);
        }

        $user = User::create([
            'parent_id' => $referral,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'account_number' => $request->number,
            'username' => $username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'referral' => strtoupper(Str::random(7)),
            'is_admin' => false
        ]);

        Code::where('code', $request->number)->update([
            'is_available' => false,
            'used_at' => now(),
            'user_id' => $user->id
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
