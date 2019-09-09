
//años carreras
var añoTecnicatura = ["-","1","2","3"];
var añoLicenciatura = ["-","1","2","3","4","5"];
var añoProfesorado = ["-","1","2","3","4"];
//materias tecnicatura universitaria en administracion y software libre (TUASySL)

var materiasTUASySL1 = new Array(
    new Array("-","0"),
    new Array("Introducción a la Computación - 1","1"),
    new Array("Matemática General - 1","2"),
    new Array("Inglés Técnico - 1","3"),
    new Array("Introducción a la Programación - 2","4"),
    new Array("Introducción a la Administración de Sistemas - 2","5"),
    new Array("Redes de Datos - 2","6")
);

var materiasTUASySL2 = new Array(
    new Array("-","0"),
    new Array("Software Libre - 1","7"),
    new Array("Taller de Hardware y Software - 1","8"),
    new Array("Administración de Sistemas - 1","9"),
    new Array("Administración de Servicios - 2","10"),
    new Array("Sistemas de Información - 2","11"),
    new Array("Automatización y Scrpting - 2","12")
);

var materiasTUASySL3 = new Array(
    new Array("-","0"),
    new Array("Administración de Sistemas Avanzada - 1","13"),
    new Array("Aplicaciones Libres - 1","14"),new Array("Electiva - 1","15")
);

//materias analista programador
var materiasAnalista1 = new Array(
    new Array("-","0"),
    new Array("Elementos de Algebra - 1","16"),
    new Array("Resolucion de Problemas y Algoritmos - 1","17"),
    new Array("Modelos y Sistemas de Informacion - 1","18"),
    new Array("Introduccion a la Computacion - 1","19"),
    new Array("Desarrollo de Algoritmos - 2","20"),
    new Array("Elementos de Algebra Lineal - 2","21"),
    new Array("Elementos de Teoria de la Computacion - 2","22"),
    new Array("Modelado de Datos - 2","23")
);
var materiasAnalista2 = new Array(
    new Array("-","0"),
    new Array("Calculo Diferencial e Integral - 1","24"),
    new Array("Programacion Orientada a Objetos - 1","25"),
    new Array("Estructuras de Datos - 1","26"),
    new Array("Teoria de la Computacion I - 1","27"),
    new Array("Ingles Tecnico I - 1","28"),
    new Array("Metodos Computacionales para el Calculo - 2","29"),
    new Array("Programacion Concurrente - 2","30"),
    new Array("Teoria de la Computacion II - 2","31"),
    new Array("Arquitecturas y Organizacion de Computadoras I - 2","32"),
    new Array("Ingenieria de Requerimientos - 2","33"),
    new Array("Ingles Tecnico II - 2","34")
);

var materiasAnalista3 = new Array(
    new Array("-","0"),
    new Array("Probabilidad y Estadistica - 1","35"),
    new Array("Principios de Lenguajes de Programacion - 1","36"),
    new Array("Sistemas Operativos I - 1","37"),
    new Array("Diseño de Bases de Datos - 1","38"),
    new Array("Arquitecturas de Software - 1","39"),
    new Array("Analisis de Algoritmos - 2","40"),
    new Array("Laboratorio de Programacion - 2","41"),
    new Array("Logica para Ciencias de la Computacion - 2","42"),
    new Array("Redes de Computadoras I - 2","43"),
    new Array("Gestion de Proyectos de Desarrollo Software - 2","44"),
    new Array("Gestion de Bases de Datos - 2","45")
);
//materias tecicatura en desarrollo web (TUDW)
//materias licenciatura en ciancias (LicCinComp)

var materiasLicCien4 = new Array(
    new Array("-","0"),
    new Array("Sistemas Paralelos - 1","48"),
    new Array("Lenguajes Declarativos - 1","85"),
    new Array("Complejidad Computacional - 1","86"),
    new Array("Especificacion de Software - 1","87"),
    new Array("Diseño de Algoritmos - 2","88"),
    new Array("Inteligencia Artificial LicCien - 2","89"),
    new Array("Conceptos Avanzados de Lenguajes de Programacion - 2","90"),
    new Array("Especificacion con Metodos Formales - 2","91"),
    new Array("Aspectos Profesionales y Sociales - 2","92")
);

var materiasLicCien5 = new Array(
    new Array("-","0"),
    new Array("Sistemas Inteligentes - 1","55"),
    new Array("Laboratorio de Programacion Distribuida - 1","58"),
    new Array("Agentes Inteligentes para la Web - 1","93"),
    new Array("Diseño de Compiladores e Interpretes - 1","94"),
    new Array("Electiva I - 1","95"),
    new Array("Trabajo de Tesis - 1","96"),
    new Array("Laboratorio de Compiladores e Interpretes - 2","97"),
    new Array("Laboratorio de Inteligencia Artificial - 2","98"),
    new Array("Tecnicas para Mineria de Datos - 2","99"),
    new Array("Electiva II Segun Electiva - 2","100"),
    new Array("Trabajo de Tesis - 2","101"),
);

//materias licenciatura en sistemas (licSisInf)
var materiasLicSis4 = new Array(
    new Array("-","0"),
    new Array("Sistemas Paralelos - 1","48"),
    new Array("Planificacion y Control de Proyectos - 1","66"),
    new Array("Sistemas de Informacion I - 1","67"),
    new Array("Modelado de Procesos de Negocios - 1","68"),
    new Array("Especificacion de Requerimientos - 1","69"),
    new Array("Inteligancia Artificial LicSis - 2","70"),
    new Array("Especificacion de Diseño de Software - 2","71"),
    new Array("Deposito y Mineria de Datos - 2","72"),
    new Array("Sistema de Informacion II - 2","73"),
    new Array("Laboratorio de Bases de Datos - 2","74"),
);

var materiasLicSis5 = new Array(
    new Array("-","0"),
    new Array("Sistemas Inteligentes - 1","55"),
    new Array("Laboratorio de Programacion Distribuida - 1","58"),
    new Array("Auditoria de Sistemas de Informacion - 1","75"),
    new Array("Verificacion y Validacion de Software - 1","76"),
    new Array("Electiva I - 1","77"),
    new Array("Trabajo Tesis I LicSis - 1","78"),
    new Array("Sistemas de Informacion para la Web - 2","79"),
    new Array("Aspectos Profecionales y Sociales - 2","80"),
    new Array("Reingenieria de Software y Procesos - 2","81"),
    new Array("Construccion y Validacion de Software - 2","82"),
    new Array("Electiva II - 2","83"),
    new Array("Trabajo Tesis II LicSis - 2","84"),
);
//materias profesorado informatica (ProfInfor)