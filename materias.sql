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
(4, 'Introduccion a la Programación', 1, 2),
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
(15, 'Electiva', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idCarrera`);

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
  MODIFY `idMateria` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;
