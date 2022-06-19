<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUse extends Model
{
    use HasFactory;

    protected $fillable = ['purchase_id', 'use_type_id'];
}
