<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "marcos pro";
});


Route::get('/contactanos', function () {
    return view('form');
});
Route::get('/store', function (Request $request) {
    print_r($request->all());
});


Route::get('/php-basico', function () {

    $name = "marcoz";
    echo "Hola $name, bienvenido a PHP básico";
    $height = 1.75;
    $islogin = true;
    $age = 30;
    echo "<H1 style = 'color: red;'>Tu altura es de $height metros</H1>";
    echo "<h4>". $name ."</h4>"; #Concatenar

    echo "<br<br><br> ******************* ESTRUCTURAS DE CONTROL ******************* <br><br><br>";

    $mensaje = "soy $name y tengo $age años. ". valadateAge($age);

    $mensaje .= $islogin ? " y estoy logueado" : " y no estoy logueado";  #if contraido
    echo $mensaje;

    #crearemos una lista 
    $pc = [
        "nombre" => "Gigabyte Aero x16",
        "precio" => 6000,
        "marca" => "Gigabyte",

    ];

    $teclado =[
        "nombre" => "Royal kludge Rk75",
        "precio" => 200,
        "marca" => "royal kludge"
    ];

    $listaProductos = [$pc, $teclado];

    foreach($listaProductos as $item){
        echo  "<br><br>" . $item['nombre'] . " <br><br>";
    }
});

function valadateAge($age) {
if ($age >= 18) {
        return "soy mayor de edad";
    } else {
        return "soy menor de edad";
    }
}