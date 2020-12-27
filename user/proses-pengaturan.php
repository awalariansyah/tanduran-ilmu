<?php

	include '../config/koneksi.php';
	include 'sesi.php';

	if(isset($_POST['ubah'])){
		if(isset($_POST['password'])){
			$newFullname = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
			$newEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
			$pass = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
			$newPassword = md5($pass);
			$udid = $user['udid'];
			$uid = $user['uid'];

			$q = "UPDATE userdetails SET fullname = '$newFullname', email = '$newEmail' WHERE udid = $udid";
			$r = "UPDATE user SET password = '$newPassword' WHERE uid = $uid";
			$go = mysqli_query($conn, $q);
			$og = mysqli_query($conn, $r);

			if($go && $og){
				echo '<script language="javascript">alert("Pembaruan data berhasil");document.location="profil.php";</script>';
			}else{
				echo '<script language="javascript">alert("Pembaruan data gagal");document.location="pengaturan.php";</script>';
			}
		}else {
			$newFullname = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
			$newEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

			$q = "UPDATE userdetails SET fullname = '$newFullname', email = '$newEmail' WHERE udid = $udid";
			$go = mysqli_query($conn, $q);

			if($go){
				echo '<script language="javascript">alert("Pembaruan data berhasil");document.location="profil.php";</script>';
			}else{
				echo '<script language="javascript">alert("Pembaruan data gagal");document.location="pengaturan.php";</script>';
			}
		}

	}else{
		echo "<center>
				<h1>404 - Halaman Tidak Ditemukan</h1>
				<p>-------------------------------</p>
				<p>Hak cipta © 2020 - <a href='/'>Tanduran Ilmu</a></p>
			</center>";
	}


?>