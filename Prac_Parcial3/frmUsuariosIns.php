<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscripcion de usuarios</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class=container>
            <hr>
            <form method="post" action="Script/registrar_usuario.php">
                <div class=form-group>
                    <label for=nombre>Nombre completo:</label>
                    <input type="text" class="form-control" name="nombre"
                        placeholder="Escribe tu nombre completo">
                </div>
                <div class=form-group>
                    <label for=login>login:</label>
                    <input type="text" class="form-control" name="login"
                        placeholder="Escribe tu login">
                </div>
                <div class=form-group>
                    <label for=Password>Password:</label>
                    <input type="text" class="form-control" name="Password"
                        placeholder="Escribe tu Password">
                </div>
                <input type="submit" name="Registrar" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>