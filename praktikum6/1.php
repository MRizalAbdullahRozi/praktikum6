<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi Darabase MySQL</h1>
	<?php
	$conn = mysqli_connect("localhost","root","","my_db");

	// check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL : ". mysqli_connect_error();
		exit();
	}
	else {
		echo "CONNECTED";
	}
	?>
</body>
</html>