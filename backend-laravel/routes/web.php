<?php
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Inicio.inicio');
});

Route::get('/Cadastro', [UsuarioController::class, 'exibirformularioCadastro'])->name('Cadastro');
Route::post('/Cadastro',[UsuarioController::class, 'salvarUsuario']);

Route::get('/Login', [UsuarioController::class, 'exibirformularioLogin'])->name('Login');
Route::get('/Login', [UsuarioController::class, 'exibirformularioLogin'])->name('Login');


Route::get('/Inicio', function () {
    return view('Inicio.inicio');
})->name('Inicio');

Route::get('/Cadastro', function () {
    return view('Cadastro.cadastro');
})->name('Cadastro');


Route::get('/Login', function () {
    return view('Login.login');
})->name('Login');


Route::get('/Veículos', function () {
    return view('Veículos.veiculo');
})->name('Veículos');


Route::get('/Pagina', function () {
    return view('Pagina.home');
})->name('Pagina');


Route::get('/Pveiculos', function () {
    return view('Pveiculos.homme');
})->name('Pveiculos');


