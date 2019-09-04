
function seleccion1(){
    var carrera = document.getElementById("carrera").value;
    console.log(carrera);

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
            case "-":
                borrar("año");
                borrar("materia");
            break;
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
            default:
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
        }
    }
    document.getElementById("AñoBloque").setAttribute("style","visibility: visible;");
}

function seleccion2(){
    var años = document.getElementById("año").value;
    var carrera = document.getElementById("carrera").value;
    console.log(años);

    if(carrera == 5){
        materiasTUASySL();
    }

}

function seleccion3(){
    document.getElementById("send").setAttribute("style","visibility: visible;");
}

function borrar(id){
    document.getElementById(id).options.length = 0;
}

function materiasTUASySL(){
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