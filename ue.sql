-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2021 a las 04:03:51
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ue`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `IdAlumno` char(4) NOT NULL,
  `NombresAl` char(50) NOT NULL,
  `ApellidosAl` char(50) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`IdAlumno`, `NombresAl`, `ApellidosAl`, `FechaNacimiento`, `Edad`) VALUES
('', 'anthony', 'arroyo', '2021-03-16', 25),
('0001', 'Pepito', 'Soso', '1999-02-16', 14),
('0002', 'Rosita', 'Mesa', '1999-09-02', 14),
('0003', 'Carlitos', 'Tapia', '1999-05-12', 14),
('0004', 'Julio', 'Andrade', '1999-05-18', 14),
('0005', 'David', 'Gaona', '1999-05-16', 14),
('0006', 'Luis', 'Cepeda', '1999-02-12', 14),
('20', 'maria', 'solorsano', '1995-04-01', 25),
('5', 'emelec', 'Banchon', '1999-03-12', 25),
('6', 'Soraya', 'Banchon', '1964-06-13', 60),
('7', 'Alejandro', 'Chasin', '1995-04-01', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `IdAsignatura` char(4) NOT NULL,
  `NombresAs` char(50) NOT NULL,
  `NumHoras` int(11) NOT NULL,
  `IdEspecialidad` int(11) NOT NULL,
  `IdCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`IdAsignatura`, `NombresAs`, `NumHoras`, `IdEspecialidad`, `IdCurso`) VALUES
