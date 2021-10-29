<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

function LoginUsuario($loginF, $claveF){

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

// $c=LoginUsuario('mp','1234567');
// print_r($c['si']);
