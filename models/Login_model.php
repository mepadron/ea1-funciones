
<?php

class LoginModel{

    public function validarUsuario($lf, $cf){
        $lb="meps";
        $cb="1234";
        if($lf==$lb and $cf==$cb){
            return true;
        }else{
            // echo "NO ESTA logueado dentro del sistema";
            return false;

        }
    }
}
