-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.32


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema proyecto
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ proyecto;
USE proyecto;

--
-- Table structure for table `proyecto`.`curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso` (
  `idcurso` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idioma` varchar(45) NOT NULL DEFAULT '',
  `descripcion` varchar(501) NOT NULL DEFAULT '',
  `nivel` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyecto`.`curso`
--

/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` (`idcurso`,`idioma`,`descripcion`,`nivel`) VALUES 
 (1,'english','CUALQUIERA','A1-A2');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;


--
-- Table structure for table `proyecto`.`palabra`
--

DROP TABLE IF EXISTS `palabra`;
CREATE TABLE `palabra` (
  `idpalabra` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idcurso` varchar(45) NOT NULL DEFAULT '',
  `palabra` varchar(100) NOT NULL DEFAULT '',
  `traduccion` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`idpalabra`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyecto`.`palabra`
--

/*!40000 ALTER TABLE `palabra` DISABLE KEYS */;
INSERT INTO `palabra` (`idpalabra`,`idcurso`,`palabra`,`traduccion`) VALUES 
 (1,'1','Hi','Hola'),
 (2,'1','of','de'),
 (3,'1','and','y'),
 (4,'1','in','en'),
 (5,'1','i','yo'),
 (6,'1','you','tù'),
 (7,'1','me','yo'),
 (8,'1','with','con'),
 (9,'1','not','no'),
 (10,'1','he','el'),
 (11,'1','she','ella'),
 (12,'1','to do','hacer'),
 (13,'1','to be','ser'),
 (14,'1','to cook','cocinar'),
 (15,'1','this','esto'),
 (16,'1','by','por'),
 (17,'1','from','desde'),
 (18,'1','is','es'),
 (19,'1','how','como'),
 (20,'1','me','yo'),
 (21,'1','house','casa'),
 (22,'1','garden','jardin'),
 (23,'1','bathroom','baño'),
 (24,'1','living room','sala de estar'),
 (25,'1','day','dia'),
 (26,'1','to give','dar'),
 (27,'1','to want','querer'),
 (28,'1','because','porque'),
 (29,'1','any','alguno'),
 (30,'1','even','incluso'),
 (31,'1','new','nuevo'),
 (32,'1','well','bien'),
 (33,'1','first','primero'),
 (34,'1','to work','trabajar'),
 (35,'1','our','nuestro'),
 (36,'1','one','uno'),
 (37,'1','two','dos'),
 (38,'1','three','tres');
INSERT INTO `palabra` (`idpalabra`,`idcurso`,`palabra`,`traduccion`) VALUES 
 (39,'1','four','cuatro'),
 (40,'1','five','cinco'),
 (41,'1','six','seis'),
 (42,'1','seven','siete'),
 (43,'1','eight','ocho'),
 (44,'1','nine','nueve'),
 (45,'1','ten','diez'),
 (46,'1','to use','usar'),
 (47,'1','also','tambien'),
 (48,'1','to think','pensar'),
 (49,'1','back','atras'),
 (50,'1','after','despues'),
 (51,'1','over','encima'),
 (52,'1','come','venir'),
 (53,'1','only','solo'),
 (54,'1','to look','mirar'),
 (55,'1','than','que'),
 (56,'1','other','otro'),
 (57,'1','to see','ver'),
 (58,'1','them','ellos'),
 (59,'1','good','bueno'),
 (60,'1','year','año'),
 (61,'1','people','gente'),
 (62,'1','to know','saber'),
 (63,'1','into','dentro'),
 (64,'1','your','tu'),
 (65,'1','just','solo'),
 (66,'1','time','tiempo'),
 (67,'1','to can','poder'),
 (68,'1','when','cuando'),
 (69,'1','where','donde'),
 (70,'1','to go','ir'),
 (71,'1','to make','crear'),
 (72,'1','if','si'),
 (73,'1','up','arriba'),
 (74,'1','out','afuera'),
 (75,'1','what','que');
INSERT INTO `palabra` (`idpalabra`,`idcurso`,`palabra`,`traduccion`) VALUES 
 (76,'1','who','quien'),
 (77,'1','there','alla'),
 (78,'1','will','(futuro simple)'),
 (79,'1','was','(pasado simple)'),
 (80,'1','an','un'),
 (81,'1','or','o'),
 (82,'1','to say','decir'),
 (83,'1','we','nosotros'),
 (84,'1','their','ellos'),
 (85,'1','but','pero'),
 (86,'1','as','como'),
 (87,'1','to sit','sentarse'),
 (88,'1','car','auto'),
 (89,'1','blue','azul'),
 (90,'1','red','rojo'),
 (91,'1','green','verde'),
 (92,'1','black','negro'),
 (93,'1','grey','gris'),
 (94,'1','white','blanco'),
 (95,'1','table','mesa'),
 (96,'1','chair','silla'),
 (97,'1','chalk','tiza'),
 (98,'1','keyboard','teclado'),
 (99,'1','finger','dedo'),
 (100,'1','head','cabeza');
/*!40000 ALTER TABLE `palabra` ENABLE KEYS */;


--
-- Table structure for table `proyecto`.`usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL DEFAULT '',
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `contraseña` varchar(45) NOT NULL DEFAULT '',
  `permiso` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(101) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyecto`.`usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`,`usuario`,`nombre`,`contraseña`,`permiso`,`email`) VALUES 
 (1,'Robert','Roberto','HydapEp+514','usuario','roberto@gmail.com'),
 (2,'Avrin','Ismael','PQKoU@Ta','admin','Avrin9012@gmail.com');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
