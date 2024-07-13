<?php

namespace App\Models;

use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'address'
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
}
