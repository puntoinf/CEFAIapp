<?php 

require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");

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
                <td>
                    <button type=\"button\" class=\"close\" data-toggle=\"modal\" data-target=\"#exampleModalEvento\" onclick=\"cargarModalEvento('".$fila['nombre']."', '".$fila['dia']."', '".$fila['hora']."', '".$fila['aula']."', '".$fila['estado']."')\">
                        <i class=\"material-icons\">
                            edit
                        </i>
                    </button>
                </td>
                <td>
                    <button type=\"button\" class=\"close\" aria-label=\"Close\" onclick=\"confirmarEliminacionEvento('".$fila['nombre']."', '".$fila['dia']."', '".$fila['hora']."', '".$fila['aula']."', '".$fila['estado']."')\">
                        <i class=\"material-icons\">
                             clear
                        </i>
                    </button>
                </td>
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