('0001', 'Realidad Virtual', 160, 1, 3),
('0002', 'Animacion 3D', 160, 1, 3),
('0003', 'Edicion de Video', 160, 1, 3),
('0004', 'Matematicas', 80, 2, 2),
('0005', 'Ofimatica', 80, 3, 1),
('0006', 'Ofimatica', 80, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas_profesor`
--

CREATE TABLE `asignaturas_profesor` (
  `IdAsignatura` char(4) NOT NULL,
  `IdProfesor` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignaturas_profesor`
--

INSERT INTO `asignaturas_profesor` (`IdAsignatura`, `IdProfesor`) VALUES
('0001', '0001'),
('0002', '0003'),
('0003', '0002'),
('0004', '0001'),
('0005', '0002'),
('0006', '0003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `Parametro` varchar(20) NOT NULL,
  `Valor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`Parametro`, `Valor`) VALUES
('Alumnos', '0006'),
('Asignaturas', '0006'),
('Asignaturas_Profesor', '0006'),
('Cursos', '0006'),
('Especialidades', '0006'),
('Parciales', '0006'),
('Profesores', '0006'),
('RegistroCalifaciones', '0006');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `IdCurso` int(11) NOT NULL,
  `IdEspecialidad` int(11) NOT NULL,
  `NombreCurso` char(15) NOT NULL,
  `Paralelo` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`IdCurso`, `IdEspecialidad`, `NombreCurso`, `Paralelo`) VALUES
(1, 0, 'Tercero', 'A4'),
(2, 0, 'Cuarto', 'A3'),
(3, 0, 'Primero', 'A1'),
(4, 0, 'Tercero', 'A4'),
(5, 0, 'Cuarto', 'A3'),
(6, 0, 'Primero', 'A1'),
(7, 1, 'Sexto', 'S6'),
(60, 40, 'administracion', 's5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `IdEspecialidad` int(11) NOT NULL,
  `NombreEsp` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`IdEspecialidad`, `NombreEsp`) VALUES
(1, 'Multimedia'),
(2, 'Informatica'),
(3, 'Lenguas'),
(4, 'Matematicas'),
(5, 'Historia'),
(6, 'Biologia'),
(7, 'Electronica'),
(11, 'agricultor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parciales`
--

CREATE TABLE `parciales` (
  `IdParcial` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parciales`
--

INSERT INTO `parciales` (`IdParcial`, `FechaInicio`, `FechaFin`) VALUES
(1, '2013-04-23', '2013-07-02'),
(2, '2013-06-12', '2013-09-02'),
(3, '2013-04-01', '2013-09-14'),
(4, '2013-04-23', '2013-07-02'),
(5, '2013-06-12', '2013-09-02'),
(6, '2013-04-01', '2013-09-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `IdProfesor` char(4) NOT NULL,
  `NombresProf` char(50) NOT NULL,
  `ApellidosProf` char(50) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `TituloAcademico` char(70) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`IdProfesor`, `NombresProf`, `ApellidosProf`, `FechaNacimiento`, `TituloAcademico`, `Edad`) VALUES
('', '', '', '0000-00-00', '', 20),
('0001', 'Juan', 'Perez', '1960-04-06', 'Doctor', 55),
('0002', 'Barak', 'Obama', '1970-06-09', 'Licenciado', 58),
('0003', 'Vladimir', 'Putin', '1980-11-07', 'PhD', 65),
('0004', 'Evo', 'Morales', '1960-04-06', 'Doctor', 55),
('0005', 'Pablo', 'Escobar', '1970-06-09', 'Licenciado', 58),
('0006', 'Bachar', 'Asad', '1980-11-07', 'PhD', 65),
('22', 'Horacio', 'torres', '1995-04-01', 'Licenciado', 25),
('35', 'mario', 'Castro', '2021-03-16', 'Licenciado', 50),
('40', 'mario', 'Castro', '2021-03-16', 'Licenciado', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocalifaciones`
--

CREATE TABLE `registrocalifaciones` (
  `IdRegistro` int(11) NOT NULL,
  `IdAlumno` char(4) NOT NULL,
  `IdProfesor` char(4) NOT NULL,
  `IdAsignatura` char(4) NOT NULL,
  `IdParcial` int(11) NOT NULL,
  `FechaRegistro` date NOT NULL,
  `Lecciones` decimal(2,2) DEFAULT NULL,
  `TareasClase` decimal(2,2) DEFAULT NULL,
  `TareasEClase` decimal(2,2) DEFAULT NULL,
  `TrabGrupal` decimal(2,2) DEFAULT NULL,
  `NotaParcial` decimal(2,2) DEFAULT NULL,
  `Ano_Lectivo` varchar(12) NOT NULL,
  `Observacion` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrocalifaciones`
--

INSERT INTO `registrocalifaciones` (`IdRegistro`, `IdAlumno`, `IdProfesor`, `IdAsignatura`, `IdParcial`, `FechaRegistro`, `Lecciones`, `TareasClase`, `TareasEClase`, `TrabGrupal`, `NotaParcial`, `Ano_Lectivo`, `Observacion`) VALUES
(1, '0001', '0001', '0001', 1, '2013-07-31', '0.99', '0.99', '0.99', '0.99', '0.99', '2013', 'Ninguna'),
(2, '0002', '0002', '0001', 1, '2013-05-28', '0.99', '0.99', '0.99', '0.99', '0.99', '2013', 'Ninguna'),
(3, '0003', '0003', '0001', 1, '2013-06-14', '0.99', '0.99', '0.99', '0.99', '0.99', '2013', 'Ninguna'),
(4, '0001', '0001', '0001', 1, '2013-07-31', '0.99', '0.99', '0.99', '0.99', '0.99', '2013', 'Ninguna'),
(5, '0002', '0002', '0001', 1, '2013-05-28', '0.99', '0.99', '0.99', '0.99', '0.99', '2013', 'Ninguna'),
(6, '0003', '0003', '0001', 1, '2013-06-14', '0.99', '0.99', '0.99', '0.99', '0.99', '2013', 'Ninguna');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`IdAlumno`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`IdAsignatura`),
  ADD KEY `Rel_AsignaturasCursos` (`IdCurso`),
  ADD KEY `Rel_AsignaturasEspecialidad` (`IdEspecialidad`);

--
-- Indices de la tabla `asignaturas_profesor`
--
ALTER TABLE `asignaturas_profesor`
  ADD KEY `Rel_AsignaturasProfesor` (`IdProfesor`),
  ADD KEY `Rel_AsignaturasProfesor_Asig` (`IdAsignatura`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`Parametro`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`IdCurso`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`IdEspecialidad`);

--
-- Indices de la tabla `parciales`
--
ALTER TABLE `parciales`
  ADD PRIMARY KEY (`IdParcial`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`IdProfesor`);

--
-- Indices de la tabla `registrocalifaciones`
--
ALTER TABLE `registrocalifaciones`
  ADD PRIMARY KEY (`IdRegistro`,`IdAlumno`,`IdProfesor`,`IdAsignatura`,`IdParcial`),
  ADD KEY `Rel_RegistroAlumno` (`IdAlumno`),
  ADD KEY `Rel_RegistroProfesor` (`IdProfesor`),
  ADD KEY `Rel_RegistroParcial` (`IdParcial`),
  ADD KEY `Rel_RegistroAsignaturas` (`IdAsignatura`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD CONSTRAINT `Rel_AsignaturasCursos` FOREIGN KEY (`IdCurso`) REFERENCES `cursos` (`IdCurso`),
  ADD CONSTRAINT `Rel_AsignaturasEspecialidad` FOREIGN KEY (`IdEspecialidad`) REFERENCES `especialidades` (`IdEspecialidad`);

--
-- Filtros para la tabla `asignaturas_profesor`
--
ALTER TABLE `asignaturas_profesor`
  ADD CONSTRAINT `Rel_AsignaturasProfesor` FOREIGN KEY (`IdProfesor`) REFERENCES `profesores` (`IdProfesor`),
  ADD CONSTRAINT `Rel_AsignaturasProfesor_Asig` FOREIGN KEY (`IdAsignatura`) REFERENCES `asignaturas` (`IdAsignatura`);

--
-- Filtros para la tabla `registrocalifaciones`
--
ALTER TABLE `registrocalifaciones`
  ADD CONSTRAINT `Rel_RegistroAlumno` FOREIGN KEY (`IdAlumno`) REFERENCES `alumnos` (`IdAlumno`),
  ADD CONSTRAINT `Rel_RegistroAsignaturas` FOREIGN KEY (`IdAsignatura`) REFERENCES `asignaturas` (`IdAsignatura`),
  ADD CONSTRAINT `Rel_RegistroParcial` FOREIGN KEY (`IdParcial`) REFERENCES `parciales` (`IdParcial`),
  ADD CONSTRAINT `Rel_RegistroProfesor` FOREIGN KEY (`IdProfesor`) REFERENCES `profesores` (`IdProfesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
