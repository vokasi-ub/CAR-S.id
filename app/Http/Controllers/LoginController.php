<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        $categories = login::all();
        return view('dashboard.login', compact('categories'));
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $username = $request->username;
        $password = $request->password;

        $data = login::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if($password==$data->password){
                return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
}
