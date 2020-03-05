<?php 

require_once("../connecion.php");
require_once("../consulta.php");
//veremos si hoy es hay asueto
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("Y-m-d");
echo $fecha;
    //consultamos
    $consulta = new CONSULTA();
    $registros = $consulta->getConsulta("SELECT * FROM `asuetos` WHERE fecha = '$fecha'");

    if($registros){
        echo "hoy hay asueto";
        $fechaDia = nombredia(date("l"));
        setearAsueto($fechaDia, $registros[0]['horainicio'], $registros[0]['horafin']);
    }else{
        echo "hoy no hay asueto";
        $fechaDia = nombredia(date("l"));
        echo $fechaDia;
    }

function nombredia($dia){
    $diaRetorno;
    switch ($dia) {
        case 'Sunday':
            $diaRetorno = 'Domingo';
        break;
        case 'Monday':
            $diaRetorno = 'Lunes';
        break;
        case 'Tuesday':
            $diaRetorno = 'Martes';
        break;
        case 'Wednesday':
            $diaRetorno = 'Miercoles';
        break;
        case 'Thursday':
            $diaRetorno = 'Jueves';
        break;
        case 'Friday':
            $diaRetorno = 'Viernes';
        break;
        case 'Saturday':
            $diaRetorno = 'Sabado';
        break;
        default:
            $diaRetorno = 'Domingo';
        break;
    }
    return $diaRetorno;
}

function setearAsueto($dia, $horainicio, $horafin){
    //
    $consulta = new CONSULTA();
    $setAsueto = $consulta->getConsulta("UPDATE `dicta` SET `estado`='asueto' WHERE dia = '$dia' AND horainicio >= '$horainicio' AND horafin <= '$horafin' ");

    if($setAsueto){

    }else{

    }
}
?>