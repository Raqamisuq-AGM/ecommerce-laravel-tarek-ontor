<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //contact us method
    public function contactUs()
    {
        return view('pages.frontend.contact.contact');
    }
}
