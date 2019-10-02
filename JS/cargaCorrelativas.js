/**
 * armado es la variable del SQL, que se va a descargar
 */
var armado = " ";
function seleccionAño(){
    var carrera = document.getElementById("carrera").value;
    switch (carrera) {
        //en caso de ser un profesorado
        case "1":
            cargaAños(añoProfesorado, 'año');
            cargaAños(añoProfesorado, 'año2');
        break;
        //en caso de ser lic. Cien
        case "2":
            cargaAños(añoLicenciatura, 'año');
            cargaAños(añoLicenciatura, 'año2');
        break;
        //en caso de ser Lic. Sis
        case "3":
            cargaAños(añoLicenciatura, 'año');
            cargaAños(añoLicenciatura, 'año2');
        break;
        //en caso de ser TUDW
        case "4":
            cargaAños(añoTecnicatura, 'año');
            cargaAños(añoTecnicatura, 'año2');
        break;
        //en caso de ser TUASySL
        case "5":
            cargaAños(añoTecnicatura, 'año');
            cargaAños(añoTecnicatura, 'año2');
        break;
        //en caso de ser cualquier otra cosa
        default:
            borrar("año");
            borrar("$materia");
    break;
    }
}
//esta funcion nos muestra las materias de cada carrera
function seleccion$materia(){
    var años = document.getElementById("año").value;
    var carrera = document.getElementById("carrera").value;
    //
    switch(carrera){
        case "1":
            materiasProfesorado(años, "materia");
        break;
        case "2":
            materiasLicenciaturaCiencias(años,"$materia");
        break;
        case "3":
            materiasLicenciaturaSistemas(años, "$materia")
        break;
        case "4":
            materiasTUDW(años, "$materia");
        break;
        case "5":
            materiasTUASySL(años, "$materia");
        break;
        default:
            borrar("$materia");
        break;
    }
}

function seleccionmateria2(){
    var años = document.getElementById("año").value;
    var carrera = document.getElementById("carrera").value;
    //
    switch(carrera){
        case "2":
            materiasLicenciaturaCiencias(años,"$materia2");
        break;
        case "3":
            materiasLicenciaturaSistemas(años, "$materia2")
        break;
        case "4":
            materiasTUDW(años, "$materia2");
        break;
        case "5":
            materiasTUASySL(años, "$materia2");
        break;
        default:
            borrar("$materia2");
        break;
    }
}

function mostrarEnviar(){
    document.getElementById("send").setAttribute("style","visibility: visible;");
}

function armar() {
    var $materia1 = document.getElementById("$materia").value;
    var $materia2 = document.getElementById("$materia2").value;
    var correlativa = "('"+$materia1+"','"+$materia2+"'),";
    armado += correlativa; 
    document.getElementById("correlativaMuestra").innerHTML = armado;
}

function materiasTUASySL(años, input){
    switch (años) {
        case "1":
            cargarmaterias(materiasTUASySL1,input);
        break;
        case "2":
            cargarmaterias(materiasTUASySL2,input);
        break;
        case "3":
            cargarmaterias(materiasTUASySL3,input);
        break;
        default:
            borrar(input);
        break;
    }
}

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

function cargaAños(arreglo, input){
    var select = document.getElementById(input);

    borrar(input);
    borrar("materia");
    borrar("materia2");

    for (var i = 0; i < arreglo.length; i++){
        var opt = document.createElement('option');
        opt.value = arreglo[i];
        opt.innerHTML = arreglo[i];
        select.appendChild(opt);
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