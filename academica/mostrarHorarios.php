<?php 
require_once("../session.php");

require_once("../connecion.php");
require_once("../consulta.php");

//gurdamos la materia y la carrera
$dia = $_POST['dia'];
$cuatrimestre = $_POST['cuatrimestre'];

//realizamos las consultas
$consulta = new CONSULTA();
$sql = "SELECT * FROM `dicta` WHERE dia = '$dia' AND cuatrimestre = '$cuatrimestre'";
$registros = $consulta->getConsulta($sql);

if($registros){
    foreach($registros as $fila){
        echo "<tr>";
        $registrosMateria = $consulta->getConsulta("SELECT * FROM `materia` WHERE idMateria = '".$fila['idMateria']."'");
        foreach($registrosMateria as $filaMateria){
            echo "<td scope=\"row\">".$filaMateria['nombre']."</td>";
        }

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
            echo "  <td>".$fila['aula']."</td>
                    <td>".$fila['modulo']."</td>
                    <td>".$fila['horainicio']."</td>
                    <td>".$fila['horafin']."</td>
                    <td>".$fila['cuatrimestre']."</td>
                    <td>".$estadoActual."</td>
                    <td>
                        <button type=\"button\" class=\"close\" data-toggle=\"modal\" data-target=\"#exampleModal2\" onclick=\"cargarModal('".$fila['idMateria']."', '".$fila['aula']."', '".$fila['dia']."', '".$fila['modulo']."', '".$fila['horainicio']."', '".$fila['horafin']."', '".$fila['cuatrimestre']."','".$fila['estado']."')\">
                            <i class=\"material-icons\">
                                edit
                            </i>
                        </button>
                    </td>
                    <td>
                        <button type=\"button\" class=\"close\" aria-label=\"Close\" onclick=\"eliminar('".$fila['idMateria']."', '".$fila['aula']."', '".$fila['dia']."', '".$fila['modulo']."', '".$fila['horainicio']."', '".$fila['horafin']."', '".$fila['cuatrimestre']."')\">
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