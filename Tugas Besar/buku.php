
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Kita</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 
	<div class="container" style="margin-top: 64px;">
		<div id="table">
	<table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
		<tr>
			<th>No Buku</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun terbit</th>
			<th>Action</th>
		</tr>
			<?php

			include "koneksi.php"; 
			$query="SELECT * FROM buku";
			$result=mysqli_query($connect, $query);

			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
			?>
		<tr>
			<td style="text-align: center;"> <?php echo $row["noBuku"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["judulBuku"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["pengarang"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["penerbit"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["tahunTerbit"] ?> </td>
			<td style="text-align: center;"><a href="?editBuku=<?=$row['tahunTerbit']?>">Edit</a></td>
		</tr>
				<?php
				}
			}
			else {
				echo "0 results";
			}
			?>
		</table>
	</div>
		<h1 align="center">Administrasi Buku</h1>
		<table align="center" cellspacing="0" width="70%" style="margin:auto; margin-top: 64px;">
			<form action="simpan-buku.php" method="POST">
			<tr>
				<td colspan="2"><h1 align="center">Tambah Buku</h1></td>
			</tr>
			<tr>
				<td>No Buku</td>
				<td><input type="number" name="noBuku" class="input"></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judulBuku" class="input"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" class="input"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" class="input"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="date" name="tahunTerbit" class="input"></td>
			</tr>
			<tr>
				<td colspan="2" style="padding-bottom: 16px;">
					<input type="reset" class="submit" value="Reset">

					<input type="submit" class="submit right" value="Tambah">
				</td>
			</tr>
		</form>
	</table>

	
</div>
</body>
</html>