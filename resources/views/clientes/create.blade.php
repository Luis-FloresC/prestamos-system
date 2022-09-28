@extends('template.app')

@section('title', 'Registrar Nueva Tarea')

@section('contenido')
    <br>
    <h1>Registrar Clientes</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form action="{{ route('cliente.store') }}" method="POST">
        <x-cliente-form-body fecha="$fecha" />
    </form>


@endsection
