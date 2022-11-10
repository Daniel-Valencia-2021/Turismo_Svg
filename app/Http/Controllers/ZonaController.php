<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ZonaController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function LaGuajira()
    {
        return view ('zonas.laguajira');
    }

    public function zona(){
        return view ('pages.index');
    }

    public function destino(){
        return view ('pages.destination');
    }

    public function blog(){
        return view ('pages.blog');
    }


}
