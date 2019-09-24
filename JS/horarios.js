function dia() {
    var dias = new  Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
    // Use of function Date.now() 
    var fecha = new Date(); 
    
    //ponemos el dia en el escribir en el h3
    document.getElementById('dia').innerHTML = dias[fecha.getDay()];
    console.log(dias[fecha.getDay()]);
    
}