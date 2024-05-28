<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //login method
    public function login()
    {
        return view('pages.frontend.login.login');
    }

    //submit method
    public function submit(Request $request, $type)
    {
        return '';
    }

    //news letter method
    public function newsLetter(Request $request)
    {
        return '';
    }
}
