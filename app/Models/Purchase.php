<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Carbon\Carbon;


//TODO: I think we should change this to product_purchase
class Purchase extends Model
{
    use HasFactory;

    protected $with = ['product', 'shop'];
    protected $appends = ['uses'];
    protected $fillable = ["finished_at"];

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

    /**
     * Mark product purchase as finished
     */
    public function setProductPurchaseAsFinished(){
        if(!$this->finished_at){
            return $this->update(["finished_at" => Carbon::now()]);
        }
        return $this->update(["finished_at" => null]);
    }
}
