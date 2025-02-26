<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'users'])->name('users.users');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users/create', [UserController::class, 'store'])->name('users.store');

Route::get('/users/update', [UserController::class, 'update'])->name('users.update');

Route::post('/users/update', [UserController::class, 'search'])->name('users.update');

Route::post('/users/update2', [UserController::class, 'edit'])->name('users.update2');

Route::post('/users/delete', [UserController::class, 'destroy'])->name('users.delete');

Route::get('/users/delete', [UserController::class, 'delete'])->name('users.delete');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.id');