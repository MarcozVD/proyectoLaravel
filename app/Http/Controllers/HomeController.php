<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "hello";
    }
    public function name($apellido)  {
        echo "<h1>SOY UN CRACK {$apellido}</h1>";
    $v=true;

    return $v? "hola": "chao";
    }
}
