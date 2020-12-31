<?php
	session_start();
	include "koneksi.php";

	$NIM = $_POST['NIM'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO `siswa` (`NIM`, `nama`, `kelas`, `jk`, `alamat`) VALUES ('$NIM', '$nama', '$kelas', '$jk', '$alamat')";

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
