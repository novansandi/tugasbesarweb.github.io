
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
			<th>NIM</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>
			<?php

			include "koneksi.php"; 
			$query="SELECT * FROM siswa";
			$result=mysqli_query($connect, $query);

			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
			?>
		<tr>
			<td style="text-align: center;"> <?php echo $row["NIM"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["nama"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["kelas"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["jk"] ?> </td>
			<td style="text-align: center;"> <?php echo $row["alamat"] ?> </td>
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
		<table align="center" cellspacing="0" width="70%" style="margin:auto; margin-top: 64px;">
			<form action="simpan-siswa.php" method="POST">
			<tr>
				<td colspan="2"><h1 align="center">Tambah Siswa</h1></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="NIM" class="input"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" class="input"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" class="input"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk" class="input">
					<option>Laki-Laki</option>
					<option>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea class="text-area" name="alamat"></textarea></td>
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