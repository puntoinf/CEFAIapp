<?php 

require_once("../session.php");

require_once("../connecion.php");
require_once("../consulta.php");

$dia = $_POST['dia'];


$consulta = new CONSULTA();
$registros = $consulta->getConsulta("SELECT * FROM `evento` WHERE dia = '$dia'");

if($registros){
    foreach($registros as $fila){
        echo "  
            <tr>
                <td>".$fila['nombre']."</td>
                <td>".$fila['hora']."</td>
                <td>".$fila['aula']."</td>
                <td>".$fila['estado']."</td>
            </tr>";
        }
}else{
    echo "
    <tr>
        <div class=\"alert alert-warning\" role=\"alert\">
            No hay registros en la base de datos
        </div>
    </tr>
    ";
}
?>