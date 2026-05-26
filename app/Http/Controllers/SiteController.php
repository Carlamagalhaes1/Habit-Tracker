<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{


    public function index()
    {

        $nome = 'carla';
        $lista = ['carla', 'mae', 'pai'];


        return view('home' , [
            'name' => $nome,
            'lista' => $lista
        ]);
    }
}
