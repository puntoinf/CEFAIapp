<?php
require_once("connecion.php");
require_once("consulta.php");;

$sql = "SELECT * FROM `materia`, `imparte` WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = '2' AND materia.ano = '5'";
$consulta = new CONSULTA();
$respuesta = $consulta->getConsulta($sql);

foreach($respuesta as $fila){
    echo "new Array(\"".$fila['nombre']." - ".$fila['semestre']."\",\"".$fila['idMateria']."\"),</br>";
}
?>