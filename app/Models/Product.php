<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'sku', 'price', 'stock', 'description'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
