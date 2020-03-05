<?php
//
require_once("../connecion.php");
require_once("../consulta.php");
//cremamos una sonsulta para setear en normal en todos los eleentos
if($_GET['pass']=="1234"){
    $consulta = new CONSULTA();
    $registros = $consulta->getConsulta("UPDATE `dicta` SET `estado`='normal' WHERE estado = 'asueto'");
}else{
    
}
?>