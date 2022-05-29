<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Formulario, crear, Empleado, Laravel">
        <meta name="description" content="Formulario para crear un empleado">
        <title>Crear empleado</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h1><center>Formulario</center></h1>
        <h2><center>creacion de empleado</center></h2>
        <div class="container">
            <form action="{{url('/Empleado')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('Empleado.form',['modo'=>'Crear'])
            </form>
        </div>
        @endsection
    </body>
    <footer></footer>
</html>
