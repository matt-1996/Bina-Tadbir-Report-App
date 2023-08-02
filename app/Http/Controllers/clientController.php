<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function addView()
    {
        return view('register.index');
    }

    public function add()
    {

    }

    public function edit()
    {
        return view('client.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
