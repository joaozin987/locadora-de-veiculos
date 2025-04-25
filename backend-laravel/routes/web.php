<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsuarioController;
use App\Mail\Contact;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Inicio.inicio');
})->name('Inicio');

Route::get('/Cadastro', [UsuarioController::class, 'create'])->name('Cadastro');
Route::post('/Cadastro', [UsuarioController::class, 'store'])->name('Cadastro.store');

Route::get('/Login', [UsuarioController::class, 'loginForm'])->name('Login');
Route::post('/Login', [AuthController::class, 'loginAttempt'])->name('Pveiculos');



Route::get('/Veículos', function () {
    return view('Veículos.veiculo');
})->name('Veículos');

Route::get('/Pagina', function () {
    return view('Pagina.home');
})->name('Pagina');


Route::get('/Pveiculos', [ContactController::class, 'index'])->name('Pveiculos');
Route::post('/Pveiculos', [ContactController::class, 'store'])->name('Pveiculos.store');
?>