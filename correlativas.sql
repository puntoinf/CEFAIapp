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

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `idCarrera` int(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `plan` varchar(250) NOT NULL,
  `duracion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nombre`, `plan`, `duracion`) VALUES
(1, 'Profesorado en Informática', '1185/13', 4),
(2, 'Licenciatura en Ciencias de la Computación', '1112/13', 5),
(3, 'Licenciatura en Sistemas de Información', '1420/2013', 5),
(4, 'Tecnicatura Universitaria en Desarrollo Web', '0885/2012', 3),
(5, 'Tecnicatura Universitaria en Administración de Sistemas y Software Libre', '0895/2012 ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `correlativa`
--

CREATE TABLE `correlativa` (
  `necesaria` int(250) NOT NULL,
  `disponible` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `correlativa`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `dicta`
--

CREATE TABLE `dicta` (
  `idMateria` int(250) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imparte`
--

CREATE TABLE `imparte` (
  `idCarrera` int(250) NOT NULL,
  `idMateria` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imparte`
--

INSERT INTO `imparte` (`idCarrera`, `idMateria`) VALUES
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 37),
(3, 38),
(3, 39),
(3, 40),
(3, 41),
(3, 42),
(3, 43),
(3, 44),
(3, 45);

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `ano` int(250) NOT NULL,
  `semestre` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`idMateria`, `nombre`, `ano`, `semestre`) VALUES
(1, 'Introduccion a la Computacion', 1, 1),
(2, 'Matematica General', 1, 1),
(3, 'Ingles Tecnico', 1, 1),
(4, 'Introduccion a la Programacion', 1, 2),
(5, 'Introduccion a la Administracion de Sistemas', 1, 2),
(6, 'Redes de Datos', 1, 2),
(7, 'Software Libre', 2, 1),
(8, 'Taller de Hardware y Software', 2, 1),
(9, 'Administracion de Sistemas', 2, 1),
(10, 'Administracion de Servicios', 2, 2),
(11, 'Sistemas de Informacion', 2, 2),
(12, 'Automatizacion y Scrpting', 2, 2),
(13, 'Administracion de Sistemas Avanzada', 3, 1),
(14, 'Aplicaciones Libres', 3, 1),
(15, 'Electiva', 3, 1),
(16, 'Elementos de Algebra', 1, 1),
(17, 'Resolucion de Problemas y Algoritmos', 1, 1),
(18, 'Modelos y Sistemas de Informacion', 1, 1),
(19, 'Introduccion a la Computacion', 1, 1),
(20, 'Desarrollo de Algoritmos', 1, 2),
(21, 'Elementos de Algebra Lineal', 1, 2),
(22, 'Elementos de Teoria de la Computacion', 1, 2),
(23, 'Modelado de Datos', 1, 2),
(24, 'Cálculo Diferencial e Integral', 2, 1),
(25, 'Programacion Orientada a Objetos', 2, 1),
(26, 'Estructuras de Datos', 2, 1),
(27, 'Teoria de la Computacion I', 2, 1),
(28, 'Inglés Técnico I', 2, 1),
(29, 'Métodos Computacionales para el Cálculo', 2, 2),
(30, 'Programacion Concurrente', 2, 2),
(31, 'Teoria de la Computacion II', 2, 2),
(32, 'Arquitecturas y Organizacion de Computadoras I', 2, 2),
(33, 'Ingenieria de Requerimientos', 2, 2),
(34, 'Inglés Técnico II', 2, 2),
(35, 'Probabilidad y Estadistica', 3, 1),
(36, 'Principios de Lenguajes de Programacion', 3, 1),
(37, 'Sistemas Operativos I', 3, 1),
(38, 'Diseño de Bases de Datos', 3, 1),
(39, 'Arquitecturas de Software', 3, 1),
(40, 'Análisis de Algoritmos', 3, 2),
(41, 'Laboratorio de Programacion', 3, 2),
(42, 'Lógica para Ciencias de la Computacion', 3, 2),
(43, 'Redes de Computadoras I', 3, 2),
(44, 'Gestion de Proyectos de Desarrollo Software', 3, 2),
(45, 'Gestion de Bases de Datos', 3, 2);

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
-- Indexes for table `materia`
--
ALTER TABLE `materia`
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
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dicta`
--
ALTER TABLE `dicta`
  ADD CONSTRAINT `dictaMateria` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imparte`
--
ALTER TABLE `imparte`
  ADD CONSTRAINT `imparteCarrera` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imparteMateria` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
