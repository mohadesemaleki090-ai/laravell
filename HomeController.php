<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
    
        User::create(['email' => 'mohadese.maleki090@gmail.com', 'password' => Hash::make('mohadese090')]);    

            return view('home');  }

}