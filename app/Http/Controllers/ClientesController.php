<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('clientes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        //  dd($request);
        try {
            $datos = $request->validated();
           // dd($datos);

           $clientes = Clientes::create($datos);

            return redirect()->route('cliente.index');
        } catch (Exception $e) {
            //$var= 'Excepción capturada: ',  $e->getMessage(), "\n";
            $var = 'Excepción capturada: '.$e->getMessage();
            echo "<script> alert('".$var."'); </script>";
            echo $var;
            return view('clientes.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $cliente)
    {
        $edad = Carbon::parse($cliente->fechaNacimiento)->age;
        return view('clientes.show',compact('cliente','edad'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $cliente)
    {
       return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, Clientes $cliente)
    {
        try {
            $datos = $request->validated();
           // dd($datos);
            $cliente->update($datos);
            return redirect()->route('cliente.index');
        } catch (Exception $e) {
            //$var= 'Excepción capturada: ',  $e->getMessage(), "\n";
            $var = 'Excepción capturada: '.$e->getMessage();
            echo "<script> alert('".$var."'); </script>";
            echo $var;
            return view('clientes.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
