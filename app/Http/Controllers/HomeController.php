<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::user()->role == 'client'){

            return view('client.dashboard');
        
        }else{

            return view('admin.dashboard');

        }
    }

    public function perform(){

        // Session::flush();
        
        Auth::logout();

        return redirect('login');

    }
}
