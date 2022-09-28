@extends('template.app')

@section('title', 'Editar Cliente')

@section('contenido')
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Editar Cliente</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            {{ $cliente->nombre }}<cite title="Source Title"> {{ $cliente->apellido }} ({{ $cliente->id }})</cite>
        </figcaption>
    </figure>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form action="{{ route('cliente.update', $cliente) }}" method="POST">
        @method('put')
        <x-cliente-form-body :cliente="$cliente" />
    </form>
@endsection
