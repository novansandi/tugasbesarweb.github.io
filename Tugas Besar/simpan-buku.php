<?php
	session_start();
	include "koneksi.php";

	$noBuku = $_POST['noBuku'];
	$judulBuku = $_POST['judulBuku'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahunTerbit = $_POST['tahunTerbit'];

	$sql = "INSERT INTO `buku` (`noBuku`, `judulBuku`, `pengarang`, `penerbit`, `tahunTerbit`) VALUES ('$noBuku', '$judulBuku', '$pengarang', '$penerbit', '$tahunTerbit')";

	if (mysqli_query($connect, $sql)){
		echo "Berhasil ditambahkan";
	}
	else {
		echo "Gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);

?>
