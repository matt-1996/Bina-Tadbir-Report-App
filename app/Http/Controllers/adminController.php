<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\report;
use Hekmatinasser\Verta\Verta;
class adminController extends Controller
{
    public function index(Request $request)
    {
        $verta = new Verta;
        $reports = report::where('month' , '=', $verta->month)
                    ->orderBy('created_at' , 'desc')
                    ->get();

        return view('admin.dashboard', compact('reports'));
    }
}
