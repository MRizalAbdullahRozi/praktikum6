<!DOCTYPE html>
<html>
<head>
	<title>FORM BUKU TAMU</title>
	<style type="text/css">
		body {
			background-color: grey;
			font-weight: bold;
		}
	</style>
</head>
<body>
<center><h2>FORM BUKU TAMU</h2></center>
<form action="input.php" method="post">
<table width="400" align="center" cellpadding="10" cellspacing="10">
			<tr>
				<td width="130">Nama  </td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email  </td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">Isi  </td>
				<td>:</td>
				<td><input type="text" name="isi"></td>
			</tr>
			<tr>
				<td colspan="10">
					<input type="submit" name="kirim" value="Kirim">
					<input type="reset" name="reset">
				</td>
			</tr>
</table>
</form>
</body>
</html>