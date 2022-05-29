<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=keywords content="funciones,internas,PHP">
        <meta name=description content="Ejemplo de funciones internas en PHP">
        <title>Funciones PHP</title>
    </head>
    <body>
        <?php
            $Nom="Angel Francisco";
            echo $Nom."<br>";
            echo "Mi nombre tiene ".strlen($Nom)." letras!";
            echo "<br>".substr($Nom,0,8);

            $Nomres=array(
                "Antonio"=>"sistemas",
                "Alex"=>"Mantenimiento de computo",
                "Andrea"=>"Administrador"
            );
            echo "<h1>Formas de mostrar datos</h1>";
            echo "<hr>Usando Echo";
            echo $Nomres;
            echo "<hr>Usando print";
            print($Nomres);
            echo "<hr>usando print_r";
            print_r($Nomres);
            echo "<hr>usando var_dup";
            var_dump($Nomres)
        ?>
        <hr><h2>Carreras</h2>
        <ul>
            <?php
                foreach($Nomres as $Carreras)
                echo "<li>".$Carreras."</li>";
            ?>
        </ul>
        <hr><h2>Personas</h2>
        <ul>
            <?php
                foreach(array_keys($Nomres) as $personas)
                echo "<li>".$personas."</li>";
            ?>
        </ul>
    </body>
</html>