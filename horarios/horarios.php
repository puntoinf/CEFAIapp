<?php
    require_once("../connecion.php");
    require_once("../consulta.php");

    $dia = $_POST['dia'];
    $hora = $_POST['hora'];

    $consulta = new CONSULTA();

    $data = $consulta->getConsulta("SELECT * FROM `dicta` WHERE dia = '$dia' AND cuatrimestre = '1' AND horafin >= '$hora' ORDER BY horainicio ASC");

    if($data){
    
    $i = 0;
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
                <tr id=\"".$i."\">
                    <td>".$fila['horainicio']."</td>
                    <td>".$fila2['nombre']."</td>
                    <td>".$fila['aula']."</td>
                    <td>".$fila['modulo']."</td>
                    <td>".$estadoActual."</td>
                    <td class=\"d-none\"> id=\"horafin\"".$fila['horafin']."</td>
                </tr>";

                $i = $i + 1;
            }
        }   
    }
?>