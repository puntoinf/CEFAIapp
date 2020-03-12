// funciones de horarios

function buscarHorariosEvento(){
        if ($( "#dia" ).val() == 0) {
        
        }else{
            var parametros = {
                    "dia" : $( "#dia" ).val(),
                    "cuatrimestre" : $(" #cuatrimestre").val()
            };
            buscarHorario(parametros);
            buscarEvento(parametros);
        }
}

function buscarHorario(parametros) {
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

function agregarHorario() {
        console.log("hola mundo");
        if ($( "#materia2" ).val() == 0) {
            
        }else{
            $("#respuesta").empty();
            var parametros = {
                "carrera" : $( "#carrera2").val(),
                "materia" : $( "#materia2" ).val(),
                "aula" : $("#aula").val(),
                "dia" : $("#diahorario").val(),
                "modulo" : $("#modulo").val(),
                "horainicio" : $("#horainicio").val(),
                "horafin" : $("#horafin").val(),
                "cuatrimestre": $("#cuatrimestre").val(),
                "estado" : "normal"
            };
            console.log(parametros);
            $.ajax({
                    data:  parametros, //datos que se envian a traves de ajax
                    url:   'addHorario.php', //archivo que recibe la peticion
                    type:  'post', //método de envio
                    beforeSend: function () {
                            $("#respuestaHorario").html("Procesando, espere por favor...");
                    },
                    success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                            $("#respuestaHorario").html(response);
                            buscarHorariosEvento();
                    }
            });
        }
}

function editarHorario() {
        var parametros = {
            "materiaOriginal" : $("#editarModificarOriginal").val(),
            "aulaOriginal" :  $("#editarAulaOriginal").val(),
            "diaOriginal" :  $("#editarDiaOriginal").val(),
            "moduloOriginal" :  $("#editarModuloOriginal").val(),
            "horaInicioOriginal" : $("#editarHoraInicoOriginal").val(),
            "horaFinOriginal" : $("#editarHoraFinOriginal").val(),
            "cuatrimestreOriginal": $("#editarCuatrimestreOriginal").val(),
            "estadoOriginal" : $("#editarEstadoOriginal").val(),
            "materia" : $("#editarModificar").val(),
            "aula" :  $("#editarAula").val(),
            "dia" :  $("#editarDia").val(),
            "modulo" :  $("#editarModulo").val(),
            "horaInicio" : $("#editarHoraInicio").val(),
            "horaFin" : $("#editarHoraFin").val(),
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
                    buscarHorariosEvento();
                }
        });
}

function confirmarEliminacionHorario(materia, aula, dia, modulo, horainicio, horafin, cuatrimestre){
        var confirmacion = confirm("Desea eliminar este horario!!");
        if(confirmacion){
                eliminarHorario(materia, aula, dia, modulo, horainicio, horafin, cuatrimestre);
        }
}

function eliminarHorario(materia, aula, dia, modulo, horainicio, horafin, cuatrimestre) {
        var parametros = {
                "materia" : materia,
                "aula" : aula,
                "dia": dia,
                "horainicio" : horainicio,
                "horafin": horafin,
                "modulo" : modulo,
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
                    buscarHorariosEvento();
                }
        });
}

function buscarHorarioAño(){
        var parametros = {
                'carrera': $("#carrera").val(),
                'año': $("#año").val()
        }
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'mostrarHorariosCarrera.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuesta").html(response);
                }
        });
}

//funciones de eventos

function buscarEvento(parametros){
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'mostrarEvento.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuestaEventoTabla").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuestaEventoTabla").html(response);
                }
        });
}

function agregarEvento() {
        var parametros = {
            "nombre" : $( "#nombreEvento").val(),
            "aula" : $( "#aulaEvento" ).val(),
            "dia" : $("#diaEvento").val(),
            "hora" : $("#horaEvento").val(),
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'addevento.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuestaEvento").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuestaEvento").html(response);
                        buscar();
                }
        });
}

