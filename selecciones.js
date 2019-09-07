//funcion que nos da los años de cada carrera
function seleccionAño(){
    var carrera = document.getElementById("carrera").value;

    //si son tecnicaturas carga 3 años a el select de años
    if(carrera <= 5 && carrera >= 4){
        var select = document.getElementById('año');
        borrar("año");
        borrar("materia");
        for (var i = 0; i < añoTecnicatura1.length; i++){
            var opt = document.createElement('option');
            opt.value = añoTecnicatura1[i];
            opt.innerHTML = añoTecnicatura1[i];
            select.appendChild(opt);
        }
    }else{
        switch (carrera) {
            //en caso de ser un profesorado
            case "1":
                var select = document.getElementById('año');
                borrar("año");
                borrar("materia");
                for (var i = 0; i < añoProfesorado.length; i++){
                    var opt = document.createElement('option');
                    opt.value = añoProfesorado[i];
                    opt.innerHTML = añoProfesorado[i];
                    select.appendChild(opt);
                }
            break;
            //en caso de ser lic. Cien
            case "2":
                var select = document.getElementById('año');
                borrar("año");
                borrar("materia");
                for (var i = 0; i < añoLicenciatura.length; i++){
                    var opt = document.createElement('option');
                    opt.value = añoLicenciatura[i];
                    opt.innerHTML = añoLicenciatura[i];
                    select.appendChild(opt);
                }
            break;
            //en caso de ser Lic. Sis
            case "3":
                var select = document.getElementById('año');
                borrar("año");
                borrar("materia");
                for (var i = 0; i < añoLicenciatura.length; i++){
                    var opt = document.createElement('option');
                    opt.value = añoLicenciatura[i];
                    opt.innerHTML = añoLicenciatura[i];
                    select.appendChild(opt);
                }
            break;
            //en caso de ser TUDW
            case "4":
                var select = document.getElementById('año');
                borrar("año");
                borrar("materia");
                for (var i = 0; i < añoTecnicatura.length; i++){
                    var opt = document.createElement('option');
                    opt.value = añoTecnicatura[i];
                    opt.innerHTML = añoTecnicatura[i];
                    select.appendChild(opt);
                }
            break;
            //en caso de ser TUASySL
            case "5":
                var select = document.getElementById('año');
                borrar("año");
                borrar("materia");
                for (var i = 0; i < añoTecnicatura.length; i++){
                    var opt = document.createElement('option');
                    opt.value = añoTecnicatura[i];
                    opt.innerHTML = añoTecnicatura[i];
                    select.appendChild(opt);
                }
            break;
            //en caso de ser cualquier otra cosa
            default:
                borrar("año");
                borrar("materia");
            break;
        }
    }
    //hacemos el bloque de los años visible
    document.getElementById("AñoBloque").setAttribute("style","visibility: visible;");
}

function seleccionMateria(){
    var años = document.getElementById("año").value;
    var carrera = document.getElementById("carrera").value;
    console.log(años);

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

function borrar(id){
    document.getElementById(id).options.length = 0;
}

function materiasTUASySL(años){
    switch (años) {
        case "1":
            borrar("materia");
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