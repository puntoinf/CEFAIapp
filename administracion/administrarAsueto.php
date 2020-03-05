<?php
require_once("../session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correlativas</title>
    <link rel="shortcut icon" href="Media/Frame.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Space+Mono&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <link href="../CSS/main.css" rel="stylesheet" type="text/css">
    <script src="../JS/selecciones.js"></script>
    <script src="../JS/materiasCarrera.js"></script>
    <script src="../JS/bd.js"></script>
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <script src="../css/bootstrap-datetimepicker.min.css"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">
            <img src="../Media/Frame.png" alt="" class="logo" width="60px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons">
                    menu
                </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="home.php" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Correlativas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="administrarCorrelativas.php">Cursadas</a>
                        <a class="dropdown-item" href="administrarFinales.php">Finales</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="administrarHorarios.php">Horarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="administrarAsueto.php">Asuetos</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <a class="btn" href="salir.php">salir</a>
            </ul>
        </div>
    </nav>

    <div class="container">
    <h3>Correlativas</h3>
        <div class="row">
            <div class="col-sm">
                <form action="">
                    <!--
                        formulario de eleccion de carrera en las opciones de correlativas
                    -->
                    <div class="form-group">
                        <label for="carrera">Carrera</label>
                        <select id="carrera" onchange="seleccionAño();" class="form-control" >
                            <option value="-">-</option>
                            <option value="1">Profesorado de Informatica</option>
                            <option value="2">Licenciatura en Ciencias de la Computación</option>
                            <option value="3">Licenciatura en Sistemas de Información</option>
                            <option value="4">Tecnicatura Universitaria en Desarrollo Web</option>
                            <option value="5">Tecnicatura Universitaria en Administración de Sistemas y Software Libre</option>
                        </select>
                    </div>
                    <div class="form-group" id="AñoBloque">
                        <label for="carrera">Año</label>
                        <select id="año"  onchange="seleccionmateria();" class="form-control">
                            <option value="">-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="carrera">materia</label>
                        <select id="materia" class="form-control" onchange="mostrarEnviar()">
                            <option value="">-</option>
                        </select>
                    </div>
                    <div class="form-group" id="send">
                        <button type="button" class="btn btn-light border" onclick="buscarCorrelativas()">consultar</button>
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <!--
                    opciones de las correlativas como la generacion de un pdf o agregar una correlativa
                -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="btn" data-toggle="collapse" href="#pdfColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons">
                                    warning
                                </i>
                            </a>
                        </li>
                    </ol>
                </nav>

                <div class="collapse multi-collapse" id="pdfColapse">
                    <div class="card card-body">
                        
                    </div>
                </div>

                <div class="collapse multi-collapse" id="addColapse">
                    <div class="card card-body">
                        <form action="" class="">
                        <div class="form-group">
                            <label for="carrera">Carrera</label>
                            <select id="carrera" onchange="seleccionAño();" class="form-control" >
                                <option value="-">-</option>
                                <option value="1">Profesorado de Informática</option>
                                <option value="2">Licenciatura en Ciencias de la Computación</option>
                                <option value="3">Licenciatura en Sistemas de Información</option>
                                <option value="4">Tecnicatura Universitaria en Desarrollo Web</option>
                                <option value="5">Tecnicatura Universitaria en Administración de Sistemas y Software Libre</option>
                            </select>
                        </div>
                        <p class="border-bottom">Materia</p>
                        <div class="form-group">
                            <label for="carrera">Año</label>
                            <select id="año"  onchange="seleccionMateria();" class="form-control">
                                <option value="">-</option>
                            </select>
                            <label for="carrera">Materia</label>
                            <select id="materia" class="form-control" onchange="mostrarEnviar()">
                                <option value="">-</option>
                            </select>
                        </div>
                        <p class="border-bottom">Correlativas</p>
                        <div class="form-group">
                            <label for="carrera">Año</label>
                            <select id="año2"  onchange="seleccionMateria2();" class="form-control">
                                <option value="">-</option>
                            </select>
                            <label for="carrera">Materia</label>
                            <select id="materia2" class="form-control" onchange="mostrarEnviar()">
                                <option value="">-</option>
                            </select>
                        </div>
                        <div class="form-group" id="send">
                            <button type="button" class="btn btn-light border" onclick="armar()">Cargar</button>
                        </div>
                    </form>             
                    </div>
                </div>
            </div>
        </div>
        <div class="row container">
             <div class="col-sm" id="respuesta">
             
             </div>   
        </div>
        <!--
            mostramos las correlativas de una materia con el correspondiente
        -->
        <script src="../JS/administracion.js"></script>
    </div>
</body>
</html>