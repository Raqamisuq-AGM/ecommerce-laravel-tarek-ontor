<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //all method
    public function all()
    {
        return view('pages.admin.order.all');
    }

    //create method
    public function create()
    {
        return view('pages.admin.order.create');
    }

    //edit method
    public function edit()
    {
        return view('pages.admin.order.edit');
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