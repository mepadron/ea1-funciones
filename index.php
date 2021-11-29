<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


include_once "views/Template/plantilla_base.php";
include_once "controllers/Login_controller.php";

if(isset($_POST['enviarF'])){
  include_once "controllers/Personas_controller.php";
  // include_once "Libreria/helpers.php";
  // $lb= new Helpers();
  $validarUsuario= new LoginUsuario();
  $datosPersona= new Personas();

  
  $resp = $validarUsuario->obtenerDatosFormularios($_POST['loginF'], $_POST['claveF']);
  // echo " cedula del empleado ".$datosPersona->cedulaEmpleador;
  if($resp['validacion']){  
    // echo $lb->base_url();
    header('Location:views/empleado.php?cedula='.$resp["cedulaEmpleado"].'&nombre='.$resp["nombreEmpleado"].'&apellido='.$resp["apellidoEmpleado"]);
  }else{
    // echo "NO ESTA logueado dentro del sistema {$_SESSION['s_usuario'][1]} {$_SESSION['s_usuario'][2]}";
    echo "NO ESTA logueado dentro del sistema ";
  }
  
}else{

  include_once "views/index_view.php";

}
?>
