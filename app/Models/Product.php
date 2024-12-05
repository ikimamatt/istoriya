<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'name', 'price', 'categories','stock','preorder', 'image_path'];

    // Generate a unique 4-digit product ID
    public static function generateProductId()
    {
        do {
            $productId = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        } while (self::where('product_id', $productId)->exists());

        return $productId;
    }
}
