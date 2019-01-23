# Host: localhost  (Version 5.7.14)
# Date: 2016-12-13 15:02:35
# Generator: MySQL-Front 5.4  (Build 4.26)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "employee"
#

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `Employee_ID` int(5) unsigned zerofill NOT NULL DEFAULT '00000',
  `Password` varchar(30) NOT NULL DEFAULT '',
  `Fname` varchar(35) NOT NULL DEFAULT 'first_name',
  `Lname` varchar(35) NOT NULL DEFAULT 'last_name',
  `Admin_Status` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`Employee_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2000000001 DEFAULT CHARSET=latin1;

#
# Data for table "employee"
#

/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (00700,'spyguy007','James','Bond',b'0'),(01337,'banana','Jeff','Banawa',b'0'),(09876,'password','Jordon','Olness',b'1'),(11011,'binaryrules','Alicia','Vikander',b'0'),(11111,'password','John','Doe',b'0'),(12345,'Password','Arthur','Santos',b'1'),(12389,'trainsarecool','Thomas','Train',b'0'),(14140,'password','Lawrence','Nguyen',b'1'),(19191,'password','Bob','Smith',b'0'),(20202,'goodvision','Ethan','Hawk',b'0'),(29387,'redwings','Lean','Miguel',b'0'),(32165,'smithers','Joe','Burns',b'0'),(35356,'hghhgf','Paulo','Smith',b'0'),(48463,'Password','Fernando','Valera',b'0'),(54321,'password','John','Doe',b'0'),(54329,'iloveapples','Doc','Smith',b'0'),(65421,'andrewsanders','Andrew','Sanders',b'0'),(65748,'wheelsonfire','Jessica','Manning',b'0'),(74878,'helloworld','Harry','Thompson',b'0'),(75383,'thebestTA','Tamer','Jarada',b'0'),(77777,'password','Jim','Carey',b'0'),(79898,'saltywater','Pamela','Oceans',b'0'),(83837,'ancient','Bart','Jones',b'0'),(84738,'secretpass','Ronald','Mcdonald',b'0'),(87345,'mydogsname','Hugh','Jackman',b'0'),(87432,'stringtheory','Albert','Einstein',b'0'),(87623,'facebook','Mark','Zuckerberg',b'0'),(87688,'kitkatbars','Sally','Suthers',b'0'),(88888,'helloworld','Kaitlyn','Pon',b'0'),(92928,'notaspy','Edward','Snowden',b'0'),(94379,'fortynights','Noah','Ark',b'0'),(95739,'quickpassword','Lisa','Simpson',b'0'),(97593,'schoolrocks','Millie','Chau',b'0'),(98343,'blackholes','Stephen','Hawking',b'0'),(98347,'yezzyhaver','Louie','Anada',b'0'),(98739,'shrek2','Mariah','Carey',b'0'),(98793,'mackintosh','Steve','Jobs',b'0'),(98798,'katyperyy','Jim','Harry',b'0'),(99999,'inthehouse','Kyle','Massey',b'0');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
