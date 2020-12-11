<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class APIController extends Controller
{
    public function index(){
        $respuesta = Http::get('https://mindicador.cl/api');
        $respuesta = $respuesta->json();
    }
}
