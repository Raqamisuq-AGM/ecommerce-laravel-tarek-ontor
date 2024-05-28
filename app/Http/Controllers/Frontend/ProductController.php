<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //product method
    public function products()
    {
        return view('pages.frontend.product.product');
    }

    //product details method
    public function productDetails()
    {
        return view('pages.frontend.product.product-details');
    }
}
