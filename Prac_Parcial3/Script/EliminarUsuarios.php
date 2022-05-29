<?php
    include("DBUsuarios.php");
    if(isset($_GET['data']))
    {
        $data=$_GET['data'];
        $data=base64_decode(($data));
        $data=unserialize($data);
    }
    $sql="DELETE FROM usuarios WHERE IDusuario=".$data['IDusuario'];
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $conn->close();
        header("Location:../UsuariosView.php");
    }
    else
    {
        echo $conn->error;
        $conn->close();
    }
?>
