<?php 
require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

$fecha = $_POST['fecha'];
$horainicio = $_POST['horainicio'];
$horafin = $_POST['horafin'];


if(!existeAsueto($fecha)){
    //creamos las consulta
    $consulta = new CONSULTA();
    $registros = $consulta->getConsulta("INSERT INTO `asuetos` (`idAsueto`, `fecha`, `horainicio`, `horafin`) VALUES (NULL, '$fecha', '$horainicio', '$horafin')");

    if($registros){
        echo "
        <div class=\"alert alert-success\" role=\"alert\">
            Asueto agregado Exitosamente!!
        </div>
        ";
    }else{
        echo "
        <div class=\"alert alert-danger\" role=\"alert\">
            El asueto no agregado!!
        </div>
        ";
    }
}else{
    echo "
    <div class=\"alert alert-danger\" role=\"alert\">
        El asueto que se quiere programar ya esta programado !!
    </div>
    ";
}

function existeAsueto($fecha){
    $existe;

    $consulta = new CONSULTA();
    $existeInstancias = $consulta->getConsulta("SELECT * FROM `asuetos` WHERE fecha = '$fecha'");

    if($existeInstancias){
        $existe = true;
    }else{
        $existe = false;
    }

    return $existe;
}

?>