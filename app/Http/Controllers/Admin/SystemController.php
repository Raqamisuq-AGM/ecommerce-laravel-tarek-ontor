<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    //change password method
    public function changePassword()
    {
        return view('pages.admin.system.change-password');
    }

    //change email method
    public function changeEmail()
    {
        return view('pages.admin.system.change-email');
    }

    //change logo method
    public function changeLogo()
    {
        return view('pages.admin.system.change-logo');
    }

    //change system method
    public function changeSystemDetails()
    {
        return view('pages.admin.system.system');
    }

    //update password method
    public function updatePassword()
    {
        return '';
    }

    //update email method
    public function updateEmail()
    {
        return '';
    }

    //update logo method
    public function updateLogo()
    {
        return '';
    }

    //update system method
    public function updateSystem()
    {
        return '';
    }
}