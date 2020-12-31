<?php
	session_start();
	include "koneksi.php";

	$noBuku = $_POST['noBuku'];
	$judulBuku = $_POST['judulBuku'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahunTerbit = $_POST['tahunTerbit'];

	$sql = "UPDATE `buku` SET `judulBuku` = '$judulBuku',`pengarang` = '$pengarang',`penerbit` = '$penerbit',`tahunTerbit` = '$tahunTerbit' WHERE `buku`.`noBuku` = '$noBuku'";
	
	if (mysqli_query($connect, $sql)){
		echo "Berhasil diubah";
		?>
		<a href="index.php">Lihat data pada Tabel </a>
		<?php
	}
	else {
		echo "Gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);

?>
