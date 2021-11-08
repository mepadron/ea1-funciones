<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

class LoginUsuario{


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
        // var_dump($l);    
        // var_dump($c);    
        if($l=="mep" and $c=="1234"){
            // echo "usted esta logueado dentro del sistema";
            return true;
        }else{
            // echo "NO ESTA logueado dentro del sistema";
            return false;
    
        }
    }
    

}
