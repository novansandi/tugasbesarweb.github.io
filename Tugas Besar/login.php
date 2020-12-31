<?php
	session_start();

	if(isset($_COOKIE["id"])){
	header("location:index.php");
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div class="box-login">
			<h2> Silahkan Masuk </h2>
			<form action="dologin.php" method="POST">
				<div class="input-group">
					<input type="text" name="username" placeholder="Username" /><br>
				</div>
				<div class="input-group">
					<input type="password" name="password" placeholder="password"><br> 
				</div>
				<div class="input-group">
					<input type="submit" name="masuk" value="Masuk"/><br> 
				</div>
			</form>
			<br />
			<?php
				if(isset($_SESSION["pesan"])){
					echo $_SESSION["pesan"];
					unset($_SESSION["pesan"]);
			}
			?>

			<br />
			<hr/>
			<a href="register.php">Tidak punya akun? Silahkan Registrasi</a>
		</div>
	
</body>
</html>