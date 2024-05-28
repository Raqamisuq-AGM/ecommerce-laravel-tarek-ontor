<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'sub_category',
        'brand',
        'title',
        'sku',
        'brand',
        'price',
        'desc',
        'video_desc',
        'in_stock',
    ];

    public function productColor()
    {
        return $this->hasMany(ProductColor::class);
    }

    public function productGallery()
    {
        return $this->hasMany(ProductGallery::class);
    }

    public function productSize()
    {
        return $this->hasMany(ProductSize::class);
    }

    public function productReview()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
