<?php
	include '../config/koneksi.php';
	include 'sesi.php';

	$qn = $_GET['x'];
	$ew = $_GET['v'];
	if($ew == $user['username']){

		$re = "DELETE FROM report WHERE postId = $qn";
		$vb = "DELETE FROM post WHERE postId = $qn";
		$go = mysqli_query($conn, $vb);
		$gos = mysqli_query($conn, $re);

		if($go && $gos){
			echo '<script>alert("Berhasil menghapus artikel.");document.location="profil.php"</script>';
		}else{
			echo '<script>alert("Gagal menghapus artikel. Coba lagi nanti.");document.location="profil.php"</script>';
		}
	}else{

		header('location: ilmu.php?post='.$qn);
	}
?>
