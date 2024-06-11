/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - ncc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ncc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ncc`;

/*Table structure for table `activities` */

DROP TABLE IF EXISTS `activities`;

CREATE TABLE `activities` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `files` varchar(500) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `activities` */

insert  into `activities`(`activity_id`,`student_id`,`title`,`files`,`date`,`type`) values (1,1,'hdsgfiulye','images/bp.jpg','02/20/2022','jpg'),(2,0,'werda','images/images_62f4a93a0df2d.jpg','2022-08-11 12:31:14','jpg'),(3,0,'aaaaaaaaaa','images/images_62f4a95bce022.jpg','2022-08-11 12:31:47','jpg'),(4,1,'aaaaaaaaaa','images/images_62f4a973a4093.jpg','2022-08-11 12:32:11','jpg');

/*Table structure for table `attendance` */

DROP TABLE IF EXISTS `attendance`;

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `head_id` int(11) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `attendance` */

insert  into `attendance`(`attendance_id`,`student_id`,`head_id`,`date`,`status`) values (2,1,1,'02/20/2000','present'),(3,1,1,'2022-08-26','present');

/*Table structure for table `camp_details` */

DROP TABLE IF EXISTS `camp_details`;

CREATE TABLE `camp_details` (
  `camp_id` int(11) NOT NULL AUTO_INCREMENT,
  `head_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `time` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`camp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `camp_details` */

insert  into `camp_details`(`camp_id`,`head_id`,`title`,`description`,`place`,`date`,`time`) values (1,1,'summer camp','kjdsihdagcdvuyahiudcaa','kochi','02/20/2022','15;52'),(2,0,'clysiss','description 1','thuravoor cherthala','2022-08-26','17:26');

/*Table structure for table `certificate` */

DROP TABLE IF EXISTS `certificate`;

CREATE TABLE `certificate` (
  `certificate_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `certificate_file` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`certificate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `certificate` */

insert  into `certificate`(`certificate_id`,`student_id`,`certificate_file`,`date`,`type`) values (1,1,'images/images_62f35d55b7c20.jpg','2022-08-10 12:55:09',NULL),(2,2,'images/images_62f3870ddc553.jpg','2022-08-10 15:53:09','jpg');

/*Table structure for table `exam` */

DROP TABLE IF EXISTS `exam`;

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_title` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `time` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `exam` */

insert  into `exam`(`exam_id`,`exam_title`,`amount`,`date`,`time`,`status`) values (2,'gggg','20005','2022-08-25','20:25','finished');

/*Table structure for table `expences` */

DROP TABLE IF EXISTS `expences`;

CREATE TABLE `expences` (
  `expence_id` int(11) NOT NULL AUTO_INCREMENT,
  `head_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`expence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `expences` */

insert  into `expences`(`expence_id`,`head_id`,`title`,`details`,`amount`,`date`) values (1,1,'campfoods','summer camp food expence','15000','02/20/2022'),(2,1,'wer','saer','36','2022-08-11'),(3,1,'wer','saer','36','2022-08-11');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_type` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`login_id`,`user_name`,`password`,`user_type`) values (1,'admin','admin','admin'),(2,'amal','amal','headteacher'),(3,'devi','devi','student'),(11,'jos','jos','student');

/*Table structure for table `ncc_head` */

DROP TABLE IF EXISTS `ncc_head`;

CREATE TABLE `ncc_head` (
  `head_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`head_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ncc_head` */

insert  into `ncc_head`(`head_id`,`login_id`,`first_name`,`last_name`,`place`,`phone`,`email`) values (1,2,'amal','jith','thuravoor cherthala','7845115485','amaljith@gmail.com');

/*Table structure for table `next_year_plan` */

DROP TABLE IF EXISTS `next_year_plan`;

CREATE TABLE `next_year_plan` (
  `next_year_plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `head_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`next_year_plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `next_year_plan` */

insert  into `next_year_plan`(`next_year_plan_id`,`head_id`,`title`,`description`,`date`) values (2,1,'hhh','hhhhh','2022-08-10 17:11:09');

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `notification` */

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`student_id`,`payment_type_id`,`amount`,`date`,`type`) values (1,1,1,'2000','02/20/2022','exam fee'),(5,1,2,'20005','2022-08-11 15:54:08','exam');

/*Table structure for table `requirement` */

DROP TABLE IF EXISTS `requirement`;

CREATE TABLE `requirement` (
  `requirement_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `last_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`requirement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `requirement` */

insert  into `requirement`(`requirement_id`,`type`,`amount`,`last_date`) values (3,'uniform','2000','2022-08-18');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `head_id` int(11) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

insert  into `student`(`student_id`,`login_id`,`head_id`,`first_name`,`last_name`,`place`,`phone`,`email`) values (1,3,1,'devi','krishna','kochi','9765432134','devi@gmail.com'),(7,11,1,'josep','jo','thuravoor ','9874563217','amaljith@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
