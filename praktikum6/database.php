<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// check connection
if (!$conn){
	die("connection failed : ". mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE my_db";
if (mysqli_query($conn, $sql)){
	echo "Database created successfully";
} else {
	echo "Error creating database : ". mysqli_error($conn);
}

mysqli_close($conn);
?>