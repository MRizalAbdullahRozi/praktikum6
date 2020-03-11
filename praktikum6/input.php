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
include "connect.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

$sql = "INSERT INTO bukutamu ( nama, email, isi)
VALUES  ('$nama','$email','$isi')";

if (mysqli_query($con, $sql)) {
	echo "<center><h3>New record</h3></center>";
} else {
	echo "Erorr : " . $sql . "<br>" .  mysqli_error($con);
}

mysqli_close($con);
?>

	<center><button><a href="tugas 1.php">KEMBALI</a></button></center>
</body>
</html>