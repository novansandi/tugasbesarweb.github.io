<?php
	session_start();
	include "koneksi.php";

	$namaMhs = $_POST['namaMhs'];
	$nim = $_POST['nim'];
	$judulBuku = $_POST['judulBuku'];
	$tglPinjam = $_POST['tglPinjam'];
	$tglKembali = $_POST['tglKembali'];

	$sql = "INSERT INTO `peminjaman` VALUES (NULL , '$namaMhs', '$nim', '$judulBuku', '$tglPinjam','$tglKembali')";

	if (mysqli_query($connect, $sql)){
		echo "Berhasil ditambahkan";
		?>
		<a href="index.php">Lihat data pada Tabel </a>
		<?php
	}
	else {
		echo "Gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);

?>
