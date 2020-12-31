
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
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
			<th>Judul Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
		</tr>
			<?php

			include "koneksi.php"; 
			$query="SELECT * FROM peminjaman";
			$result=mysqli_query($connect, $query);

			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
			?>
		<tr>
			<td style="text-align: center;"> <?php echo $row["namaMhs"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["nim"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["judulBuku"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["tglPinjam"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["tglKembali"] ?> </td>
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
		<h1 align="center">Administrasi Peminjaman</h1>
		<table align="center" cellspacing="0" width="70%" style="margin:auto; margin-top: 64px;">
			<form action="simpan-pinjam.php" method="POST">
			<tr>
				<td colspan="2"><h1 align="center">Detail Peminjaman</h1></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="namaMhs" class="input"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim" class="input"></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judulBuku" class="input"></td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="datetime-local" name="tglPinjam" class="input"></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="datetime-local" name="tglKembali" class="input"></td>
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