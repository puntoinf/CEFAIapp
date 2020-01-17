<?php
require_once("connecion.php");
require_once("consulta.php");

$sql = "SELECT usuario.pass FROM `usuario` WHERE usuario.usuario = 'franco'";
$consulta = new CONSULTA();
$respuestaMateriasTUASySL = $consulta->getConsulta($sql);
//armamos las distintas consultas TUASySL

foreach($respuestaMateriasTUASySL as $materia){
    echo $materia['pass']; 
}
?>