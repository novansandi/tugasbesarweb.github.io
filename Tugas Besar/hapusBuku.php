<?php
	include "koneksi.php";
	$noBuku =$_GET['noBuku'];
	$query = "DELETE FROM buku WHERE noBuku='$noBuku'";
	$result=mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil dihapus";
		?>
		<a href="index.php">Lihat data di Tabel</a>
		<?php
	} else {
		echo "Data gagal dihapus" . mysqli_error($connect);
	}
	?>

?>