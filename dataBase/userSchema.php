<?php 

  
// create user Table schema
$createUsersTable = "CREATE TABLE users(
    id INT(10) PRIMARY KEY UNSINGED AUTO_INCREMENT,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT(10) NOT NULL,
    password VARCHAR(150) NOT NULL,
)"


 


?>