<?php
require_once("../session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horarios</title>
    <link rel="shortcut icon" href="../Media/Frame.png" />

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
    <script src="../JS/darktheme.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
        <a class="navbar-brand bg-light rounded " href="#" style="width: 60px;">
            <img src="../Media/Frame.png" alt="" class="logo mx-auto d-block" width="30px">
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
                <li class="nav-item">
                    <a class="nav-link" href="administrarCorrelativas.php">Correlativas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="administrarHorarios.php">Horarios</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <button class="btn" onclick="darckOn()" id="darck">
                    <i class="material-icons">
                        brightness_medium
                    </i>
                </button>
                <a class="btn" href="">salir</a>
            </ul>
        </div>
    </nav>
    <div class="container" id="contenedor">
        <h3>Horarios</h3>
        <div class="row">
            <div class="col-sm">
            <form action="">
                    <!--
                        formulario de eleccion de carrera en las opciones de correlativas
                    -->
                    <div class="form-group">
                        <label for="dia">Dia</label>
                        <select class="form-control" name="dia" id="dia" onchange=" mostrarEnviar()">
                            <option value="">-</option>
                            <option value="lunes">Lunes</option>
                            <option value="martes">Martes</option>
                            <option value="miercoles">Miercoles</option>
                            <option value="jueves">Jueves</option>
                            <option value="viernes">Viernes</option>
                            <option value="sabado">Sabado</option>
                            <option value="domingo">Domingo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cuatrimestre">Cuatrimestre</label>
                        <select class="form-control" name="cuatrimestre" id="cuatrimestre" onchange=" mostrarEnviar()">
                            <option value="1">1°</option>
                            <option value="2">2°</option>
                        </select>
                    </div>
                    <div class="form-group" id="send">
                        <button type="button" class="btn btn-light border" onclick="buscar()">consultar</button>
                    </div>
                </form>

                <script>
                    function buscar() {
                        console.log("hola mundo");
                        if ($( "#dia" ).val() == 0) {
                            
                        }else{
                            var parametros = {
                                    "dia" : $( "#dia" ).val(),
                                    "cuatrimestre" : $(" #cuatrimestre").val()
                            };
                            $.ajax({
                                    data:  parametros, //datos que se envian a traves de ajax
                                    url:   'mostrarHorarios.php', //archivo que recibe la peticion
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

            </div>
            <div class="col-sm">
            <!--
                opciones de las correlativas como la generacion de un pdf o agregar una correlativa
            -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="btn" data-toggle="collapse" href="#pdfHorarioColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons" id="iconPdf">
                                    picture_as_pdf
                                </i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="btn" data-toggle="collapse" href="#addHorarioColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons" id="iconAdd">
                                add
                                </i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="btn" data-toggle="collapse" href="#addEventoColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons">
                                    post_add
                                </i>
                            </a>
                        </li>
                    </ol>
                </nav>

                <div class="collapse multi-collapse" id="pdfHorarioColapse">
                    <div class="card card-body">
                        <form action="pdf.php" method="POST">
                            <div class="form-group">
                                <label for="carrerapdf">Carrera</label>
                                <select id="carrerapdf" onchange="mostrarEnviarPdf();" class="form-control" name="carrerapdf">
                                    <option value="0">-</option>
                                    <option value="1">Lic en Ciens de la Comp, Lic en Sis de la Inf, Profesorado de Informatica</option>
                                    <option value="2">TUDW, TUAsSisySl</option>
                                </select>
                            </div>
                            <div class="form-group" id="send3" >
                                <button type="submit" class="btn btn-light border">Generar PDF</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="collapse multi-collapse" id="addHorarioColapse">
                    <div class="card card-body">
                        <form action="" class="form">
                            <div class="form-group">
                                <label for="carrera">Carrera</label>
                                <select id="carrera2" onchange="seleccionAño2();" class="form-control" required >
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
                                <label for="año2">Año</label>
                                <select id="año2"  onchange="seleccionmateria2();" class="form-control">
                                    <option value="">-</option>
                                </select>
                                <label for="materia2">Materia</label>
                                <select id="materia2" class="form-control" onchange="mostrarEnviar2()">
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
                        <script src="../JS/cargarModal.js"></script>
                        <script>
                            function cargar() {
                                console.log("hola mundo");
                                if ($( "#materia2" ).val() == 0) {
                                    
                                }else{
                                    $("#respuesta").empty();
                                    console.log(document.getElementById("carrera").value);
                                    var parametros = {
                                        "carrera" : $( "#carrera2").val(),
                                        "materia" : $( "#materia2" ).val(),
                                        "aula" : $("#aula").val(),
                                        "dia" : $("#dia").val(),
                                        "modulo" : $("#modulo").val(),
                                        "hora" : $("#hora").val(),
                                        "cuatrimestre": $("#cuatrimestre").val(),
                                        "estado" : "normal"
                                    };
                                    $.ajax({
                                            data:  parametros, //datos que se envian a traves de ajax
                                            url:   'addHorario.php', //archivo que recibe la peticion
                                            type:  'post', //método de envio
                                            beforeSend: function () {
                                                    $("#respuesta").html("Procesando, espere por favor...");
                                            },
                                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                                    $("#respuesta").html(response);
                                                    buscar();
                                            }
                                    });
                                }
                            };

                            function eliminar(materia, aula, dia, modulo, hora, cuatrimestre) {
                                var parametros = {
                                        "materia" : materia,
                                        "aula" : aula,
                                        "dia" : dia,
                                        "modulo" : modulo,
                                        "hora" : hora,
                                        "cuatrimestre": cuatrimestre
                                };
                                console.log(parametros);
                                $.ajax({
                                        data:  parametros, //datos que se envian a traves de ajax
                                        url:   'removeHorario.php', //archivo que recibe la peticion
                                        type:  'post', //método de envio
                                        beforeSend: function () {
                                            $("#respuesta").html("Procesando, espere por favor...");
                                        },
                                        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                            $("#respuesta").html(response);
                                            buscar();
                                        }
                                });
                            }
                        </script>            
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm" style="overflow: hidden;">
                <table class="table" id="tabla">
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
                    <tbody id="respuesta">

                    </tbody>
                </table>
            </div>
        </div>
    </div>  

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <!-- valores originales -->
                        <input class="form-control" type="hidden" id="editarModificarOriginal" name="editarModificarOriginal" />
                        <input class="form-control" type="hidden" id="editarHoraOriginal" name="editarHoraOriginal" />
                        <input class="form-control" type="hidden" id="editarDiaOriginal" name="editarDiaOriginal" />
                        <input class="form-control" type="hidden" id="editarCuatrimestreOriginal" name="editarCuatrimestreOriginal" />
                        <input class="form-control" type="hidden" id="editarAulaOriginal" name="editarAulaOriginal" />
                        <input class="form-control" type="hidden" id="editarModuloOriginal" name="editarModuloOriginal" />
                        <input class="form-control" type="hidden" id="editarEstadoOriginal" name="editarEstadoOriginal" />
                        <!-- valores a modificar -->
                        <input class="form-control" type="text" placeholder="" id="editarModificar" disebled>
                        <label for="">hora</label>
                        <input class="form-control" type="text" placeholder="" id="editarHora">  
                        <label for="">dia</label>
                        <input class="form-control" type="text" placeholder="" id="editarDia">
                        <label for="">cuatrimestre</label>
                        <select class="form-control" id="editarCuatrimestre">
                            <option value="1">1°</option>
                            <option value="2">2°</option>
                        </select>
                        <label for="">aula</label>
                        <input class="form-control" type="text" placeholder="" id="editarAula">          
                        <label for="">modulo</label>
                        <input class="form-control" type="text" placeholder="" id="editarModulo">   
                        <label for="">estado</label>
                        <select class="form-control" id="editarEstado">
                            <option value="cancelado">Cancelado</option>
                            <option value="normal">Normal</option>
                            <option value="parcial">Parcial</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="editar()">Guardar Cambios</button>
            </div>
            <script>
                function hola(){
                    console.log($('#editarModificarOriginal').val());
                }

                function editar() {
                    var parametros = {
                        "materiaOriginal" : $("#editarModificarOriginal").val(),
                        "aulaOriginal" :  $("#editarAulaOriginal").val(),
                        "diaOriginal" :  $("#editarDiaOriginal").val(),
                        "moduloOriginal" :  $("#editarModuloOriginal").val(),
                        "horaOriginal" : $("#editarHoraOriginal").val(),
                        "cuatrimestreOriginal": $("#editarCuatrimestreOriginal").val(),
                        "estadoOriginal" : $("#editarEstadoOriginal").val(),

                        "materia" : $("#editarModificar").val(),
                        "aula" :  $("#editarAula").val(),
                        "dia" :  $("#editarDia").val(),
                        "modulo" :  $("#editarModulo").val(),
                        "hora" : $("#editarHora").val(),
                        "cuatrimestre": $("#editarCuatrimestre").val(),
                        "estado" : $("#editarEstado").val()
                    };
                    console.log(parametros);
                    $.ajax({
                            data:  parametros, //datos que se envian a traves de ajax
                            url:   'editHorario.php', //archivo que recibe la peticion
                            type:  'post', //método de envio
                            beforeSend: function () {
                                $("#respuesta").html("Procesando, espere por favor...");
                            },
                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                $("#respuesta").html(response);
                                buscar();
                            }
                    });
                }
            </script>
            </div>
        </div>
    </div>
</body>
</html>