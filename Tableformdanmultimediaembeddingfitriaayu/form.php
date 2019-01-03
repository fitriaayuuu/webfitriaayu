<html>
	<head>
		<title>Output Form</title>
	</head>
	<body align="center"bg background = "image/awann.jpg">
		<h1>Data Pendaftar</h1></br>
	<font color ="black">
	<font face ="calibri">
	<font size ="5">
		<?php
			echo "Nama : ".$_GET['nama']."</br>";
			echo "Password : ".$_GET['password']."</br>";
			echo "Jenis Kelamin : ".$_GET['jenis_kelamin']."</br>";
			echo "Keahlian : ".$_GET['keahlian']."</br>";
			echo "Kota Asal : ".$_GET['kota_asal']."</br>";
			echo "Deskripsi Diri : ".$_GET['deskripsi']."</br>";
		?>
	</body>
</html>