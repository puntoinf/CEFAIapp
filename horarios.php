<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>horarios</title>

    <link rel="shortcut icon" href="Frame.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="">
    </form>
    <div id="horarios">
    </div>
</body>
</html>
=======
<?php
    require_once("connecion.php");
    require_once("consulta.php");

    $dia = $_POST['dia'];
    $carrera = $_POST['carrera'];
    $año = $_POST['año'];

    $consulta = new CONSULTA();

    if ($carrera =! "all" && $año =! "all") {
        $data = $consulta->getConsulta("SELECT * FROM `dicta`, `imparte`, `materia` WHERE dicta.dia = '$dia' AND dicta.idMateria = imparte.idMateria AND imparte.idCarrera = '$carrera' AND materia.ano = '$año' ORDER BY dicta.hora ASC");
    }else{
        $data = $consulta->getConsulta("SELECT * FROM `dicta` WHERE dia = '$dia' ORDER BY hora ASC");
    }

    if($data){
        foreach($data as $fila){
            //sacamos el nombre de la materia
            $id = $fila['idMateria'];
            $materia = $consulta->getConsulta("SELECT * FROM `materia` WHERE idMateria = '$id'");
            foreach($materia as $fila2){
                echo "<tr><td>".$fila['hora']."</td><td>".$fila2['nombre']."</td><td>".$fila['modulo']."</td></tr>";
            }
        }   
    }
?>
>>>>>>> c17699c... d2709h0025
