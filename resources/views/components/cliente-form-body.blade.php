@csrf
<div class="row">
    <div class="col-sm-4">
        <label for="nombre" class="form-label">*nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre ?? '') }}" id="nombre"
            class="form-control">
    </div>
    <div class="col-sm-4">
        <label for="apellido" class="form-label">*apellido</label>
        <input type="text" value="{{ old('apellido', $cliente->apellido ?? '') }}" name="apellido" id="apellido"
            class="form-control">
    </div>
    <div class="col-sm-4">
        <label for="dni" class="form-label">*dni</label>
        <input type="text" value="{{ old('dni', $cliente->dni ?? '') }}" name="dni" id="dni"
            class="form-control">
    </div>
    <div class="col-sm-4">
        <label for="fechaNacimiento" class="form-label">*Fecha de Nacimiento</label>
        @if ($cliente)
            <input type="date" value="{{ old('fechaNacimiento', $cliente->fechaNacimiento->format('Y-m-d')) }}"
                name="fechaNacimiento" id="fechaNacimiento" class="form-control">
        @else
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
        @endif

    </div>
    <div class="col-sm-4">
        <label for="correo" class="form-label">*correo Electronico</label>
        <input type="text" value="{{ old('correo', $cliente->correo ?? '') }}" name="correo" id="correo" class="form-control">
    </div>
    <div class="col-sm-4">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" name="telefono"  value="{{ old('telefono', $cliente->telefono ?? '') }}" id="telefono" class="form-control">
    </div>


        <div class="col-sm-8">
            <label for="lugarTrabajo" class="form-label">Lugar de Trabajo</label>
            <input type="text" name="lugarTrabajo" id="lugarTrabajo"  value="{{ old('lugarTrabajo', $cliente->lugarTrabajo ?? '') }}" class="form-control">
        </div>
        <div class="col-sm-4">
            <label for="estado" class="form-label">estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="0">Inactivo</option>
                <option value="1">Activo</option>
            </select>
            <script>
                document.getElementById("estado").value = "{{old('estado',$cliente->estado??0)}}"
            </script>
        </div>



    <div class="col-sm-12 text-end my-2">
        <br>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
</div>
