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
};

function hola(){
    console.log($('#editarModificarOriginal').val());
}

function editar() {
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

function eliminar(materia, aula, dia, modulo, horainicio, horafin, cuatrimestre) {
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
                buscar();
            }
    });
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

function cargar() {
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
                        $("#respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#respuesta").html(response);
                        buscar();
                }
        });
    }
};

function cargarEvento() {
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
};

$('.timepicker').timepicker({ 'timeFormat': 'H:i:s' });