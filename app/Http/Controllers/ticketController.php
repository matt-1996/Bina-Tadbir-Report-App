<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function index()
    {
        return view('ticket.index');
    }

    public function single()
    {
        return view('ticket.single');
    }

    public function new()
    {
        return view('ticket.new');
    }
}
