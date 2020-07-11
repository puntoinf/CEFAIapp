function buscar() {
    var materia = $("#materia");
    if (materia.val() != "0") {
        var respuesta = $("#respuesta");
        var carrera = $("#carrera");
        respuesta.empty();
        var parametros = {
            "materia": materia.val(),
            "carrera": carrera.val()
        };
        $.ajax({
            // datos que se envian a traves de ajax
            data: parametros,
            // archivo que recibe la peticion
            url: "muestra.php",
            // método de envio
            type: "post",
            beforeSend: function () {
                respuesta.html("Procesando, espere por favor...");
            },
            // una vez que el archivo recibe el request lo procesa y lo devuelve
            success: function (response) {
                respuesta.html(response);
            }
        });
    }
};
