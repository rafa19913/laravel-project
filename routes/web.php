<?php
use Illuminate\Support\Facades\Route;

Route::resource('empleados','empleadosController');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function(){
    return ('Listado de productos (get)');
});

Route::post('/productos', function(){
    return ('Almacenando productos (post)');
});

Route::put('/productos/{id}' , function($id){
    return ('Actualizando producto: ' . $id);
});

//Parámetros
Route::get('saludo/{nombre}/{apodo?}' , function($nombre,$apodo=null){
    
    //primera letra en mayúscula
    $nombre = ucfirst($nombre);
    //validar si tiene apodo
    if($apodo){
        return "Bienvenido {$nombre}, tu apodo es  {$apodo}";
    }else{
        return "Bienvenido {$nombre}";
    }
});


