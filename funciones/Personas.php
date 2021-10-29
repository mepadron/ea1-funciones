<?php
include_once "CalculoSueldo.php";
include_once "Login.php";

// carpeta logica programacion
function imprimirHola($n,$s)
{

return "<b>Hola </b>".nombre($n)." hy es ".Date("m-d-Y")." tu prestacion social segun tu ultimo sueldo es ".  prestacionesSociales($s) + $s. " $";
}

function nombre($nombreCliente)
{
 return $nombreCliente;
}
