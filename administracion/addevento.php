<?php 

require_once("../session.php");

require_once("../connecion.php");
require_once("../consulta.php");

$nombre = $_POST['nombre'];
$aula = $_POST['aula'];
$dia = $_POST['dia'];
$hora = $_POST['hora'].":00";


$consulta = new CONSULTA();
$registros = $consulta->getConsulta("INSERT INTO `evento`(`nombre`, `dia`, `hora`, `aula`, `estado`) VALUES ('$nombre','$dia','$hora','$aula','normal')");

if($registros){
    echo 1;
}else{
    echo "
    <div class=\"alert alert-success\" role=\"alert\">
        Horario Cargado Exitosamente!!
    </div>
    ";
}

?>