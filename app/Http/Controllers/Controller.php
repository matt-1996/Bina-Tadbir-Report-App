<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use app\Models\user;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUser($field) : string
    {
        return auth()->user()->$field;
    }

    public function isAdmin() : bool
    {
        return auth()->user()->isAdmin;
    }

    public function adminUserId() : Int
    {
        $admin = user::where('isAdmin',1)->first();

        return $admin->id;
    }
}
