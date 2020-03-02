<?php
require_once("../connecion.php");
require_once("../consulta.php");

//gurdamos la materia y la carrera
$carrera = $_POST['carrera'];
$materia = $_POST['materia'];

//realizamos las consultas de las correlativas 
$consulta = new CONSULTA();
$finalesNecesarios = $consulta->getConsulta("SELECT * FROM `final` WHERE final.disponible = '$materia' ");
$finalesDisponibles = $consulta->getConsulta("SELECT * FROM `final` WHERE final.necesaria = '$materia' ");

//evaluamos si existe instancias en la consulta
if($finalesNecesarios || $finalesDisponibles){
    if($finalesNecesarios){
        echo "<p class=\"border-bottom\">Necesarios</p>";
        foreach ($finalesNecesarios as $fila) {
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
    }else{
        echo "<div class=\"alert alert-info\" role=\"alert\">
            Esta materia no requiere finales aprobados.
        </div>";
    }

    if ($finalesDisponibles) {
        echo "<p class=\"border-bottom\">Disponibles</p>";
        foreach ($finalesDisponibles as $fila) {
            //armamos la consulta
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
        
    }else{
        echo "<div class=\"alert alert-info\" role=\"alert\">
                Esta materia no se requiere para cursar otra.
            </div>";
    }
}else{
    echo "
        <div class=\"alert alert-info\" role=\"alert\">
            Esta materia no requiere finales aprobados.
        </div>
        <div class=\"alert alert-info\" role=\"alert\">
            Esta materia no se requiere para cursar otra.
        </div>";
}

?>