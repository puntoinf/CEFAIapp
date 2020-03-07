<?php
require_once("../../session.php");
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


    <link href="../../CSS/main.css" rel="stylesheet" type="text/css">
    <script src="../../JS/selecciones.js"></script>
    <script src="../../JS/materiasCarrera.js"></script>
    <script src="../../JS/bd.js"></script>
    <script src="../../JS/administracion.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/timepicker@1.13.0/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/timepicker@1.13.0/jquery.timepicker.css">

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body onload="cargarAsuetos()">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
        <a class="navbar-brand bg-light rounded " href="#" style="width: 60px;">
            <img src="../../Media/Frame.png" alt="" class="logo mx-auto d-block" width="30px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons">
                    menu
                </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="../" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Correlativas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../correlativas">Cursadas</a>
                        <a class="dropdown-item" href="../final">Finales</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../horarios">Horarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Asuetos</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <button class="btn" onclick="darckOn()" id="darck">
                    <i class="material-icons">
                        brightness_medium
                    </i>
                </button>
                <a class="btn" href="../salir.php">salir</a>
            </ul>
        </div>
    </nav>

    <div class="container">
    <h3>Asuetos</h3>
        <div class="row">
            <div class="col-sm">
                <!--
                    opciones de las correlativas como la generacion de un pdf o agregar una correlativa
                -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="btn" data-toggle="collapse" href="#asuetoColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons">
                                    add
                                </i>
                            </a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="btn" data-toggle="collapse" href="#asuetoHoyColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="material-icons">
                                    warning
                                </i>
                            </a>
                        </li>
                    </ol>
                </nav>

                <div class="collapse multi-collapse" id="asuetoColapse">
                    <div class="card card-body">
                        <div class="respuestaAgregarAsueto"></div>
                        <form action="" class="form-inline">
                            <div class="form-group mb-12">
                                <label for="">Fecha</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" id="fechaAgregar"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script >
                                $('#datetimepicker1').datetimepicker({
                                        format: 'YYYY-MM-DD'
                                    });
                                </script>
                            </div>
                            <div class="form-group mb-12">
                                    <label for="">Hora Inicio</label>
                                    <div class='input-group date' id='horainiciopiker'>
                                        <input type='text' class="form-control" id="horaInicioAgregar"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>
                                    <script type="text/javascript">
                                    $('#horainiciopiker').datetimepicker({
                                        format: 'HH:mm'
                                    });
                                    </script>
                            </div>
                            <div class="form-group mb-12">
                                    <label for="">Hora Fin</label>
                                    <div class='input-group date' id='horafinpiker'>
                                        <input type='text' class="form-control" id="horaFinAgregar"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>
                                    <script type="text/javascript">
                                    $('#horafinpiker').datetimepicker({
                                        format: 'HH:mm'
                                    });
                                    </script>
                            </div>
                            <div class="form-group mb-12">
                                <br/>
                                <button type="button" class="m-15 btn btn-info" onclick="agregarAsueto()">Cargar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="collapse multi-collapse" id="asuetoHoyColapse">
                    <div class="card card-body">
                        <form action="" class="form-inline">
                        <div class="form-group mb-12">
                                    <label for="">Hora Inicio</label>
                                    <div class='input-group date' id='horainiciopiker'>
                                        <input type='text' class="form-control" id="horaInicioHoyAgregar"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>
                                    <script type="text/javascript">
                                    $('#horaInicioHoyAgregar').datetimepicker({
                                        format: 'HH:mm'
                                    });
                                    </script>
                            </div>
                            <div class="form-group mb-12">
                                    <label for="">Hora Fin</label>
                                    <div class='input-group date' id='horafinpiker'>
                                        <input type='text' class="form-control" id="horaFinHoyAgregar"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>
                                    <script type="text/javascript">
                                    $('#horaFinHoyAgregar').datetimepicker({
                                        format: 'HH:mm'
                                    });
                                    </script>
                            </div>
                            <div class="form-group mb-12">
                                <br/>
                                <button type="button" class="m-15 btn btn-info" onclick="agregarAsuetoHoy()">Cargar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row container">
            <div id="acciones">

            </div>
            <table class="table table-responsive-xl" id="tabla">
                <thead>
                    <tr>
                        <th scope="col">fecha</th>
                        <th scope="col">hora inicio</th>
                        <th scope="col">hora fin</th>
                        <th scope="col">editar</th>
                        <th scope="col">eliminar</th>
                    </tr>
                </thead>
                <tbody id="respuesta">

                </tbody>
            </table>  
        </div>

        <!-- 
           modal se modificacion
        -->
        <div class="modal fade" id="asuetoEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div id="respuestaModificarAsueto">
                    </div>
                    <form action="">
                        <div class="form-group">
                            <!-- valores originales -->
                            <input class="form-control" type="hidden" id="idAuseto" name="idAuseto" />
                        </div>
                        <div class="form-group">
                            <label for="">Fecha</label>
                            <div class='input-group date' id='fechamodificarpiker'>
                                <input type='text' class="form-control" id="fechaModificar"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            <script >
                            $('#fechamodificarpiker').datetimepicker({
                                    format: 'YYYY-MM-DD'
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="">Hora Fin</label>
                            <div class='input-group date' id='horainiciopiker'>
                                <input type='text' class="form-control" id="horainicioModificar"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <script type="text/javascript">
                            $('#horainicioModificar').datetimepicker({
                                format: 'HH:mm'
                            });
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="">Hora Inicio</label>
                            <div class='input-group date' id='horainiciopiker'>
                                <input type='text' class="form-control" id="horafinModificar"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <script type="text/javascript">
                            $('#horafinModificar').datetimepicker({
                                format: 'HH:mm'
                            });
                            </script>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="modificarAsueto()">Guardar Cambios</button>
                </div>
                </div>
            </div>
        </div>
        <!--
            mostramos las correlativas de una materia con el correspondiente
        -->
    </div>
</body>
</html>