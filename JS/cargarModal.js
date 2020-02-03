function cargarModal(idMateria, aula, dia, modulo, horainicio, horafin, cuatrimestre, estado){
    //valores originales
    $("#editarModificarOriginal").val(idMateria);
    $("#editarHoraInicoOriginal").val(horainicio);
    $("#editarHoraFinOriginal").val(horafin);
    $("#editarDiaOriginal").val(dia);
    $("#editarCuatrimestreOriginal").val(cuatrimestre);
    $("#editarAulaOriginal").val(aula);
    $("#editarModuloOriginal").val(modulo);
    $("#editarEstadoOriginal").val(estado);


    //valores para modificar
    $("#editarModificar").val(idMateria);
    $("#editarAula").val(aula);
    $("#editarDia").val(dia);
    $("#editarModulo").val(modulo);
    $("#editarHoraInicio").val(horainicio);
    $("#editarHoraFin").val(horafin);

    switch(cuatrimestre){
        case "1":
            console.log("1");
            $("#editarCuatrimestre option:contains(1°)").attr('selected', true);
        break;
        case "2":
            console.log("2");
            $("#editarCuatrimestre option:contains(2°)").attr('selected', true);
        break;
    }

    switch(estado){
        case "normal":
            console.log("normal");
            $("#editarEstado option:contains(Normal)").attr('selected', true);
        break;
        case "cancelado":
            console.log("cancelado");
            $("#editarEstado option:contains(Candelado)").attr('selected', true);
        break;
        case "parcial":
            console.log("parcial");
            $("#editarEstado option:contains(Parcial)").attr('selected', true);
        break;
    }
}

function cargarModalEvento(nombre, dia, hora, aula, estado){
    //valores originales
    $("#editarEventoNombreOriginal").val(nombre);
    $("#editarEventoHoraOriginal").val(hora);
    $("#editarEventoDiaOriginal").val(dia);
    $("#editarEventoAulaOriginal").val(aula);
    $("#editarEventoEstadoOriginal").val(estado);


    //valores para modificar
    $("#editarEventoNombre").val(nombre);
    $("#editarEventoHora").val(hora);
    $("#editarEventoDia").val(dia);
    $("#editarEventoAula").val(aula);

    switch(estado){
        case "normal":
            console.log("normal");
            $("#editarEventoEstado option:contains(Normal)").attr('selected', true);
        break;
        case "cancelado":
            console.log("cancelado");
            $("#editarEventoEstado option:contains(Candelado)").attr('selected', true);
        break;
    }
}
