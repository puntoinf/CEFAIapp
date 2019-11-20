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
                    <a class="nav-link" href="#carta">Carta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#historia">Nuestra Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ubicacion">Donde Estamos</a>
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
                            <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                <i class="material-icons">
                                    picture_as_pdf
                                </i>
                            </button>
                        </li>
                        <li class="breadcrumb-item">
                            <button class="btn" onclick="">
                            <i class="material-icons">
                                add
                            </i>
                            </button>
                        </li>
                    </ol>
                </nav>
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
        <!--
            modales de creacion de PDF y de agregar modal
        -->
        <!-- Modal PDF-->
        <div class="modal fade" id="modalPDF" tabindex="-1" role="dialog" aria-labelledby="modalPDF" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

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
                    <div id="respuesta">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>
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
            <div class="col-sm">asd</div>
        </div>
    </div>
</body>
</html>