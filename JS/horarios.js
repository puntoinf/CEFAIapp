function dia() {
    var dias = new  Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    // Use of function Date.now() 
    var fecha = new Date(); 
    

    //ponemos el dia en el escribir en el h3
  
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

    console.log(horaInicio);

    enviar(dias[fecha.getDay()], horaInicio);
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

    if(minuto % 15 == 0 && segundo == "00"){
        dia();
    }

    $("#reloj").html(hora+":"+minuto+":"+segundo);
}