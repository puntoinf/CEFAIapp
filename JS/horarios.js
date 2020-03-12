var arreglo = [{"motivo":"Año Nuevo","tipo":"inamovible","dia":1,"mes":1,"id":"año-nuevo"},{"motivo":"Carnaval","tipo":"inamovible","dia":24,"mes":2,"id":"carnaval"},{"motivo":"Carnaval","tipo":"inamovible","dia":25,"mes":2,"id":"carnaval"},{"motivo":"Feriado Puente Turístico","tipo":"puente","dia":23,"mes":3,"id":"puente-turistico"},{"motivo":"Día Nacional de la Memoria por la Verdad y la Justicia","tipo":"inamovible","dia":24,"mes":3,"id":"memoria-verdad-justicia"},{"motivo":"Día del Veterano y de los Caídos en la Guerra de Malvinas","tipo":"inamovible","dia":2,"mes":4,"id":"veteranos-malvinas"},{"motivo":"Viernes Santo Festividad Cristiana","tipo":"inamovible","dia":10,"mes":4,"id":"viernes-santo"},{"motivo":"Día del Trabajador","tipo":"inamovible","dia":1,"mes":5,"id":"trabajador"},{"motivo":"Día de la Revolución de Mayo","tipo":"inamovible","dia":25,"mes":5,"id":"revolucion-mayo"},{"motivo":"Paso a la Inmortalidad del Gral. Don Martín Güemes","tipo":"trasladable","original":"17-06","dia":15,"mes":6,"id":"martin-guemes"},{"motivo":"Paso a la Inmortalidad del General Manuel Belgrano","tipo":"inamovible","dia":20,"mes":6,"id":"belgrano"},{"motivo":"Día de la Independencia","tipo":"inamovible","dia":9,"mes":7,"id":"independencia"},{"motivo":"Feriado Puente Turístico","tipo":"puente","dia":10,"mes":7,"id":"puente-turistico"},{"motivo":"Paso a la Inmortalidad del General José de San Martín","tipo":"trasladable","original":"17-08","dia":17,"mes":8,"id":"san-martin"},{"motivo":"Día del Respeto a la Diversidad Cultural","tipo":"trasladable","original":"12-10","dia":12,"mes":10,"id":"diversidad"},{"motivo":"Día de la Soberanía Nacional","tipo":"trasladable","original":"20-11","dia":23,"mes":11,"id":"soberania-nacional"},{"motivo":"Feriado Puente Turístico","tipo":"puente","dia":7,"mes":12,"id":"puente-turistico"},{"motivo":"Inmaculada Concepción de María","tipo":"inamovible","dia":8,"mes":12,"id":"inmaculada-maria"},{"motivo":"Navidad","tipo":"inamovible","dia":25,"mes":12,"id":"navidad"}];

// funciones para obtener los datos cada 15' y para evaluar si es feriado
function esFeriado(){
    var i = 0;
    //datos para las fechas
    var hoy = new Date();
    var dd = parseInt(hoy.getDate(), 10);
    var mm = parseInt(hoy.getMonth()+1, 10);

    console.log(dd+" "+mm);

    var retorno = false;
    while(i < arreglo.length && !retorno) {
        console.log(arreglo[i]['dia']+" "+arreglo[i]['mes']);
        if(arreglo[i]['mes'] == mm && arreglo[i]['dia'] == dd){
            console.log("encontrado");
            retorno = true;
        }
        i++;
    }
    console.log(arreglo);
    return retorno;

}

function mostrarDatosFeriado(){
    var i = 0;
    //datos para las fechas
    var hoy = new Date();
    var dd = parseInt(hoy.getDate(), 10);
    var mm = parseInt(hoy.getMonth()+1, 10);

    var retorno = false;
    while(i < arreglo.length && !retorno) {
        console.log(arreglo[i]['mes']+" "+arreglo[i]['dia']);
        if(arreglo[i]['mes'] == mm && arreglo[i]['dia'] == dd){
            retorno = true;
            $("#asueto").html("<div class=\"alert alert-danger\" role=\"alert\">Hoy es Feriado!! por "+arreglo[i]['motivo']+"</div>");
        }
        i++;
    }
}

