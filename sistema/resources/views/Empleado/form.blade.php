<!--Formulario que tendra datos en comun con create y edit.-->
<form>
    <div class="form-group">
        <label for="Nombre"><b>Nombre</b></label>
        <input type="text" name="Nombre" value="{{isset($empleado->Nombre)? $empleado->Nombre:'' }}" id="Nombre" class="form-control">
        <br/>
        <label for="apP"><b>Apellido Paterno</b></label>
        <input type="text" name="ApPaterno" id="ApPaterno" value="{{isset($empleado->ApPaterno)? $empleado->ApPaterno:''}}" class="form-control">
        <br/>
        <label for="apM"><b>Apellido Materno</b></label>
        <input type="text" name="ApMaterno" id="ApMaterno" value="{{isset($empleado->ApMaterno)? $empleado->ApMaterno:''}}" class="form-control">
        <br/>
        <label for="Correo"><b>Correo</label>
        <input type="text" name="Correo" id="Correo" value="{{isset($empleado->Correo)? $empleado->Correo:''}}" class="form-control">
        <br/>
        <label for="Foto"><b>Fotografia</b></label>
        @if(isset($empleado->Foto))
        <img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" height="100" alt="" class="rounded-circle">
        @endif
        <input type="file" name="Foto" id="Foto" value="{{isset($empleado->Foto)? $empleado->Foto:''}}" class="form-control">
        <small id="fileHelp" class="form-text text-muted">Direccion de fotografia</small>
        <br/>
        <br>
        <input type="submit" value ="{{$modo}} datos"  class="btn btn-outline-success">
        <a href="{{url('Empleado')}}" class="btn btn-outline-warning">Regresar</a>
        <br>
    </div>
</form>

