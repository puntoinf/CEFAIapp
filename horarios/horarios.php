<?php
    require_once("../connecion.php");
    require_once("../consulta.php");

    $dia = $_POST['dia'];

    $consulta = new CONSULTA();

    $data = $consulta->getConsulta("SELECT * FROM `dicta` WHERE dia = '$dia' ORDER BY hora ASC");

    if($data){
        foreach($data as $fila){
            //sacamos el nombre de la materia
            $id = $fila['idMateria'];
            $materia = $consulta->getConsulta("SELECT * FROM `materia` WHERE idMateria = '$id'");
            foreach($materia as $fila2){
                switch ($fila['estado']) {
                    case 'normal':
                        $estadoActual = "<span class=\"badge badge-success\">Normal</span>";
                    break;
                    case 'cancelado':
                        $estadoActual = "<span class=\"badge badge-danger\">Cancelado</span>";
                    break;
                    case 'parcial':
                        $estadoActual = "<span class=\"badge badge-warning\">Parcial</span>";
                    break;
                    default:
                        
                    break;
                }
                echo "
                <tr>
                    <td>".$fila['hora']."</td>
                    <td>".$fila2['nombre']."</td>
                    td>".$fila['aula']."</td>
                    <td>".$fila['modulo']."</td>
                    <td>".$estadoActual."</td>
                </tr>";
            }
        }   
    }
?>