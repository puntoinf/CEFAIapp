<?php 
$necesaria = $_POST['necesaria'];
$disponible = $_POST['disponible'];

//conectamos a la base de datos y el TDA de consulta
require_once("../../connecion.php");
require_once("../../consulta.php");

//realizamos las consultas
$consulta = new CONSULTA();
$registros = $consulta->getConsulta("DELETE FROM `correlativa` WHERE necesaria = '$necesaria' AND disponible = '$disponible'");

if($registros){
    echo 1;
}else{
    echo "
    <div class=\"alert alert-success\" role=\"alert\">
        Correlativa Eliminado Exitosamente!!
    </div>
    ";
}
?>