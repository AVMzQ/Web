<?php
    include("Script/DBUsuarios.php");
    $sql="select IDusuario,Nombre,Login,Password from usuarios";
    $Result=$conn->query($sql);
?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset=utf-8>
        <title>Admo.Usuarios</title>
        <link rel=stylesheet type=text/css href=css/bootstrap.css>
        <script src=js/jquery-3.5.1.min.js></script>
        <script src=js/bootstrap.js></Script>
    </head>
    <body>
        <?php
            if($Result->num_rows>0){
                //if abarda desde el inicio del div, hasta el final
        ?>
        <div class=container>
            <h1>Administracion de usuario</h1>
            <hr/>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>idu</th>
                        <th>Nombre Completo</th>
                        <th>login</th>
                        <th>Password</th>
                        <th>Editar</th>
                        <th>Elimar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Aun sigue el if
                        while($row=$Result->fetch_assoc())
                        
                        {
                            $data=[
                                'IDusuario'=>$row["IDusuario"],
                                'Nombre'=>$row["Nombre"],
                                'Login'=>$row["Login"],
                                'Password'=>$row["Password"]
                            ];
                            $data=serialize($data);
                            $data=base64_encode($data);
                            $data=urlencode($data);
                            echo "<tr>";
                            echo "<td>".$row["IDusuario"]."</td>";
                            echo "<td>".$row["Nombre"]."</td>";
                            echo "<td>".$row["Login"]."</td>";
                            echo "<td>".$row["Password"]."</td>";
                            
                            ?>
                            <td><button class='btn btn-warning'onclick="window,location.href='frmUsuariosEd.php?data=<?php echo $data;?>'">Editar</button></td>
                            <td><button class='btn btn-danger' onclick="window,location.href='Script/EliminarUsuarios.php?data=<?php echo $data;?>'">Eliminar</button></td>
                            
                            <?php
                            echo "</tr>";
                        }//while
                   ?>
                    
                </tbody>
            </table>
            <button class="btn btn-primary" id="nuevo" onclick="window,location.href='frmUsuariosIns.php'">Nuevo Usuario</button>
        </div>
        <?php
            }
        ?>
    </body>
</HTML>