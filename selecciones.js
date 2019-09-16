//funcion que nos da los años de cada carrera
function seleccionAño(){
    var carrera = document.getElementById("carrera").value;
    switch (carrera) {
        //en caso de ser un profesorado
        case "1":
            cargaAños(añoProfesorado, 'año');
        break;
        //en caso de ser lic. Cien
        case "2":
            cargaAños(añoLicenciatura, 'año');
        break;
        //en caso de ser Lic. Sis
        case "3":
            cargaAños(añoLicenciatura, 'año');
        break;
        //en caso de ser TUDW
        case "4":
            cargaAños(añoTecnicatura, 'año');
        break;
        //en caso de ser TUASySL
        case "5":
            cargaAños(añoTecnicatura, 'año');
        break;
        //en caso de ser cualquier otra cosa
        default:
            borrar("año");
            borrar("$materia");
    break;
    }
}
//esta funcion nos muestra las $materias de cada carrera
function seleccion$materia(){
    var años = document.getElementById("año").value;
    var carrera = document.getElementById("carrera").value;
    //
    switch(carrera){
        
        case "2":
            $materiasLicenciaturaCiencias(años,"$materia");
        break;
        case "3":
            $materiasLicenciaturaSistemas(años, "$materia")
        break;
        case "4":
            $materiasTUDW(años, "$materia");
        break;
        case "5":
            $materiasTUASySL(años, "$materia");
        break;
        default:
            borrar("$materia");
        break;
    }
}

function mostrarEnviar(){
    document.getElementById("send").setAttribute("style","visibility: visible;");
}

function cargaAños(arreglo, input){
    var select = document.getElementById(input);

    borrar(input);
    borrar("$materia");

    for (var i = 0; i < arreglo.length; i++){
        var opt = document.createElement('option');
        opt.value = arreglo[i];
        opt.innerHTML = arreglo[i];
        select.appendChild(opt);
    }
    document.getElementById(input).setAttribute("style","visibility: visible;");
}

function $materiasTUDW(años, input) {
    switch (años) {
        case "1":
            cargar$materias($materiasTUDW1, input);
        break;
        case "2":
            cargar$materias($materiasTUDW2, input);
        break;
        case "3":
            cargar$materias($materiasTUDW3, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}

function $materiasLicenciaturaSistemas(años, input){
    switch (años) {
        case "1":
            cargar$materias($materiasAnalista1,input);
        break;
        case "2":
            cargar$materias($materiasAnalista2,input);
        break;
        case "3":
            cargar$materias($materiasAnalista3,input);
        break;
        case "4":
            cargar$materias($materiasLicSis4,input);
        break;
        case "5":
            cargar$materias($materiasLicSis5, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}

function $materiasLicenciaturaCiencias(años, input) {
    switch (años) {
        case "1":
            cargar$materias($materiasAnalista1,input);
        break;
        case "2":
            cargar$materias($materiasAnalista2,input);
        break;
        case "3":
            cargar$materias($materiasAnalista3,input);
        break;
        case "4":
            cargar$materias($materiasLicCien4,input);
        break;
        case "5":
            cargar$materias($materiasLicCien5, input);
        break;
        default:
                borrar("$materia");
        break;
    }
}

function cargar$materias(arreglo, input) {
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