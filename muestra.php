<?php
require_once("connecion.php");
require_once("consulta.php");

$carrera = $_POST['carrera'];
$materia = $_POST['materia']; 

//nuevas funciones
$consulta = new CONSULTA();
$materiasNecesarias = $consulta->getConsulta("SELECT correlativa.necesaria FROM `imparte`, `materia`,`correlativa` WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = '$carrera' AND materia.idMateria = correlativa.disponible AND materia.idMateria = '$materia'");
$materiasDisponibles = $consulta->getConsulta("SELECT correlativa.disponible FROM `imparte`, `materia`,`correlativa` WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = '$carrera' AND materia.idMateria = correlativa.necesaria AND materia.idMateria = '$materia'");

/*
$corre = new CORRELATIVA();
$materia = new MATERIA();
$necesaria = $corre->getNecesaria($resultado);
$disponible = $corre->getDisponible($resultado);
*/
//si hay necesarias
echo "<p class=\"border-bottom\">necesarias</p>";
foreach ($materiasNecesarias as $fila) {
    if($fila['necesaria'] == "0"){
        echo "<div class=\"alert alert-info\" role=\"alert\">
                    Esta materia no tiene dependencias.
                </div>";
    }else{
        //armamos la consulta
        $materias = $consulta->getConsulta("SELECT * FROM materia WHERE idMateria = '".$fila['necesaria']."'");
        foreach($materias as $registro){
            echo "<div class=\"card\" style=\"margin-bottom: 1%;\">
                    <div class=\"card-body\">
                        <p>".$registro['nombre']."</p>
                        <p>año: ".$registro['ano']."° / semestre: ".$registro['semestre']."°</p>
                    </div>
                </div>";
        }
    }
}
//si hay disponibles
echo "<p class=\"border-bottom\">disponibles</p>";
foreach ($materiasDisponibles as $fila) {
    if($fila['disponible'] == "0"){
        echo "<div class=\"alert alert-info\" role=\"alert\">
                    Esta materia no tiene correlativas.
                </div>";
    }else{
        $materias = $consulta->getConsulta("SELECT * FROM materia WHERE idMateria = '".$fila['disponible']."'");
        foreach($materias as $registro){
            echo "<div class=\"card\" style=\"margin-bottom: 1%;\">
                    <div class=\"card-body\">
                        <p>".$registro['nombre']."</p>
                        <p>año: ".$registro['ano']."° / semestre: ".$registro['semestre']."°</p>
                    </div>
                </div>";
        }
    }
}
?>
