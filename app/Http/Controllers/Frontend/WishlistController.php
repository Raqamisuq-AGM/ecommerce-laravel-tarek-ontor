<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //wishlist method
    public function wishlists()
    {
        return view('pages.frontend.wishlist.wishlist');
    }
}