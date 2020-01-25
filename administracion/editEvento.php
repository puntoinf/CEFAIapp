<?php
// los originales
$nombreOriginal = $_POST['nombreOriginal'];
$aulaOriginal = $_POST['aulaOriginal'];
$diaOriginal = $_POST['diaOriginal'];
$horaOriginal = $_POST['horaOriginal'];
$estadoOriginal = $_POST['estadoOriginal'];
// los valores para modificar
$nombre = $_POST['nombre'];
$aula = $_POST['aula'];
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$estado = $_POST['estado'];

//conectamos a la base de datos y el TDA de consulta
require_once("../connecion.php");
require_once("../consulta.php");

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("UPDATE `evento` SET `nombre`='$nombre',`dia`='$dia',`hora`='$hora',`aula`='$aula',`estado`='$estado' WHERE nombre = '$nombreOriginal' AND dia = '$diaOriginal' AND hora = '$horaOriginal' AND aula = '$aulaOriginal' estado = '$estadoOriginal'");

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