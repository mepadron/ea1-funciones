<?php
include_once "CalculoSueldo.php";
include_once "Login.php";

class Personas
{
    // public ,protected, private
    public $rol_sistema= "Admin";

    public function __construct()
    {
        echo "Binevendo al sistemas {$this->rol_sistema} <br>";
    }
    
    public function imprimirHola($n)
    {
        
        return "<b>Hola </b>" . $n . " hy es " . Date("m-d-Y");
    }
    
    
    public  function __destruct()
    {
        echo " <br> ADIOS VUELVA PRONTO";
        
    }

}


// $objecto = new Personas();
// echo $objecto->imprimirHola('Miguel Padron');

// carpeta logica programacion
// function imprimirHola($n, $s)
// {

//     return "<b>Hola </b>" . nombre($n) . " hy es " . Date("m-d-Y") . " tu prestacion social segun tu ultimo sueldo es " . prestacionesSociales($s) + $s . " $";
// }

// function nombre($nombreCliente)
// {
//     return $nombreCliente;
// }
