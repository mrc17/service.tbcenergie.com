<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    //Affichage de la page de site

    public function index(){
        return view('Auth.site');
    }
}
