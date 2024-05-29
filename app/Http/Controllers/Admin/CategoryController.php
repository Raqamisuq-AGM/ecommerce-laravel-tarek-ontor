<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //all method
    public function all()
    {
        return view('pages.admin.category.all');
    }

    //create method
    public function create()
    {
        return view('pages.admin.category.create');
    }

    //edit method
    public function edit()
    {
        return view('pages.admin.category.edit');
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
