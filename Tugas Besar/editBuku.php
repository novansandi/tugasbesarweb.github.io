<!DOCTYPE html>
<html>
<head>
	<title>Edit Buku</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 
	<?php
			include "koneksi.php";
			$query = mysqli_query($connect,"SELECT * FROM buku");
			while($row = mysqli_fetch_array($query)){
			?>
	<div class="container" style="margin-top: 64px;">
		<table align="center" cellspacing="0" width="70%" style="margin:auto; margin-top: 64px;">
			<form action="simpan-edit-buku.php" method="POST">
			<tr>
				<td colspan="2"><h1 align="center">Edit Buku</h1></td>
			</tr>
			<tr>
				<td>No Buku</td>
				<td><input type="hidden" name="noBuku" value="<?php echo $row['noBuku'];?>"></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judulBuku" value="<?php echo $row['judulBuku'];?>"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" value="<?php echo $row['pengarang'];?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" value="<?php echo $row['penerbit'];?>"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="date" name="tahunTerbit" value="<?php echo $row['tahunTerbit'];?>"></td>
			</tr>
			<tr>
				<td colspan="2" style="padding-bottom: 16px;">
					<input type="reset" class="submit" value="Reset">

					<input type="submit" class="submit right" value="Edit">
				</td>
			</tr>
			</form>
		</table>
	</div>
	<?php
}
?>
</body>
</html>