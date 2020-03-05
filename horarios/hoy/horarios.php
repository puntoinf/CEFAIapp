<?php
    require_once("../../connecion.php");
    require_once("../../consulta.php");

    $dia = $_POST['dia'];
    $hora = $_POST['hora'];

    $consulta = new CONSULTA();

    $data = $consulta->getConsulta("SELECT * FROM `dicta` WHERE dia = '$dia' AND cuatrimestre = '1' AND horafin >= '$hora' ORDER BY horainicio ASC");

    if($data){
    
    $i = 0;
        foreach($data as $fila){
            //sacamos el nombre de la materia y su carrera
            $id = $fila['idMateria'];
            $materia = $consulta->getConsulta("SELECT * FROM `materia` WHERE idMateria = '$id'");
            $carrera = $consulta->getConsulta("SELECT * FROM `imparte`  WHERE idMateria = '$id'");
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
                    case 'asueto':
                        $estadoActual = "<span class=\"badge badge-warning\">Asueto</span>";
                    break;
                    default:
                        
                    break;
                }
            }
            $carreraActual = "";
            foreach($carrera as $fila3){
                switch ($fila3['idCarrera']) {
                    case '1':
                        $carreraActual .= " <span class=\"badge badge-info\">Prof</span>";
                    break;
                    case '2':
                        $carreraActual .= " <span class=\"badge badge-info\">Lcc</span>";
                    break;
                    case '3':
                        $carreraActual .= " <span class=\"badge badge-info\">Lsi</span>";
                    break;
                    case '4':
                        $carreraActual .= " <span class=\"badge badge-info\">TUDW</span>";
                    break;
                    case '5':
                        $carreraActual .= " <span class=\"badge badge-info\">TUASySl</span>";
                    break;
                    default:
                        
                    break;
                }   
            }
                echo "
                <tr id=\"".$i."\">
                    <td>".$fila['horainicio']."</td>
                    <td>".$fila2['nombre']." ".$carreraActual."</td>
                    <td>".$fila['aula']."</td>
                    <td>".$fila['modulo']."</td>
                    <td>".$estadoActual."</td>
                    <td class=\"d-none\">".$fila['horafin']."</td>
                </tr>";

                $i = $i + 1;
            }
        }   
?>