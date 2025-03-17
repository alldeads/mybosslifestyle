<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PointHistory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'reference_id',
        'user_id',
        'created_by',
        'points',
        'running',
        'description',
        'stockist_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function stockist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'stockist_id');
    }
}
