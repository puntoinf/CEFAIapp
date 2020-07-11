-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2020 at 01:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

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

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `idCarrera` int(250) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `plan` varchar(250) NOT NULL,
  `duracion` int(10) NOT NULL,  
  constraint idCarrera_pk primary key (idCarrera)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `correlativa`
--

CREATE TABLE `correlativa` (
  `necesaria` int(250) NOT NULL,
  `disponible` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dicta`
--

CREATE TABLE `dicta` (
  `idMateria` int(250) NOT NULL,
  `aula` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `dia` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `modulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `horainicio` time NOT NULL,
  `horafin` time NOT NULL,
  `cuatrimestre` int(250) NOT NULL,
  `estado` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `necesaria` int(250) NOT NULL,
  `disponible` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imparte`
--

CREATE TABLE `imparte` (
  `idCarrera` int(250) NOT NULL,
  `idMateria` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(250) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `ano` int(250) NOT NULL,
  `cuatrimestre` int(2) NOT NULL,
  constraint idMateria_pk primary key (idMateria)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- carga de datos

-- carreras

INSERT INTO carrera (idCarrera, nombre, plan, duracion) VALUES
(1, 'Profesorado en Informática', '1185/13','4'),
(2, 'Licenciatura en Ciencias de la Computación', '1112/13', 5),
(3, 'Licenciatura en Sistemas de Información', '1420/2013', 5),
(4, 'Tecnicatura Universitaria en Desarrollo Web', '0885/2012', 3),
(5, 'Tecnicatura Universitaria en Administración de Sistemas y Software Libre', '0895/2012 ', 3);

-- materias 

-- materias TUASySL
INSERT INTO materia (nombre, ano, cuatrimestre) VALUES
('Introduccion a la Computacion','1','1'),
('Matematica General','1','1'),
('Ingles Tecnico','1','1'),
('Introduccion a la Programacion','1','2'),
('Introduccion a la Administracion de Sistemas','1','2'),
('Redes de Datos','1','2'),
('Software Libre','2','1'),
('Taller de Hardware y Software','2','1'),
('Administracion de Sistemas','2','1'),
('Administracion de Servicios','2','2'),
('Sistemas de Informacion','2','2'),
('Automatizacion y Scrpting','2','2'),
('Administracion de Sistemas Avanzada', 3,'1'),
('Aplicaciones Libres', 3,'1'),
('Electiva', 3,'1')
;

-- materias del titulo intermedio
INSERT INTO materia (nombre, ano, cuatrimestre) VALUES
('Elementos de Algebra','1','1'),
('Resolucion de Problemas y Algoritmos','1','1'),
('Modelos y Sistemas de Informacion','1','1'),
('Introduccion a la Computacion','1','1'),
('Desarrollo de Algoritmos','1','2'),
('Elementos de Algebra Lineal','1','2'),
('Elementos de Teoria de la Computacion','1','2'),
('Modelado de Datos','1','2'),
('Cálculo Diferencial e Integral' ,'2','1'),
('Programacion Orientada a Objetos','2','1'),
('Estructuras de Datos','2','1'),
('Teoria de la Computacion I','2','1'),
('Inglés Técnico I','2','1'),
('Métodos Computacionales para el Cálculo','2','2'),
('Programacion Concurrente','2','2'),
('Teoria de la Computacion II','2','2'),
('Arquitecturas y Organizacion de Computadoras I','2','2'),
('Ingenieria de Requerimientos','2','2'),
('Inglés Técnico II','2','2'),
('Probabilidad y Estadistica', 3,'1'),
('Principios de Lenguajes de Programacion', 3,'1'),
('Sistemas Operativos I',3,'1'),
('Diseño de Bases de Datos',3,'1'),
('Arquitecturas de Software',3,'1'),
('Análisis de Algoritmos',3,'2'),
('Laboratorio de Programacion',3,'2'),
('Lógica para Ciencias de la Computacion',3,'2'),
('Redes de Computadoras I',3,'2'),
('Gestion de Proyectos de Desarrollo Software',3,'2'),
('Gestion de Bases de Datos',3,'2'),
('Gestion de Bases de Datos',3,'2')
;

-- materias en comun 4 y 5 ano
INSERT INTO materia (nombre, ano, cuatrimestre) VALUES
('Sistemas Paralelos','4','1'),
('Inteligencia Artificial LicCien ','4','2'),
('Sistemas Inteligentes',5,'1'),
('Laboratorio de Programacion Distribuida',5,'1');

-- materias de carrera licenciatura en ciencias de la computacion
INSERT INTO materia (nombre, ano, cuatrimestre) VALUES
('Lenguajes Declarativos','4','1'),
('Complejidad Computacional','4','1'),
('Especificacion de Software','4','1'),
('Diseño de Algoritmos','4','2'),
('Conceptos Avanzados de Lenguajes de Programacion','4','2'),
('Especificación con Métodos Formales','4','2'),
('Aspectos Profesionales y Sociales','4','2'),
('Agentes Inteligentes para la Web',5,'1'),
('Diseño de Compiladores e Interpretes',5,'1'),
('Electiva I',5,'1'),
('Trabajo de Tesis',5,'1'),
('Laboratorio de Compiladores e Intérpretes',5,'2'),
('Laboratorio de Inteligencia Artificial',5,'2'), 
('Tecnicas para Minería de Datos',5,'2'),
('Electiva II Según Electiva',5,'2'),
('Trabajo de Tesis',5,'2'); 

-- materias de carrera licenciatura en sistemas
INSERT INTO materia (nombre, ano, cuatrimestre) VALUES
('Matematica General','1','1'),
('Introduccion a la Programacion','1','1'),
('Ingles Tecnico','1','1'),
('Programacion Estatica y Laboratorio Web','1','2'),
('Introduccion a la Programacion Orientada a Objetos','1','2'),
('Conceptos de Bases de Datos','1','2'),
('Programacion Web Dinamica','2','1'),
('Arquitectura y Seguridad de Computadoras','2','1'),
('Diseno Grafico','2','1'),
('Programacion Web Avanzada','2','2'),
('Analisis, Diseño y Documentacion de Sistemas','2','2'),
('Framework e Interoperabilidad', 3,'1'),
('Trabajo Final Tecnicatura en Desarrollo Web', 3,'1'),
('Planificacion y Control de Proyectos','4','2'),
('Sistemas de Informacion I','4','2'),
('Modelado de Procesos de Negocios','4','2'),
('Especificacion de Requerimientos','4','2'),
('Especificacion de Diseño de Software','4','2'),
('Deposito y Mineria de Datos','4','2'),
('Sistema de Informacion II','4','2'),
('Laboratorio de Bases de Datos','4','2'),
('Auditoria de Sistemas de Informacion', 5,'2'),
('Verificacion y Validacion de Software', 5,'2'),
('Electiva I', 5,'2'),
('Trabajo Tesis I LicSis', 5,'2'),
('Sistemas de Informacion para la Web', 5,'2'),
('Aspectos Profecionales y Sociales', 5,'2'),
('Reingenieria de Software y Procesos', 5,'2'),
('Construccion y Validacion de Software', 5,'2'),
('Electiva II', 5,'2'),
('Trabajo Tesis II LicSis', 5,'2');

-- materias TUDW
INSERT INTO materia (nombre, ano, cuatrimestre) VALUES
('Matematica General','1','1'),
('Introduccion a la Programacion','1','1'),
('Ingles Tecnico','1','1'),
('Programacion Estatica y Laboratorio Web','1','2'),
('Introduccion a la Programacion Orientada a Objetos','1','2'),
('Conceptos de Bases de Datos','1','2'),
('Programacion Web Dinamica','2','1'),
('Arquitectura y Seguridad de Computadoras','2','1'),
('Diseno Grafico','2','1'),
('Programacion Web Avanzada','2','2'),
('Analisis, Diseño y Documentacion de Sistemas','2','2'),
('Framework e Interoperabilidad', 3,'1'),
('Trabajo Final Tecnicatura en Desarrollo Web', 3,'1');


-- profesorado en ciencias
INSERT INTO materia (nombre, ano, cuatrimestre) VALUES
('Pedagogía','1','1'),
('Psicología I','1','2'),
('Didáctica General','2','2'),
('Métodos Computacionales para el Cálculo',3,'1'),
('Tecnologías de la Información y Comunicación en la Educación', 3,'1'),
('Psicología II', 3,'1'), 
('Laboratorio de Tecnologías de la Información y Comunicación en la Educación', 3,'2'),
('Probabilidad y Estadística','4','1'), 
('Laboratorio de Sistemas Informáticos para Educación','4','1'),
('Didáctica Específica','4','1'), 
('Política Educacional Argentina','4','1'),
('Tópicos Avanzados en Ciencias de la Computación','4','2'), 
('Residencia','4','2');

-- carrera asociadas a materias

-- carrera TUASySL
INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
('5','1'),
('5','2'),
('5','3'),
('5','4'),
('5','5'),
('5','6'),
('5','7'),
('5','8'),
('5','9'),
('5','10'),
('5','11'),
('5','12'),
('5','13'),
('5','14'),
('5','15');

--materias en comun 4, 5 ano
INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
('2', '51'),
('2', '52'),
('2', '53'),
('2', '54'),
('3', '51'),
('3', '52'),
('3', '53'),
('3', '54');

--materias de título intermedio con las licenciaturas
INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
('2', '16'),
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


--materias licenciatura en ciencias de computacion
INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
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

--materias sistemas de informacion
INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
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

--materias TUDW
INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
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

--profesorado
INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
('1','102'),
('1','103'),
('1','104'),
('1','105'),
('1','106'),
('1','107'),
('1','108'),
('1','109'),
('1','110'),
('1','111'),
('1','112'),
('1','113'),
('1','114'),
('1','16'),
('1','17'),
('1','18'),
('1','19'),
('1','20'),
('1','22'),
('1','23'),
('1','24'),
('1','25'),
('1','26'),
('1','27'),
('1','28'),
('1','30'),
('1','31'),
('1','32'),
('1','33'),
('1','34'),
('1','37'),
('1','39'),
('1','43'),
('1','61');

-- correlativas

--materias TASySL
INSERT INTO `correlativa` (`necesaria`, `disponible`) VALUES
('1', '5'),
('1', '6'),
('2', '6'),
('3', '5'),
('4', '7'),
('4', '8'),
('4', '9'),
('4', '12'),
('5', '8'),
('5', '10'),
('5', '11'),
('5', '12'),
('6', '9'),
('7', '14'),
('8', '14'),
('9', '10'),
('9', '12'),
('10', '15'),
('11', '0'),
('12', '13'),
('13', '0'),
('14', '0'),
('15', '0'),
('0', '1'),
('0', '2'),
('0', '3'),
('0', '4');

--titulo intermedio
--Primer ano

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
('18','23'),

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

--licencuatura en ciancias
INSERT INTO `correlativa` (`necesaria`, `disponible`) VALUES
('36','55'),
('42','55'),
('40','56'),
('42','56'),
('37','51'),
('44','57'),
('40','58'),
('36','52'),
('30','59'),
('37','59'),
('57','60'),
('39','61'),
('41','61'),
('43','61'),
('52','53'),
('52','62'),
('59','63'),
('51','54'),
('58','65'),
('52','65'),
('61','65'),
('41','66'),
('63','66'),
('55','67'),
('58','67'),
('53','67'),
('62','67'),
('53','68');

--licenciatura en sistemas
INSERT INTO `correlativa` (`necesaria`, `disponible`) VALUES
('35','71'),
('44','71'),
('44','72'),
('44','73'),
('39','74'),
('37','51'),
('36','52'),
('73','75'),
('74','75'),
('45','76'),
('72','77'),
('73','77'),
('45','78'),
('52','53'), 
('77','79'),
('75','80'),
('51','54'),
('52','82'),
('77','82'),
('78','82'),
('77','83'),
('53','83'),
('39','84'),
('41','84'),
('43','84'),
('77','85'),
('78','86'),
('80','75');

-- profesorado
INSERT INTO `correlativa` (`necesaria`, `disponible`) VALUES
('0', '102'),
('0', '103'),
('102', '104'),
('103', '107'),
('20', '105'),
('24', '105'),
('27', '106'),
('104', '106'),
('39', '115'),
('106', '115'),
('107', '115'),
('31', '108'),
('106', '108'),
('105', '109'),
('115', '110'),
('108', '110'),
('115', '111'),
('108', '111'),
('102', '112'),
('43', '61'),
('31', '113'),
('109', '113'),
('110', '114'),
('111', '114'),
('112', '114');

--Tecnicatura en Desarrollo Web
INSERT INTO `correlativa` (`necesaria`, `disponible`) VALUES
('0','89'),
('0','90'),
('0','91'),
('90','92'),
('90','93'),
('89','94'),
('91','94'),
('92','95'),
('93','95'),
('94','95'),
('89','96'),
('91','96'),
('92','97'),
('95','98'),
('93','99'),
('94','99'),
('95','100'),
('96','101'),
('97','101'),
('98','101'),
('99','101');

-- dicta

-- finales

-- finales titulo intermedio:
INSERT INTO `final` (`necesaria`, `disponible`) VALUES
('26','17'),
('29','16'),
('31','22'),
('32','19'),
('33','16'),
('33','23'),
('38','21'),
('39','25'),
('41','25'),
('42','27'),
('43','32'),
('44','33'),
('45','33');

-- finales LCC:
INSERT INTO `final` (`necesaria`, `disponible`) VALUES 
('55','26'),
('56','31'),
('51','32'),
('57','38'),
('57','39'),
('52','42'),
('59','36'),
('60','42'),
('53','35'),
('62','36'),
('54','37'),
('54','43'),
('65','44'),
('65','43');

-- finales LCS:
INSERT INTO `final` (`necesaria`, `disponible`) VALUES 
('74','33'),
('51','32'),
('52','42'),
('75','39'),
('76','35'),
('76','38'),
('78','38'),
('53','35'),
('79','44'),
('80','40'),
('54','37'),
('54','43'),
('88','44'),
('88','43'),
('83','72'),
('83','52'),
('85','72'),
('85','73'),
('86','41');

-- finales profesorado
INSERT INTO `final` (`necesaria`, `disponible`) VALUES
('16','105'),
('104','111'),
('106','111'),
('39','61');

-- finales TUASySl:
-- NULL

-- finales TUDW:
-- NULL

-- dicta
-- titulo intermedio
-- 1°
INSERT INTO `dicta` (`idMateria`, `aula`, `dia`, `modulo`, `horainicio`, `horafin`, `cuatrimestre`, `estado`) VALUES
('16', '40', 'Lunes', 'Teoría', '09:00:00', '12:00:00', '1', 'normal'),
('16', '44', 'Miercoles', 'Práctica ', '09:00:00', '12:00:00', '1', 'normal'),
('16', '40', 'Lunes', 'Teoría ', '14:00:00', '17:00:00', '1', 'normal'),
('16', '44', 'Miercoles', 'Práctica ', '14:00:00', '17:00:00', '1', 'normal'),
('17', 'Laboratorio 2 y 3', 'Martes', 'Práctica ', '09:00:00', '11:00:00', '1', 'normal'),
('17', 'Laboratorio 1 y 2', 'Martes', 'Práctica ', '18:00:00', '20:00:00', '1', 'normal'),
('17', '106', 'Jueves', 'Teoría ', '20:00:00', '22:00:00', '1', 'normal'),
('18', '16', 'Lunes', 'Teoría ', '20:00:00', '22:00:00', '1', 'normal'),
('18', '16', 'Miercoles', 'Práctica ', '20:00:00', '22:00:00', '1', 'normal'),
('18', '24', 'Viernes', 'Práctica ', '18:00:00', '20:00:00', '1', 'normal'),
('19', '16', 'Martes', 'Práctica ', '11:00:00', '13:00:00', '1', 'normal'),
('19', '105', 'Viernes', 'Práctica ', '14:00:00', '16:00:00', '1', 'normal'),
('19', '13', 'Viernes', 'Teoría ', '10:00:00', '12:00:00', '1', 'normal'),

('24', '41', 'Lunes', 'Teoría ', '13:00:00', '16:00:00', '1', 'normal'),
('24', '41', 'Miercoles', 'Práctica ', '13:00:00', '16:00:00', '1', 'normal'),
('25', 'Laboratorio 1 y 2 ', 'Lunes', 'Práctica ', '17:00:00', '19:00:00', '1', 'normal'),
('25', 'Laboratorio 1 y 2 ', 'Miercoles', 'Práctica ', '11:00:00', '13:00:00', '1', 'normal'),
('25', 'Laboratorio 1 y 2', 'Viernes', 'Práctica', '14:00:00', '16:00:00', '1', 'normal'),
('25', '45', 'Miercoles', 'Teoría ', '09:30:00', '11:30:00', '1', 'normal'),
('26', '6', 'Lunes', 'Teoría ', '09:00:00', '12:00:00', '1', 'normal'),
('26', 'Laboratorio 1 y 3', 'Viernes', 'Práctica ', '09:00:00', '12:00:00', '1', 'normal'),
('27', '102', 'Jueves', 'Teoría ', '14:00:00', '16:00:00', '1', 'normal'),
('27', '102', 'Jueves', 'Práctica ', '17:00:00', '19:00:00', '1', 'normal'),
('28', '45', 'Martes', 'Teoría/Práctica ', '10:00:00', '12:00:00', '1', 'normal'),

('35', '53', 'Lunes', 'Teoría ', '09:00:00', '12:00:00', '1', 'normal'),
('35', '101', 'Jueves', 'Práctica ', '09:00:00', '12:00:00', '1', 'normal'),
('36', 'Laboratorio 1', 'Miercoles', 'Práctica - M1', '16:00:00', '18:00:00', '1', 'normal'),
('36', '105', 'Miercoles', 'Práctica - M2', '18:00:00', '20:00:00', '1', 'normal'),
('36', '105', 'Viernes', 'Teoría ', '12:00:00', '14:00:00', '1', 'normal'),
('37', '101', 'Martes', 'Teoría ', '16:00:00', '18:00:00', '1', 'normal'),
('37', '101', 'Jueves', 'Práctica ', '16:00:00', '18:00:00', '1', 'normal'),
('38', 'Laboratorio 3', 'Martes', 'Práctica ', '18:00:00', '20:00:00', '1', 'normal'),
('38', '53', 'Miercoles', 'Teoría ', '10:00:00', '12:00:00', '1', 'normal'),
('39', '45', 'Jueves', 'Práctica ', '18:00:00', '20:00:00', '1', 'normal'),
('39', '102', 'Viernes', 'Teoría ', '10:00:00', '12:00:00', '1', 'normal'),

('21', '41', 'Martes', 'Unico', '09:00:00', '12:00:00', '1', 'normal'),
('21', '41', 'Jueves', 'Unico', '09:00:00', '12:00:00', '1', 'normal'),
('20', 'Laboratorio 3', 'Miercoles', 'Unico', '08:00:00', '10:00:00', '1', 'normal'),
('20', 'Laboratorio 3', 'Miercoles', 'Practica', '10:00:00', '12:30:00', '1', 'normal'),
('20', ' Laboratorio 2', 'Lunes', 'Practica', '11:00:00', '13:00:00', '1', 'normal');


-- 2°

-- LCC
-- 1°
INSERT INTO `dicta` (`idMateria`, `aula`, `dia`, `modulo`, `horainicio`, `horafin`, `cuatrimestre`, `estado`) VALUES
('51', 'Laboratorio 1', 'Lunes', 'Unico', '10:00:00', '13:30:00', '1', 'normal'),
('55', 'Laboratorio 1', 'Lunes', 'Unico', '14:00:00', '16:00:00', '1', 'normal'),
('57', 'Consejo Directivo FaI', 'Martes', 'Teoria', '18:00:00', '21:00:00', '1', 'normal'),
('56', 'Consejo Directivo FaI', 'Miercoles', 'Unico', '09:00:00', '12:00:00', '1', 'normal'),
('51', 'Laboratorio 3', 'Miercoles', 'Unico', '13:00:00', '16:00:00', '1', 'normal'),
('56', 'Aula 5 – FAEA', 'Jueves', 'Unico', '09:00:00', '12:00:00', '1', 'normal'),
('55', 'Laboratorio 3', 'Jueves', 'Unico', '14:00:00', '16:00:00', '1', 'normal'),
('55', 'Laboratorio 1', 'Viernes', 'Unico', '16:00:00', '18:00:00', '1', 'normal'),
('57', 'Consejo Directivo FAI', 'Viernes', 'Practica ', '18:00:00', '21:00:00', '1', 'normal'),

('53', 'Laboratorio 3', 'Lunes', 'Practica', '16:00:00', '18:00:00', '1', 'normal'),
('63', 'Laboratorio 1', 'Martes', 'Unico', '13:00:00', '15:00:00', '1', 'normal'),
('63', 'Laboratorio Biblioteca', 'Martes', 'Unico', '15:00:00', '17:00:00', '1', 'normal'),
('53', 'Consejo Directivo FaI', 'Miercoles', 'Teoría ', '16:00:00', '18:00:00', '1', 'normal'),
('54', 'Consejo Directivo FaI', 'Miercoles', 'Unico ', '18:00:00', '20:00:00', '1', 'normal'),
('62', 'Laboratorio 1', 'Jueves', 'Unico ', '14:00:00', '18:00:00', '1', 'normal'),
('54', 'Laboratorio 1', 'Jueves', 'Unico ', '18:00:00', '20:00:00', '1', 'normal');


-- 2°

-- LSI
-- 1°
INSERT INTO `dicta` (`idMateria`, `aula`, `dia`, `modulo`, `horainicio`, `horafin`, `cuatrimestre`, `estado`) VALUES
('71', 'Aula 13.1', 'Lunes', 'Unico', '17:00:00', '21:00:00', '1', 'normal'),
('74', 'Consejo Directivo FaI', 'Martes', 'Unico', '14:00:00', '18:00:00', '1', 'normal'),
('72', 'Consejo Directivo FaEA', 'Martes', 'Practica', '18:00:00', '20:00:00', '1', 'normal'),
('73', 'Consejo Directivo FaI', 'Jueves', 'Teoría', '10:00:00', '13:00:00', '1', 'normal'),
('72', 'Consejo Directivo FaI', 'Jueves', 'Teoría', '14:00:00', '16:00:00', '1', 'normal'),
('73', 'Consejo Directivo FaI', 'Jueves', 'Practica ', '18:00:00', '21:00:00', '1', 'normal'),

('80', 'Aula 101', 'Martes', 'Practica ', '14:00:00', '16:00:00', '1', 'normal'),
('80', 'Consejo Directivo FaEA', 'Martes', 'Teoría ', '16:00:00', '18:00:00', '1', 'normal'),
('79', 'Consejo Directivo FaI', 'Viernes', 'Unico', '14:00:00', '18:00:00', '1', 'normal'),
('54', 'Consejo Directivo FaI', 'Miercoles', 'Unico', '18:00:00', '20:00:00', '1', 'normal');

-- 2° 

-- Prof
-- 1°
INSERT INTO `dicta` (`idMateria`, `aula`, `dia`, `modulo`, `horainicio`, `horafin`, `cuatrimestre`, `estado`) VALUES 
('102','40','Jueves','Teórico','18:00:00', '21:00:00', '1', 'normal'),
('102','44','Miercoles','Prácticas','17:00:00', '20:00:00', '1', 'normal'),
('102','40','Martes','Prácticas','19:00:00', '22:00:00', '1', 'normal'),
('102','40','Martes','Prácticas','08:00:00', '11:00:00', '1', 'normal'),

('107','40','Miercoles','Teórico','14:00:00', '16:00:00', '1', 'normal'),
('107',' Aula 8 – subsuelo – Facultad de Ingeniería','Lunes','Prácticas','09:00:00', '12:00:00', '1', 'normal'),
('107','Aula 21 – Facultad de Humanidades','Miercoles','Prácticas','16:00:00', '18:00:00', '1', 'normal'),

('109','53','Lunes','Unico','09:00:00', '12:00:00', '1', 'normal'),
('111','Oficina 9','Martes','Unico','18:00:00', '21:00:00', '1', 'normal'),
('109','101','Jueves','Unico','09:00:00', '12:00:00', '1', 'normal'),
('111','Oficina 9','Jueves','Unico','18:00:00', '21:00:00', '1', 'normal'),
('112','Aula 6 – Facultad de Economía y Administración','Lunes','Teórico','17:30:00', '20:30:00', '1', 'normal'),
('112','Aula 21 – Facultad de Humanidades','Miercoles','Prácticas','18:00:00', '21:00:00', '1', 'normal'),
('112','Aula 2 – Planta Alta – Facultad de Ingeniería','Miercoles','Prácticas','16:00:00', '19:00:00', '1', 'normal');

-- 2°

-- TUDW
-- 1°
INSERT INTO `dicta` (`idMateria`, `aula`, `dia`, `modulo`, `horainicio`, `horafin`, `cuatrimestre`, `estado`) VALUES
('92', 'Aula Informática Biblioteca', 'Martes', 'Unico', '17:00:00', '21:00:00', '1', 'normal'),
('93', 'Laboratorio II', 'Miercoles', 'Unico', '14:00:00', '18:00:00', '1', 'normal'),
('94', 'Laboratorio III', 'Jueves', 'Unico', '16:00:00', '20:00:00', '1', 'normal'),
('93', 'Laboratorio III', 'Viernes', 'Unico', '15:00:00', '17:00:00', '1', 'normal'),
('92', 'Laboratorio III', 'Viernes', 'Unico', '17:00:00', '21:00:00', '1', 'normal'),

('98', 'Aula Informática Biblioteca', 'Lunes', 'Unico', '15:00:00', '21:00:00', '1', 'normal'),
('99', 'Laboratorio III', 'Martes', 'Unico', '15:00:00', '18:00:00', '1', 'normal'),
('99', 'Aula Informática Biblioteca', 'Jueves', 'Unico', '15:00:00', '18:00:00', '1', 'normal'),
('98', 'Aula Informática Biblioteca', 'Jueves', 'Unico', '18:00:00', '20:00:00', '1', 'normal');

-- 2°

-- TUASySL
-- 1°
INSERT INTO `dicta` (`idMateria`, `aula`, `dia`, `modulo`, `horainicio`, `horafin`, `cuatrimestre`, `estado`) VALUES
('6', 'Laboratorio III', 'Lunes', 'Unico', '18:00:00', '22:00:00', '1', 'normal'),
('6', 'Laboratorio II', 'Jueves', 'Unico', '15:00:00', '18:00:00', '1', 'normal'),
('5', 'Aula Informática Biblioteca ', 'Jueves', 'Unico', '20:00:00', '22:00:00', '1', 'normal'),
('4', 'Aula Informática Biblioteca ', 'Viernes', 'Unico', '16:00:00', '19:00:00', '1', 'normal'),
('5', 'Aula Informática Biblioteca ', 'Viernes', 'Unico', '19:00:00', '21:00:00', '1', 'normal'),
('4', 'Laboratorio III ', 'Miercoles', 'Unico', '16:00:00', '20:00:00', '1', 'normal'),

('11', 'CD FaI', 'Lunes', 'Unico', '15:00:00', '18:00:00', '1', 'normal'),
('10', 'Laboratorio I', 'Martes', 'Unico', '15:00:00', '18:00:00', '1', 'normal'),
('10', 'Aula Informática Biblioteca', 'Miercoles', 'Unico', '15:00:00', '18:00:00', '1', 'normal'),
('12', 'Aula Informática Biblioteca', 'Miercoles', 'Unico', '18:00:00', '20:00:00', '1', 'normal'),
('11', '40', 'Jueves', 'Unico', '15:00:00', '18:00:00', '1', 'normal'),
('12', 'Laboratorio II', 'Viernes', 'Unico', '16:00:00', '18:00:00', '1', 'normal');

-- 2°


--
-- Indexes for dumped tables
--

--
-- Indexes for table 'carrera'
--

-- Indexes for table 'dicta'
--
ALTER TABLE dicta
  ADD KEY idMateria (idMateria);

--
-- Indexes for table 'imparte'
--
ALTER TABLE imparte
  ADD KEY idCarrera (idCarrera),
  ADD KEY idMateria (idMateria);

--
-- Indexes for table 'materia'
--

-- indexes for table ‘final’
--

ALTER TABLE final 
ADD INDEX(necesaria);

ALTER TABLE final 
ADD INDEX(disponible);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'carrera'
--
ALTER TABLE carrera
  MODIFY idCarrera int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table 'materia'
--
ALTER TABLE materia
  MODIFY idMateria int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table 'dicta'
--
ALTER TABLE dicta
  ADD CONSTRAINT dictaMateria FOREIGN KEY (idMateria) REFERENCES materia (idMateria) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table 'imparte'
--
ALTER TABLE imparte
  ADD CONSTRAINT imparteCarrera FOREIGN KEY (idCarrera) REFERENCES carrera (idCarrera) ON DELETE CASCADE ON UPDATE CASCADE,

  ADD CONSTRAINT imparteMateria FOREIGN KEY (idMateria) REFERENCES materia (idMateria);
COMMIT;

ALTER TABLE dicta ADD CONSTRAINT dicta FOREIGN KEY (idMateria) REFERENCES materia (idMateria) ON DELETE CASCADE ON UPDATE CASCADE;

