<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $guarded = [];
    const PENDING_CART_STATUS = 'pending';
    const ORDER_CART_STATUS = 'ordered';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

}
