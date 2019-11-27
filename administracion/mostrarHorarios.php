<?php 
require_once("../session.php");

require_once("../connecion.php");
require_once("../consulta.php");

//gurdamos la materia y la carrera
$materia = $_POST['materia'];

//realizamos las consultas
$consulta = new CONSULTA();
$sql = "SELECT * FROM `dicta` WHERE idMateria = '$materia'";
$registros = $consulta->getConsulta($sql);

if($registros){

    echo "<table class=\"table table-dark\">
            <thead>
                <tr>
                    <th scope=\"col\">Materia</th>
                    <th scope=\"col\">Aula</th>
                    <th scope=\"col\">Dia</th>
                    <th scope=\"col\">Modulo</th>
                    <th scope=\"col\">Hora</th>
                    <th scope=\"col\">Cuatrimestre</th>
                    <th scope=\"col\">Estado</th>
                    <th scope=\"col\">Editar</th>
                    <th scope=\"col\">Eliminar</th>
                </tr>
            </thead>
        <tbody>";

    foreach($registros as $fila){
        echo "<tr>";
        $registrosMateria = $consulta->getConsulta("SELECT * FROM `materia` WHERE idMateria = '$materia'");
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
                    <td>".$fila['dia']."</td>
                    <td>".$fila['modulo']."</td>
                    <td>".$fila['hora']."</td>
                    <td>".$fila['cuatrimestre']."</td>
                    <td>".$estadoActual."</td>
                    <td>
                        <button type=\"button\" class=\"close\" data-toggle=\"modal\" data-target=\"#exampleModal2\" onclick=\"cargarModal('".$fila['idMateria']."', '".$fila['aula']."', '".$fila['dia']."', '".$fila['modulo']."', '".$fila['hora']."', '".$fila['cuatrimestre']."','".$fila['estado']."')\">
                            <i class=\"material-icons md-light\">
                                edit
                            </i>
                        </button>
                    </td>
                    <td>
                        <button type=\"button\" class=\"close\" aria-label=\"Close\" onclick=\"eliminar('".$fila['idMateria']."', '".$fila['aula']."', '".$fila['dia']."', '".$fila['modulo']."', '".$fila['hora']."', '".$fila['cuatrimestre']."')\">
                            <i class=\"material-icons md-light\">
                                 clear
                            </i>
                        </button>
                    </td>
                </tr>";
    }

    echo "  </tbody>
        </table>";
}else{
    echo "
        <div class=\"alert alert-warning\" role=\"alert\">
            No hay registros en la base de datos
        </div>
    ";
}
?>