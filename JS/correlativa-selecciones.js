/**
 * seleccionAño , cuando se selecciona una carrera se cargan los años de esa
 */
function seleccionAño() {
    borrar('materia');
    var carrera = document.getElementById('carrera').value;
    if (carrera == 1) {
        cargaAños(añoProfesorado, 'año');
    } else if (carrera <= 3) {
        cargaAños(añoLicenciatura, 'año');
    } else if (carrera <= 5) {
        cargaAños(añoTecnicatura, 'año');
    } else {
        borrar('año');
        borrar('materia');
    }
    document.getElementById('AñoBloque').setAttribute('style', 'visibility: visible;');
}

function cargarAños() {
    var carrera = document.getElementById('carrera').value;
    if (carrera == 1) {
        cargaAños(añoProfesorado, 'año');
    } else if (carrera <= 3) {
        cargaAños(añoLicenciatura, 'año');
    } else if (carrera <= 5) {
        cargaAños(añoTecnicatura, 'año');
    } else {
        borrar('año');
    }
    document.getElementById('AñoBloque').setAttribute('style', 'visibility: visible;');
}

/**
 * seleccion de años segun carrera en la seccion de horarios
 */
function seleccionAño2() {
    borrar('materia2');
    var carrera = document.getElementById('carrera2').value;
    if (carrera == 1) {
        cargaAños(añoProfesorado, 'año2');
    } else if (carrera <= 3) {
        cargaAños(añoLicenciatura, 'año2');
    } else if (carrera <= 5) {
        cargaAños(añoTecnicatura, 'año2');
    } else {
        borrar('año2');
        borrar('materia2');
    }
    document.getElementById('AñoBloque2').setAttribute('style', 'visibility: visible;');
}

/**
 * seleccionmateria, se cargan las materias de la carrera seleccionada, dependiendo de un año seleccionado
 */
function seleccionmateria() {
    var años = document.getElementById('año').value;
    var carrera = document.getElementById('carrera').value;
    switch (carrera) {
        case '1':
            materiasProfesorado(años, 'materia');
            break;
        case '2':
            materiasLicenciaturaCiencias(años, 'materia');
            break;
        case '3':
            materiasLicenciaturaSistemas(años, 'materia')
            break;
        case '4':
            materiasTUDW(años, 'materia');
            break;
        case '5':
            materiasTUASySL(años, 'materia');
            break;
        default:
            borrar('materia');
            break;
    }
}

/**
 * seleccionamos materias de los años de la seccion de horarios
 */
function seleccionmateria2() {
    var años = document.getElementById('año2').value;
    var carrera = document.getElementById('carrera2').value;
    switch(carrera) {
        case '1':
            materiasProfesorado(años, 'materia2');
            break;
        case '2':
            materiasLicenciaturaCiencias(años, 'materia2');
            break;
        case '3':
            materiasLicenciaturaSistemas(años, 'materia2')
            break;
        case '4':
            materiasTUDW(años, 'materia2');
            break;
        case '5':
            materiasTUASySL(años, 'materia2');
            break;
        default:
            borrar('materia2');
            break;
    }
}

/**
 * mostrarEnviar, cuando se selecciona una materia se muestra el boton de envio
 */
function mostrarEnviar() {
    document.getElementById('send').setAttribute('style', 'visibility: visible;');
}

function mostrarEnviar2() {
    document.getElementById('send2').setAttribute('style', 'visibility: visible;');
}

function mostrarEnviarPdf() {
    document.getElementById('send3').setAttribute('style', 'visibility: visible;');
}

/**
 * cargaAños, cargamos las materias de una carrera en un año seleccionado
 * @param {el arreglo de los años} arreglo
 * @param {el lugar donde se van a cargar} input
 */
function cargaAños(arreglo, input) {
    var select = document.getElementById(input);
    borrar(input);
    // borrar('materia');
    for (var i = 0; i < arreglo.length; i++) {
        var opt = document.createElement('option');
        opt.value = arreglo[i];
        opt.innerHTML = arreglo[i];
        select.appendChild(opt);
    }
}
