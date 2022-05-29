<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Muestra, lista, empleados, laravel">
        <meta name="description" content="Muestra lista de empleados">
        <title>Lista de empleados</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        
        <div class="p-3 mb-2 bg-secondary text-white">
            <h1><center>Empleados</center></h1>
        </div>
        <div class="container" >
            @if(Session::has('mensaje'))
            {{Session::get('mensaje')}}
            @endif
            <a href="{{url('Empleado/create')}}" class="btn btn-outline-success">Registrar un nuevo empleado<a>
            <br><br>
            <table class="table table-dark" >
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Empleados as $Empleado)
                    <tr>
                        <td>{{$Empleado->id}}</td>
                        <td>
                            <img src="{{asset('storage').'/'.$Empleado->Foto}}" alt="" width="100" height="100" class="rounded-circle">
                        </td>
                        <td>{{$Empleado->Nombre}}</td>
                        <td>{{$Empleado->ApPaterno}}</td>
                        <td>{{$Empleado->ApMaterno}}</td>
                        <td>{{$Empleado->Correo}}</td>
                        <td>
                            <a href="{{url ('/Empleado/'.$Empleado->id).'/edit' }}" class="btn btn-outline-warning">Editar</a>
                            <form action="{{url('/Empleado/'.$Empleado->id)}}" method="post" class="d-inline">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('Estas segur@ que lo quieres borrar?')" value="Borrar" class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection
    </body>
    <footer>
    </footer>
</html>
