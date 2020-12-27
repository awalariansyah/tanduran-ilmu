<?php
	include '../config/koneksi.php';
	
	session_start();

	$user_check = $_SESSION['uid'];

	$ses_sql= mysqli_query($conn, "SELECT uid FROM user WHERE uid='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session = $row['uid'];

	if(!isset($login_session)){
		mysqli_close($conn);
		echo '<script>alert("Anda harus masuk terlebih dahulu!");document.location="../mulai.php?masuk";</script>';
	}
	
	$queryUser = mysqli_query($conn, "SELECT * FROM user LEFT JOIN userdetails ON user.userDetails = userdetails.udid WHERE uid='$login_session'");
	$user = mysqli_fetch_assoc($queryUser);

?>