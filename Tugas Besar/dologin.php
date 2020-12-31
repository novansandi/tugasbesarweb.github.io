<?php
	if(isset($_POST["username"])){

		$username =$_POST['username'];
		$password = $_POST['password'];

		if($username==""){
			$_SESSION["pesan"] = "Username harus diisi!";
			header("location:login.php");
			exit();
		}else if ($password==""){
			$_SESSION["pesan"] = "Password harus diisi!";
			header("location:login.php");
			exit();
		} else {

			include("koneksi.php");
		
			$result = $connect->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
		
			if($result->num_rows==1){

				setcookie("id",$result->fetch_assoc()["id"]);
				header("location:index.php");
				exit();

			} else if($result->num_rows>=1){

				setcookie("id",$result->fetch_assoc()["id"]);
				header("location:info_user.php");
				exit();
			}else{
				$_SESSION["pesan"] = "Akun tidak ditemukan!";
				header("location:login.php");
				exit();

			}
		}


	} else {
		header("location:/");
		exit();
	}
?>

