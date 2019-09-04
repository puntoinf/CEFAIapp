<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correlatividades</title>
    <link rel="shortcut icon" href="Frame.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link href="main.css" rel="stylesheet" type="text/css">
    <script src="selecciones.js"></script>
    <script src="bd.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container" >
        <h3>Correlativas</h3>
        <!--modal de la ayuda-->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            <img src="twotone_help_outline_white_48dp.png" alt="" style="width: 20px;">
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header" style="align-content: center;">
                    <h5 class="modal-title" id="exampleModalLabel">Ayuda Correlativas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="imagenCorrelativas3.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">correlatividades: materias disponibles</h5>
                                        <p class="card-text">
                                        dos materias son correlativas si para poder cursar una materia <strong>b</strong> se necesita aprobar una materia <strong>a</strong> ej;</p>
                                        <p>
                                        materia 2 y materia 3 son correlativas con materia 1
                                        una o más materias pueden ser correlativas de una o más materias
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="align-content: center;">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="imagenCorrelativas2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">correlatividades: materias necesarias</h5>
                                        <p class="card-text">
                                        se pueden necesitar más de una materia para poder hacer una, ojo esto puede entorpecer más de un cursado ej:</p>
                                        <p>
                                        materia 2 necesita de matera 1, y materia 4
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="align-content: center;">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="imagenCorrelativas1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">correlatividades: finales</h5>
                                        <p class="card-text">
                                        para poder rendir los finales de las materias, se necesitan aprobar los finales de las anteriores, ej:</p>
                                        <p>
                                        para rendir el final de la materia 2, se necesitan los finales de las materias 1 y 4, y asi. si queremos rendir el final de la materia 6, necesitamos el final de la materia 2, y para la 2 primero el final de la 1, y 4.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <form action="">
            <div class="form-group">
                <label for="carrera">Carrera</label>
                <select id="carrera" onchange="seleccion1();" class="form-control">
                    <option value="">-</option>
                    <!--<option value="1">Profesorado de Informatica</option>
                    <option value="2">Licenciatura en Ciencias de la Computación</option>
                    <option value="3">Licenciatura en Sistemas de Información</option>
                    <option value="4">Tecnicatura Universitaria en Desarrollo Web</option>-->
                    <option value="5">Tecnicatura Universitaria en Administración de Sistemas y Software Libre</option>
                </select>
            </div>
            <div class="form-group" id="AñoBloque">
                <label for="carrera">Año</label>
                <select id="año"  onchange="seleccion2();" class="form-control">
                    <option value="">-</option>
                </select>
            </div>
            <div class="form-group">
                <label for="carrera">Materia</label>
                <select id="materia" class="form-control" onchange="seleccion3()">
                    <option value="">-</option>
                </select>
            </div>
            <div class="form-group" id="send">
                <button type="button" class="btn btn-light border" onclick="buscar()">consultar</button>
            </div>
            <div id="respuesta">

            </div>
            <script>
            function buscar() {
                if ($( "#materia" ).val() == "-") {
                    
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
</body>
</html>
