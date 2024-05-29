<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //all method
    public function all()
    {
        return view('pages.admin.brand.all');
    }

    //create method
    public function create()
    {
        return view('pages.admin.brand.create');
    }

    //edit method
    public function edit()
    {
        return view('pages.admin.brand.edit');
    }

    //store method
    public function store()
    {
        return '';
    }

    //update method
    public function update()
    {
        return '';
    }

    //delete method
    public function delete()
    {
        return '';
    }
}