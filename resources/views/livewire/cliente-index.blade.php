<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="search" name="" class="form-control" wire:model="busqueda" placeholder="escribe aqui para buscar" id="">
        </div>
        <div class="col-sm-3">

              <select class="form-control" name="" id="" wire:model="paginacion">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
              </select>

        </div>
    </div>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Telefono</th>
                <th>Correo Electronico</th>
                <th>Trabajo</th>
                <th>Fecha de Nacimiento</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $row)
                <tr>
                    <td scope="row">{{ $row->id }}</td>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->apellido }}</td>
                    <td>{{ $row->dni }}</td>
                    <td>{{ $row->telefono }}</td>
                    <td>{{ $row->correo }}</td>

                    <td>{{ $row->lugarTrabajo }}</td>
                    <td>{{ $row->fechaNacimiento->format('Y-m-d') }}</td>
                    @if ($row->estado == 1)
                        <td><button class="btn btn-success">Activo</button></td>
                    @else
                        <td><button class="btn btn-danger">Inactivo</button></td>
                    @endif

                    <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Opciones
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item btn btn-warning"
                                        href="{{ route('cliente.edit', $row) }}">Editar</a></li>
                                <li><a class="dropdown-item btn btn-info"
                                        href="{{ route('cliente.show', $row) }}">Mostrarr</a></li>

                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $cliente->links() }}
</div>
