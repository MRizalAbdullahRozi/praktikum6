<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// chec connection
if (!$conn) {
	die("connection failed :". mysqli_connect_error());
}
$sql = "INSERT INTO liga (kode, negara, champion) values ('jer','jerman','4')";
if (mysqli_query($conn,$sql)) {
	echo "New Record created successfully";
} else {
	echo "error : ". $sql. "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>