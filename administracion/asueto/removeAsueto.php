<?php
//conectamos a la base de datos y el TDA de consulta
require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

$idAsueto = $_POST['idAsueto'];

$consulta = new CONSULTA();
$registros = $consulta->getConsulta("DELETE FROM `asuetos` WHERE idAsueto = '$idAsueto'");

if(!$registros){
    echo "
    <div class=\"alert alert-success\" role=\"alert\">
        El asueto a sido eliminado correctamente!!
    </div>";
}else{
    echo "
    <div class=\"alert alert-alert\" role=\"alert\">
        El asueto no ha podido ser eliminado!!
    </div>";
}


?>