<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUse extends Model
{
    use HasFactory;

    protected $fillable = ['purchase_id', 'use_type_id'];

    protected $appends = ['purchase_name'];
    
    public function getPurchaseNameAttribute(){
        if($this->purchase_id == 1){
            return "Nidias Xampú Sòlid - Batabat";
        }
        return "The Singular Olivia - Batabat";
    }
}
