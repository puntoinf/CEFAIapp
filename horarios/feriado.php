<?php
require_once("../connecion.php");
require_once("../consulta.php");

$fecha = $_POST['fecha'];

//evaluamos si hoy hay auseto
$consulta = new CONSULTA(); 
$registros = $consulta->getConsulta("SELECT * FROM `feriados` WHERE fecha = '$fecha'");

if($registros){
    foreach($registros as $fila){
        echo "
        <div class=\"alert alert-danger\" role=\"alert\">
            Hoy es feriado por ".$fila['motivo']." !Descansa¡.
        </div>
        ";
    }
}
?>