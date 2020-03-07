<?php

$carrera = $_POST['carrera'];
$materia = $_POST['materia'];
$aula = $_POST['aula'];
$dia = $_POST['dia'];
$modulo = $_POST['modulo'];
$horainicio = $_POST['horainicio'];
$horafin = $_POST['horafin'];
$cuatrimestre = $_POST['cuatrimestre'];
$estado = $_POST['estado'];

//conectamos a la base de datos y el TDA de consulta
require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("INSERT INTO `dicta` (`idMateria`, `aula`, `dia`, `modulo`, `horainicio`, `horafin`, `cuatrimestre`,`estado`) VALUES ('$materia','$aula','$dia','$modulo','$horainicio', '$horafin','$cuatrimestre','$estado')");

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