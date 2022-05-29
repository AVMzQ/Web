<?php
    include("DBUsuarios.php");
    $nombre=$login=$password;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nombre=test_input($_POST["nombre"]);
        $login=test_input($_POST["login"]);
        $password=test_input($_POST["Password"]);

    }
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $sql="insert into usuarios(Login,Nombre,Password) values('$login','$nombre','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $conn->close();
        header("Location:../UsuariosView.php");
    }
    else
    {
        Echo $conn->error;
        $conn->close();
    }
?>