CREATE TABLE `tbl_service`(
	`sid` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`services_name` varchar(120) NOT NULL,
	`services_cat` char(50) NOT NULL,
	`services_type` char(50) NOT NULL,
	`services_location` varchar(80) NOT NULL,
	`services_description` varchar(150) NOT NULL,
	`services_price` DECIMAL(10,6) NOT NULL,
	`uid_fk` int NOT NULL,
	`package_id_fk` int NOT NULL
	FOREIGN KEY `uid_fk` REFERENCES user(`uid`),
	FOREIGN KEY `package_id_fk` REFERENCES package(`package_id`);
);