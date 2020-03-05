<?php 
require_once("../session.php");

require_once("../connecion.php");
require_once("../consulta.php");

$fecha = $_POST['fecha'];
$horainicio = $_POST['horainicio'];
$horafin = $_POST['horafin'];

//creamos las consulta
$consulta = new CONSULTA();
$sql = "INSERT INTO `asuetos` (`idAsueto`, `fecha`, `horainicio`, `horafin`) VALUES (NULL, '$fecha', '$horainicio', '$horafin')";
?>