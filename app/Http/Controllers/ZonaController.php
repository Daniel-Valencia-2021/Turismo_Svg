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
        return view ('zonas.index');
    }

    public function destino(){
        return view ('zonas.destination');
    }

    public function contacto(){
        return view ('zonas.contact');
    }

    public function blog(){
        return view ('zonas.blog');
    }


}
