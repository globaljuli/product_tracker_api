<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Purchase extends Model
{
    use HasFactory;

    protected $with = ['product', 'shop'];
    protected $appends = ['uses'];

    protected $casts = [
        'price' => 'double',
    ];

    /**
     * Get Product
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get Shop
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }


    /**
     * Get Uses
     */
    public function getUsesAttribute(): int
    {
        return $this->hasMany(ProductUse::class)->count();
    }

}
