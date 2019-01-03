<html>
	<head>
		<title>Keluaran form</title>
	</head>
	<body align="center">
		<h3>Data Pendaftaran</h3>
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