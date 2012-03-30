/*
MySQL Backup
Source Server Version: 5.0.51
Source Database: hubdb
Date: 3/28/2012 03:08:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `hub_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `hub_tbl`;
CREATE TABLE `hub_tbl` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `address` varchar(50) default NULL,
  `gender` varchar(45) default NULL,
  `b_day` varchar(45) default NULL,
  `phone_no` varchar(45) default NULL,
  `guardian` varchar(45) default NULL,
  `network_status` varchar(45) default NULL,
  `remarks` text,
  `rdate` varchar(20) default NULL,
  `status` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `hub_tbl` VALUES ('8','Cedrick C. Macatangay','B1B L-19 Palmera Homes Nova East Novaliches Qeuzon','Male','April 3 1989','09166502863','Conrado C. Macatangay','Globe','Software Developer of NorthStar Solutions INC.','03/27/2012',NULL), ('9','Richard C. Manalo','Calit-calit San Juan, Batangas','Male','April 8 1987','09183114656','Henando Manalo','Smart','Graduating... MSEUFCI HR.. Batch 2012','03/27/2012',NULL);
