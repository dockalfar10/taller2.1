<?php

namespace App\Http\Controllers;

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
}
