<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name', 'phone', 'address', 'pickup_method', 'total', 'order_code', 'payment_proof',
    ];

    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }

}
