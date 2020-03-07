<?php 
// los originales
$materiaOriginal = $_POST['materiaOriginal'];
$aulaOriginal = $_POST['aulaOriginal'];
$diaOriginal = $_POST['diaOriginal'];
$moduloOriginal = $_POST['moduloOriginal'];
$horaInicioOriginal = $_POST['horaInicioOriginal'];
$horaFinOriginal = $_POST['horaFinOriginal'];
$cuatrimestreOriginal = $_POST['cuatrimestreOriginal'];
$estadoOriginal = $_POST['estadoOriginal'];
// los valores para modificar
$materia = $_POST['materia'];
$aula = $_POST['aula'];
$dia = $_POST['dia'];
$modulo = $_POST['modulo'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFin'];
$cuatrimestre = $_POST['cuatrimestre'];
$estado = $_POST['estado'];

//conectamos a la base de datos y el TDA de consulta
require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("UPDATE `dicta` SET `idMateria`= '$materia' ,`aula`= '$aula',`dia`= '$dia' ,`modulo`= '$modulo' ,`horainicio`= '$horaInicio' ,`horafin`= '$horaFin', `cuatrimestre`= '$cuatrimestre' ,`estado`= '$estado' WHERE idMateria = '$materiaOriginal' AND aula = '$aulaOriginal' AND dia = '$diaOriginal' AND modulo = '$moduloOriginal' AND horainicio = '$horaInicioOriginal' AND horafin = '$horaFinOriginal' AND cuatrimestre = '$cuatrimestreOriginal' AND estado = '$estadoOriginal' ");

if($registros){
    echo 1;
}else{
    echo "
    <div class=\"alert alert-success\" role=\"alert\">
        Horario editado Exitosamente!!
    </div>
    ";
}
?>