﻿# Host: localhost  (Version 5.7.14)
# Date: 2016-12-13 15:02:58
# Generator: MySQL-Front 5.4  (Build 4.26)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "apparel"
#

DROP TABLE IF EXISTS `apparel`;
CREATE TABLE `apparel` (
  `sku` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `retail_price` decimal(10,2) DEFAULT NULL,
  `colour` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "apparel"
#

/*!40000 ALTER TABLE `apparel` DISABLE KEYS */;
INSERT INTO `apparel` VALUES (1000000,120.00,'Blue'),(1000001,120.00,'Blue'),(1000002,100.00,'Blue'),(1000003,150.00,'Black'),(1000004,70.00,'White'),(1000005,115.00,'Olive'),(1000006,120.00,'Blue'),(1000007,120.00,'Black'),(1000008,150.00,'Blue'),(1000009,120.00,'Blue'),(1000011,100.00,'Black'),(1000012,70.00,'Olive'),(1000013,70.00,'White'),(1000014,90.00,'Black'),(1000015,120.00,'Black'),(1000016,120.00,'Blue'),(1000017,150.00,'Black'),(1000018,120.00,'Black'),(1000019,150.00,'Black'),(1000398,60.00,'Navy'),(1111111,80.00,'Black'),(1234567,100.00,'Blue'),(1423658,70.00,'White'),(1654236,115.00,'Blue'),(1654823,150.00,'Blue'),(1654897,150.00,'Blue'),(1879834,20.00,'Black'),(1975652,100.00,'Black'),(1987488,20.00,'Black'),(1987665,80.00,'Navy'),(1987765,80.00,'Brown'),(2000000,90.00,'Black'),(2000001,150.00,'White'),(2000002,120.00,'White'),(2000003,200.00,'Red'),(2000004,70.00,'Green'),(2000005,150.00,'White'),(2000006,120.00,'Blue'),(2000007,175.00,'Red'),(2000008,100.00,'White'),(2000009,300.00,'Black'),(2000011,100.00,'White'),(2000012,150.00,'Black'),(2000013,175.00,'Black'),(2000014,120.00,'White'),(2000015,150.00,'Green'),(2000016,120.00,'Black'),(2000017,30.00,'White'),(2000018,150.00,'Black'),(2000019,70.00,'Red'),(2000020,350.00,'Orange'),(2000387,170.00,'Brown'),(2000497,140.00,'Black'),(2000498,260.00,'White'),(2000987,80.00,'Brown'),(2131054,120.00,'Black'),(2316455,70.00,'Green'),(2647981,150.00,'White'),(2654789,70.00,'Green'),(2654791,120.00,'Black'),(2765480,90.00,'Black'),(2789452,150.00,'Blue'),(2987549,60.00,'Black'),(3000000,30.00,'White'),(3000001,50.00,'Blue'),(3000002,40.00,'Red'),(3000003,60.00,'Blue'),(3000004,80.00,'Black'),(3000005,50.00,'Red'),(3000006,30.00,'Green'),(3000007,45.00,'Olive'),(3000008,40.00,'White'),(3000009,70.00,'Red'),(3000010,75.00,'Blue'),(3000012,30.00,'Green'),(3000013,50.00,'Green'),(3000014,30.00,'Olive'),(3000015,30.00,'White'),(3000016,70.00,'Blue'),(3000017,35.00,'Black'),(3000018,70.00,'Red'),(3000019,30.00,'White'),(3000020,30.00,'Blue'),(3000877,15.00,'Black'),(3009875,60.00,'Blue'),(3020215,70.00,'Blue'),(3164579,70.00,'Green'),(3214658,30.00,'Green'),(3216407,50.00,'Olive'),(3216540,150.00,'Red'),(3216548,85.00,'Red'),(3456124,45.00,'Black'),(3625147,35.00,'Green'),(3654271,60.00,'Red'),(3654781,70.00,'Black'),(3654912,70.00,'Green'),(3758499,50.00,'Red'),(3987297,80.00,'Black'),(3987928,70.00,'Black'),(4651200,70.00,'Black'),(6548974,150.00,'Red'),(6549871,25.00,'Green'),(9876521,30.00,'White'),(9876541,120.00,'Blue');
/*!40000 ALTER TABLE `apparel` ENABLE KEYS */;

#
# Structure for table "bottoms"
#

DROP TABLE IF EXISTS `bottoms`;
CREATE TABLE `bottoms` (
  `sku` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `waist` int(2) NOT NULL DEFAULT '0',
  `length` int(2) NOT NULL DEFAULT '0',
  KEY `bottoms_sku` (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "bottoms"
#

/*!40000 ALTER TABLE `bottoms` DISABLE KEYS */;
INSERT INTO `bottoms` VALUES (1234567,30,30),(1111111,34,32),(1000000,28,28),(1000001,29,30),(1000002,30,30),(1000003,31,32),(1000004,32,30),(1000005,33,34),(1000006,32,28),(1000007,34,32),(1000008,35,35),(1000009,36,36),(1000011,37,36),(1000012,38,36),(1000013,31,32),(1000014,36,35),(1000015,32,30),(1000016,33,30),(1000017,32,34),(1000018,38,36),(1000019,37,36),(4651200,34,34),(9876541,31,30),(1423658,33,32),(9876521,28,28),(1654823,29,28),(1654897,33,32),(1975652,30,30),(1654236,32,33),(6548974,28,28),(1987488,29,30),(1879834,28,32),(1987665,29,28),(1000398,33,33);
/*!40000 ALTER TABLE `bottoms` ENABLE KEYS */;

#
# Structure for table "footwear"
#

DROP TABLE IF EXISTS `footwear`;
CREATE TABLE `footwear` (
  `sku` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `shoe_size` int(2) NOT NULL DEFAULT '0',
  KEY `sku` (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "footwear"
#

/*!40000 ALTER TABLE `footwear` DISABLE KEYS */;
INSERT INTO `footwear` VALUES (2000000,7),(2000987,11),(2000001,8),(2000002,9),(2000003,10),(2000004,11),(2000005,12),(2000006,11),(2000007,13),(2000008,10),(2000009,9),(2000011,8),(2000012,11),(2000013,10),(2000014,9),(2000015,13),(2000016,9),(2000017,8),(2000018,11),(2000019,10),(2000020,11),(2647981,10),(2654791,9),(2316455,12),(2131054,9),(2654789,9),(2789452,8),(3216548,7),(1987765,8),(2987549,8),(2765480,9),(2000387,7),(2000498,10),(2000497,7);
/*!40000 ALTER TABLE `footwear` ENABLE KEYS */;

#
# Structure for table "in_stock"
#

DROP TABLE IF EXISTS `in_stock`;
CREATE TABLE `in_stock` (
  `sku` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `no_instock` int(4) DEFAULT NULL,
  KEY `IS_sku` (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "in_stock"
#

/*!40000 ALTER TABLE `in_stock` DISABLE KEYS */;
INSERT INTO `in_stock` VALUES (1000004,10),(1000003,19),(1000002,30),(1000001,5),(1000000,16),(1111111,0),(6549871,3),(3216547,30),(9999999,10),(1234567,10),(1000005,6),(1000006,6),(1000007,7),(1000008,3),(1000009,6),(1000011,3),(1000012,10),(2000000,21),(2000003,4),(2000002,6),(2000001,14),(2000004,3),(2000005,10),(2000006,3),(2000007,6),(2000008,10),(2000009,2),(2000011,0),(2000012,0),(1000013,0),(1000014,0),(1000015,0),(3000000,6),(3000001,7),(3000002,0),(3000005,6),(3000006,6),(3000007,6),(3000008,3),(3000009,0),(3000010,12),(3000012,0),(3000013,7),(3000014,4),(3000015,3),(3000016,0),(3000017,9),(3000018,6),(3000019,5),(3000020,0),(1000016,4),(1000017,6),(1000018,0),(1000019,14),(2000013,6),(2000014,0),(2000015,1),(2000016,0),(2000017,0),(2000018,4),(2000019,0),(2000020,2),(4651200,0),(9876541,6),(1423658,3),(9876521,1),(1654823,6),(1654897,6),(1975652,0),(1654236,4),(2647981,3),(2654791,3),(2316455,0),(2131054,6),(2654789,4),(2789452,6),(3654781,6),(3456124,0),(3164579,0),(3654912,4),(3216407,3),(3654271,6),(3020215,14),(3625147,3),(3214658,4),(3000004,4),(3216540,2),(3216548,4),(6548974,1),(1987488,3),(1879834,2),(1987665,5),(1987765,4),(2987549,3),(2765480,2),(3000877,7),(3987928,3),(3987297,4),(1000398,5),(3009875,3),(3000003,7),(3758499,11),(2000987,5),(2000387,7),(2000498,7),(2000497,4);
/*!40000 ALTER TABLE `in_stock` ENABLE KEYS */;

#
# Structure for table "stolen"
#

DROP TABLE IF EXISTS `stolen`;
CREATE TABLE `stolen` (
  `sku` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `no_stolen` int(4) NOT NULL DEFAULT '0',
  `police_response` bit(1) NOT NULL DEFAULT b'0',
  `date` date NOT NULL DEFAULT '0001-01-01',
  `cost` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  KEY `S_sku` (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "stolen"
#

/*!40000 ALTER TABLE `stolen` DISABLE KEYS */;
INSERT INTO `stolen` VALUES (1000000000,10,b'1','2016-12-06',10000.00),(3000003,1,b'1','2016-12-07',5.00),(1000019,2,b'0','2016-12-11',40.00);
/*!40000 ALTER TABLE `stolen` ENABLE KEYS */;

#
# Structure for table "supplier"
#

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `sku` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `name` varchar(35) DEFAULT 'N/A',
  `time` int(2) unsigned DEFAULT '0',
  `cost` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "supplier"
#

/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1000000,'N/A',0,0.00),(1000001,'N/A',0,0.00),(1000002,'N/A',0,0.00),(1000003,'N/A',0,0.00),(1000004,'N/A',0,0.00),(1000005,'N/A',0,0.00),(1000006,'N/A',0,0.00),(1000007,'N/A',0,0.00),(1000008,'N/A',0,0.00),(1000009,'N/A',0,0.00),(1000011,'N/A',0,0.00),(1000012,'N/A',0,0.00),(1000013,'Pants King',2,20.00),(1000014,'Pants King',4,20.00),(1000015,'Pants King',4,20.00),(1000016,'N/A',0,0.00),(1000017,'N/A',0,0.00),(1000018,'Pants King`',10,10.00),(1000019,'N/A',0,0.00),(1000020,'N/A',0,0.00),(1000398,'N/A',0,0.00),(1111111,'Pants King',1,30.00),(1234567,'N/A',0,0.00),(1423658,'N/A',0,0.00),(1654236,'N/A',0,0.00),(1654823,'N/A',0,0.00),(1654897,'N/A',0,0.00),(1879834,'N/A',0,0.00),(1975652,'Pants King ',6,20.00),(1987488,'N/A',0,0.00),(1987665,'N/A',0,0.00),(1987765,'N/A',0,0.00),(2000000,'N/A',0,0.00),(2000001,'N/A',0,0.00),(2000002,'N/A',0,0.00),(2000003,'N/A',0,0.00),(2000004,'N/A',0,0.00),(2000005,'N/A',0,0.00),(2000006,'N/A',0,0.00),(2000007,'N/A',0,0.00),(2000008,'N/A',0,0.00),(2000009,'N/A',0,0.00),(2000011,'Check Shoes',2,15.00),(2000012,'Check Shoes',6,10.00),(2000013,'N/A',0,0.00),(2000014,'Check Shoes',7,10.00),(2000015,'N/A',0,0.00),(2000016,'Check Shoes',30,15.00),(2000017,'Check Shoes',20,15.00),(2000018,'N/A',0,0.00),(2000019,'Check Shoes',1,40.00),(2000020,'N/A',0,0.00),(2000387,'N/A',0,0.00),(2000497,'N/A',0,0.00),(2000498,'N/A',0,0.00),(2000987,'N/A',0,0.00),(2131054,'N/A',0,0.00),(2316455,'Check Shoes',10,5.00),(2647981,'N/A',0,0.00),(2654789,'N/A',0,0.00),(2654791,'N/A',0,0.00),(2765480,'N/A',0,0.00),(2789452,'N/A',0,0.00),(2987549,'N/A',0,0.00),(3000000,'N/A',0,0.00),(3000001,'N/A',0,0.00),(3000002,'Tops Direct',10,10.00),(3000003,'Tops Direct',7,10.00),(3000004,'N/A',0,0.00),(3000005,'N/A',0,0.00),(3000006,'N/A',0,0.00),(3000007,'N/A',0,0.00),(3000008,'N/A',0,0.00),(3000009,'Tops Direct',5,10.00),(3000010,'N/A',0,0.00),(3000012,'Tops Direct',14,10.00),(3000013,'N/A',0,0.00),(3000014,'N/A',0,0.00),(3000015,'N/A',0,0.00),(3000016,'Tops Direct',3,10.00),(3000017,'N/A',0,0.00),(3000018,'N/A',0,0.00),(3000019,'N/A',0,0.00),(3000020,'N/A',0,0.00),(3000877,'N/A',0,0.00),(3009875,'N/A',0,0.00),(3020215,'N/A',0,0.00),(3164579,'Tops Direct',2,10.00),(3214658,'N/A',0,0.00),(3216407,'N/A',0,0.00),(3216540,'N/A',0,0.00),(3216547,'N/A',0,0.00),(3216548,'N/A',0,0.00),(3456124,'Tops Direct',20,10.00),(3625147,'N/A',0,0.00),(3654271,'N/A',0,0.00),(3654781,'N/A',0,0.00),(3654912,'N/A',0,0.00),(3758499,'N/A',0,0.00),(3987297,'N/A',0,0.00),(3987928,'N/A',0,0.00),(4651200,'Pants King',5,15.00),(5000000,'N/A',0,0.00),(6548974,'N/A',0,0.00),(6549871,'N/A',0,0.00),(9876521,'N/A',0,0.00),(9876541,'N/A',0,0.00),(9999999,'N/A',0,0.00);
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;

#
# Structure for table "tops"
#

DROP TABLE IF EXISTS `tops`;
CREATE TABLE `tops` (
  `sku` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `size` char(1) NOT NULL DEFAULT '',
  KEY `tops_sku` (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "tops"
#

/*!40000 ALTER TABLE `tops` DISABLE KEYS */;
INSERT INTO `tops` VALUES (3216540,'m'),(6549871,'s'),(3000000,'s'),(3000001,'m'),(3000002,'m'),(3000004,'l'),(3000005,'m'),(3000006,'s'),(3000007,'l'),(3000008,'l'),(3000009,'l'),(3000010,'l'),(3000012,'l'),(3000013,'m'),(3000014,'m'),(3000015,'m'),(3000016,'m'),(3654781,'m'),(3456124,'m'),(3164579,'l'),(3216407,'s'),(3020215,'m'),(3625147,'l'),(3214658,'m'),(3000877,'m'),(3987928,'s'),(3987297,'m'),(3009875,'l'),(3000003,'m'),(3758499,'s');
/*!40000 ALTER TABLE `tops` ENABLE KEYS */;

#
# Structure for table "write_off"
#

DROP TABLE IF EXISTS `write_off`;
CREATE TABLE `write_off` (
  `sku` bigint(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `employee` int(5) unsigned zerofill NOT NULL DEFAULT '00000',
  `supervisor` int(5) unsigned zerofill NOT NULL DEFAULT '00000',
  `date` date NOT NULL DEFAULT '0001-01-01',
  `amount` int(3) unsigned DEFAULT '0',
  KEY `WO_sku` (`sku`),
  KEY `employee` (`employee`),
  KEY `supervisor` (`supervisor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "write_off"
#

/*!40000 ALTER TABLE `write_off` DISABLE KEYS */;
INSERT INTO `write_off` VALUES (3000001,54321,54321,'2016-12-13',0),(1000019,09876,09876,'2016-12-11',2),(3000003,54321,54321,'2016-12-07',0),(3000003,14140,14140,'2016-12-07',1),(3000003,14140,14140,'2016-12-07',0);
/*!40000 ALTER TABLE `write_off` ENABLE KEYS */;
