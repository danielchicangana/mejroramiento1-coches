<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrmController;

Route::get('/clienteycoches', [OrmController::class, 'cochesDeCliente']);

Route::get('/cocheyrevisiones', [OrmController::class, 'revisionesDeCoche']);

Route::get('/clienteytodo', [OrmController::class, 'clienteConTodo']);

Route::get('/mecanicosycoches', [OrmController::class, 'cochesDeMecanico']);

Route::get('/cochesymecanicos', [OrmController::class, 'mecanicosDeCoche']);


Route::get('/clientesycoches', [OrmController::class, 'cochesDeCliente']);
