<?php

 /* Analísis y Desarrollo de Sistemas de Informción
Ficha: 2252471
Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablaclaseController;

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

/*cramos una ruta que nos envie a nuesstra vista welcome */
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*cramos una ruta que nos envie a nuestra vista home  */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*cramos una ruta en donde visualicemos nuestra tabla */
Route::get('/home', [App\Http\Controllers\TablaclaseController::class, 'index'])->name('home');
/*cramos una ruta que nos envie a nuestra vista de store */
Route::post('/home', [TablaclaseController::class, 'store']);
/*cramos una ruta que nos envie a nuesstra vista de compras */
Route::get('/compras', function () {
    return view('components.compras');
});
/*cramos una ruta que nos muestre la tabla y el apartado de eliminar */
Route::delete('Eliminar-clase/{id}',[TablaclaseController::class, 'destroy']);
/*cramos una ruta que nos muestre la vista de nuestro perfil  */
Route::get('/Perfil', function () {
    return view('components/Perfil');
});