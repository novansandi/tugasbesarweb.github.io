<?php
	session_start();

	if(isset($_POST["username"])){

		$username =$_POST['username'];
		$password = $_POST['password'];

		if($username==""){
			$_SESSION["pesan"] = "Username harus diisi!";
			header("location:register.php");
			exit();
		}else if ($password==""){
			$_SESSION["pesan"] = "Password harus diisi!";
			header("location:register.php");
			exit();
		} else {

			include("koneksi.php");

			$result = $connect->query("SELECT * FROM user WHERE username LIKE '".$username."'");
		

			if($result->num_rows == 0){

				$connect->query("INSERT INTO user VALUES (null,'".$username."','".$password."')");
				header("location:index.php");
				exit();

			} else{
				$_SESSION["pesan"] = "username sudah digunakan!";
			header("location:register.php");
			exit();

			}
		}




	} else{
		header("location:index.php");
		exit();
	}
?>