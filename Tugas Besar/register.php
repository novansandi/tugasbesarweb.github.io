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
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="box-login">
	<h3> Register</h3>

	<form action="doRegister.php" method="POST">
		<div class="input-group">
					<input type="text" name="username" placeholder="Username" /><br>
				</div>
				<div class="input-group">
					<input type="password" name="password" placeholder="password"><br> 
				</div>
				<div class="input-group">
					<input type="submit" name="register" value="Daftar"/><br> 
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
	<a href="login.php">Akun sudah siap</a>
</body>
</html>