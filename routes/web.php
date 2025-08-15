<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrmController;

Route::get('/clienteycoches', [OrmController::class, 'cochesDeCliente']);
Route::get('/cocheyrevisiones', [OrmController::class, 'revisionesDeCoche']);
Route::get('/clienteytodo', [OrmController::class, 'clienteConTodo']);
