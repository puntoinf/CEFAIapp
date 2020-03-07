<?php 
$nombre = $_POST['nombre'];
$aula = $_POST['aula'];
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$estado = $_POST['estado'];

//conectamos a la base de datos y el TDA de consulta
require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("DELETE FROM `evento` WHERE  nombre = '$nombre' AND dia = '$dia' AND hora = '$hora' AND aula = '$aula' AND estado = '$estado'");

if($registros){
    echo 1;
}else{
    echo "
    <div class=\"alert alert-success\" role=\"alert\">
        Horario Eliminado Exitosamente!!
    </div>
    ";
}
?>