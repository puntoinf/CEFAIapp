var años = 0;
function seleccion1(){
    var carrera = document.getElementById("carrera").value;
    
    if(años > 0){
        borrar("año");
    }

    var select = document.getElementById('año');
    for (var i = 0; i < año.length; i++){
        var opt = document.createElement('option');
        opt.value = año[i];
        opt.innerHTML = año[i];
        select.appendChild(opt);
    }
    document.getElementById("AñoBloque").setAttribute("style","visibility: visible;");
}

function seleccion2(){
    var años = document.getElementById("año").value;
    console.log(años);
    
    switch (años) {
        case "1":
            borrar("materia");
            var select = document.getElementById('materia');
            for (var i = 0; i < materias1.length; i++){
                var opt = document.createElement('option');
                opt.value = materias1[i][1];
                opt.innerHTML = materias1[i][0];
                select.appendChild(opt);
            }
        break;
        case "2":
            borrar("materia");
            var select = document.getElementById('materia');
                for (var i = 0; i < materias2.length; i++){
                    var opt = document.createElement('option');
                    opt.value = materias2[i][1];
                    opt.innerHTML = materias2[i][0];
                    select.appendChild(opt);
                }
        break;
        case "3":
            borrar("materia");
            var select = document.getElementById('materia');
                for (var i = 0; i < materias3.length; i++){
                    var opt = document.createElement('option');
                    opt.value = materias3[i][1];
                    opt.innerHTML = materias3[i][0];
                    select.appendChild(opt);
                }
        break;
        default:
        break;
    }
}

function seleccion3(){
    document.getElementById("send").setAttribute("style","visibility: visible;");
}

function borrar(id){
    document.getElementById(id).options.length = 0;
}