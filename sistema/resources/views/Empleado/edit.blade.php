<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Edicion, empleados, laravel">
        <meta name="description" content="Formulario de edicion de empleados">
        <title>Edicion de empleado</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <div class="p-3 mb-2 bg-secondary text-white">
        <h2><center>Edicion de empleado</center></h2>
        </div>
        <div class="container">
            <form action="{{url('/Empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data"> 
                @csrf
                {{ method_field('PATCH') }}
                @include('Empleado.form',['modo'=>'Editar'])
            </form>
        </div>
        @endsection
    </body>
    <footer>
    </footer>
</html>