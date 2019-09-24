function materiasTUDW(años, input) {
    switch (años) {
        case "1":
            cargarmaterias(materiasTUDW1, input);
        break;
        case "2":
            cargarmaterias(materiasTUDW2, input);
        break;
        case "3":
            cargarmaterias(materiasTUDW3, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}

function materiasLicenciaturaSistemas(años, input){
    switch (años) {
        case "1":
            cargarmaterias(materiasAnalista1,input);
        break;
        case "2":
            cargarmaterias(materiasAnalista2,input);
        break;
        case "3":
            cargarmaterias(materiasAnalista3,input);
        break;
        case "4":
            cargarmaterias(materiasLicSis4,input);
        break;
        case "5":
            cargarmaterias(materiasLicSis5, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}

function materiasLicenciaturaCiencias(años, input) {
    switch (años) {
        case "1":
            cargarmaterias(materiasAnalista1,input);
        break;
        case "2":
            cargarmaterias(materiasAnalista2,input);
        break;
        case "3":
            cargarmaterias(materiasAnalista3,input);
        break;
        case "4":
            cargarmaterias(materiasLicCien4,input);
        break;
        case "5":
            cargarmaterias(materiasLicCien5, input);
        break;
        default:
                borrar("$materia");
        break;
    }
}

function materiasProfesorado(años, input) {
    switch (años) {
        case "1":
            cargarMaterias(materiasProf1,input);
        break;
        case "2":
            cargarMaterias(materiasProf2,input);
        break;
        case "3":
            cargarMaterias(materiasProf3,input);
        break;
        case "4":
            cargarMaterias(materiasProf4,input);
        break;
        default:
                borrar("materia");
        break;
    }
}

function cargarmaterias(arreglo, input) {
    var select = document.getElementById(input);
    borrar(input);

    for (var i = 0; i < arreglo.length; i++){
        var opt = document.createElement('option');
        opt.value = arreglo[i][1];
        opt.innerHTML = arreglo[i][0];
        select.appendChild(opt);
    }
}

function borrar(id){
    document.getElementById(id).options.length = 0;
}