<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //dashboard method
    public function dashboard()
    {
        return view('pages.admin.index');
    }
}
