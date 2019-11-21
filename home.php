<?php
require_once("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="shortcut icon" href="Media/Frame.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Space+Mono&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <link href="CSS/main.css" rel="stylesheet" type="text/css">
    <script src="JS/selecciones.js"></script>
    <script src="JS/materiasCarrera.js"></script>
    <script src="JS/bd.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="css/bootstrap-datetimepicker.min.css"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<!--
    el menu de navegacion de las secciones de la administracion
-->
<nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">
            <img src="Media/logo.png" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons">
                    menu
                </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#carta">Correlativas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#historia">Horarios</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <a class="btn" href="">salir</a>
            </ul>
        </div>
    </nav>
    <!--
        el contenedor de los administradores de horarios y de correlativas
    -->
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
                        <button type="button" class="btn btn-light border" onclick="buscar()">consultar</button>
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
                                    picture_as_pdf
                                </i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="btn" data-toggle="collapse" href="#addColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons">
                                    add
                                </i>
                            </a>
                        </li>
                    </ol>
                </nav>

                <div class="collapse multi-collapse" id="pdfColapse">
                    <div class="card card-body">
                        <form action="pdf.php">
                            <div class="form-group">
                                <label for="carrera">Carrera</label>
                                <select id="carrera" onchange="mostrarEnviarPdf();" class="form-control" >
                                    <option value="-">-</option>
                                    <option value="1">Profesorado de Informatica</option>
                                    <option value="2">Licenciatura en Ciencias de la Computación</option>
                                    <option value="3">Licenciatura en Sistemas de Información</option>
                                    <option value="4">Tecnicatura Universitaria en Desarrollo Web</option>
                                    <option value="5">Tecnicatura Universitaria en Administración de Sistemas y Software Libre</option>
                                </select>
                            </div>
                            <div class="form-group" id="send3" >
                                <button type="button" class="btn btn-light border" onclick="buscar()">Generar PDF</button>
                            </div>
                        </form>
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
        <script>
            function buscar() {
                console.log("hola mundo");
                if ($( "#materia" ).val() == 0) {
                    
                }else{
                    $("#respuesta").empty();
                    console.log(document.getElementById("carrera").value);
                    var parametros = {
                            "materia" : $( "#materia" ).val(),
                            "carrera" : $( "#carrera").val()
                    };
                    $.ajax({
                            data:  parametros, //datos que se envian a traves de ajax
                            url:   'correlativasLogin.php', //archivo que recibe la peticion
                            type:  'post', //método de envio
                            beforeSend: function () {
                                    $("#respuesta").html("Procesando, espere por favor...");
                            },
                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                    $("#respuesta").html(response);
                            }
                    });
                }
            };
        </script>
        <hr>
        <h3>Horarios</h3>
        <div class="row">
            <div class="col-sm">
                <form action="">
                    <div class="form-group">
                        <label for="carrera">Carrera</label>
                        <select id="carrera2" onchange="seleccionAño2();" class="form-control" >
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
                        <select id="año2"  onchange="seleccionmateria2();" class="form-control">
                            <option value="">-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="carrera">materia</label>
                        <select id="materia2" class="form-control" onchange="mostrarEnviar2()">
                            <option value="">-</option>
                        </select>
                    </div>
                    <div class="form-group" id="send2">
                        <button type="button" class="btn btn-light border" onclick="buscar()">consultar</button>
                    </div>
                    <script>
                    function buscar2() {
                        if ($( "#materia" ).val()) {
                            
                        }else{
                            $("#respuesta").empty();
                            console.log(document.getElementById("carrera").value);
                            var parametros = {
                                    "materia" : $( "#materia" ).val(),
                                    "carrera" : $( "#carrera").val()
                            };
                            $.ajax({
                                    data:  parametros, //datos que se envian a traves de ajax
                                    url:   'muestra.php', //archivo que recibe la peticion
                                    type:  'post', //método de envio
                                    beforeSend: function () {
                                            $("#respuesta").html("Procesando, espere por favor...");
                                    },
                                    success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                            $("#respuesta").html(response);
                                    }
                            });
                        }
                    };
                    </script>
                </form>
            </div>
            <div class="col-sm">
            <!--
                opciones de las correlativas como la generacion de un pdf o agregar una correlativa
            -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="btn" data-toggle="collapse" href="#pdfHorarioColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons">
                                    picture_as_pdf
                                </i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="btn" data-toggle="collapse" href="#addHorarioColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons">
                                add
                                </i>
                            </a>
                        </li>
                    </ol>
                </nav>

                <div class="collapse multi-collapse" id="pdfHorarioColapse">
                    <div class="card card-body">
                        <form action="pdf.php">
                            <div class="form-group">
                                <label for="carrera">Carrera</label>
                                <select id="carrera" onchange="mostrarEnviarPdf();" class="form-control" >
                                    <option value="-">-</option>
                                    <option value="1">Profesorado de Informatica</option>
                                    <option value="2">Licenciatura en Ciencias de la Computación</option>
                                    <option value="3">Licenciatura en Sistemas de Información</option>
                                    <option value="4">Tecnicatura Universitaria en Desarrollo Web</option>
                                    <option value="5">Tecnicatura Universitaria en Administración de Sistemas y Software Libre</option>
                                </select>
                            </div>
                            <div class="form-group" id="send3" >
                                <button type="button" class="btn btn-light border" onclick="buscar()">Generar PDF</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="collapse multi-collapse" id="addHorarioColapse">
                    <div class="card card-body">
                        <form action="" class="form">
                            <div class="form-group">
                                <label for="carrera">Carrera</label>
                                <select id="carrera" onchange="seleccionAño();" class="form-control" required >
                                    <option value="-">-</option>
                                    <option value="1">Profesorado de Informática</option>
                                    <option value="2">Licenciatura en Ciencias de la Computación</option>
                                    <option value="3">Licenciatura en Sistemas de Información</option>
                                    <option value="4">Tecnicatura Universitaria en Desarrollo Web</option>
                                    <option value="5">Tecnicatura Universitaria en Administración de Sistemas y Software Libre</option>
                                </select>
                            </div>
                            <p class="border-bottom">Materias</p>
                            <div class="form-group">
                                <label for="carrera">Año</label>
                                <select id="año"  onchange="seleccionMateria();" class="form-control">
                                    <option value="">-</option>
                                </select>
                                <label for="carrera">Materia</label>
                                <select id="materia" class="form-control" onchange="mostrarEnviar()">
                                    <option value="">-</option>
                                </select>
                                <label for="carrera">Cuatrimestre</label>
                                <select id="cuatrimestre" class="form-control" onchange="" required>
                                    <option value="">-</option>
                                    <option value="1">1° Primero</option>
                                    <option value="2">2° Segundo</option>
                                </select>
                                <label for="carrera">Día</label>
                                <select id="dia" class="form-control" onchange="" required>
                                    <option value="">-</option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miercoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sabado">Sabado</option>
                                </select>
                                </br>
                                    <label for="carrera">Módulo</label>
                                    <input type="" class="form-control" id="modulo" placeholder="Modulo">
                                <br>
                                <label for="carrera">Aula</label>
                                <input type="" class="form-control" id="aula" placeholder="Aula">
                                <label for="hora">Hora</label>
                                <div class="md-form">
                                    <input placeholder="Selected time" type="text" id="hora" class="form-control timepicker">
                                    <label for="hora">Twelve hour clock</label>
                                </div>
                                <script type="text/javascript">
                                $('#hora').timepicker({
                                    timeFormat: 'HH:mm ',
                                    interval: 60,
                                    minTime: '00:00',
                                    maxTime: '23:59',
                                    defaultTime: '00',
                                    startTime: '00:00',
                                    dynamic: false,
                                    dropdown: true,
                                    scrollbar: true
                                });
                                // Time Picker Initialization
                                </script>
                                <br>
                                <div class="form-group">
                                    <button type="button" class="btn btn-light border" onclick="cargar();">Cargar</button>
                                </div>
                            </div>
                        </form>                
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="respuesta col-sm">
                
            </div>
        </div>
    </div>
</body>
</html>