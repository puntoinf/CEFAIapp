<?php 
require_once("connecion.php");
require_once("consulta.php");

//gurdamos la materia y la carrera
$materia = $_POST['materia'];

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("SELECT * FROM `dicta`WHERE materia = '$materia'");

foreach($registros as $fila){
    echo $fila['nombre']."</br>";
}
?>