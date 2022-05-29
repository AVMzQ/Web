<?php
    include("DBUsuarios.php");
    $IDusuario = $nombre = $login = $password;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $IDusuario=test_input($_POST["IDusuario"]);
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
    $sql="UPDATE usuarios SET Nombre='$nombre',Login='$login',password='$password' where IDusuario=$IDusuario";
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