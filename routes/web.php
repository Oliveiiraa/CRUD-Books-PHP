<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::resource('/books',BookController::class);

// Route::get('/usuarios', '\app\Http\Controllers\UsuariosController@index');


// Route::get('/teste/{teste}', function ($teste) {
//     echo "Olá mundo, turo bom?".$teste;
// });
