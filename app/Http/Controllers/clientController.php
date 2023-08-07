<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class clientController extends Controller
{
    public function index()
    {
        $users = user::all();

        return view('client.index', compact('users'));
    }

    public function searchUsers($name)
    {
        if($name == 'all')
        {
            $users = user::all();
        }else{

            $users = user::where('name', $name)->get();
        }

        $returnHTML = view('ajaxComponents.UsersTable', compact('users'))->render();

       return response()->json(array('success' => true, 'html' => $returnHTML));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('client.profile', compact('user'));
    }

    public function addView()
    {
        return view('register.index');
    }

    public function add()
    {

    }

    public function edit(Request $request)
    {
        $user = user::where('id', $request->id)->first();

        return view('client.edit', compact('user'));
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
