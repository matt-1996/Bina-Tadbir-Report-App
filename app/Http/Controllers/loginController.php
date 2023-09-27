<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {

            $request->validate([
                    'email' => 'required|email',
                    'password' => 'required'
                ]);

            $userInfo = user::where('email','=', $request->email)->first();
            $credentials = $request->only('email', 'password');

            // dd($credentials);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $request->session()->put('is_admin', $userInfo->is_admin);
                $request->session()->put('LoggedUser' , $userInfo->id);
                $request->session()->put('UserName', $userInfo->name);
                return redirect()->route('dashboard');
            }
                else {
                            return back()->with('failedLogin','پسورد یا نام کاربری اشتباه است.');

                        }

                // if(!$userInfo)
                //     {
                //         return back()->with('fail','Email not detected');
                //     }

                // else
                //      {
                // if(Hash::check($request->password, $userInfo->password))
                //     {
                //         $request->session()->put('is_admin', $userInfo->is_admin);
                //         $request->session()->put('LoggedUser' , $userInfo->id);
                //         $request->session()->put('UserName', $userInfo->name);
                //         Auth::attempt(['email' => $userInfo->email, 'password' => $userInfo->password]);
                //         return redirect('tdashboard');
                //     }
                // if( Auth::attempt(['email' => $userInfo->email, 'password' => Hash::check($request->password, $userInfo->password)])){
                //     dd('yes');
                // }
                    // else {
                    //         return back()->with('fail','Incorrect Password');
                    //     }
        // }
    }

        function getMyId()
        {
            return response()->json(auth()->user()->id);
        }

    function logout()
    {
        Session::flush();

        Auth::logout();
        return redirect()->route('root');
    }

    function hash($keword)
    {
        dd(Hash::make($keword));
    }
}
