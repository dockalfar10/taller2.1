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
        $insertion = Inicio::guardarDatos($request);
        if ($insertion == 'Datos guardados') {
            return redirect()->route('inicio.contactanos');
        } else {
            return redirect()->route('inici.contactanos');
        }
    }

}
