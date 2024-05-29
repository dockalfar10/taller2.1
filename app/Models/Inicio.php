<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Inicio extends Model
{
    use HasFactory;

    public static function guardarDatos($datos)
    {
        try {
            $save = DB::table('clientes')
                    ->insert([
                        'name' => $datos['name'],
                        'lastname' => $datos['lastname'],
                        'document' => $datos['document'],
                        'email' => $datos['email'],
                        'phone' => $datos['phone'],
                        'subject' => $datos['subject'],
                        'message' => $datos['message']
                    ]);
                    if ($save) {
                        return 'Datos guardados';
                    } else {
                        return 'Error al guardar los datos';
                    }
        } catch (\Throwable $th) {
            Log::error('Error al guardar los datos: '.$th);
            return 'Error al guardar los datos';
        }

    }
}
