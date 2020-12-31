<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="images/gambar.jfif">
	
</head>
<body>
	<div id="layout">
		<div id="header">
			<img src="images/background.jpg" class="header">

	<?php
		if (isset($_COOKIE["id"])) {

			include("koneksi.php");
			$getUserLoggedIn = $connect->query("SELECT * FROM user WHERE id = '".$_COOKIE["id"]."'")-> fetch_assoc();
	?>
	<br></br>
	Hello <strong><?=$getUserLoggedIn["username"]?></strong>!<br/>
	
	<a href="logout.php">Logout</a>
	<?php
		} else{
		
	?>
	<br>
	Hello Guest <a href="login.php">Login</a> or <a href="register.php">Register</a>
	</br>
	<?php
		}
	?>
	<div class="container">
		<div class="kiri">
		<ul>
			<a href="index.php?act=buku"><li>Buku</li></a>
			<a href="index.php?act=peminjaman"><li>Peminjaman</li></a>
			<a href="index.php?act=siswa"><li>Siswa</li></a>
		</ul>
	</div>
	<div class="kanan">
		<div class="hal">
			<?php
				if(isset($_GET['act'])){
					if($_GET['act'] == 'buku')
						include 'buku.php';
					else
						if ($_GET['act'] == 'peminjaman')
						include 'peminjaman.php';
					else
						if ($_GET['act'] == 'siswa')
						include 'siswa.php';
				} else if (isset($_GET['editBuku'])){
					include "editBuku.php";


				} else 
					include "depan.php";
			?>
			<div id="runningtext">
			<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop(),"onmouseout="this.start(),"direction="right">
				Selamat Datang Di Website Perpustakaan Online
			</marquee>
		</div>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>
