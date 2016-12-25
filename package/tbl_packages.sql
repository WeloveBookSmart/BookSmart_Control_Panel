 CREATE TABLE IF NOT EXISTS `tbl_packages` (  
  `package_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
  `package_name` varchar(20) NOT NULL,
  `user_book` text NULL,
  `package_image` blob NOT NULL,
  `detail` text NOT NULL,
  `package_availability` smallint NOT NULL,
  `package_price` DECIMAL(10,2) NOT NULL,  
  `total_package` smallint(11) NOT NULL,
  `booking_condition` enum("full","avail") NULL,
  `payment_status` TINYINT(1) DEFAULT 0 NOT NULL,
  `package_id_fk` INT NOT NULL,
  `book_id_fk` INT NOT NULL,
  `client_id_fk` INT NOT NULL,
  `booking_status_fk` tinyint(1) DEFAULT 0 NOT NULL,
  PRIMARY KEY (`id`)
   FOREIGN KEY (package_id_fk)  REFERENCES tbl_packages(package_id)
   FOREIGN KEY (uid_fk)  REFERENCES user(uid)
   FOREIGN KEY (book_id_fk)  REFERENCES tbl_booking(book_id)
   FOREIGN KEY (client_id_fk)  REFERENCES client(client_id)
  FOREIGN KEY (`sid`) REFERENCES service(`sid`)
  FOREIGN KEY (booking_status_fk)  REFERENCES tbl_booking(booking_status)
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;  