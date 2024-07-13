<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionItem;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = auth()->user()->carts;

        return view('cart', compact('carts'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quantity = (int) $request->input('quantity') ?? 1;

        $quantity = $quantity <= 0 ? 1 : $quantity;

        $product = Product::findOrFail($request->product_id);

        auth()->user()->carts()->updateOrCreate([
            'product_id' => $request->product_id,
        ], [
            'quantity' => $quantity,
            'price' => $product->dprice,
            'total' => $product->dprice * $quantity
        ]);

        return redirect()->route('cart');
    }

    /**
     * Update the specified resource in storage.
     */
    public function submit(Request $request)
    {
        $carts = auth()->user()->carts;

        $totalSum = $carts->pluck('total')->sum();
        $totalQty = $carts->pluck('quantity')->sum();
        $totalPoints = 0;

        date_default_timezone_set('Asia/Singapore');

        if ($carts && count($carts->toArray()) > 0) {
            $transaction = Transaction::create([
                'reference_id' => uniqid(),
                'user_id' => auth()->id(),
                'total' => $totalSum,
                'quantity' => $totalQty,
                'payment_method' => 'cash upon pick up',
                'points' => $totalPoints,
                'status' => 'pending'
            ]);

            foreach ($carts as $cart) {
                $transaction->items()->create([
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity,
                    'price' => $cart->price
                ]);

                $totalPoints += $cart->product->points * $cart->quantity;
            }

            $transaction->update(['points' => $totalPoints]);

            auth()->user()->carts()->delete();
        }

        return redirect()->route('transactions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id != auth()->id()) {
            return redirect()->route('cart');
        }

        $cart->delete();

        return redirect()->route('cart');
    }
}
