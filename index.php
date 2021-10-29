<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


include_once "Clases/Personas.php";




$objecto = new Personas();
echo $objecto->imprimirHola('Miguel Padron');




// esto deberia vista
// echo "<br>";
// $resp = LoginUsuario('mp','1234567');

// if( $resp['si'] ){
    
//     echo imprimirHola("Miguel Padron",50000). " y su rol dentro del sistema es ".$resp['nombre-rol'];
// }else{
    
//     echo "Usted no esta en el sistema contactar al admin";
// }

?>
