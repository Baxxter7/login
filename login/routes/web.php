<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AXE\loginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/texto', function(){
    return '<h1>esto es un texto de prueba</h1>';
});

/*
Route::get('/login', function () {
    return view('login');
});
*/
Route::get('/login',[loginController::class,'login']);

Route::post('/login',[loginController::class,'ingresar']);

/*
Route::post('/login', function () {
    return view('welcome');
});
*/