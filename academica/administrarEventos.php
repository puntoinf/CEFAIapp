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

    <script src="https://cdn.jsdelivr.net/npm/timepicker@1.13.0/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/timepicker@1.13.0/jquery.timepicker.css">
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
                    <a class="nav-link" href="administrarEventos.php">Eventos</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <button class="btn" onclick="darckOn()" id="darck">
                    <i class="material-icons">
                        brightness_medium
                    </i>
                </button>
                <a class="btn" href="salir.php">salir</a>
            </ul>
        </div>
    </nav>
    <div class="container" id="contenedor">
        <h3>Eventos</h3>
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

            </div>
            <div class="col-sm">
            <!--
                opciones de las correlativas como la generacion de un pdf o agregar una correlativa
            -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="btn" data-toggle="collapse" href="#addHorarioEventoColapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" title="Agregar el Horario de una Materia">
                                <i class="material-icons" id="iconAdd">
                                add
                                </i>
                            </a>
                        </li>
                    </ol>
                </nav>

                <div class="collapse multi-collapse" id="addHorarioEventoColapse">
                    <div class="card card-body">
                        <h6>Agregar Horario de Evento</h6>
                        <div id="respuestaEvento">
                        
                        </div>
                        <form action="" class="form">
                            <div class="form-group">
                                <label for="nombreEvento">Nombre</label>
                                <input type="text" name="nombreEvento" id="nombreEvento" class="form-control" placeholder="Nombre">
                                <label for="diaEvento">Día</label>
                                <select id="diaEvento" class="form-control" onchange="" required>
                                    <option value="">-</option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miercoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sabado">Sabado</option>
                                </select>
                                </br>
                                <label for="aulaEvento">Aula</label>
                                <input type="text" class="form-control" id="aulaEvento" placeholder="Aula">
                                <label for="horaEvento">Hora</label>
                                <div class="md-form">
                                    <input placeholder="Selected time" type="text" id="horaEvento" class="form-control timepicker">
                                    <label for="horaEvento">Twelve hour clock</label>
                                </div>
                                <br>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-light border" onclick="cargarEvento();">Cargar</button>
                            </div>
                        </form>    
                    </div>
                </div>

            </div>
        </div>
        <script src="../JS/cargarModal.js"></script>
        <div class="row">
            <div class="col-sm" style="overflow: hidden;">
            <h3>Eventos</h3>      
                <table class="table table-responsive-xl" id="tabla">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Aula</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="respuestaEventoTabla">

                    </tbody>
                </table>
            </div>
        </div>
    </div>  

    <div class="modal fade" id="exampleModalEvento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input class="form-control" type="hidden" id="editarEventoNombreOriginal" name="editarEventoNombreOriginal" />
                        <input class="form-control" type="hidden" id="editarEventoHoraOriginal" name="editarHoraOriginal" />
                        <input class="form-control" type="hidden" id="editarEventoDiaOriginal" name="editarDiaOriginal" />
                        <input class="form-control" type="hidden" id="editarEventoAulaOriginal" name="editarAulaOriginal" />
                        <input class="form-control" type="hidden" id="editarEventoEstadoOriginal" name="editarEstadoOriginal" />
                        <!-- valores a modificar -->
                        <input class="form-control" type="text" placeholder="" id="editarEventoNombre" disebled>
                        <label for="">hora</label>
                        <input class="form-control" type="text" placeholder="" id="editarEventoHora">  
                        <label for="">dia</label>
                        <input class="form-control" type="text" placeholder="" id="editarEventoDia">
                        <label for="">aula</label>
                        <input class="form-control" type="text" placeholder="" id="editarEventoAula">           
                        <label for="">estado</label>
                        <select class="form-control" id="editarEventoEstado">
                            <option value="cancelado">Cancelado</option>
                            <option value="normal">Normal</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="editarEvento()">Guardar Cambios</button>
            </div>
            </div>
        </div>
    </div>

    <script src="../JS/administracion.js"></script>
    <script type="text/javascript">
    $('.timepicker').timepicker({ 'timeFormat': 'H:i:s' });
    // Time Picker Initialization
    </script>
</body>
</html>