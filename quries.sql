

sql name= "medical_services";

CREATE TABLE `cities` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
    `city_name` varchar(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIME
);

CREATE TABLE `services` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
    `ser_name` varchar(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIME
);

CREATE TABLE `orders` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `order_name` VARCHAR(100) NOT NULL,
    `order_email` VARCHAR(100) NOT NULL,
    `order_mobile` VARCHAR(11) NOT NULL,
    `order_notes` TEXT NOT NULL,
    `order_city_id` INT NOT NULL, 
    `order_ser_id` INT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`order_city_id`) REFERENCES cities(id) ON DELETE CASCADE,
    FOREIGN KEY (`order_ser_id`) REFERENCES services(id) ON DELETE CASCADE
);

CREATE TABLE `admins` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `admin_name` VARCHAR(100) NOT NULL,
    `admin_email` VARCHAR(100) NOT NULL,
    `admin_password` VARCHAR(11) NOT NULL,
    `admin_type` ENUM('admin', 'super_admin') DEFAULT 'admin',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

