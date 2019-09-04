//carreras
var carreras = ["carr1","carr2","carr3","carr4"];
//años
var año = ["1","2","3"];
var año2
var año3
//materias
//id-nombre-año-semestre-correlativas-disponibles
var ninguna = [0];
var introduccionComputacion = [1,"Introducción a la Computación","1","1",[0],[4,5]];
var matematicaGeneral = [2,"Matemática General","1","1",[0]];
var inglesTecnico = [3,"Inglés Técnico","1","1",[0],[5,6]];
var introduccionProgramacion = [4,"","1","2",[0],[8,9,12]];
var introduccionAdministracioSistemas = [5,"Introducción a la Administración de Sistemas","1","2",[1,3],[8,10,11,12]];
var redesDatos = [6,"Redes de Datos","1","2",[1,2],[9]];

var softwareLibre = [7,"Software Libre","2","1",[4],[14]];
var tallerHardwareSoftware = [8,"Taller de Hardware y Software","2","1",[4,5],[14]];
var AdministracionSistemas = [9,"Administración de Sistemas","2","1",[4,6],[10,12]];
var AdministraciónServicios = [10,"Administración de Servicios","2","2",[5,9],[15]];
var SistemasInformacion = [11,"Sistemas de Información","2","2",[5],[0]];
var AutomatizacionScrpting = [12,"Automatización y Scrpting","2","2",[4,5,9],[13]];

var AdministraciónSistemasAvanzada = [13,"Administración de Sistemas Avanzada","3","1",[12],[0]];
var AplicacionesLibres = [14,"Aplicaciones Libres","3","1",[7,8],[0]];
var Electiva = [15,"Electiva","3","1",[10],[0]];

var materias1 = new Array(new Array("-","-"),new Array("Introducción a la Computación - 1","1"),new Array("Matemática General - 1","2"),new Array("Inglés Técnico - 1","3"),new Array("Introducción a la Programación - 2","4"),new Array("Introducción a la Administración de Sistemas - 2","5"),new Array("Redes de Datos - 2","6"));
var materias2 = new Array(new Array("-","-"),new Array("Software Libre - 1","7"),new Array("Taller de Hardware y Software - 1","8"),new Array("Administración de Sistemas - 1","9"),new Array("Administración de Servicios - 2","10"),new Array("Sistemas de Información - 2","11"),new Array("Automatización y Scrpting - 2","12"));
var materias3 = new Array(new Array("-","-"),new Array("Administración de Sistemas Avanzada - 1","13"),new Array("Aplicaciones Libres - 1","14"),new Array("Electiva - 1","15"));