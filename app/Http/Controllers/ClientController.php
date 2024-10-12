<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ClientController extends Controller
{
    //
    public function index()
    {
        // $clients = user::with('produits')->get();
       $clients = user::all()->where('role', 'client') ;
       return view('admin.client', compact('clients'));
    }
}
