function cargarModal(idMateria, aula, dia, modulo, hora, cuatrimestre, estado){
    //valores originales
    $("#editarModificarOriginal").val(idMateria);
    $("#editarHoraOriginal").val(hora);
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
    $("#editarHora").val(hora);

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