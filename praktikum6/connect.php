<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			background-color: grey;
			font-weight: bold;
		}
	</style>
</head>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$con = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
</body>
</html>
