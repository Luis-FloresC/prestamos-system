@extends('template.app')

@section('title', 'Lista de clientes')

@section('contenido')
    <h1>Listado de Clientes</h1>
     @livewire('cliente-index')
@endsection
