<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


class ContactanosController extends Controller
{
    public function index()
    {
        return view ('pages.contact');
    }

    public function store(Request $request)
    {
        $correo = new ContactanosMailable($request->all());
        mail::to('elunicorey2002@gmail.com')->send($correo);
        return redirect()->route('contacto')->with('info', 'GRACIAS POR CONTACTARNOS');
    }
}
