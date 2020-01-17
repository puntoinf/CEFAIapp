<?php 
require_once("connecion.php");
require_once("consulta.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$consulta = new CONSULTA();
$registros = $consulta->getConsulta("SELECT usuario.pass FROM `usuario` WHERE usuario.usuario = '$usuario'");


if($registros[0][0] == $contraseña){
    //creamos la session
    session_start();
    $_SESSION['login'] = true;
    echo 1;
}else{
    $_SESSION['login'] = false;
    echo "  <div class=\"alert alert-danger\" role=\"alert\" id=\"msjFallo\">
                Contraseña Incorrecta!
            </div>";
}
?>