function dia() {
    var dias = new  Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    // Use of function Date.now() 
    var fecha = new Date(); 
    
    //ponemos el dia en el escribir en el h3
    console.log(dias[fecha.getDay()]);

    enviar(dias[fecha.getDay()]);
}

function filtrar() {
    var dia = document.getElementById('dia').value;
    var año = document.getElementById('año').value;
    var carrera = document.getElementById('carrera').value;
    
    if (dia == '-') {
        dia = "all";
    }
    enviar(dia);
}