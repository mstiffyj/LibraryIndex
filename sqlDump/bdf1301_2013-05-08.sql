# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: bdf1301
# Generation Time: 2013-05-08 20:02:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table book
# ------------------------------------------------------------

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `bookId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `publisher` varchar(50) NOT NULL DEFAULT '',
  `isbn` varchar(20) NOT NULL DEFAULT '',
  `genreId` int(11) unsigned NOT NULL,
  PRIMARY KEY (`bookId`),
  KEY `genre` (`genreId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;

INSERT INTO `book` (`bookId`, `title`, `author`, `publisher`, `isbn`, `genreId`)
VALUES
	(3,'Narrative of the Life of Frederick Douglass','Frederick Douglass','Dover Publicationshj','4862849992',1),
	(10,'The Da Vinci Code','Dan Brown','Dover Publications','307474275',0),
	(11,'Hello Goodbye','Dan Brown','Dover Publicationed','307474275',0);

/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table genre
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genre`;

CREATE TABLE `genre` (
  `genreId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`genreId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;

INSERT INTO `genre` (`genreId`, `genre`)
VALUES
	(1,'Romance'),
	(2,'Biography'),
	(3,'Mystery');

/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_password` char(32) NOT NULL DEFAULT '',
  `user_fullname` varchar(40) NOT NULL DEFAULT '',
  `user_salt` char(8) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UX_name` (`user_name`),
  UNIQUE KEY `UX_name_password` (`user_name`,`user_password`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_fullname`, `user_salt`)
VALUES
	(2,'rick','2d3e8f1494ab7d4c63c49b94097acc70','Rick O','hudifh98'),
	(3,'','','',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table usersNotNormalized
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usersNotNormalized`;

CREATE TABLE `usersNotNormalized` (
  `userId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `dob` date DEFAULT NULL,
  `userStatus` varchar(15) DEFAULT NULL,
  `userType` varchar(15) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `usersNotNormalized` WRITE;
/*!40000 ALTER TABLE `usersNotNormalized` DISABLE KEYS */;

INSERT INTO `usersNotNormalized` (`userId`, `firstname`, `lastname`, `username`, `password`, `dob`, `userStatus`, `userType`, `createdDate`)
VALUES
	(1,'John','Doe','jdoe','pass123','1991-01-23','active','administrator','2012-03-14 12:34:44'),
	(2,'Bruce','Wayne','bbat','dog334','1993-07-10','active','client','2012-03-15 17:54:09'),
	(3,'Dave','Banner','dHulk','apple3','1990-05-19','deleted','Client','2012-03-15 22:01:34'),
	(4,'Tony','Stark','ts101','couch','1996-03-01','Active','cleint','2012-03-16 08:01:56'),
	(5,'Peter','Parker','spider1','web777','1987-04-27','active','clients','2012-03-17 10:24:25');

/*!40000 ALTER TABLE `usersNotNormalized` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table userStatus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `userStatus`;

CREATE TABLE `userStatus` (
  `userStatusId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userStatus` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`userStatusId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `userStatus` WRITE;
/*!40000 ALTER TABLE `userStatus` DISABLE KEYS */;

INSERT INTO `userStatus` (`userStatusId`, `userStatus`)
VALUES
	(1,'active'),
	(2,'deleted');

/*!40000 ALTER TABLE `userStatus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table userType
# ------------------------------------------------------------

DROP TABLE IF EXISTS `userType`;

CREATE TABLE `userType` (
  `userTypeId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userType` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`userTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `userType` WRITE;
/*!40000 ALTER TABLE `userType` DISABLE KEYS */;

INSERT INTO `userType` (`userTypeId`, `userType`)
VALUES
	(1,'administrator'),
	(2,'client');

/*!40000 ALTER TABLE `userType` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
