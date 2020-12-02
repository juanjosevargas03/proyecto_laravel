<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

       $usuarios= User::paginate(5);
        
        return view('home', $usuarios);
        
        
    }

}
