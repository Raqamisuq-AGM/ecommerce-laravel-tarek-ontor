<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //checkout method
    public function checkout()
    {
        return view('pages.frontend.checkout.checkout');
    }

    //order complete method
    public function orderComplete()
    {
        return view('pages.frontend.checkout.order-complete');
    }
}