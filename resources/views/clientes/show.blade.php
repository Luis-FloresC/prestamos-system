@extends('template.app')

@section('title', 'Editar Cliente')

@section('contenido')
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Detalle Cliente</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            {{ $cliente->nombre }}<cite title="Source Title"> {{ $cliente->apellido }} ({{ $cliente->id }})</cite>
        </figcaption>
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('cliente.destroy', $cliente) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </div>
          </div>
    </figure>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <ol class="list-group ">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Nombre Completo</div>
            {{$cliente->nombre}} {{$cliente->apellido}}
          </div>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Fecha de Nacimiento</div>
            {{$cliente->fechaNacimiento->format('Y-m-d')}}
          </div>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Edad</div>
            {{$edad}}
          </div>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Correo Electronico</div>
              {{$cliente->correo}}
            </div>

          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Telefono</div>
             {{$cliente->telefono}}
            </div>

          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Lugar de Trabajo</div>
              {{$cliente->lugarTrabajo}}
            </div>

          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Estado</div>
                @if($cliente->estado)
                <button type="button" class="btn btn-success">Activo</button>
                @else
                <button type="button" class="btn btn-danger">Inactivo</button>
                @endif
            </div>

          </li>
      </ol>


@endsection
