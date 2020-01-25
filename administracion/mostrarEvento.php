<?php 

require_once("../session.php");

require_once("../connecion.php");
require_once("../consulta.php");

$dia = $_POST['dia'];


$consulta = new CONSULTA();
$registros = $consulta->getConsulta("SELECT * FROM `evento` WHERE dia = '$dia'");

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
                <button type=\"button\" class=\"close\" aria-label=\"Close\" onclick=\"eliminarEvento('".$fila['nombre']."', '".$fila['dia']."', '".$fila['hora']."', '".$fila['aula']."', '".$fila['estado']."'')\">
                    <i class=\"material-icons\">
                         clear
                    </i>
                </button>
            </td>
        </tr>";
    }
