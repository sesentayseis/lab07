-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pagina_noticias
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `no_pri`
--

DROP TABLE IF EXISTS `no_pri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `no_pri` (
  `idno_pri` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(5000) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `info` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`idno_pri`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `no_pri`
--

LOCK TABLES `no_pri` WRITE;
/*!40000 ALTER TABLE `no_pri` DISABLE KEYS */;
INSERT INTO `no_pri` VALUES (1,NULL,'Perú al repechaje mundialista: Blanquirroja derrotó 2-0 a Paraguay y firmo el quinto puesto de Eliminatorias Qatar 2022','Con goles de Gianluca Lapadula y Yoshimar Yotún, la Selección Peruana consiguió derrotar 2-0 a Paraguay en el Estadio Nacional. En un correcto partido, la bicolor logró su pase al repechaje contra el representante de Asia (Australia o Émiratos Árabes Unidos) para conseguir su pase al Mundial Qatar 2022. Perú comenzó pisando el acelerador con una jugada que estuvo por convertir Gianluca Lapadula, pero minutos después el delantero de Benevento convirtió el primer gol a los 4 minutos. Una buena definición fue suficiente para la apertura en el marcador tras sensacional pase de Christian Cueva.'),(2,NULL,'Will Smith y la bofetada a Chris Rock en los Premios Oscar 2022: reacciones y ganadores, en directo','Tras recibir el premio a Mejor Actor por El método Williams, un Will Smith visiblemente emocionado quiso rectificar tras su puñetazo a Chris Rock en plena gala de los Premios Oscar 2022.Chris Rock ha comparado a Jada Pinkett Smith, que sufre alopecia, con la teniente O\'Neil de la saga G.I. Joe, una broma que ha llevado a Will Smith a propinar una bofetada al humorista.');
/*!40000 ALTER TABLE `no_pri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-01 20:29:02
