<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //cart method
    public function carts()
    {
        return view('pages.frontend.cart.cart');
    }
}