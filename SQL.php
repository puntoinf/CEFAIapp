<?php
require_once("connecion.php");
require_once("consulta.php");

$sql = "SELECT * FROM `imparte`, `materia` WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = '3' AND materia.ano = '4'";
$consulta = new CONSULTA();
$respuestaMateriasTUASySL = $consulta->getConsulta($sql);
//armamos las distintas consultas TUASySL

foreach($respuestaMateriasTUASySL as $materia){
    echo "new Array(\"".$materia['nombre']." - ".$materia['cuatrimestre']."\",\"".$materia['idMateria']."\"),</br>"; 
}
?>