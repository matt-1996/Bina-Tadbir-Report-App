<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }

    public function single()
    {
        return view('report.single');
    }

    public function request()
    {
        return view('report.request');
    }

    public function new()
    {

    }

    public function edit()
    {
        return view('report.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
