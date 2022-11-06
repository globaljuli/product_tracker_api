<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ProductUse extends Model
{
    use HasFactory;

    protected $fillable = ['purchase_id', 'use_type_id'];

    protected $appends = ['product'];
    
    /**
     * Get product
     */
    public function getProductAttribute()
    {
        $purchase = Purchase::find($this->purchase_id);
        $product = Product::find($purchase->product_id);
        return $product;
    }
}
