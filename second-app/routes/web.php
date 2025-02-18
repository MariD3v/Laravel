<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Bienvenido a nuestra pagina');
})->name('home');

Route::get('/users', function () {
    return ('Listado de usuarios');
})->name('users');

Route::get('/users/create', function () {
    return ('Formulario para crear usuarios');
})->name('user.create');

Route::get('/users/{id}', function ($id) {
    return ('Mostrando usuario con ID:'.$id);
})->name('user');

Route::post('/users', function () {
    return ('Guardando nuevo usuario');
})->name('user.post');

Route::put('/users/{id}', function ($id) {
    return ('Actualizando usuario con ID:'.$id);
})->name('users.put');

Route::delete('/users/{id}', function ($id) {
    return ('Borrando usuario con ID:'.$id);
})->name('users.delete');