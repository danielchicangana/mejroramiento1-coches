<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Coche;

class OrmController extends Controller
{
    //coches  un cliente
    public function cochesDeCliente()
    {
        $cliente = Cliente::with('coches')->find(1);
        return $cliente;
    }

    //revisiones  un coche
    public function revisionesDeCoche()
    {
        $coche = Coche::with('revisions')->find(2);
        return $coche;
    }

    // 3) Cliente con coches y revisiones 
    public function clienteConTodo()
    {
        $cliente = Cliente::with('coches.revisions')->find(1); // Cambia 1 por el ID del cliente que deseas obtener
        return $cliente;
    }
}
