<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once "Libreria/helpers.php";
include_once "models/Login_model.php";
class LoginUsuario extends LoginModel {

    
    public function LoginUsuario($loginF, $claveF){

        $loginBD = "mp";
        $claveBD = "1234567";
    
        if( $loginBD == $loginF and $claveBD == $claveF){
            $rol= Array();
            $rol["nombre-rol"]= "Admin";
            $rol["si"]= true;
            return $rol;
        }else{
            return false;
        }
    }
    
    public function obtenerDatosFormularios($l,$c){
        
            
            if(empty($l)){
                echo "Login esta vacio<br>";

            }
            if(empty($c)){
                echo "Clave esta vacio<br>";

            }else{
                //si el formato de correo es valido
            $validadorUsuario = new LoginModel();
            // $this->crearSesion();
            return $validadorUsuario->validarUsuario($l,$c);

                
            }
    }

    public function crearSesion() {
        session_start();
        // $_SESSION['s_usuario']= "mep";
        $_SESSION['s_usuario']= array();
        $_SESSION['s_usuario'][0]= 'mep';
        $_SESSION['s_usuario'][1]= 'Miguel';
        $_SESSION['s_usuario'][2]= 'Padron';

        // echo " se a creado una session ";
    }

    public function obtenerSesion() {
        echo $_SESSION['s_usuario'][0];
        echo " ".$_SESSION['s_usuario'][1];
        echo " ".$_SESSION['s_usuario'][2];
        // echo " Este es el id de la SESSION ".session_id();
    }

    public function borraTodaSession() {
        unset($_SESSION['s_usuario']);
    }
    

}

// $s = new LoginUsuario();
// $s->crearSesion();
// echo "espera...... <br>";
// sleep(3);
// // $s->obtenerSesion();
// sleep(3);
// $s->borraTodaSession();
