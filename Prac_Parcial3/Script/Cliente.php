<?php
    class Cliente 
    {
        //Atributos
        private $Nombre;
        private $Ap;
        private $Am;
        private $Edad;

        //Metodo constructor
        public Function __construct($Nombre,$Ap,$Am,$Edad)
        {
            //Pasar de parametros por valor
            $this->Nombre=$Nombre;
            $this->Ap=$Ap;
            $this->Am=$Am;
            $this->Edad=$Edad;
        }

        public function MostrarInfo()
        {
            echo "<br>";
            echo "Cliente: ".$this->Nombre." ".$this->Ap." ".$this->Am." "."<br>";
            echo "Edad: $this->Edad";

        }
    }
?>