<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inicio extends Model
{
    use HasFactory;

    public static function guardarDatos($datos)
    {
        dump($datos);
        // $save = DB::table('cliente')
        //         ->insert([

        //         ])

    }
}
