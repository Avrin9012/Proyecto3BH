-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 11:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(10) UNSIGNED NOT NULL,
  `idioma` varchar(45) NOT NULL DEFAULT '',
  `descripcion` varchar(501) NOT NULL DEFAULT '',
  `nivel` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`idcurso`, `idioma`, `descripcion`, `nivel`) VALUES
(1, 'english', 'CUALQUIERA', 'A1-A2'),
(2, 'english', 'CUALQUIERA', 'B1-B2'),
(3, 'english', 'CUALQUIERA', 'C1-C2');

-- --------------------------------------------------------

--
-- Table structure for table `palabra`
--

CREATE TABLE `palabra` (
  `idpalabra` int(10) UNSIGNED NOT NULL,
  `idcurso` varchar(45) NOT NULL DEFAULT '',
  `palabra` varchar(100) NOT NULL DEFAULT '',
  `traduccion` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `palabra`
--

INSERT INTO `palabra` (`idpalabra`, `idcurso`, `palabra`, `traduccion`) VALUES
(1, '1', 'Hi', 'Hola'),
(2, '1', 'of', 'de'),
(3, '1', 'and', 'y'),
(4, '1', 'in', 'en'),
(5, '1', 'i', 'yo'),
(6, '1', 'you', 'tù'),
(7, '1', 'me', 'yo'),
(8, '1', 'with', 'con'),
(9, '1', 'not', 'no'),
(10, '1', 'he', 'el'),
(11, '1', 'she', 'ella'),
(12, '1', 'to do', 'hacer'),
(13, '1', 'to be', 'ser'),
(14, '1', 'to cook', 'cocinar'),
(15, '1', 'this', 'esto'),
(16, '1', 'by', 'por'),
(17, '1', 'from', 'desde'),
(18, '1', 'is', 'es'),
(19, '1', 'how', 'como'),
(20, '1', 'me', 'yo'),
(21, '1', 'house', 'casa'),
(22, '1', 'garden', 'jardin'),
(23, '1', 'bathroom', 'baño'),
(24, '1', 'living room', 'sala de estar'),
(25, '1', 'day', 'dia'),
(26, '1', 'to give', 'dar'),
(27, '1', 'to want', 'querer'),
(28, '1', 'because', 'porque'),
(29, '1', 'any', 'alguno'),
(30, '1', 'even', 'incluso'),
(31, '1', 'new', 'nuevo'),
(32, '1', 'well', 'bien'),
(33, '1', 'first', 'primero'),
(34, '1', 'to work', 'trabajar'),
(35, '1', 'our', 'nuestro'),
(36, '1', 'one', 'uno'),
(37, '1', 'two', 'dos'),
(38, '1', 'three', 'tres'),
(39, '1', 'four', 'cuatro'),
(40, '1', 'five', 'cinco'),
(41, '1', 'six', 'seis'),
(42, '1', 'seven', 'siete'),
(43, '1', 'eight', 'ocho'),
(44, '1', 'nine', 'nueve'),
(45, '1', 'ten', 'diez'),
(46, '1', 'to use', 'usar'),
(47, '1', 'also', 'tambien'),
(48, '1', 'to think', 'pensar'),
(49, '1', 'back', 'atras'),
(50, '1', 'after', 'despues'),
(51, '1', 'over', 'encima'),
(52, '1', 'come', 'venir'),
(53, '1', 'only', 'solo'),
(54, '1', 'to look', 'mirar'),
(55, '1', 'than', 'que'),
(56, '1', 'other', 'otro'),
(57, '1', 'to see', 'ver'),
(58, '1', 'them', 'ellos'),
(59, '1', 'good', 'bueno'),
(60, '1', 'year', 'año'),
(61, '1', 'people', 'gente'),
(62, '1', 'to know', 'saber'),
(63, '1', 'into', 'dentro'),
(64, '1', 'your', 'tu'),
(65, '1', 'just', 'solo'),
(66, '1', 'time', 'tiempo'),
(67, '1', 'to can', 'poder'),
(68, '1', 'when', 'cuando'),
(69, '1', 'where', 'donde'),
(70, '1', 'to go', 'ir'),
(71, '1', 'to make', 'crear'),
(72, '1', 'if', 'si'),
(73, '1', 'up', 'arriba'),
(74, '1', 'out', 'afuera'),
(75, '1', 'what', 'que'),
(76, '1', 'who', 'quien'),
(77, '1', 'there', 'alla'),
(78, '1', 'will', '(futuro simple)'),
(79, '1', 'was', '(pasado simple)'),
(80, '1', 'an', 'un'),
(81, '1', 'or', 'o'),
(82, '1', 'to say', 'decir'),
(83, '1', 'we', 'nosotros'),
(84, '1', 'their', 'ellos'),
(85, '1', 'but', 'pero'),
(86, '1', 'as', 'como'),
(87, '1', 'to sit', 'sentarse'),
(88, '1', 'car', 'auto'),
(89, '1', 'blue', 'azul'),
(90, '1', 'red', 'rojo'),
(91, '1', 'green', 'verde'),
(92, '1', 'black', 'negro'),
(93, '1', 'grey', 'gris'),
(94, '1', 'white', 'blanco'),
(95, '1', 'table', 'mesa'),
(96, '1', 'chair', 'silla'),
(97, '1', 'chalk', 'tiza'),
(98, '1', 'keyboard', 'teclado'),
(99, '1', 'finger', 'dedo'),
(100, '1', 'head', 'cabeza'),
(101, '2', 'Spacebar medium', 'Barra espaciadora medio'),
(102, '2', 'Bad', 'Malo'),
(103, '2', 'Good', 'Bueno'),
(104, '2', 'Brother', 'Hermano'),
(105, '2', 'Sister', 'Hermana'),
(106, '2', 'Mom', 'Mama (informal)'),
(107, '2', 'Dad', 'Papa (informal)'),
(108, '2', 'Mother', 'Mama'),
(109, '2', 'Father', 'Papa'),
(110, '2', 'Daughter', 'Hija'),
(111, '2', 'Son', 'Hijo'),
(112, '2', 'Neighbour', 'Vecino'),
(113, '2', 'Grandfather', 'Abuelo'),
(114, '2', 'Grandmother', 'Abuela'),
(115, '2', 'Family', 'Familia'),
(116, '2', 'Buy', 'Çomprar'),
(117, '2', 'Build', 'Construir'),
(118, '2', 'Enter', 'Entrar'),
(119, '2', 'Exit', 'Salir'),
(120, '2', 'Close', 'Cerrar'),
(121, '2', 'Open', 'Abrir'),
(122, '2', 'Film', 'Pelicula'),
(123, '2', 'Game', 'Juego'),
(124, '2', 'Garden', 'Jardin'),
(125, '2', 'Give', 'Dar'),
(126, '2', 'Take', 'Tomar'),
(127, '2', 'Drink', 'Tomar'),
(128, '2', 'Grow', 'Crecer'),
(129, '2', 'Happy', 'Feliz'),
(130, '2', 'Have', 'Tener'),
(131, '2', 'Help', 'Ayuda'),
(132, '2', 'High', 'Alto'),
(133, '2', 'Low', 'Bajo'),
(134, '2', 'Join', 'Unirse'),
(135, '2', 'Kill', 'Matar'),
(136, '2', 'Kid', 'Niño'),
(137, '2', 'Knowledge', 'Conocimiento'),
(138, '2', 'Language', 'Idioma'),
(139, '2', 'Laugh', 'Reir'),
(140, '2', 'Izquierda', 'Left'),
(141, '2', 'Right', 'Derecha'),
(142, '2', 'Up', 'Arriba'),
(143, '2', 'Down', 'Abajo'),
(144, '2', 'Foward', 'Adelante'),
(145, '2', 'Backward', 'Atras'),
(146, '2', 'Leader', 'Lider'),
(147, '2', 'Light', 'Luz'),
(148, '2', 'Dark', 'Oscuridad'),
(149, '2', 'Listen', 'Escuchar'),
(150, '2', 'Like', 'Gustar'),
(151, '2', 'Day', 'Dia'),
(152, '2', 'Night', 'Noche'),
(153, '2', 'Cry', 'Llorar'),
(154, '3', 'Spacebar 3 level', 'Barra espaciadora nivel 3'),
(155, '3', 'Blasphemy', 'Blasfemia'),
(156, '3', 'Burgoeois', 'Burgesia'),
(157, '3', 'Cryptic', 'Criptico'),
(158, '3', 'Enchance', 'Mejorar algo'),
(159, '3', 'Equivalent', 'Equivalente'),
(160, '3', 'Ravenous', 'Habre voraz'),
(161, '3', 'Starve', 'Inanicion'),
(162, '3', 'Delightful', 'Encantador'),
(163, '3', 'Futhermore', 'Ademas'),
(164, '3', 'Flawless', 'Perfecto'),
(165, '3', 'Superflious', 'Superfluo'),
(166, '3', 'Comrad', 'Camarada'),
(167, '3', 'Soul', 'Alma'),
(168, '3', 'Slaughterhouse', 'Matadero'),
(169, '3', 'Farm', 'Granja'),
(170, '3', 'Phermacy', 'Fermacia'),
(171, '3', 'Storage', 'Almacenamiento'),
(172, '3', 'Mount', 'Montar'),
(173, '3', 'Behaviour', 'Comportamiento'),
(174, '3', 'Business', 'Empresa'),
(175, '3', 'Death', 'Muerte'),
(176, '3', 'Disease', 'Enfermedad'),
(177, '3', 'Blood', 'Sangre'),
(178, '3', 'Address', 'Direccion'),
(179, '3', 'Straight', 'Recto'),
(180, '3', 'Alone', 'Solo'),
(181, '3', 'Adult', 'Adulto'),
(182, '3', 'Teen', 'Adolecente'),
(183, '3', 'Butterfly', 'Mariposa'),
(184, '3', 'Add', 'Añadir'),
(185, '3', 'Cheap', 'Barato'),
(186, '3', 'Clean', 'Limpiar'),
(187, '3', 'Price', 'Precio'),
(188, '3', 'Cost', 'Costo');

-- --------------------------------------------------------

--
-- Table structure for table `sets`
--

CREATE TABLE `sets` (
  `title` varchar(250) NOT NULL,
  `term` varchar(250) NOT NULL,
  `defination` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `user` varchar(10000) NOT NULL,
  `IdUserCard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sets`
--

INSERT INTO `sets` (`title`, `term`, `defination`, `img`, `user`, `IdUserCard`) VALUES
('Tu mama', 'Es', 'Gay', '', 'Avrin', 1),
('Tu papa', 'es', 'Lebiano', '', 'Avrin', 2),
('asd', 'sadv', 'sadv', 'Cosa.jpg', 'Avrin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `soporte`
--

CREATE TABLE `soporte` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `id_mensaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soporte`
--

INSERT INTO `soporte` (`name`, `email`, `phone`, `message`, `id_mensaje`) VALUES
('sdfgsdfg', 'sdfgsdfg@gmail.com', 463123, 'Tu papa esasd', 2),
('sdfgsdfgsdasd', 'sdfasdb@gmail.com', 323124, 'Esto funca?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(45) NOT NULL DEFAULT '',
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `contraseña` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(101) NOT NULL DEFAULT '',
  `user_img` varchar(200) NOT NULL,
  `Membresia` tinyint(1) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Biografia` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `contraseña`, `email`, `user_img`, `Membresia`, `Admin`, `Biografia`) VALUES
(2, 'Avrin', 'Ismael', '123', 'Avrin9012@gmail.com', '1_RecbKqC2O6ll-V5wobgyuQ.jpeg', 1, 1, '\"Yo me fuí to fuerte a mi casa y luego no pude dormir, por eso tengo ojeras... luego con mi amigo fuimos a una aventura con un velociraptor y con un velociprey, por ello no pudimos crear la vacuna y por tanto tu mama es gay... y así es como mate a Hitler junto a Stalin y salvamos la luna\"'),
(24, 'Pepito', 'pepote', '1234', 'Pepito123@gmail.com', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indexes for table `palabra`
--
ALTER TABLE `palabra`
  ADD PRIMARY KEY (`idpalabra`);

--
-- Indexes for table `soporte`
--
ALTER TABLE `soporte`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `palabra`
--
ALTER TABLE `palabra`
  MODIFY `idpalabra` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `soporte`
--
ALTER TABLE `soporte`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
