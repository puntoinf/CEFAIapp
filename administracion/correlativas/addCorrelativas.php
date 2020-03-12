<?php 

require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

$carrera = $_POST['carrera'];
$necesaria = $_POST['necesaria'];
$disponible = $_POST['disponible'];

//realizamos las consultas
$consulta = new CONSULTA();
$registro = $consulta->getConsulta();

if($registro){

}else{
    
}

?>