function editarEvento(){
    var parametros = {
        "nombreOriginal" : $("#editarEventoNombreOriginal").val(),
        "aulaOriginal" :  $("#editarEventoAulaOriginal").val(),
        "diaOriginal" :  $("#editarEventoDiaOriginal").val(),
        "horaOriginal" : $("#editarEventoHoraOriginal").val(),
        "estadoOriginal" : $("#editarEventoEstadoOriginal").val(),
        "nombre" : $("#editarEventoNombre").val(),
        "aula" :  $("#editarEventoAula").val(),
        "dia" :  $("#editarEventoDia").val(),
        "hora" : $("#editarEventoHora").val(),
        "estado" : $("#editarEventoEstado").val()
    };
    console.log(parametros);
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'editEvento.php', //archivo que recibe la peticion
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

function confirmarEliminacionEvento(nombre, dia, hora, aula, estado){
        var confirmacion = confirm("Desea eliminar este evento!!");
        if(confirmacion){
                eliminarEvento(nombre, dia, hora, aula, estado);
        }
}

function eliminarEvento(nombre, dia, hora, aula, estado) {
    var parametros = {
            "nombre" : nombre,
            "dia" : dia,
            "hora" : hora,
            "aula" : aula,
            "estado" : estado,
    };
    console.log(parametros);
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'removeEvento.php', //archivo que recibe la peticion
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

//funciones de correlativas

function buscarCorrelativas() {
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
                url:   'nuestraCorrelativas.php', //archivo que recibe la peticion
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

function eliminarCorrelativaConfirmacion(necesaria, disponible){
        var confirmacion = confirm("Desea eliminar esta correlativa!!");
        if(confirmacion){
                eliminarCorrelativa(necesaria, disponible);
        }
}

function eliminarCorrelativa(necesaria, disponible){
    console.log(necesaria+" "+disponible);
    var parametros = {
            "necesaria" : necesaria,
            "disponible" : disponible
    };
    console.log(parametros);
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'removeCorrelativa.php', //archivo que recibe la peticion
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

function buscarFinales(){
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
                url:   'muestraFinal.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuesta").html(response);
                }
        });
    }
}

function cargarAsuetos(){
        $.ajax({
                url:   'mostrarAsueto.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuesta").html(response);
                }
        });
}

function cargarModalAsueto(idAuseto, fecha, horainicio, horafin){
        $("#respuestaModificarAsueto").empty();
        //valores originales
        $("#idAuseto").val(idAuseto);


        //valores para modificar
        $("#fechaModificar").val(fecha);
        $("#horainicioModificar").val(horainicio);
        $("#horafinModificar").val(horafin);
}

function modificarAsueto(){
        //parametros de la modificacio
        var parametros = {
                "idAuseto" : $("#idAuseto").val(),
                "fechaModificar": $("#fechaModificar").val(),
                "horainicioModificar": $("#horainicioModificar").val(),
                "horafinModificar": $("#horafinModificar").val()

        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'editAsueto.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuestaModificarAsueto").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuestaModificarAsueto").html(response);
                        cargarAsuetos();
                }
        });
}

function agregarAsueto(){
        //parametros de la modificacio
        var parametros = {
                "fecha": $("#fechaAgregar").val(),
                "horainicio": $("#horaInicioAgregar").val()+":00",
                "horafin": $("#horaFinAgregar").val()+":00"

        };

        console.log(parametros);

        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'addAsueto.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuestaAgregarAsueto").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuestaAgregarAsueto").html(response);
                        cargarAsuetos();
                }
        });
}

function agregarAsuetoHoy(){
        var hoy = new Date();
        var dd = hoy.getDate();
        var mm = hoy.getMonth()+1;
        var yyyy = hoy.getFullYear();

        var fecha = yyyy+"-"+mm+"-"+dd;

        console.log(fecha);

        //parametros de la modificacio
        var parametros = {
                "fecha": fecha,
                "horainicio": $("#horaInicioHoyAgregar").val()+":00",
                "horafin": $("#horaFinHoyAgregar").val()+":00"

        };

        console.log(parametros);

        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'addAsueto.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#respuestaAgregarAsueto").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuestaAgregarAsueto").html(response);
                        cargarAsuetos();
                }
        });
}

function confirmarEliminacion(idAuseto) {
        var confirmacion = confirm("desea eliminar este asueto?");
        if(confirmacion){
                eliminarAsueto(idAuseto);  
        }
}

function eliminarAsueto(idAuseto){
        //parametros de la modificacion
        var parametros = {
                "idAsueto" : idAuseto
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'removeAsueto.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#acciones").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#acciones").html(response);
                        cargarAsuetos();
                }
        });
}