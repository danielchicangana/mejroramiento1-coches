<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Coche;
use App\Models\Mecanico;

class OrmController extends Controller
{   
    // Coches de un cliente 
    public function cochesDeClienteS()
    {
        $cliente = Cliente::with('coches')->find(1);
        return $cliente;
    }

    // Revisiones de un coche
    public function revisionesDeCoche()
    {
        $coche = Coche::with('revisions')->find(2);
        return $coche;
    }

    // Cliente con coches y revisiones 
    public function clienteConTodo()
    {
        $cliente = Cliente::with('coches.revisions')->find(1); // Cambia 1 por el ID del cliente que deseas obtener
        return $cliente;
    }
   
// Todos los mecánicos con sus coches reparados
public function cochesDeMecanico()
{
    return Mecanico::with('coches')->get();
}

    // Todos los coches con sus mecánicos
    public function mecanicosDeCoche()
    {
        return Coche::with('mecanicos')->get();
    }

    // Todos los clientes con sus coches
    public function cochesDeCliente()
    {
        return Cliente::with('coches')->get();
    }
}