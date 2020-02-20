<?php 
require_once("connecion.php");
require_once("consulta.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$consulta = new CONSULTA();
$registros = $consulta->getConsulta("SELECT * FROM `usuario` WHERE usuario.usuario = '$usuario'");

if($registros){
    if($registros[0]['pass'] == $contraseña){
        if($registros[0]['tipo'] == 'admin'){
            //creamos la session
            session_start();
            $_SESSION['login'] = true;
            echo 1;
        }else{
            //creamos la session
            session_start();
            $_SESSION['login'] = true;
            echo 2;
        }
    }
}else{
    $_SESSION['login'] = false;
    echo "  <div class=\"alert alert-danger\" role=\"alert\" id=\"msjFallo\">
                Contraseña Incorrecta!
            </div>";
}

?>