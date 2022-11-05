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
}
