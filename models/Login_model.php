
<?php

class LoginModel{

    public function validarUsuario($lf, $cf){
        $lb="meps";
        $cb="1234";
        $datosBD = array();
        $datosBD['login']= "meps";
        $datosBD['clave']= "1234";
        $datosBD['rol']= "admin";
        $datosBD['cedulaEmpleado']= "9.883.255";
        $datosBD['nombreEmpleado']= "Miguel";
        $datosBD['apellidoEmpleado']= "Padron";
        $datosBD['cargoEmpleado']= "Gerente";
        $datosBD['salarioEmpleado']= 20000;

        $datosBD2 = array();
        $datosBD2['login']= "ma";
        $datosBD2['clave']= "12";
        $datosBD2['rol']= "secretaria";
        $datosBD2['cedulaEmpleado']= "16.363.425";
        $datosBD2['nombreEmpleado']= "Maria";
        $datosBD2['apellidoEmpleado']= "Rojas";
        $datosBD2['cargoEmpleado']= "Gerente";
        $datosBD2['salarioEmpleado']= 10000;
        $datosBD2[]=$datosBD;
        echo $datosBD2[0]['clave'];        
        if($lf==$datosBD['login'] and $cf==$datosBD['clave']){
            $datosBD['validacion']= true;
            return $datosBD;
        }else if($lf==$datosBD2[0]['login'] and $cf==$datosBD2[0]['clave']){
            $datosBD['validacion']= true;
            // echo "NO ESTA logueado dentro del sistema";
            return $datosBD2;
            
        }else{
            
            echo "NO ESTA logueado dentro del sistema";
        }
    }
}

$l = new LoginModel();
print_r($l->validarUsuario('mps','1234'));
