<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(Request $request){
        $json = array(
            "detalle" => "no encontrado"
        );
        echo json_encode($json, true);
    }
}
