<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home method
    public function home()
    {
        return view('pages.frontend.index');
    }
}
