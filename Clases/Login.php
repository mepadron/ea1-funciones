<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once "Libreria/helpers.php";
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
        // print_r(!empty($l))."<br>";
        // print_r(!empty($c))."<br>";
        //  if(!empty($l) or !empty($c)){
            
            if(empty($l)){
                echo "Login esta vacio<br>";

            }
            if(empty($c)){
                echo "Clave esta vacio<br>";

            }else{
                //si el formato de correo es valido

                if($l=="mep" and $c=="1234"){
                    return true;
                }else{
                    // echo "NO ESTA logueado dentro del sistema";
                    return false;
    
                }
            }

        //  }else{
        //      echo "las caja de textos estan vacia<br>";
        //  }      
        // if($l=="mep" and $c=="1234"){
        //     // echo "usted esta logueado dentro del sistema";
        //     return true;
        // }else{
        //     // echo "NO ESTA logueado dentro del sistema";
        //     return false;
    
        // }
    }
    

}
