<?php
    $conn=mysqli_connect("localHost","root","","DB_Empresa");
    //Prueba de conexion
    if($conn->connect_error)
    {
        die("Error en la conexion de BD".$conn->connect_error);
    }
?>