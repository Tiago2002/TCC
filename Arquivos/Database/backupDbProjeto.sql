-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: dbProjetoTCC
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Areas`
--

DROP TABLE IF EXISTS `Areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Areas` (
  `idArea` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomeArea` varchar(50) NOT NULL,
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Areas`
--

LOCK TABLES `Areas` WRITE;
/*!40000 ALTER TABLE `Areas` DISABLE KEYS */;
INSERT INTO `Areas` VALUES (1,'Manutenção Elétrica'),(2,'Manutenção Hidráulica'),(3,'Pintura'),(4,'Instalações'),(5,'Montagem de Móveis');
/*!40000 ALTER TABLE `Areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Bairros`
--

DROP TABLE IF EXISTS `Bairros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bairros` (
  `idBairro` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomeBairro` varchar(100) NOT NULL,
  `idMunicipio` int(5) unsigned NOT NULL,
  PRIMARY KEY (`idBairro`),
  KEY `idMunicipio` (`idMunicipio`),
  CONSTRAINT `Bairros_ibfk_1` FOREIGN KEY (`idMunicipio`) REFERENCES `Municipios` (`idMunicipio`)
) ENGINE=InnoDB AUTO_INCREMENT=685 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bairros`
--

LOCK TABLES `Bairros` WRITE;
/*!40000 ALTER TABLE `Bairros` DISABLE KEYS */;
INSERT INTO `Bairros` VALUES (1,'Água Rasa',1),(2,'Alto Da Mooca',1),(3,'Aricanduva',1),(4,'Artur Alvim',1),(5,'Bairro do Limoeiro',1),(6,'Bairro do Palanque',1),(7,'Bairro Dos Pereira',1),(8,'Barro Branco',1),(9,'Belém',1),(10,'Belenzinho',1),(11,'Burgo Paulista',1),(12,'Cangaíba',1),(13,'Capão do Embira',1),(14,'Carrãozinho',1),(15,'Catumbi',1),(16,'Chácara Belenzinho',1),(17,'ChÁcara Califórnia',1),(18,'Chácara Califórnia',1),(19,'Chácara Cruzeiro do Sul',1),(20,'Chácara da Penha',1),(21,'Chácara da Vovó Luiza',1),(22,'Chácara do Piqueri',1),(23,'Chácara Dona Olívia',1),(24,'Chácara Figueira Grande',1),(25,'Chácara Mafalda',1),(26,'Chácara Maranhão',1),(27,'Chácara Paraíso',1),(28,'Chácara Santo Antonio',1),(29,'Chácara Santo Antônio',1),(30,'Chácara São Marcos',1),(31,'Chácara Seis de Outubro',1),(32,'Chácara Tatuapé',1),(33,'Cidade A.E.Carvalho',1),(34,'Cidade Castro Alves',1),(35,'Cidade Centenário',1),(36,'Cidade Continental',1),(37,'Cidade Kemel',1),(38,'Cidade Líder',1),(39,'Cidade Mãe do Ceu',1),(40,'Cidade Nitro Operária',1),(41,'Cidade Nova São Miguel',1),(42,'Cidade Patriarca',1),(43,'Cidade Popular',1),(44,'Cidade Quarto Centenário',1),(45,'Cidade São Mateus',1),(46,'Cidade São Miguel',1),(47,'Cidade Satélite Santa Barbara',1),(48,'Cidade Tiradentes',1),(49,'Cj Hab Cintra Gordinho',1),(50,'Cj Hab Juscelino Kubitschek',1),(51,'Cj Res Oratório 2',1),(52,'Cohab Fazenda do Carmo',1),(53,'Cohab Guaianases',1),(54,'Cohab Iva Santa Etelvina',1),(55,'Cohab Santa Etelvina 1 B',1),(56,'Cohab Santa Etelvina 1A',1),(57,'Cohab Santa Etelvina 2 A',1),(58,'Cohab Santa Etelvina 2 B',1),(59,'Cohab Santa Etelvina 3 A',1),(60,'Cohab Santa Etelvina 4',1),(61,'Cohab Santa Etelvina 5 A',1),(62,'Cohab Santa Etelvina 6 A',1),(63,'Cohab Santa Etelvina 7',1),(64,'Cohab São Carlos',1),(65,'Cohab São Miguel',1),(66,'Cohab Sítio Conceição',1),(67,'Cohab Vila Progresso 1',1),(68,'Cohab Vila Progresso 2',1),(69,'Cohab Vila Silvia',1),(70,'Cojunto Habitacional Cidade Tiradentes',1),(71,'Conjunto Araucária',1),(72,'Conjunto dos Pinheiros',1),(73,'Conjunto Esmeralda',1),(74,'Conjunto Habitacional A.E. Carvalho',1),(75,'Conjunto Habitacional Águia De Haia',1),(76,'Conjunto Habitacional Baltazar',1),(77,'Conjunto Habitacional Barreira Grande',1),(78,'Conjunto Habitacional Barro Branco 2',1),(79,'Conjunto Habitacional Camilópolis',1),(80,'Conjunto Habitacional Dom Joao Nery',1),(81,'Conjunto Habitacional Encosta Norte',1),(82,'Conjunto Habitacional Fazenda Guaianases A/B',1),(83,'Conjunto Habitacional Fazenda Itaim',1),(84,'Conjunto Habitacional Fazenda Juta',1),(85,'Conjunto Habitacional Gleba do Pêssego',1),(86,'Conjunto Habitacional Hospital Itaquera',1),(87,'Conjunto Habitacional Inácio Monteiro',1),(88,'Conjunto Habitacional Itaim Paulista',1),(89,'Conjunto Habitacional Itaquera 4',1),(90,'Conjunto Habitacional Jardim Mabel',1),(91,'Conjunto Habitacional Jardim Sao Francisco',1),(92,'Conjunto Habitacional José Bonifácio',1),(93,'Conjunto Habitacional Juta',1),(94,'Conjunto Habitacional Limoeiro',1),(95,'Conjunto Habitacional Mal Mascarenhas De Moraes',1),(96,'Conjunto Habitacional Marechal Tito',1),(97,'Conjunto Habitacional Nazaré',1),(98,'Conjunto Habitacional Padre Jose De Anchieta',1),(99,'Conjunto Habitacional Padre Manuel De Paiva',1),(100,'Conjunto Habitacional Santa Etelvina Barro Branco 1',1),(101,'Conjunto Habitacional Vila Conceição',1),(102,'Conjunto Perola',1),(103,'Conjunto Promorar Rio Claro',1),(104,'Conjunto Promorar Sapopemba',1),(105,'Conjunto Residencial (Ant. Bairro F. Lima) Prestes Maia',1),(106,'Conjunto Residencial Gonzaga',1),(107,'Conjunto Residencial Padre Manuel Da Nobrega',1),(108,'Conjunto Residencial Prestes Maia',1),(109,'Conjunto Residencial Teotônio Vilela',1),(110,'Engenheiro Goulart',1),(111,'Engenheiro Trindade',1),(112,'Ermelino Matarazzo',1),(113,'Fazenda Aricanduva',1),(114,'Fazenda Caguaçu',1),(115,'Fazenda do Carmo',1),(116,'Fazenda Itaim',1),(117,'Fazenda Nossa Senhora do Carmo',1),(118,'Guaianases',1),(119,'Guaiauna',1),(120,'Hipódromo',1),(121,'Iguatemi',1),(122,'Itaim Paulista',1),(123,'Itaquera',1),(124,'Jardim Adelaide',1),(125,'Jardim Adutora',1),(126,'Jardim Aidar',1),(127,'Jardim Aimoré',1),(128,'Jardim Alto Alegre',1),(129,'Jardim Alto Pedroso',1),(130,'Jardim Amaro',1),(131,'Jardim America da Penha',1),(132,'Jardim Ana Rosa',1),(133,'Jardim Anália Franco',1),(134,'Jardim Ângela',1),(135,'Jardim Aricanduva',1),(136,'Jardim Arizona',1),(137,'Jardim Artur Alvim',1),(138,'Jardim Assunção',1),(139,'Jardim Augusto',1),(140,'Jardim Aurora',1),(141,'Jardim Avelino',1),(142,'Jardim Bartira',1),(143,'Jardim Beatriz',1),(144,'Jardim Belém',1),(145,'Jardim Benfica',1),(146,'Jardim Brasil',1),(147,'Jardim Brasília',1),(148,'Jardim Brigida',1),(149,'Jardim Buriti',1),(150,'Jardim Caguacú',1),(151,'Jardim Camargo',1),(152,'Jardim Campos',1),(153,'Jardim Cangaíba',1),(154,'Jardim Cardoso',1),(155,'Jardim Carolina',1),(156,'Jardim Catarina',1),(157,'Jardim Célia',1),(158,'Jardim Centenário',1),(159,'Jardim Cibele',1),(160,'Jardim Cinco de Julho',1),(161,'Jardim Cisper',1),(162,'Jardim Clara Regina',1),(163,'Jardim Cleide',1),(164,'Jardim Coimbra',1),(165,'Jardim Colorado',1),(166,'Jardim Concórdia',1),(167,'Jardim Conquista',1),(168,'Jardim Cotching',1),(169,'Jardim Cotinha',1),(170,'Jardim da Casa Pintada',1),(171,'Jardim da Figueira',1),(172,'Jardim Da Figueira',1),(173,'Jardim Dalmo',1),(174,'Jardim Danfer',1),(175,'Jardim das Camélias',1),(176,'Jardim das Carmelitas',1),(177,'Jardim das Laranjeiras',1),(178,'Jardim das Oliveiras',1),(179,'Jardim das Rosas',1),(180,'Jardim de Lorenzo',1),(181,'Jardim Dias',1),(182,'Jardim Divino',1),(183,'Jardim do Campo',1),(184,'Jardim do Castelo',1),(185,'Jardim do Norte',1),(186,'Jardim Dona Sinha',1),(187,'Jardim dos Ipês',1),(188,'Jardim Egle',1),(189,'Jardim Elba',1),(190,'Jardim Elian',1),(191,'Jardim Eliane',1),(192,'Jardim Elsa',1),(193,'Jardim Ester',1),(194,'Jardim Etelvina',1),(195,'Jardim Eva',1),(196,'Jardim Fernandes',1),(197,'Jardim Flavio',1),(198,'Jardim Fluminense',1),(199,'Jardim Fonte São Miguel',1),(200,'Jardim Galli',1),(201,'Jardim Gianetti',1),(202,'Jardim Gondolo',1),(203,'Jardim Gonzaga',1),(204,'Jardim Grimaldi',1),(205,'Jardim Guaianases',1),(206,'Jardim Guairacá',1),(207,'Jardim Guanabara',1),(208,'Jardim Guannan',1),(209,'Jardim Guiomar',1),(210,'Jardim Haddad',1),(211,'Jardim Haia Do Carrao',1),(212,'Jardim Helena',1),(213,'Jardim Heloisa',1),(214,'Jardim Hercília',1),(215,'Jardim Iara',1),(216,'Jardim Iguaçu',1),(217,'Jardim Iguatemi',1),(218,'Jardim Imperador',1),(219,'Jardim Indaia',1),(220,'Jardim Independência',1),(221,'Jardim Ipanema',1),(222,'Jardim Irene',1),(223,'Jardim Itália',1),(224,'Jardim Itamarati',1),(225,'Jardim Itapema',1),(226,'Jardim Itapemirim',1),(227,'Jardim Itapólis',1),(228,'Jardim Iva',1),(229,'Jardim Ivete',1),(230,'Jardim Ivone',1),(231,'Jardim Janilópolis',1),(232,'Jardim Jaraguá',1),(233,'Jardim Jaú',1),(234,'Jardim Jordão',1),(235,'Jardim Lageado',1),(236,'Jardim Laone',1),(237,'Jardim Lapema',1),(238,'Jardim Laranjal',1),(239,'Jardim Laura',1),(240,'Jardim Liderança',1),(241,'Jardim Limoeiro',1),(242,'Jardim Lisboa',1),(243,'Jardim Lourdes',1),(244,'Jardim Lourenço',1),(245,'Jardim Luciana',1),(246,'Jardim Lucinda',1),(247,'Jardim Luzitano',1),(248,'Jardim Mabel',1),(249,'Jardim Maia',1),(250,'Jardim Marabá',1),(251,'Jardim Maria Lidia',1),(252,'Jardim Maria Lídia',1),(253,'Jardim Maria Luiza',1),(254,'Jardim Marilia',1),(255,'Jardim Marilu',1),(256,'Jardim Marina',1),(257,'Jardim Maringá',1),(258,'Jardim Marpu',1),(259,'Jardim Matarazzo',1),(260,'Jardim Meliunas',1),(261,'Jardim Metropolitano',1),(262,'Jardim Miami',1),(263,'Jardim Mimar',1),(264,'Jardim Miragaia',1),(265,'Jardim Miriam',1),(266,'Jardim Moreno',1),(267,'Jardim Morganti',1),(268,'Jardim Nair',1),(269,'Jardim Nalice',1),(270,'Jardim Nazareth',1),(271,'Jardim Nélia',1),(272,'Jardim Nice',1),(273,'Jardim Nicolau',1),(274,'Jardim Noêmia',1),(275,'Jardim Nordeste',1),(276,'Jardim Norma',1),(277,'Jardim Nossa Senhora do Carmo',1),(278,'Jardim Nova Carrão',1),(279,'Jardim Nove De Julho',1),(280,'Jardim Olímpia',1),(281,'Jardim Otília',1),(282,'Jardim Panorama',1),(283,'Jardim Paraguaçu',1),(284,'Jardim Paula',1),(285,'Jardim Paulistânia',1),(286,'Jardim Pedra Branca',1),(287,'Jardim Pedro Jose Nunes',1),(288,'Jardim Penha',1),(289,'Jardim Piquerobi',1),(290,'Jardim Piratininga',1),(291,'Jardim Planalto',1),(292,'Jardim Ponte Rasa',1),(293,'Jardim Popular',1),(294,'Jardim Porteira Grande',1),(295,'Jardim Progresso',1),(296,'Jardim Quisisana',1),(297,'Jardim Record',1),(298,'Jardim Recreio',1),(299,'Jardim Redenção',1),(300,'Jardim Redil',1),(301,'Jardim Ricardo',1),(302,'Jardim Robru',1),(303,'Jardim Rodolfo Pirani',1),(304,'Jardim Romano',1),(305,'Jardim Roseli',1),(306,'Jardim Rosicler',1),(307,'Jardim Rosina',1),(308,'Jardim Ruth',1),(309,'Jardim Samara',1),(310,'Jardim Santa Adélia',1),(311,'Jardim Santa Marcelina',1),(312,'Jardim Santa Margarida',1),(313,'Jardim Santa Maria',1),(314,'Jardim Santa Rita',1),(315,'Jardim Santa Terezinha',1),(316,'Jardim Santana',1),(317,'Jardim Santo André',1),(318,'Jardim Santo Antonio',1),(319,'Jardim Santo Eduardo',1),(320,'Jardim Santo Elias',1),(321,'Jardim Santo Onofre',1),(322,'Jardim São Benedito',1),(323,'Jardim São Carlos',1),(324,'Jardim São Cristóvão',1),(325,'Jardim São Francisco',1),(326,'Jardim São Gonçalo',1),(327,'Jardim São Joao',1),(328,'Jardim São Jose',1),(329,'Jardim São Lourenço',1),(330,'Jardim São Luis',1),(331,'Jardim São Martinho',1),(332,'Jardim São Nicolau',1),(333,'Jardim São Paulo',1),(334,'Jardim São Pedro',1),(335,'Jardim São Roberto',1),(336,'Jardim São Sebastião',1),(337,'Jardim São Vicente',1),(338,'Jardim Sapopemba',1),(339,'Jardim Senice',1),(340,'Jardim Silva Teles',1),(341,'Jardim Silveira',1),(342,'Jardim Silvia',1),(343,'Jardim Soares',1),(344,'Jardim Sofia',1),(345,'Jardim Soraia',1),(346,'Jardim Tango',1),(347,'Jardim Tereza',1),(348,'Jardim Têxtil',1),(349,'Jardim Textilia',1),(350,'Jardim Thealia',1),(351,'Jardim Théalia',1),(352,'Jardim Tietê',1),(353,'Jardim Três Marias',1),(354,'Jardim Triana',1),(355,'Jardim Tua',1),(356,'Jardim Ubirajara',1),(357,'Jardim Valquíria',1),(358,'Jardim Vera Cruz',1),(359,'Jardim Verônia',1),(360,'Jardim Vila Carrão',1),(361,'Jardim Vila Formosa',1),(362,'Jardim Vilma Flor',1),(363,'Jardim Virginia',1),(364,'Lageado',1),(365,'Lar Nacional',1),(366,'Mooca',1),(367,'Parada Quinze',1),(368,'Parque Andre Pereira',1),(369,'Parque Artur Alvim',1),(370,'Parque Bancário',1),(371,'Parque Bela Vista',1),(372,'Parque Boa Esperança',1),(373,'Parque Boturussu',1),(374,'Parque Central',1),(375,'Parque Colonial',1),(376,'Parque Cruzeiro do Sul',1),(377,'Parque da Mooca',1),(378,'Parque Das Paineiras',1),(379,'Parque do Carmo',1),(380,'Parque Dom Joao Nery',1),(381,'Parque Eduardo',1),(382,'Parque Guarani',1),(383,'Parque Guedes',1),(384,'Parque Industrial',1),(385,'Parque Líbano',1),(386,'Parque Luiz Mucciolo',1),(387,'Parque Maria Luiza',1),(388,'Parque Paulistano',1),(389,'Parque Real',1),(390,'Parque Residencial Dabril',1),(391,'Parque Santa Amélia',1),(392,'Parque Santa Madalena',1),(393,'Parque Santa Rita',1),(394,'Parque Santo Antônio',1),(395,'Parque São Jorge',1),(396,'Parque São Lourenço',1),(397,'Parque Sao Lucas',1),(398,'Parque São Rafael',1),(399,'Parque Savoy City',1),(400,'Parque Sevilha',1),(401,'Parque Sônia',1),(402,'Parque Tomas Saraiva',1),(403,'Parque Vila Prudente',1),(404,'Passagem Funda',1),(405,'Penha',1),(406,'Penha de França',1),(407,'Ponte Rasa',1),(408,'Pq Resesidencial Oratório',1),(409,'Profilurb Pêssego',1),(410,'Quarta Parada',1),(411,'Quinta Da Paineira',1),(412,'Recanto Alegre',1),(413,'Recanto Verde Do Sol',1),(414,'Roseira',1),(415,'Santa Etelvina',1),(416,'São Miguel Paulista',1),(417,'Sapopemba',1),(418,'Sítio do Palanque',1),(419,'Sitio dos Francas',1),(420,'Sitio Pinheirinho',1),(421,'Sitio São João',1),(422,'Tatuapé',1),(423,'Terceira Divisão',1),(424,'Vila Abc',1),(425,'Vila Aimoré',1),(426,'Vila Alabama',1),(427,'Vila Alois',1),(428,'Vila Alpina',1),(429,'Vila Alto da Boa Vista',1),(430,'Vila Alzira',1),(431,'Vila Amadeu',1),(432,'Vila Americana',1),(433,'Vila Ana Clara',1),(434,'Vila Anadir',1),(435,'Vila Andes',1),(436,'Vila Angelina',1),(437,'Vila Antenor',1),(438,'Vila Antonieta',1),(439,'Vila Antonina',1),(440,'Vila Aparecida',1),(441,'Vila Araci',1),(442,'Vila Araguaia',1),(443,'Vila Aricanduva',1),(444,'Vila Arisi',1),(445,'Vila Arlindo',1),(446,'Vila Áurea',1),(447,'Vila Azevedo',1),(448,'Vila Bancaria',1),(449,'Vila Barbosa',1),(450,'Vila Barreira Grande',1),(451,'Vila Bauab',1),(452,'Vila Beatriz',1),(453,'Vila Bela',1),(454,'Vila Bela Vista',1),(455,'Vila Belo Horizonte',1),(456,'Vila Bertioga',1),(457,'Vila Bozzini',1),(458,'Vila Brasil',1),(459,'Vila Buenos Aires',1),(460,'Vila Caju',1),(461,'Vila Califórnia',1),(462,'Vila Campanela',1),(463,'Vila Canero',1),(464,'Vila Cardoso Franco',1),(465,'Vila Carlos de Campos',1),(466,'Vila Carmem',1),(467,'Vila Carmosina',1),(468,'Vila Carolina',1),(469,'Vila Carrão',1),(470,'Vila Celeste',1),(471,'Vila Centenário',1),(472,'Vila Central',1),(473,'Vila Chabilândia',1),(474,'Vila Charlot',1),(475,'Vila Chavantes',1),(476,'Vila Clara',1),(477,'Vila Claudia',1),(478,'Vila Cleonice',1),(479,'Vila Clotilde',1),(480,'Vila Conceição',1),(481,'Vila Constança',1),(482,'Vila Corberi',1),(483,'Vila Cosmopolita',1),(484,'Vila Costa Melo',1),(485,'Vila Cruzeiro',1),(486,'Vila Cunha Bueno',1),(487,'Vila Curuçá',1),(488,'Vila Da Imprensa',1),(489,'Vila Dalila',1),(490,'Vila Danúbio Azul',1),(491,'Vila Darli',1),(492,'Vila Diva',1),(493,'Vila Divina Pastora',1),(494,'Vila Dom Duarte Leopoldo',1),(495,'Vila Domitila',1),(496,'Vila Doutor Eiras',1),(497,'Vila Else',1),(498,'Vila Ema',1),(499,'Vila Embira',1),(500,'Vila Escolar',1),(501,'Vila Esperança',1),(502,'Vila Ester',1),(503,'Vila Eugenia',1),(504,'Vila Eugênio',1),(505,'Vila Eutália',1),(506,'Vila Falconi',1),(507,'Vila Fátima',1),(508,'Vila Feliz',1),(509,'Vila Fernandes',1),(510,'Vila Fernando',1),(511,'Vila Fidelis Ribeiro',1),(512,'Vila Florinda',1),(513,'Vila Formosa',1),(514,'Vila Franci',1),(515,'Vila Frugolli',1),(516,'Vila Germaine',1),(517,'Vila Gertrudes',1),(518,'Vila Gil',1),(519,'Vila Giordano',1),(520,'Vila Gomes Cardim',1),(521,'Vila Graciosa',1),(522,'Vila Granada',1),(523,'Vila Guarani',1),(524,'Vila Guilhermina',1),(525,'Vila Gustavo',1),(526,'Vila Haddad',1),(527,'Vila Heloisa',1),(528,'Vila Hilda',1),(529,'Vila I.V.G.',1),(530,'Vila Iguaçu',1),(531,'Vila Industrial',1),(532,'Vila Invernada',1),(533,'Vila Iolanda',1),(534,'Vila Iraci',1),(535,'Vila Itaim',1),(536,'Vila Itaquera de Baixo',1),(537,'Vila Ivone',1),(538,'Vila Jacuí',1),(539,'Vila Jose Moreira',1),(540,'Vila Julio',1),(541,'Vila Jurema',1),(542,'Vila Lais',1),(543,'Vila Lavinia',1),(544,'Vila Leme',1),(545,'Vila Libanesa',1),(546,'Vila Londrina',1),(547,'Vila Lourdes',1),(548,'Vila Lúcia',1),(549,'Vila Lúcia Elvira',1),(550,'Vila Luisa',1),(551,'Vila Luso Brasileira',1),(552,'Vila Luzimar',1),(553,'Vila Luzitana',1),(554,'Vila Macedópolis',1),(555,'Vila Mafra',1),(556,'Vila Maluf',1),(557,'Vila Margareth',1),(558,'Vila Margarida',1),(559,'Vila Maria Amália',1),(560,'Vila Marieta',1),(561,'Vila Marilena',1),(562,'Vila Matias',1),(563,'Vila Matilde',1),(564,'Vila Mauad',1),(565,'Vila Melo',1),(566,'Vila Mendes',1),(567,'Vila Mercedes',1),(568,'Vila Merly',1),(569,'Vila Mesquita',1),(570,'Vila Minerva',1),(571,'Vila Mirim',1),(572,'Vila Mirtes',1),(573,'Vila Moca',1),(574,'Vila Moderna',1),(575,'Vila Monte Santo',1),(576,'Vila Montevideo',1),(577,'Vila Moreira',1),(578,'Vila Morgadouro',1),(579,'Vila Nair',1),(580,'Vila Nancy',1),(581,'Vila Naufal',1),(582,'Vila Néila',1),(583,'Vila Nhocuné',1),(584,'Vila Norma',1),(585,'Vila Nova',1),(586,'Vila Nova Curuca',1),(587,'Vila Nova Granada',1),(588,'Vila Nova Itaquera de Baixo',1),(589,'Vila Nova Manchester',1),(590,'Vila Nova Paulicéia',1),(591,'Vila Nova Savoia',1),(592,'Vila Nova Utinga',1),(593,'Vila Nova York',1),(594,'Vila Odete',1),(595,'Vila Olinda',1),(596,'Vila Olívia',1),(597,'Vila Oratório',1),(598,'Vila Orlando',1),(599,'Vila Palma',1),(600,'Vila Paraguassu',1),(601,'Vila Paranaguá',1),(602,'Vila Paulina',1),(603,'Vila Paulista',1),(604,'Vila Paulo Silas',1),(605,'Vila Pedroso',1),(606,'Vila Penteado',1),(607,'Vila Pierina',1),(608,'Vila Piracicaba',1),(609,'Vila Popular',1),(610,'Vila Portuguesa',1),(611,'Vila Praia',1),(612,'Vila Prima',1),(613,'Vila Primavera',1),(614,'Vila Princesa Isabel',1),(615,'Vila Progresso',1),(616,'Vila Prudente',1),(617,'Vila Raquel',1),(618,'Vila Ré',1),(619,'Vila Regente Feijó',1),(620,'Vila Regina',1),(621,'Vila Reis',1),(622,'Vila Renato',1),(623,'Vila Ribeiro dos Santos',1),(624,'Vila Rica',1),(625,'Vila Rio Branco',1),(626,'Vila Robertina',1),(627,'Vila Rosa',1),(628,'Vila Rosaria',1),(629,'Vila Rufino',1),(630,'Vila Rui Barbosa',1),(631,'Vila Salete',1),(632,'Vila Sampaio',1),(633,'Vila Santa Clara',1),(634,'Vila Santa Cruz',1),(635,'Vila Santa Inês',1),(636,'Vila Santa Isabel',1),(637,'Vila Santa Lúcia',1),(638,'Vila Santa Rita',1),(639,'Vila Santa Tereza',1),(640,'Vila Santa Terezinha',1),(641,'Vila Santa Virginia',1),(642,'Vila Santana',1),(643,'Vila Santo Antonio',1),(644,'Vila Santo Estevam',1),(645,'Vila Santo Henrique',1),(646,'Vila São Domingos',1),(647,'Vila São Francisco',1),(648,'Vila São Geraldo',1),(649,'Vila São Jorge',1),(650,'Vila São Jose',1),(651,'Vila São José',1),(652,'Vila São Mauricio',1),(653,'Vila São Nicolau',1),(654,'Vila São Paulo',1),(655,'Vila São Silvestre',1),(656,'Vila São Vicente',1),(657,'Vila Sara',1),(658,'Vila Sartori',1),(659,'Vila Seabra',1),(660,'Vila Sergio',1),(661,'Vila Silvia',1),(662,'Vila Simone',1),(663,'Vila Sinha',1),(664,'Vila Siqueira',1),(665,'Vila Sirene',1),(666,'Vila Síria',1),(667,'Vila Solange',1),(668,'Vila Stela',1),(669,'Vila Suíça',1),(670,'Vila Talarico',1),(671,'Vila Taquari',1),(672,'Vila Tolstói',1),(673,'Vila Toni',1),(674,'Vila União',1),(675,'Vila Valdemar',1),(676,'Vila Vera',1),(677,'Vila Verde',1),(678,'Vila Vidal',1),(679,'Vila Virginia',1),(680,'Vila Vitoria',1),(681,'Vila Xavantes',1),(682,'Vila Zefira',1),(683,'Vila Zelina',1),(684,'Vila Zilda',1);
/*!40000 ALTER TABLE `Bairros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Bancos`
--

DROP TABLE IF EXISTS `Bancos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bancos` (
  `idBanco` int(3) unsigned NOT NULL,
  `banco` varchar(100) NOT NULL,
  PRIMARY KEY (`idBanco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bancos`
--

LOCK TABLES `Bancos` WRITE;
/*!40000 ALTER TABLE `Bancos` DISABLE KEYS */;
INSERT INTO `Bancos` VALUES (1,'001 - BANCO DO BRASIL'),(33,'033 - SANTANDER'),(77,'077 - BANCO INTER'),(104,'104 - CAIXA ECONOMICA FEDERAL'),(212,'212 - ORIGINAL'),(218,'218 - BANCO BS2'),(237,'237 - BRADESCO'),(260,'260 - NUBANK'),(318,'318 - B.M.G.'),(323,'323 - MERCADO PAGO'),(336,'336 - BANCO C6'),(341,'341 - ITAU'),(399,'399 - HSBC'),(735,'735 - NEON'),(748,'748 - SICREDI'),(756,'756 - BANCOOB');
/*!40000 ALTER TABLE `Bancos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clientes`
--

DROP TABLE IF EXISTS `Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clientes` (
  `idCliente` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(100) NOT NULL,
  `telCliente` varchar(11) NOT NULL,
  `cpfCliente` char(11) DEFAULT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `senhaCliente` varchar(50) NOT NULL,
  `ativo` int(1) unsigned DEFAULT '1',
  `dtCadastro` datetime NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `End_Clientes`
--

DROP TABLE IF EXISTS `End_Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `End_Clientes` (
  `idEnd_Cliente` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(15) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `idCliente` int(5) unsigned NOT NULL,
  `idEndereco` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idEnd_Cliente`),
  KEY `idCliente` (`idCliente`),
  KEY `idEndereco` (`idEndereco`),
  CONSTRAINT `End_Clientes_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Clientes` (`idCliente`),
  CONSTRAINT `End_Clientes_ibfk_2` FOREIGN KEY (`idEndereco`) REFERENCES `Enderecos` (`idEndereco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `End_Clientes`
--

LOCK TABLES `End_Clientes` WRITE;
/*!40000 ALTER TABLE `End_Clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `End_Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `End_Prestadoras`
--

DROP TABLE IF EXISTS `End_Prestadoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `End_Prestadoras` (
  `idEnd_Prestadora` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(15) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `idPrestadora` int(5) unsigned NOT NULL,
  `idEndereco` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idEnd_Prestadora`),
  KEY `idPrestadora` (`idPrestadora`),
  KEY `idEndereco` (`idEndereco`),
  CONSTRAINT `End_Prestadoras_ibfk_1` FOREIGN KEY (`idPrestadora`) REFERENCES `Prestadoras` (`idPrestadora`),
  CONSTRAINT `End_Prestadoras_ibfk_2` FOREIGN KEY (`idEndereco`) REFERENCES `Enderecos` (`idEndereco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `End_Prestadoras`
--

LOCK TABLES `End_Prestadoras` WRITE;
/*!40000 ALTER TABLE `End_Prestadoras` DISABLE KEYS */;
/*!40000 ALTER TABLE `End_Prestadoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Enderecos`
--

DROP TABLE IF EXISTS `Enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Enderecos` (
  `idEndereco` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `CEP` varchar(11) NOT NULL,
  `tipoLogradouro` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `idBairro` int(5) unsigned NOT NULL,
  PRIMARY KEY (`idEndereco`),
  KEY `idBairro` (`idBairro`),
  CONSTRAINT `Enderecos_ibfk_1` FOREIGN KEY (`idBairro`) REFERENCES `Bairros` (`idBairro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Enderecos`
--

LOCK TABLES `Enderecos` WRITE;
/*!40000 ALTER TABLE `Enderecos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Espec_Prestadoras`
--

DROP TABLE IF EXISTS `Espec_Prestadoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Espec_Prestadoras` (
  `idEspecialidade` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `idPrestadora` int(5) unsigned NOT NULL,
  KEY `idEspecialidade` (`idEspecialidade`),
  KEY `idPrestadora` (`idPrestadora`),
  CONSTRAINT `Espec_Prestadoras_ibfk_1` FOREIGN KEY (`idEspecialidade`) REFERENCES `Especialidades` (`idEspecialidade`),
  CONSTRAINT `Espec_Prestadoras_ibfk_2` FOREIGN KEY (`idPrestadora`) REFERENCES `Prestadoras` (`idPrestadora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Espec_Prestadoras`
--

LOCK TABLES `Espec_Prestadoras` WRITE;
/*!40000 ALTER TABLE `Espec_Prestadoras` DISABLE KEYS */;
/*!40000 ALTER TABLE `Espec_Prestadoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Especialidades`
--

DROP TABLE IF EXISTS `Especialidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Especialidades` (
  `idEspecialidade` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomeEspecialidade` varchar(200) NOT NULL,
  `custoEspecialidade` double(6,2) unsigned NOT NULL,
  `idArea` int(5) unsigned NOT NULL,
  PRIMARY KEY (`idEspecialidade`),
  KEY `idArea` (`idArea`),
  CONSTRAINT `Especialidades_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `Areas` (`idArea`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Especialidades`
--

LOCK TABLES `Especialidades` WRITE;
/*!40000 ALTER TABLE `Especialidades` DISABLE KEYS */;
INSERT INTO `Especialidades` VALUES (1,'Chuveiro Elétrico - troca de 1 unid.',0.00,1),(2,'Chuveiro Elétrico - troca de 2 unid.',0.00,1),(3,'Disjuntores - troca de 1 a 2 unid.',0.00,1),(4,'Disjuntores - troca de 3 a 4 unid.',0.00,1),(5,'Instalação de canaleta',0.00,1),(6,'Interruptores embutidos - substituição / reparo 1 a 3 unid.',0.00,1),(7,'Interruptores embutidos - substituição / reparo 4 a 6 unid.',0.00,1),(8,'Luminária plafon - instalação / troca de 1 a 3 unid.',0.00,1),(9,'Luminária pendente - instalação / troca de 1 unid.',0.00,1),(10,'Resistência de chuveiro elétrico - instalação / troca',0.00,1),(11,'Ventilador de teto - instalação / substituição de 1 unid.',0.00,1),(12,'Ventilador de teto - instalação / substituição de 2 unid.',0.00,1),(13,'Ventilador de teto - instalação / substituição de 3 unid.',0.00,1),(14,'Tomadas embutidas - substituição / reparo 1 a 4 unid.',0.00,1),(15,'Tomadas embutidas - substituição / reparo 5 a 10 unid.',0.00,1),(16,'Tomada externa com calha - instalação / troca de 1 unid.',0.00,1),(17,'Tomada externa com calha - instalação / troca de 2 unid.',0.00,1),(18,'Tomada externa com calha - instalação / troca de 3 unid.',0.00,1),(19,'Chuveirinho higiênico - substituição / reparo',0.00,2),(20,'Descarga acoplada - substituição / reparo',0.00,2),(21,'Desentupimento de pia',0.00,2),(22,'Ralo / Box entupido ',0.00,2),(23,'Fixação de cuba de pia ',0.00,2),(24,'Registro de pia pingando',0.00,2),(25,'Sifão - substituição / reparo',0.00,2),(26,'Torneira - substituição / reparo',0.00,2),(27,'Vaso Sanitário - substituição / reparo',0.00,2),(28,'Vazamento de descarga embutida - substituição / reparo',0.00,2),(29,'Pintura epóxi - pintura de chão',0.00,3),(30,'Pintura Nova',0.00,3),(31,'Pintura de Fachadas',0.00,3),(32,'Pintura decorativa - revestimento / textura',0.00,3),(33,'Pintura com desenho',0.00,3),(34,'Chuveiro',0.00,4),(35,'Tomadas ',0.00,4),(36,'Luminárias / lustres',0.00,4),(37,'Ventilador de teto',0.00,4),(38,'Prateleiras',0.00,4),(39,'Nichos',0.00,4),(40,'Antenas de TV',0.00,4),(41,'Armário - cozinha/banheiro',0.00,5),(42,'Beliche',0.00,5),(43,'Cadeira',0.00,5),(44,'Cama de casal',0.00,5),(45,'Cama de solteiro',0.00,5),(46,'Cômoda',0.00,5),(47,'Escrivaninha',0.00,5),(48,'Guarda-roupa',0.00,5),(49,'Guarda-roupa - portas de correr',0.00,5),(50,'Mesa',0.00,5),(51,'Prateleira',0.00,5);
/*!40000 ALTER TABLE `Especialidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Estados`
--

DROP TABLE IF EXISTS `Estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Estados` (
  `idEstado` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `nomeEstado` varchar(50) NOT NULL,
  `siglaEstado` char(2) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Estados`
--

LOCK TABLES `Estados` WRITE;
/*!40000 ALTER TABLE `Estados` DISABLE KEYS */;
INSERT INTO `Estados` VALUES (1,'São Paulo','SP');
/*!40000 ALTER TABLE `Estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Municipios`
--

DROP TABLE IF EXISTS `Municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Municipios` (
  `idMunicipio` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomeMunicipio` varchar(50) NOT NULL,
  `idEstado` int(2) unsigned NOT NULL,
  PRIMARY KEY (`idMunicipio`),
  KEY `idEstado` (`idEstado`),
  CONSTRAINT `Municipios_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `Estados` (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Municipios`
--

LOCK TABLES `Municipios` WRITE;
/*!40000 ALTER TABLE `Municipios` DISABLE KEYS */;
INSERT INTO `Municipios` VALUES (1,'São Paulo',1);
/*!40000 ALTER TABLE `Municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prestadoras`
--

DROP TABLE IF EXISTS `Prestadoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Prestadoras` (
  `idPrestadora` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomePrestadora` varchar(100) NOT NULL,
  `telPrestadora` varchar(11) NOT NULL,
  `cpfPrestadora` char(11) DEFAULT NULL,
  `emailPrestadora` varchar(100) NOT NULL,
  `senhaPrestadora` varchar(50) NOT NULL,
  `idBanco` int(3) unsigned NOT NULL,
  `agenciaBanco` int(5) unsigned NOT NULL,
  `contaBanco` varchar(15) NOT NULL,
  `ativo` int(1) unsigned DEFAULT '1',
  `dtCadastro` datetime NOT NULL,
  PRIMARY KEY (`idPrestadora`),
  KEY `idBanco` (`idBanco`),
  CONSTRAINT `Prestadoras_ibfk_1` FOREIGN KEY (`idBanco`) REFERENCES `Bancos` (`idBanco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prestadoras`
--

LOCK TABLES `Prestadoras` WRITE;
/*!40000 ALTER TABLE `Prestadoras` DISABLE KEYS */;
/*!40000 ALTER TABLE `Prestadoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Servicos`
--

DROP TABLE IF EXISTS `Servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Servicos` (
  `idServico` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `idCliente` int(5) unsigned NOT NULL,
  `idEnd_Cliente` int(5) unsigned NOT NULL,
  `idArea` int(5) unsigned NOT NULL,
  `idEspecialidade` int(5) unsigned NOT NULL,
  `descricaoServico` varchar(500) NOT NULL,
  `dataServico` date NOT NULL,
  `horaServico` time NOT NULL,
  `idStatus_Servico` int(2) unsigned NOT NULL,
  `idPrestadora` int(5) unsigned DEFAULT NULL,
  `custoServico` double(6,2) unsigned NOT NULL,
  `avaliaServico` int(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`idServico`),
  KEY `idCliente` (`idCliente`),
  KEY `idEnd_Cliente` (`idEnd_Cliente`),
  KEY `idArea` (`idArea`),
  KEY `idEspecialidade` (`idEspecialidade`),
  KEY `idStatus_Servico` (`idStatus_Servico`),
  KEY `idPrestadora` (`idPrestadora`),
  CONSTRAINT `Servicos_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Clientes` (`idCliente`),
  CONSTRAINT `Servicos_ibfk_2` FOREIGN KEY (`idEnd_Cliente`) REFERENCES `End_Clientes` (`idEnd_Cliente`),
  CONSTRAINT `Servicos_ibfk_3` FOREIGN KEY (`idArea`) REFERENCES `Areas` (`idArea`),
  CONSTRAINT `Servicos_ibfk_4` FOREIGN KEY (`idEspecialidade`) REFERENCES `Especialidades` (`idEspecialidade`),
  CONSTRAINT `Servicos_ibfk_5` FOREIGN KEY (`idStatus_Servico`) REFERENCES `Status_Servicos` (`idStatus_Servico`),
  CONSTRAINT `Servicos_ibfk_6` FOREIGN KEY (`idPrestadora`) REFERENCES `Prestadoras` (`idPrestadora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Servicos`
--

LOCK TABLES `Servicos` WRITE;
/*!40000 ALTER TABLE `Servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Status_Servicos`
--

DROP TABLE IF EXISTS `Status_Servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Status_Servicos` (
  `idStatus_Servico` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `descricaoStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`idStatus_Servico`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Status_Servicos`
--

LOCK TABLES `Status_Servicos` WRITE;
/*!40000 ALTER TABLE `Status_Servicos` DISABLE KEYS */;
INSERT INTO `Status_Servicos` VALUES (1,'Aguardando Pagamento'),(2,'Pago - Aguardando Prestadora'),(3,'Agendado'),(4,'Em andamento'),(5,'Finalizado'),(6,'Cancelado');
/*!40000 ALTER TABLE `Status_Servicos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-09 19:24:38
