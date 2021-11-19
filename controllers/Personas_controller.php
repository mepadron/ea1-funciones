<?php
include_once "CalculoSueldo_controller.php";
include_once "Login_controller.php";

class Personas
{
    public $cedulaEmpleador="9883255";
    public $nombreEmpleador="Miguel";
    public $apellidoEmpleador="Padron";
    // public ,protected, private
    public $rol_sistema= "Admin";
    // private $sueldo= "50,000 $";
    // protected

    public function __construct()
    {
        echo "Binevendo al sistemas {$this->rol_sistema} <br>";
    }

    // method is private
    private function cedula(){
        $c = "9883255";
        return $c;
    }

    public function getMostrarCedula(){
        return $this->cedula();
    }

    //setters y getters
    public function getImprimirSueldo(){
        return $this->sueldo;
    }

    public function setAsignarSueldo($s){

        $this->sueldo = $s;
        // return $this->sueldo;
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

class Trabajos extends Personas{
    private $sueldo= "50,000 $";
    protected $asignacion_pc = true;
    public $lugar_trabajo= "AIS";
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
