<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Cliente;
//use App\Models\Quinela;

//use Illuminate\Pagination\LengthAwarePaginator;
class ClienteListaController extends Controller
{
    function mostrarLista(){
      
      $clientes = \DB::table('clientes')
      ->leftJoin('quinelas', 'quinelas.cliente_id', '=', 'clientes.id')
      ->leftJoin('cliente_puntos', 'cliente_puntos.cliente_id', '=', 'clientes.id')
      ->select('clientes.*', 'quinelas.*', 'cliente_puntos.puntos')
      ->paginate(2);
      
      //return view('/pages/lista', ['clientes' =>$clientes]);
      return view('/pages/lista', compact('clientes'));
    }

    function buscarNombre(Request $request){

      $clientes = \DB::table('clientes')
      ->leftJoin('quinelas', 'quinelas.cliente_id', '=', 'clientes.id')
      ->leftJoin('cliente_puntos', 'cliente_puntos.cliente_id', '=', 'clientes.id')
      ->select('clientes.*', 'quinelas.*', 'cliente_puntos.puntos')
      ->where('primer_nombre', 'LIKE', '%'. $request->buscarNombre . '%')
      ->orWhere('segundo_nombre', 'LIKE', '%'. $request->buscarNombre . '%')
      ->orWhere('apellido_paterno', 'LIKE', '%'. $request->buscarNombre . '%')
      ->orWhere('apellido_materno', 'LIKE', '%'. $request->buscarNombre . '%')
      ->paginate(2);
      
      //return view('/pages/lista', ['clientes' =>$clientes]);
      return view('/pages/lista', compact('clientes'));
    }
}