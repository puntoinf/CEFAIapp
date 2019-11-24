<?php 
$materia = $_POST['materia'];
$aula = $_POST['aula'];
$dia = $_POST['dia'];
$modulo = $_POST['modulo'];
$hora = $_POST['hora'];
$cuatrimestre = $_POST['cuatrimestre'];
$estado = $_POST['estado'];

//conectamos a la base de datos y el TDA de consulta
require_once("../connecion.php");
require_once("../consulta.php");

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("UPDATE `dicta` SET `aula`='$aula',`modulo`= '$modulo',`estado`= '$estado' WHERE idMateria = '$materia' AND dia = '$dia' AND hora = '$hora' AND cuatrimestre ='$cuatrimestre'");

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