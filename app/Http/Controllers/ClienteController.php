<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Quinela;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class ClienteController extends Controller
{
  function __construct()
  {
    //$this->middleware('auth')->except('lista');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*$clientes = \DB::table('clientes')
      ->leftJoin('quinelas', 'quinelas.cliente_id', '=', 'clientes.id')
      ->leftJoin('cliente_puntos', 'cliente_puntos.cliente_id', '=', 'clientes.id')
      ->select('clientes.*', 'quinelas.*', 'cliente_puntos.puntos')
      ->paginate(2);*/
      $clientes = Cliente::with('todasLasQuinelas')->paginate(2);
      
      return view('pages.lista', compact('clientes'))
      ->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(request $req)
    {
      
      $clientes = Cliente::with('todasLasQuinelas')
      ->where('primer_nombre', 'LIKE', $req->buscarNombre)->paginate(1);
      
      return view('pages.lista', compact('clientes'))
      ->with('i', (request()->input('page', 1) - 1) * 3);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}