function dia() {
    var feriado = esFeriado();
    console.log(esFeriado());
    if(!feriado){
        var dias = new  Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        // Use of function Date.now() 
        var fecha = new Date(); 
        
        //ponemos el dia en el escribir en el h
        console.log(dias[fecha.getDay()]);
        //obtenemos la hora

        hora = fecha.getHours();
        minuto = fecha.getMinutes();
        segundo = fecha.getSeconds();

        if(hora < 10){
            hora = "0"+hora;
        }

        if(minuto < 10){
            minuto = "0"+minuto;
        }

        if(segundo < 10){
            segundo = "0"+segundo;
        }

        horaInicio = hora+":"+minuto+":"+segundo;

        enviar(dias[fecha.getDay()], horaInicio);
    }else{
        mostrarDatosFeriado();
    }
}

function filtrar() {
    var dia = document.getElementById('dia').value;
    
    hora = "00:00:00";

    if (dia == '-') {
        dia = "all";
    }
    enviar(dia, hora);
}

function llamar(){
    var fecha = new Date(); 
    var minutos = fecha.getMinutes();

    console.log(minutos);
    if(minutos == 30 || minutos == 31){
        console.log("llmado:"+minutos);
        dia();
    } 
}

function reloj(){
    var fecha = new Date(); 

    hora = fecha.getHours();
    minuto = fecha.getMinutes();
    segundo = fecha.getSeconds();

    if(hora < 10){
        hora = "0"+hora;
    }

    if(minuto < 10){
        minuto = "0"+minuto;
    }

    if(segundo < 10){
        segundo = "0"+segundo;
    }

    if(minuto % 15 == 0 && segundo == "00" && !feriado){
        var feriado = esFeriado();
        console.log(feriado);
        if(!feriado){
            dia();
        }else{
            mostrarDatosFeriado();
        }
    }
    $("#reloj").html(hora+":"+minuto+":"+segundo);
}

function enviar(argDia, horaInicio){
    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth()+1;
    var yyyy = hoy.getFullYear();

    var fecha = yyyy+"-"+mm+"-"+dd;

    if (argDia == "") {
        argDia = "Lunes";
        horaInicio = "00:00:00";
    }else{
        if(argDia == "-"){
            argDia = $("#dia").val();
        }
    }
    var parametros = {
        "dia" : argDia,
        "hora": horaInicio,
        "fecha": fecha
    };
    
    document.getElementById('hoy').innerHTML = argDia;
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'horarios.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        beforeSend: function () {
                $("#horario").html("Procesando, espere por favor...");
        },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#horario").html(response);
                color(horaInicio);
        }
    });
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'muestraEvento.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        beforeSend: function () {
                $("#horarioEvento").html("Procesando, espere por favor...");
        },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#horarioEvento").html(response);
        }
    });
    $.ajax({
        data:  {"fecha": fecha}, //datos que se envian a traves de ajax
        url:   'asueto.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        beforeSend: function () {
            $("#asueto").html("Procesando, espere por favor...");
        },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $("#asueto").html(response);
        }
    });
}

// funciones de color y de nombre de dias
function color(horaInicio) {
    $('#horario tr').each(function( index ) {
        var horaCompararFin = toDate($( this ).children().last().text());
        var horaCompararInicio = toDate($( this ).children().first().text());
        var horaInicioDate = toDate(horaInicio);

        if(horaInicioDate <= horaCompararFin &&  horaInicioDate >= horaCompararInicio){
            $(this).css("background-color", "rgba(40, 167, 69, 0.48)");
        }else{

        }
    });
}

function toDate(dStr) {

    var now = new Date();

    var hora = dStr.substr(0,2);
    var minuto = dStr.substr(3, 2);

    if(minuto == "00:"){
        minuto = "00";
    }
    now.setHours(hora);
    now.setMinutes(minuto);
    now.setSeconds(0);

    return now;
}