<?php
require_once("connecion.php");
require_once("consulta.php");

$sql = "SELECT * FROM `materia`";
$consulta = new CONSULTA();
$respuestaMateriasTUASySL = $consulta->getConsulta($sql);
//armamos las distintas consultas TUASySL

foreach($respuestaMateriasTUASySL as $materia){
    echo "(NULL,'".$materia['nombre']."',".$materia['ano'].",".$materia['cuatrimestre']."),<br/>"; 
}
?>