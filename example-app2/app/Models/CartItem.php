<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'product_id', 'product_name', 'quantity', 'price', 'image'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

