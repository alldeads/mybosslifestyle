<?php

namespace App\Models;

use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_id',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'referral',
        'is_admin',
        'points',
        'phone',
        'address',
        'account_number',
        'is_stockist',
        'stockist_points',
        'claimed_points',
        'personal_points',
        'pass_up_points'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@admin.com');
    }

    public function redeems() : HasMany
    {
        return $this->hasMany(Redeem::class);
    }

    public function direct_referrals(): HasMany
    {
        return $this->hasMany(User::class, 'parent_id');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getReferralLinkAttribute()
    {
        return "https://mybosslifestyle.com/register?referral={$this->referral}";
    }

    public function downlines()
    {
        $downlines = 0;

        foreach ($this->direct_referrals as $first) {
            $downlines++;
            foreach ($first->direct_referrals as $second) {
                $downlines++;
                foreach ($second->direct_referrals as $third) {
                    $downlines++;
                }
            }
        }

        return $downlines;
    }

    public function network()
    {
        $downlines = collect([]);

        foreach ($this->direct_referrals as $first) {
            $first->level = 1;
            $downlines->push($first);
            foreach ($first->direct_referrals as $second) {
                $second->level = 2;
                $downlines->push($second);
                foreach ($second->direct_referrals as $third) {
                    $third->level = 3;
                    $downlines->push($third);
                }
            }
        }

        return $downlines;
    }

    public function cart_total()
    {
        $total = $this->carts()->pluck('total')->sum();

        return number_format($total, 2, '.', ',');
    }

    public static function triggerPassUp($user_id, $points, $level=3,)
    {
        $user = User::find($user_id);

        if (!$user) {
            return;
        }

        $userPoints = (int) $user->personal_points;

        $user->update(['personal_points' => $userPoints + $points]);

        // First Level
        $firstUser = $user->parent;

        if (!$firstUser) {
            return;
        }

        $firstUserPoints = (int) $firstUser->pass_up_points;

        $firstUser->update(['pass_up_points' => $firstUserPoints + $points]);

        // Second Level
        $secondUser = $firstUser->parent;

        if (!$secondUser) {
            return;
        }

        $secondUserPoints = (int) $secondUser->pass_up_points;

        $secondUser->update(['pass_up_points' => $secondUserPoints + $points]);

        // Third Level
        $thirdUser = $secondUser->parent;

        if (!$thirdUser) {
            return;
        }

        $thirdUserPoints = (int) $thirdUser->pass_up_points;

        $thirdUser->update(['pass_up_points' => $thirdUserPoints + $points]);

        return;
    }

    public function getBuilderBonus()
    {
        $referrals = $this->direct_referrals->count();

        return 10 - ($referrals % 10);
    }

    public function getAvailablePoints()
    {
        $points = ($this->personal_points + $this->pass_up_points) - $this->claimed_points;

        return $points < 0 ? 0 : $points;
    }
}
