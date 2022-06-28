/*
SQLyog Enterprise v12.09 (64 bit)
MySQL - 10.4.10-MariaDB : Database - biblioteca
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`biblioteca` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `biblioteca`;

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `categoria` */

insert  into `categoria`(`id`,`nombre`) values (1,'Ficcion'),(2,'Juvenile'),(3,'Poetico'),(4,'Recreativo'),(5,'Monografia'),(6,'De referencia o consulta'),(7,'Biografias'),(8,'Novela'),(9,'Fantasia'),(10,'Historia'),(11,'Suspenso'),(12,'Humor'),(13,'Ciencia'),(14,'Programacion'),(15,'Informatica'),(16,'Tecnologia'),(17,'Musica'),(18,'Terror'),(19,'Literatura');

/*Table structure for table `libro` */

DROP TABLE IF EXISTS `libro`;

CREATE TABLE `libro` (
  `ISBN` varchar(10) NOT NULL,
  `ejemplar` varchar(10) NOT NULL,
  `nombre_libro` varchar(40) DEFAULT NULL,
  `categoria` int(1) DEFAULT NULL,
  `n_paginas` int(11) DEFAULT NULL,
  PRIMARY KEY (`ISBN`,`ejemplar`),
  KEY `Libro_Categoria` (`categoria`),
  CONSTRAINT `Libro_Categoria` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `libro` */

insert  into `libro`(`ISBN`,`ejemplar`,`nombre_libro`,`categoria`,`n_paginas`) values ('11-11-11','1','JAVA',14,320),('11-11-11','2','JAVA',14,320),('11-11-11','3','JAVA',14,320),('11-11-11','4','JAVA',14,320),('11-213-937','1','Programacion WEB',14,230),('11-213-937','2','Programacion WEB',14,230),('11-213-937','3','Programacion WEB',14,230),('11-213-937','4','Programacion WEB',14,230),('20221506','1','PHP',14,300),('20221506','2','PHP',14,300),('34-000-000','10','Programacion Movil',14,480),('34-000-000','4','Programacion Movil',14,480),('34-000-000','5','Programacion Movil',14,480),('34-000-000','9','Programacion Movil',14,480),('84-369-044','9','La polifonia clasica',17,169),('84-369-044','9X','La polifonia clasica',17,169),('84-369-044','9XX','La polifonia clasica',17,169),('84-932914-','1','Salmos de visperas',1,135),('978-84-939','1','El corazon de la piedra',8,560),('978-84-939','2','El corazon de la piedra',8,560),('978-84-939','3','El corazon de la piedra',8,560),('978-958-24','1','Experiencias de aprendizaje Ciencias 10',13,160),('9788441544','2021F','El Libro del Hacker',15,744),('9788441544','2021G','El Libro del Hacker',15,744),('9789588461','XX','OPIO EN LAS NUBES',8,180);

/*Table structure for table `prestamo` */

DROP TABLE IF EXISTS `prestamo`;

CREATE TABLE `prestamo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libro_ISBN` varchar(10) DEFAULT NULL,
  `libro_ejemplar` varchar(10) DEFAULT NULL,
  `usuario_cedula` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_cedula` (`usuario_cedula`),
  KEY `libro_ISBN` (`libro_ISBN`,`libro_ejemplar`),
  CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`libro_ISBN`, `libro_ejemplar`) REFERENCES `libro` (`ISBN`, `ejemplar`),
  CONSTRAINT `usuario_cedula` FOREIGN KEY (`usuario_cedula`) REFERENCES `usuario` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `prestamo` */

insert  into `prestamo`(`id`,`libro_ISBN`,`libro_ejemplar`,`usuario_cedula`,`fecha`) values (36,'20221506','1','1063142471','2022-06-15');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`cedula`,`nombre`,`fecha_nacimiento`,`sexo`,`tipo`,`estado`,`pass`) values ('100187321','Antonio Zabala','1900-01-01','M','E','0',NULL),('1001874388','Snaider Orozco','2000-06-27','M','B','1','1001874388'),('1001912708','David Palencia','1976-12-12','M','P','1',NULL),('1007116916','Manuel Duran','1980-10-18','M','B','1','1007116916'),('1007128223','David Sarmiento','2006-03-04','M','E','0',NULL),('1041902067','Vanessa Rua','1983-10-10','F','P','0',NULL),('1042456282','Yasarith Barrazo','1972-12-12','F','P','0',NULL),('1043668399','Carolina Acuna','1970-11-23','F','E','0',NULL),('1046817752','Andres Villa','1999-07-07','M','P','0',NULL),('1047362044','Antonio Badillo','1992-08-05','M','E','0',NULL),('1063142471','Dario Silva','1970-12-31','M','E','1',NULL),('1083039736','Carolina Estrada','1987-08-08','F','E','1',NULL),('1129519952','Leonid Martinez','1989-03-12','M','P','0',NULL),('1140862438','Lilibeth Duarte','1976-03-26','F','E','1',NULL),('1140893856','Patricia Mercado','2006-04-25','F','P','0',NULL),('1143151155','Jainer Galindo','1983-10-14','M','P','1',NULL),('1143167141','Paola Dominguez','1980-08-19','F','E','0',NULL),('1143168930','Anibal Redondo','1986-03-03','M','P','1',NULL),('1143447136','David Bohorques','2005-02-22','O','P','1',NULL),('1192765397','Vanessa Rodriguez','1995-09-03','F','P','1',NULL),('1192788441','Carolina Bonett','1986-02-04','F','E','0',NULL),('1193029452','Paola Bolano','1972-07-26','F','P','0',NULL),('1234','Admin','2022-05-31','M','B','1','1234'),('140904029 ','David Palma','1982-07-19','M','E','1',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
