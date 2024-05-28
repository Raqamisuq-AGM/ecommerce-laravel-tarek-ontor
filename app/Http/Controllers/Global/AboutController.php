<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //about us method
    public function aboutUs()
    {
        return view('pages.frontend.about.about-us');
    }
}