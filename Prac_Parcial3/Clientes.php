<!DOCTYPE HTML>
<html>
    <meta charset=utf-8>
    <meta name=keywords content="POO, funciones, php">
    <meta name=Description content="Ejemplo de POO en PHP">
    <Title>POO PHP</Title>
 </html>
 <body>
    <?php
        include 'Script/Cliente.php';
        $cliente1=new Cliente("Angel Francisco","Vazquez","Munoz",22);
        $cliente1->MostrarInfo();
    ?>
</body>