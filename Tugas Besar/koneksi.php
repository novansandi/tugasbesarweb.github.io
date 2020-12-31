<?php
	$connect = mysqli_connect('localhost','root','','tugasbesarweb');
	if(!$connect){
		echo 'Gagal Terhubung Database';
	}
	
?>