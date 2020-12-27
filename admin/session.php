<?php
	include '../config/koneksi.php';
	
	session_start();

	$adminid = $_SESSION['adminId'];

	$ses_sql= mysqli_query($conn, "SELECT adminId FROM admin WHERE adminId = '$adminid'");
	$row = mysqli_fetch_assoc($ses_sql);

	$admin = $row['adminId'];

	if(!isset($admin)){
		mysqli_close($conn);
		echo '<script>alert("Anda harus masuk sebagai admin terlebih dahulu!");document.location="login.php";</script>';
	}
	
	$querAdmin = mysqli_query($conn, "SELECT * FROM admin WHERE adminId='$admin'");
	$adm = mysqli_fetch_assoc($querAdmin);

?>