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
            return $validadorUsuario->validarUsuario($l,$c);

                
            }
    }
    

}
