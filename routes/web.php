<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Psy\Formatter\Formatter;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get("/home",[HomeController::class,"index"]);

Route::fallback(function(){
    return "Kamu salah ketik URL";
});

Route::redirect('/ok', '/home');

Route::get('/form', [FormController::class, 'submitForm' ]);
