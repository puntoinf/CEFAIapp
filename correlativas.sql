-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2019 at 02:16 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `correlativas`
--

-- --------------------------------------------------------

--creamos las tablas
--carrera
CREATE TABLE 'carrera' (
  'idCarrera' int(250) NOT NULL,
  'nombre' varchar(250) NOT NULL,
  'plan' varchar(250) NOT NULL,
  'duracion' int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--correlativas
CREATE TABLE 'correlativa' (
  'necesaria' int(250) NOT NULL,
  'disponible' int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--imparte
CREATE TABLE 'imparte' (
  'idCarrera' int(250) NOT NULL,
  'idMateria' int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--$materia
CREATE TABLE '$materia' (
  'idMateria' int(250) NOT NULL,
  'nombre' varchar(250) NOT NULL,
  'ano' int(250) NOT NULL,
  'cuatrimestre' int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--cargamos carreras
INSERT INTO `carrera` (`idCarrera`, `nombre`, `plan`, `duracion`) VALUES
(1, 'Profesorado en Informática', '1185/13', 4),
(2, 'Licenciatura en Ciencias de la Computación', '1112/13', 5),
(3, 'Licenciatura en Sistemas de Información', '1420/2013', 5),
(4, 'Tecnicatura Universitaria en Desarrollo Web', '0885/2012', 3),
(5, 'Tecnicatura Universitaria en Administración de Sistemas y Software Libre', '0895/2012 ', 3);

--cargamos las $materias
--$materias TUASySL
INSERT INTO '$materia' 
('idMateria', 'nombre', 'ano', 'cuatrimestre') VALUES
(NULL, 'Introduccion a la Computacion', 1, 1),
(NULL, 'Matematica General', 1, 1),
(NULL, 'Ingles Tecnico', 1, 1),
(NULL, 'Introduccion a la Programacion', 1, 2),
(NULL, 'Introduccion a la Administracion de Sistemas', 1, 2),
(NULL, 'Redes de Datos', 1, 2),
(NULL, 'Software Libre', 2, 1),
(NULL, 'Taller de Hardware y Software', 2, 1),
(NULL, 'Administracion de Sistemas', 2, 1),
(NULL, 'Administracion de Servicios', 2, 2),
(NULL, 'Sistemas de Informacion', 2, 2),
(NULL, 'Automatizacion y Scrpting', 2, 2),
(NULL, 'Administracion de Sistemas Avanzada', 3, 1),
(NULL, 'Aplicaciones Libres', 3, 1),
(NULL, 'Electiva', 3, 1)
;

--$materias del titulo intermedio
INSERT INTO '$materia' 
('idMateria', 'nombre', 'ano', 'cuatrimestre') VALUES
(NULL,'Elementos de Algebra', 1, 1),
(NULL,'Resolucion de Problemas y Algoritmos', 1, 1),
(NULL,'Modelos y Sistemas de Informacion',1,1),
(NULL,'Introduccion a la Computacion',1,1),
(NULL,'Desarrollo de Algoritmos',1,2),
(NULL,'Elementos de Algebra Lineal',1,2),
(NULL,'Elementos de Teoria de la Computacion',1,2),
(NULL,'Modelado de Datos',1,2),
(NULL,'Cálculo Diferencial e Integral' ,2,1),
(NULL,'Programacion Orientada a Objetos',2,1),
(NULL,'Estructuras de Datos',2,1),
(NULL,'Teoria de la Computacion I',2,1),
(NULL,'Inglés Técnico I',2,1),
(NULL,'Métodos Computacionales para el Cálculo',2,2),
(NULL,'Programacion Concurrente',2,2),
(NULL,'Teoria de la Computacion II',2,2),
(NULL,'Arquitecturas y Organizacion de Computadoras I',2,2),
(NULL,'Ingenieria de Requerimientos',2,2),
(NULL,'Inglés Técnico II',2,2),
(NULL,'Probabilidad y Estadistica', 3,1),
(NULL,'Principios de Lenguajes de Programacion', 3,1),
(NULL,'Sistemas Operativos I',3,1),
(NULL,'Diseño de Bases de Datos',3,1),
(NULL,'Arquitecturas de Software',3,1),
(NULL,'Análisis de Algoritmos',3,2),
(NULL,'Laboratorio de Programacion',3,2),
(NULL,'Lógica para Ciencias de la Computacion',3,2),
(NULL,'Redes de Computadoras I',3,2),
(NULL,'Gestion de Proyectos de Desarrollo Software',3,2),
(NULL,'Gestion de Bases de Datos',3,2),
(NULL,'Gestion de Bases de Datos',3,2)
;

--$materias en comun 4 y 5 año
INSERT INTO '$materia' 
('idMateria', 'nombre', 'ano', 'cuatrimestre') VALUES
(NULL,'Sistemas Paralelos', 4,1),
(NULL,'Inteligencia Artificial LicCien ',4,2),
(NULL,'Sistemas Inteligentes',5,1),
(NULL,'Laboratorio de Programacion Distribuida',5,1);

--$materias de carrera licenciatura en ciencias de la computacion
INSERT INTO '$materia' 
('idMateria', 'nombre', 'ano', 'cuatrimestre') VALUES
(NULL,'Lenguajes Declarativos',4,1),
(NULL,'Complejidad Computacional', 4,1),
(NULL,'Especificacion de Software', 4,1),
(NULL,'Diseño de Algoritmos',4,2),
(NULL,'Conceptos Avanzados de Lenguajes de Programacion',4,2),
(NULL,'Especificación con Métodos Formales',4,2),
(NULL,'Aspectos Profesionales y Sociales',4,2),
(NULL,'Agentes Inteligentes para la Web',5,1),
(NULL,'Diseño de Compiladores e Interpretes',5,1),
(NULL,'Electiva I',5,1),
(NULL,'Trabajo de Tesis',5,1),
(NULL,'Laboratorio de Compiladores e Intérpretes',5,2),
(NULL,'Laboratorio de Inteligencia Artificial',5,2), 
(NULL,'Tecnicas para Minería de Datos',5,2),
(NULL,'Electiva II Según Electiva',5,2),
(NULL,'Trabajo de Tesis',5,2); 

--$materias de carrera licenciatura en sistemas
INSERT INTO '$materia' 
('idMateria', 'nombre', 'ano', 'cuatrimestre') VALUES
(NULL, 'Matematica General', '1', '1'),
(NULL, 'Introduccion a la Programacion', '1', '1'),
(NULL, 'Ingles Tecnico', '1', '1'),
(NULL, 'Programacion Estatica y Laboratorio Web', '1', '2'),
(NULL, 'Introduccion a la Programacion Orientada a Objetos', '1', '2'),
(NULL, 'Conceptos de Bases de Datos', '1', '2'),
(NULL, 'Programacion Web Dinamica', '2', '1'),
(NULL, 'Arquitectura y Seguridad de Computadoras', '2', '1'),
(NULL, 'Diseno Grafico', '2', '1'),
(NULL, 'Programacion Web Avanzada', '2', '2'),
(NULL, 'Analisis, Diseño y Documentacion de Sistemas', '2', '2'),
(NULL, 'Framework e Interoperabilidad', '3', '1'),
(NULL, 'Trabajo Final Tecnicatura en Desarrollo Web', '3', '1');
(NULL, 'Planificacion y Control de Proyectos','4','1'),
(NULL, 'Sistemas de Informacion I','4','1'),
(NULL, 'Modelado de Procesos de Negocios','4','1'),
(NULL, 'Especificacion de Requerimientos','4','1'),
(NULL, 'Especificacion de Diseño de Software','4','2'),
(NULL, 'Deposito y Mineria de Datos','4','2'),
(NULL, 'Sistema de Informacion II','4','2'),
(NULL, 'Laboratorio de Bases de Datos','4','2'),
(NULL, 'Auditoria de Sistemas de Informacion','5','1'),
(NULL, 'Verificacion y Validacion de Software','5','1'),
(NULL, 'Electiva I','5','1'),
(NULL, 'Trabajo Tesis I LicSis','5','1'),
(NULL, 'Sistemas de Informacion para la Web','5','2'),
(NULL, 'Aspectos Profecionales y Sociales','5','2'),
(NULL, 'Reingenieria de Software y Procesos','5','2'),
(NULL, 'Construccion y Validacion de Software','5','2'),
(NULL, 'Electiva II','5','2'),
(NULL, 'Trabajo Tesis II LicSis','5','2');


--$materias TUDW
INSERT INTO '$materia' 
('idMateria', 'nombre', 'ano', 'cuatrimestre') VALUES
(NULL, 'Matematica General', '1', '1'),
(NULL, 'Introduccion a la Programacion', '1', '1'),
(NULL, 'Ingles Tecnico', '1', '1'),
(NULL, 'Programacion Estatica y Laboratorio Web', '1', '2'),
(NULL, 'Introduccion a la Programacion Orientada a Objetos', '1', '2'),
(NULL, 'Conceptos de Bases de Datos', '1', '2'),
(NULL, 'Programacion Web Dinamica', '2', '1'),
(NULL, 'Arquitectura y Seguridad de Computadoras', '2', '1'),
(NULL, 'Diseno Grafico', '2', '1'),
(NULL, 'Programacion Web Avanzada', '2', '2'),
(NULL, 'Analisis, Diseño y Documentacion de Sistemas', '2', '2'),
(NULL, 'Framework e Interoperabilidad', '3', '1'),
(NULL, 'Trabajo Final Tecnicatura en Desarrollo Web', '3', '1');

--profesorado

--asociamos las $materias y las carreras
--carrera TUASySL
INSERT INTO 'imparte' ('idCarrera', 'idMateria')
VALUES
(5,1),
(5,2),
(5,3),
(5,4),
(5,5),
(5,6),
(5,7),
(5,8),
(5,9),
(5,10),
(5,11),
(5,12),
(5,13),
(5,14),
(5,15);


--$materias en comun 4, 5 año
INSERT INTO 'imparte' ('idCarrera', 'idMateria')
VALUES
('2', '51'),
('2', '52'),
('2', '53'),
('2', '54'),
('3', '51'),
('3', '52'),
('3', '53'),
('3', '54'),

--$materias de título intermedio con las licenciaturas
INSERT INTO 'imparte' ('idCarrera', 'idMateria')
VALUES ('2', '16'),
('2', '17'),
('2', '18'),
('2', '19'),
('2', '20'),
('2', '21'),
('2', '22'),
('2', '23'),
('2', '24'),
('2', '25'),
('2', '26'),
('2', '27'),
('2', '28'),
('2', '29'),
('2', '30'),
('2', '31'),
('2', '32'),
('2', '33'),
('2', '34'),
('2', '35'),
('2', '36'),
('2', '37'),
('2', '38'),
('2', '39'),
('2', '40'),
('2', '41'),
('2', '42'),
('2', '43'),
('2', '44'),
('2', '45'),
('3', '16'),
('3', '17'),
('3', '18'),
('3', '19'),
('3', '20'),
('3', '21'),
('3', '22'),
('3', '23'),
('3', '24'),
('3', '25'),
('3', '26'),
('3', '27'),
('3', '28'),
('3', '29'),
('3', '30'),
('3', '31'),
('3', '32'),
('3', '33'),
('3', '34'),
('3', '35'),
('3', '36'),
('3', '37'),
('3', '38'),
('3', '39'),
('3', '40'),
('3', '41'),
('3', '42'),
('3', '43'),
('3', '44'),
('3', '45');


--$materias licenciatura en ciencias de computacion
INSERT INTO 'imparte' ('idCarrera', 'idMateria')
VALUES 
('2','55'),
('2','56'),
('2','57'),
('2','58'),
('2','59'),
('2','60'),
('2','61'),
('2','62'),
('2','63'),
('2','64'),
('2','65'),
('2','66'),
('2','67'),
('2','68'),
('2','69'),
('2','70');

--$materias sistemas de informacion
INSERT INTO 'imparte' ('idCarrera', 'idMateria')
VALUES
('3','71'),
('3','72'),
('3','73'),
('3','74'),
('3','75'),
('3','76'),
('3','77'),
('3','78'),
('3','79'),
('3','80'),
('3','81'),
('3','82'),
('3','83'),
('3','84'),
('3','85'),
('3','86'),
('3','87'),
('3','88');

--$materias TUDW
INSERT INTO 'imparte' ('idCarrera', 'idMateria')
VALUES
('4','89'),
('4','90'),
('4','91'),
('4','92'),
('4','93'),
('4','94'),
('4','95'),
('4','96'),
('4','97'),
('4','98'),
('4','99'),
('4','100'),
('4','101');

--$materias Profesorado


--cargamos las correlativas


--$materias TASySL
INSERT INTO `correlativa` (`necesaria`, `disponible`) VALUES
(1, 5),
(1, 6),
(2, 6),
(3, 5),
(4, 7),
(4, 8),
(4, 9),
(4, 12),
(5, 8),
(5, 10),
(5, 11),
(5, 12),
(6, 9),
(7, 14),
(8, 14),
(9, 10),
(9, 12),
(10, 15),
(11, 0),
(12, 13),
(13, 0),
(14, 0),
(15, 0),
(0, 1),
(0, 2),
(0, 3),
(0, 4);

--titulo intermedio
--Primer año
INSERT INTO `correlativa` (`necesaria`, `disponible`) VALUES
('0','16'),
('0','17'),
('0','18'),
('0','19'),
('16','20'),
('16','21'),
('16','22'),
('17','20'),
('17','23'),
('18','23')
--segundo
('16','24'),
('19','28'),
('19','30'),
('18','28'),
('20','25'),
('20','26'),
('20','27'),
('20','29'),
('22','26'),
('22','27'),
('24','29'),
('25','30'),
('25','33'),
('25','36'),
('27','31'),
('27','32'),
('27','36'),
('28','34'),
('29','35'),
('26','37'),
('26','38'),
('26','39'),
('30','37'),
('32','37'),
('33','38'),
('33','39'),
('34','39'),
--tercer año
 ('31','40'),
('35','40'),
('26','41'),
('30','41'),
('26','42'),
('31','42'),
('34','42'),
('37','43'),
('39','44'),
('30','45'),
('38','45');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idCarrera`),
  ADD KEY `idCarrera` (`idCarrera`);

--
-- Indexes for table `dicta`
--
ALTER TABLE `dicta`
  ADD KEY `idMateria` (`idMateria`);

--
-- Indexes for table `imparte`
--
ALTER TABLE `imparte`
  ADD KEY `idCarrera` (`idCarrera`),
  ADD KEY `idMateria` (`idMateria`);

--
-- Indexes for table `$materia`
--
ALTER TABLE `$materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idCarrera` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `$materia`
--
ALTER TABLE `$materia`
  MODIFY `idMateria` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dicta`
--
ALTER TABLE `dicta`
  ADD CONSTRAINT `dicta$materia` FOREIGN KEY (`idMateria`) REFERENCES `$materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imparte`
--
ALTER TABLE `imparte`
  ADD CONSTRAINT `imparteCarrera` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imparte$materia` FOREIGN KEY (`idMateria`) REFERENCES `$materia` (`idMateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
