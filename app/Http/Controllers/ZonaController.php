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
        $comentarios = Comentario::all();
        return view ('zonas.guajira', compact('comentarios'));
    }

    public function Choco()
    {
        $comentarios = Comentario::all();
        return view ('zonas.choco', compact('comentarios'));
    }

    public function Cartagena()
    {
        $comentarios = Comentario::all();
        return view ('zonas.cartagena', compact('comentarios'));
    }

    public function zona(){
        return view ('home');
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
