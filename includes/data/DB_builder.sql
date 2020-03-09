CREATE DATABASE andras;

use andras;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	age INT(3),
	location VARCHAR(50),
	date TIMESTAMP
);

CREATE TABLE huntings (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user INT(11) UNSIGNED NOT NULL, 
	user_name VARCHAR(50) NOT NULL,
	user_range VARCHAR(50) NOT NULL,
	user_castle VARCHAR(50) NOT NULL,
	user_report VARCHAR(50) NOT NULL,
	date TIMESTAMP


);