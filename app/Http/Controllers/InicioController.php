<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categorias()
    {
        return view('categorias');
    }

    public function contactanos()
    {
        return view('contactanos');
    }

    public function catalogo()
    {
        return view('catalogo');
    }

    public function guardarDatos(Request $request)
    {
        // return Inicio::guardarDatos($request);
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);
    }

}
