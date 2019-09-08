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
            borrar("materia");
    break;
    }
}
//esta funcion nos muestra las materias de cada carrera
function seleccionMateria(){
    var años = document.getElementById("año").value;
    var carrera = document.getElementById("carrera").value;
    //
    switch(carrera){
        case "2":
            materiasLicenciaturaCiencias(años);
        break;
        case "5":
            materiasTUASySL(años);
        break;
        default:
            borrar("materia");
        break;
    }
}

function mostrarEnviar(){
    document.getElementById("send").setAttribute("style","visibility: visible;");
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

function cargarMaterias(arreglo, input) {
    var select = document.getElementById(input);
    borrar("materia");

    for (var i = 0; i < arreglo.length; i++){
        var opt = document.createElement('option');
        opt.value = arreglo[i];
        opt.innerHTML = arreglo[i];
        select.appendChild(opt);
    }
}

function borrar(id){
    document.getElementById(id).options.length = 0;
}

function materiasTUASySL(años){
    switch (años) {
        case "1":
            borrar("materia");
            cargarMaterias();
            var select = document.getElementById('materia');
            for (var i = 0; i < materiasTUASySL1.length; i++){
                var opt = document.createElement('option');
                opt.value = materiasTUASySL1[i][1];
                opt.innerHTML = materiasTUASySL1[i][0];
                select.appendChild(opt);
            }
        break;
        case "2":
            borrar("materia");
            var select = document.getElementById('materia');
                for (var i = 0; i < materiasTUASySL2.length; i++){
                    var opt = document.createElement('option');
                    opt.value = materiasTUASySL2[i][1];
                    opt.innerHTML = materiasTUASySL2[i][0];
                    select.appendChild(opt);
                }
        break;
        case "3":
            borrar("materia");
            var select = document.getElementById('materia');
                for (var i = 0; i < materiasTUASySL3.length; i++){
                    var opt = document.createElement('option');
                    opt.value = materiasTUASySL3[i][1];
                    opt.innerHTML = materiasTUASySL3[i][0];
                    select.appendChild(opt);
                }
        break;
        default:
                borrar("materia");
        break;
    }
}

function materiasLicenciaturaCiencias(años){
    switch (años) {
        case "1":
            borrar("materia");
            var select = document.getElementById('materia');
            for (var i = 0; i < materiasAnalista1.length; i++){
                var opt = document.createElement('option');
                opt.value = materiasAnalista1[i][1];
                opt.innerHTML = materiasAnalista1[i][0];
                select.appendChild(opt);
            }
        break;
        case "2":
            borrar("materia");
            var select = document.getElementById('materia');
                for (var i = 0; i < materiasAnalista2.length; i++){
                    var opt = document.createElement('option');
                    opt.value = materiasAnalista2[i][1];
                    opt.innerHTML = materiasAnalista2[i][0];
                    select.appendChild(opt);
                }
        break;
        case "3":
            borrar("materia");
            var select = document.getElementById('materia');
                for (var i = 0; i < materiasAnalista3.length; i++){
                    var opt = document.createElement('option');
                    opt.value = materiasAnalista3[i][1];
                    opt.innerHTML = materiasAnalista3[i][0];
                    select.appendChild(opt);
                }
        break;
        default:
                borrar("materia");
        break;
    }
}