<?php
    if(isset($_GET['data']))
    {
        $data=$_GET['data'];
        $data=base64_decode($data);
        $data=unserialize($data);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edicion de usuarios</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class=container>
            <h2>Nuevo usuario</h2>
            <hr>
            <form method="post" action="Script/Editar_usuario.php">
                <input type=hidden name="IDusuario" value="<?php echo $data["IDusuario"];?>">
                <div class=form-group>
                    <label for=nombre>Nombre completo:</label>
                    <input type="text" class="form-control" name="nombre"
                        placeholder="Escribe tu nombre completo" value="<?php echo $data["Nombre"]?>">
                </div>
                <div class=form-group>
                    <label for=login>login:</label>
                    <input type="text" class="form-control" name="login"
                        placeholder="Escribe tu login" value="<?php echo $data["Login"]?>">
                </div>
                <div class=form-group>
                    <label for=Password>Password:</label>
                    <input type="text" class="form-control" name="Password"
                        placeholder="Escribe tu Password" value="<?php echo $data["Password"]?>">
                </div>
                <input type="submit" name="Editar" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>