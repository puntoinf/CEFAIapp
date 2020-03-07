<?php
// los originales
$idasueto = $_POST["idAuseto"];
$fecha = $_POST["fechaModificar"];
$horaInicio = $_POST["horainicioModificar"];
$horaFin = $_POST["horafinModificar"];

//conectamos a la base de datos y el TDA de consulta
require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("UPDATE `asuetos` SET `fecha`= '$fecha',`horainicio`='$horaInicio',`horafin`='$horaFin' WHERE idAsueto = '$idasueto'");

if($registros){
    echo 1;
}else{
    echo "
    <div class=\"alert alert-success\" role=\"alert\">
        Horario editado Exitosamente!!
    </div>
    ";
}

?>