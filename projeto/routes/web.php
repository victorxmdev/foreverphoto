<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('site.home');
});

Route::get('/login', function () {
    return view('site.login');
});

Route::get('/cadastro', function () {
    return view('site.cadastro');
});

Route::get('/planos', function () {
    return view('site.planos');
});

Route::get('/perfil_consumidor', function () {
    return view('site.perfil_consumidor');
});

Route::get('/perfil_fotografo', function () {
    return view('site.perfil_fotografo');
});

Route::get('/galeria', function () {
    return view('site.galeria');
});

Route::get('/perfil_fotografo_publico', function () {
    return view('site.perfil_fotografo_publico');
});

Route::get('/sobre_nos', function () {
    return view('site.sobre_nos');
});

Route::get('/sair', function () {
    return view('site.sair');
});


Route::get('/lista', [UsuarioController::class, 'lista']);
Route::any('/cadastrar', [UsuarioController::class, 'cadastro']);
Route::get('/editar/{usuario}', [UsuarioController::class, 'editar']);
Route::get('/deletar/{usuario}', [UsuarioController::class, 'deletar']);
