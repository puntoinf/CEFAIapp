<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
table {
  border-collapse: collapse;
}
</style>
<body>
    <table class="table" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Año</th>
            </tr>
        </thead>
<?php
    header("Content-Type: text/html; charset=utf-8");
        /**
         * requerims la coneccion a la base de datos, y la clase para poder 
         */
        require_once("../connecion.php");
        require_once("../consulta.php"); 
        /**
         * creamos la consulta
         */
        $carrera = $_POST['carrerapdf'];
        $consulta = new CONSULTA();

        $html = '';

        switch($carrera){
            case 1:
                $registros = $consulta->getConsulta("SELECT materia.nombre, materia.ano FROM imparte, materia, carrera WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = carrera.idCarrera AND carrera.idCarrera = '$carrera' ORDER BY materia.ano ASC");
            break;
            case 2:
                $registros = $consulta->getConsulta("SELECT materia.nombre, materia.ano FROM imparte, materia, carrera WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = carrera.idCarrera AND carrera.idCarrera = '$carrera' ORDER BY materia.ano ASC");
            break;
            case 3:
                $registros = $consulta->getConsulta("SELECT materia.nombre, materia.ano FROM imparte, materia, carrera WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = carrera.idCarrera AND carrera.idCarrera = '$carrera' ORDER BY materia.ano ASC");
            break;
            case 4:
                $registros = $consulta->getConsulta("SELECT materia.nombre, materia.ano FROM imparte, materia, carrera WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = carrera.idCarrera AND carrera.idCarrera = '$carrera' ORDER BY materia.ano ASC");
            break;
            case 5:
                $registros = $consulta->getConsulta("SELECT materia.nombre, materia.ano FROM imparte, materia, carrera WHERE materia.idMateria = imparte.idMateria AND imparte.idCarrera = carrera.idCarrera AND carrera.idCarrera = '$carrera' ORDER BY materia.ano ASC");
            break;
        }
        
        foreach($registros as $fila){
            
            $html .= "<tr><td>$fila[0]</td><td>".$fila['ano']."</td></tr>";
        }   

        echo $html;
    ?>
    </table>

    <div class="row">
        <div class="col-sm">
            asd
        </div>
        <div class="col-sm">
            asd
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            asd
        </div>
        <div class="col-sm">
            asd
        </div>
    </div>
</body>
</html>