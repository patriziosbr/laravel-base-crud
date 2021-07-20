<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    //per rotta parametrica senza closure in web.php (rotte)
    // public function saluta($name) {
    //     return "Ciao " . $name;
    // }
}
