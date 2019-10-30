/**
 * materiasTUDW, carga las materias dependiendo del año de la TUDW
 * @param {el año que se esta cursando} años 
 * @param {el input donde se va a insertar el valor} input 
 */
function materiasTUDW(años, input) {
    switch (años) {
        case "1":
            cargarMaterias(materiasTUDW1, input);
        break;
        case "2":
            cargarMaterias(materiasTUDW2, input);
        break;
        case "3":
            cargarMaterias(materiasTUDW3, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}

function materiasTUASySL(años, input) {
    switch (años) {
        case "1":
            cargarMaterias(materiasTUASySL1, input);
        break;
        case "2":
            cargarMaterias(materiasTUASySL2, input);
        break;
        case "3":
            cargarMaterias(materiasTUASySL3, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}

/**
 * materiasLicenciaturaSistemas
 * @param {el año que se esta cursando} años 
 * @param {el input donde se va a insertar el valor} input 
 */
function materiasLicenciaturaSistemas(años, input){
    switch (años) {
        case "1":
            cargarMaterias(materiasAnalista1,input);
        break;
        case "2":
            cargarMaterias(materiasAnalista2,input);
        break;
        case "3":
            cargarMaterias(materiasAnalista3,input);
        break;
        case "4":
            cargarMaterias(materiasLicSis4,input);
        break;
        case "5":
            cargarMaterias(materiasLicSis5, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}
/**
 * materiasLicenciaturaCiencias
 * @param {el año que se esta cursando} años 
 * @param {el input donde se va a insertar el valor} input 
 */
function materiasLicenciaturaCiencias(años, input) {
    switch (años) {
        case "1":
            cargarMaterias(materiasAnalista1,input);
        break;
        case "2":
            cargarMaterias(materiasAnalista2,input);
        break;
        case "3":
            cargarMaterias(materiasAnalista3,input);
        break;
        case "4":
            cargarMaterias(materiasLicCien4,input);
        break;
        case "5":
            cargarMaterias(materiasLicCien5, input);
        break;
        default:
            borrar("$materia");
        break;
    }
}
/**
 * materiasProfesorado
 * @param {el año que se esta cursando} años 
 * @param {el input donde se va a insertar el valor} input 
 */
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
/**
 * cargarMaterias
 * @param {el año que se esta cursando} años 
 * @param {el input donde se va a insertar el valor} input 
 */
function cargarMaterias(arreglo, input) {
    var select = document.getElementById(input);
    borrar(input);

    for (var i = 0; i < arreglo.length; i++){
        var opt = document.createElement('option');
        opt.value = arreglo[i][1];
        opt.innerHTML = arreglo[i][0];
        select.appendChild(opt);
    }
}
/**
 * borrar
 * @param {el id del elemento a vaciar} id 
 */
function borrar(id){
    document.getElementById(id).options.length = 0;
}