<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;


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
        $comentarios = Comentario::all();
        return view ('pages.index', compact('comentarios'));
    }

    public function destino(){
        return view ('pages.destination');
    }

    public function blog(){
        return view ('pages.blog');
    }

    public function comentario(){
        return view ('pages.comentarios');

    }

    public function comentariosform(Request $request){
        $comentario = new Comentario();
        $comentario->nombre = $request ->nombre;
        $comentario->estrellas = $request ->estrellas;
        $comentario->correo = $request ->correo;
        $comentario->comentario = $request ->mensaje;

        $comentario->save();

        return redirect()->back();

    }

}
