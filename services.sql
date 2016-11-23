 CREATE TABLE IF NOT EXISTS `services` (  
  `sid` int(11) NOT NULL AUTO_INCREMENT,  
  `service_name` text NOT NULL,  
  `package_name` text NOT NULL,
  `price` DECIMAL(10,6) NOT NULL,
  `user_name` text NOT NULL,
  `package_id_fk` INT NOT NULL,
  `uid_fk` INT NOT NULL,
  `book_id_fk` INT NOT NULL,
  `client_id_fk` INT NOT NULL,
  `booking_status` tinyint(1) DEFAULT 0 NOT NULL,
  PRIMARY KEY (`id`)
   FOREIGN KEY (package_id_fk)  REFERENCES tbl_packages(package_id)
   FOREIGN KEY (uid_fk)  REFERENCES user(uid)
   FOREIGN KEY (book_id_fk)  REFERENCES tbl_booking(book_id)
   FOREIGN KEY (client_id_fk)  REFERENCES client(client_id);
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;  