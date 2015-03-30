<?php

$host="localhost";
$user="root";
$pwd="";
$db="rentalDB";


$con = new mysqli($host,$user,$pwd);
//check connection
if($con->connect_error)
	die("Connection failed: " . $con->connect_error);
else{	
	//Connection successful
	//Create database if it doesn't exists
	session_start();
	$sql = "CREATE DATABASE IF NOT EXISTS ".$db;	
	if ($con->query($sql) === FALSE)
		echo "Error creating database: " . $con->error;

	$con->connect($host, $user, $pwd, $db);
	$_SESSION['tableName'] = "users";
	
	//Create user Table if it doesn't exist
	$sql = "CREATE TABLE IF NOT EXISTS users(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstName VARCHAR(30) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
	phoneNumber VARCHAR(15) NOT NULL,
	email VARCHAR(50) NOT NULL,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	type VARCHAR(7) NOT NULL
	)";
	
	if ($con->query($sql) === FALSE)
		echo "Error creating table: " . $con->error;
	
	//create tenant profile Table if it doesnt exist
	$sql1 = "CREATE TABLE IF NOT EXISTS tenantProfile(
	id INT(6) PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	pets VARCHAR(5) NOT NULL,
	smoker VARCHAR(3) NOT NULL,
	age VARCHAR(5) NOT NULL,
	education VARCHAR(10) NOT NULL,
	work VARCHAR(12) NOT NULL,
	income VARCHAR(8) NOT NULL
	)";
	
	if ($con->query($sql1) === FALSE)
		echo "Error creating table: " . $con->error;
	
	//create owner profile Table if it doesnt exist
	$sql2 = "CREATE TABLE IF NOT EXISTS ownerProfile(
	id INT(6) PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	pets VARCHAR(5) NOT NULL,
	smoker VARCHAR(3) NOT NULL,
	age VARCHAR(5) NOT NULL,
	education VARCHAR(10) NOT NULL,
	work VARCHAR(12) NOT NULL,
	income VARCHAR(8) NOT NULL
	)";
	
	if ($con->query($sql2) === FALSE)
		echo "Error creating table: " . $con->error;
}
?>
