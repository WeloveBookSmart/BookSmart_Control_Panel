CREATE TABLE `package_book`(
   `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `name` text NULL,
   `package_item` text NULL,
   `package_price` DECIMAL(10,6) NULL,q
   `uid_fk` INT NULL,
   FOREIGN KEY (uid_fk) REFERENCES user(uid)
);