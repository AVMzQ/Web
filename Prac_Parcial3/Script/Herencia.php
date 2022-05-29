<?php
    class Producto
    {
        private $clave;
        private $Des;
        private $Precio;

        public function __construct($clave,$Des,$Precio)
        {
            $this->clave=$clave;
            $this->Des=$Des;
            $this->Precio=$Precio;
        }

        public function mostrarInfo()
        {
            echo "Clave: ".$this->clave;
            echo"<br>Descripcion: ".$this->Des;
            echo"<br>Precio: ".$this->Precio;
        }

    }
    Class Playera extends Producto
    {
        private $talla;
        private $marca;
        private $color;

        public function __construct($clave,$Des,$Precio,$talla,$marca,$color)
        {
            parent::__construct($clave,$Des,$Precio);
            $this->talla=$talla;
            $this->marca=$marca;
            $this->color=$color;
        }
        public function mostrarDatos()
        {
            echo "Talla: ".$this->talla;
            echo "<br>Marca: ".$this->marca;
            echo "<br>Color: ".$this->color;
        }
    }
    $polo=new Playera(19832,"Playera tipo polo",350.00,"G","Polo club","Negro");
    echo "<hr>";
    $polo->mostrarInfo();
    echo "<hr>";
    $polo->mostrarDatos();
?>