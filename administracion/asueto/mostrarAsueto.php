<?php 

require_once("../../session.php");

require_once("../../connecion.php");
require_once("../../consulta.php");


$consulta = new CONSULTA();
$registros = $consulta->getConsulta("SELECT * FROM `asuetos` WHERE 1");

if($registros){
    foreach($registros as $fila){
        echo "  
            <tr>
                <td>".$fila['fecha']."</td>
                <td>".substr($fila['horainicio'],0 ,-3)."</td>
                <td>".substr($fila['horafin'],0 ,-3)."</td>
                <td>
                    <button type=\"button\" class=\"close\" data-toggle=\"modal\" data-target=\"#asuetoEdit\" onclick=\"cargarModalAsueto('".$fila['idAsueto']."', '".$fila['fecha']."','".substr($fila['horainicio'],0 ,-3)."', '".substr($fila['horafin'],0 ,-3)."')\">
                        <i class=\"material-icons\">
                            edit
                        </i>
                    </button>
                </td>
                <td>
                    <button type=\"button\" class=\"close\" data-toggle=\"modal\" data-target=\"#asuetoEdit\" onclick=\"confirmarEliminacion('".$fila['idAsueto']."')\">
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