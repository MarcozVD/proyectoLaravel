<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/inicio',[HomeController::class,"index"])->name("inicio");

Route::get('/mi-nombre', function () {
    return view("nuevo");
});

Route::get('/mi-nombre/{apellido}', [HomeController::class,"name"]);


Route::get('/contactanos', function () {
    return view('form');
});
Route::get('/store', function (Request $request) {
    print_r($request->all());
});



Route::get('/php-basico', function () {
    echo "soy marcos el crack <br>";
    

    $name = "marcoz";
    echo "Hola $name, bienvenido a PHP básico";
    $height = 1.68;
    $islogin = true;
    $age = 30;
    echo "<H1 style = 'color: red;'>Tu altura es de $height metros</H1>";
    echo "<h4>". $name ."</h4>"; #Concatenar

    echo "<br<br><br> ******************* ESTRUCTURAS DE CONTROL ******************* <br><br><br>";

    $mensaje = "soy $name y tengo $age años. ". valadateAge($age);

    $mensaje .= $islogin ? " y estoy logueado" : " y no estoy logueado";  #if contraido
    echo $mensaje . "<br>";
    echo gettype($mensaje);

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
    for ($i=0;$i<=2;$i++){
        echo $i;
    }
    foreach($pc as $carac){
        echo "<br>" . $carac . " <br>";
    }
});

function valadateAge($age) {
    return $age? "soy mayor de edad": "soy menor de edad";
    }
class persona{
    public $name;
    public $age;
    function __construct($name,$age)
    {
        $this->$name=$name;
        $this->$age =$age;
    }
}
$yo = new persona('marcos',20);
