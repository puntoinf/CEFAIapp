<?php
require_once("../connecion.php");
require_once("../consulta.php");

//gurdamos la materia y la carrera
$carrera = $_POST['carrera'];
$materia = $_POST['materia'];

//realizamos las consultas de las correlativas 
$consulta = new CONSULTA();
$materiasNecesarias = $consulta->getConsulta("SELECT correlativa.necesaria FROM `correlativa`, `materia`, `imparte` WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = '$carrera' AND correlativa.necesaria = materia.idMateria AND correlativa.disponible = '$materia'");
$materiasDisponibles = $consulta->getConsulta("SELECT correlativa.disponible FROM `correlativa`, `materia`, `imparte` WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = '$carrera' AND correlativa.disponible = materia.idMateria AND correlativa.necesaria = '$materia'");

//relizamos las consultas de los finales
$finalesNecesarios = $consulta->getConsulta("SELECT final.necesaria FROM `final`, `imparte` WHERE final.disponible = '$materia' AND final.disponible = imparte.idMateria AND imparte.idCarrera = '$carrera'");

//verificamos que allan materias necesarias y materias disponibles para mostrar
if ($materiasNecesarias || $materiasDisponibles || $finalesNecesarios) {
    if ($materiasNecesarias) {
        //si hay necesarias
        echo "<p class=\"border-bottom\">necesarias</p>";
        foreach ($materiasNecesarias as $fila) {
            if($fila['necesaria'] == "0"){
                echo "<div class=\"alert alert-info\" role=\"alert\">
                            Esta materia no tiene dependencias.
                        </div>";
            }else{
                //armamos la consulta
                $SQLmaterias = $consulta->getConsulta("SELECT * FROM materia WHERE idMateria = '".$fila['necesaria']."'");
                foreach($SQLmaterias as $registro){
                    
                    echo "<div class=\"card\" style=\"margin-bottom: 1%;\">
                            <div class=\"card-body\">
                                <p>".$registro['nombre']."</p>
                                <p>Año: ".$registro['ano']."° / Cuatrimestre: ".$registro['cuatrimestre']."°</p>
                            ";
                            
                    $sqlfinal = $consulta->getConsulta("SELECT materia.nombre FROM materia, final WHERE final.disponible = '".$registro['idMateria']."' AND materia.idMateria = final.necesaria");
                    
                    echo "<p class=\"text-secondary\">";
                    if(!$sqlfinal){
                        echo "Finales: No require finales aprobados";
                    }else{
                        echo "Finales :";
                        foreach ($sqlfinal as $filafinal) {
                            echo $filafinal['nombre']." , ";
                        }
                    }

                    echo "
                            </p>   
                        </div>
                    </div>";
                }
            }
        }   
    }else{
        echo "<div class=\"alert alert-info\" role=\"alert\">
                Esta materia no tiene dependencias.
            </div>";
    }

    if ($materiasDisponibles) {
        //si hay disponibles
        echo "<p class=\"border-bottom\">disponibles</p>";
        foreach ($materiasDisponibles as $fila) {
            if($fila['disponible'] == "0"){
                echo "<div class=\"alert alert-info\" role=\"alert\">
                            Esta materia no tiene correlativas.
                        </div>";
            }else{
                $SQLmaterias = $consulta->getConsulta("SELECT * FROM materia WHERE idMateria = '".$fila['disponible']."'");
                foreach($SQLmaterias as $registro){
                    echo "<div class=\"card\" style=\"margin-bottom: 1%;\">
                            <div class=\"card-body\">
                                <p>".$registro['nombre']."</p>
                                <p>Año: ".$registro['ano']."° / Cuatrimestre: ".$registro['cuatrimestre']."°</p>
                            ";
                        $sqlfinal = $consulta->getConsulta("SELECT materia.nombre FROM materia, final WHERE final.disponible = '".$registro['idMateria']."' AND materia.idMateria = final.necesaria");
                    
                        echo "<p class=\"text-secondary\">";
                        if(!$sqlfinal){
                            echo "Finales: No require finales aprobados";
                        }else{
                            echo "Finales :";
                            foreach ($sqlfinal as $filafinal) {
                                echo $filafinal['nombre']." , ";
                            }
                        }
    
                        echo "
                                </p>   
                            </div>
                        </div>";
                }
            }
        }   
    }else{
        echo "  <div class=\"alert alert-info\" role=\"alert\">
                    Esta materia no tiene correlativas.
                </div>";
    }
}else{
    echo "<div class=\"alert alert-danger\" role=\"alert\">
        no hay instancias en la base de datos
    </div>";
}

?>
