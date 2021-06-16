-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2021 at 05:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tzolkin`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ap_paterno` varchar(45) NOT NULL,
  `ap_materno` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ahorcado`
--

DROP TABLE IF EXISTS `ahorcado`;
CREATE TABLE `ahorcado` (
  `grade` float NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ahorcado`
--

INSERT INTO `ahorcado` (`grade`, `alumno_id`, `id`) VALUES
(0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ap_paterno` varchar(45) NOT NULL,
  `ap_materno` varchar(45) NOT NULL,
  `f_nacimiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) NOT NULL,
  `contra` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--

DROP TABLE IF EXISTS `clases`;
CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `profesor_id` int(11) DEFAULT NULL,
  `grado_id` int(11) NOT NULL,
  `grupo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clases`
--

INSERT INTO `clases` (`id`, `materia_id`, `profesor_id`, `grado_id`, `grupo`) VALUES
(1, 2, 2, 6, '2CM16'),
(3, 2, 2, 3, '3CV4'),
(4, 2, 2, 3, '4CM10');

-- --------------------------------------------------------

--
-- Table structure for table `clases_alumno`
--

DROP TABLE IF EXISTS `clases_alumno`;
CREATE TABLE `clases_alumno` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `clase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dado`
--

DROP TABLE IF EXISTS `dado`;
CREATE TABLE `dado` (
  `id` int(11) NOT NULL,
  `grade` float NOT NULL,
  `alumno_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dado`
--

INSERT INTO `dado` (`id`, `grade`, `alumno_id`) VALUES
(1, 7.5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE `examen` (
  `id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `calificación` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grado`
--

DROP TABLE IF EXISTS `grado`;
CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `grado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grado`
--

INSERT INTO `grado` (`id`, `grado`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto'),
(6, 'Sexto');

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id`, `nombre`) VALUES
(1, 'Español'),
(2, 'Biología'),
(3, 'Matematicas');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `material_clases`
--

DROP TABLE IF EXISTS `material_clases`;
CREATE TABLE `material_clases` (
  `id` int(11) NOT NULL,
  `clase_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ap_paterno` varchar(45) NOT NULL,
  `ap_materno` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Alumno'),
(2, 'Profesor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `tipo`) VALUES
(2, 'dany', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ahorcado`
--
ALTER TABLE `ahorcado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ahoracado_student_idx` (`alumno_id`);

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_profesor_id_idx` (`profesor_id`),
  ADD KEY `fk_materia_id_idx` (`materia_id`),
  ADD KEY `fk_grado_id_idx` (`grado_id`);

--
-- Indexes for table `clases_alumno`
--
ALTER TABLE `clases_alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_alumno_id_idx` (`alumno_id`),
  ADD KEY `fk_clase_id_idx` (`clase_id`);

--
-- Indexes for table `dado`
--
ALTER TABLE `dado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teacher_id_idx` (`profesor_id`),
  ADD KEY `fk_student_id_idx` (`alumno_id`);

--
-- Indexes for table `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_materia_idx` (`materia_id`),
  ADD KEY `fk_grado_idx` (`grado_id`);

--
-- Indexes for table `material_clases`
--
ALTER TABLE `material_clases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clase_material_id_idx` (`clase_id`),
  ADD KEY `fk_material_clase_id_idx` (`material_id`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tipo_usuario_idx` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ahorcado`
--
ALTER TABLE `ahorcado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clases_alumno`
--
ALTER TABLE `clases_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dado`
--
ALTER TABLE `dado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examen`
--
ALTER TABLE `examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material_clases`
--
ALTER TABLE `material_clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ahorcado`
--
ALTER TABLE `ahorcado`
  ADD CONSTRAINT `fk_ahoracado_student` FOREIGN KEY (`alumno_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `fk_grado_id` FOREIGN KEY (`grado_id`) REFERENCES `grado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_materia_id` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_profesor_id` FOREIGN KEY (`profesor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clases_alumno`
--
ALTER TABLE `clases_alumno`
  ADD CONSTRAINT `fk_alumno_id` FOREIGN KEY (`alumno_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_clase_id` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`alumno_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_teacher_id` FOREIGN KEY (`profesor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `fk_grado` FOREIGN KEY (`grado_id`) REFERENCES `grado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_materia` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `material_clases`
--
ALTER TABLE `material_clases`
  ADD CONSTRAINT `fk_clase_material_id` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_material_clase_id` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_tipo_usuario` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
