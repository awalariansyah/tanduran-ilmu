<?php
	include '../config/koneksi.php';
	include 'session.php';

	$adstitle = $_POST['adstitle'];
	$adsbrand = $_POST['adsbrand'];
	$adstipe = strtolower($_POST['adstipe']);
	$adsdate = date('Y-m-d H:i:s');

	if($adstipe != 'banner' || $adstipe != 'square'){
		echo '<script>alert("Tipe iklan tidak dikenali!");document.location="index.php?data=ads";</script>';
	};

	$adsimg = $_FILES['adsimg']['name'];
	$tmp_name = $_FILES['adsimg']['tmp_name'];

	$acceptedFormats = array('png', 'jpg', 'jpeg');

	if(!in_array(pathinfo($adsimg, PATHINFO_EXTENSION), $acceptedFormats)) {
			
			echo '<script language="javascript">';
			echo 'alert("Format berkas tidak didukung! Hanya mendukung .png .jpg dan .jpeg");document.location="index.php?data=ads";</script>';
	}

	move_uploaded_file($tmp_name, "../assets/img/ads/".$adsimg);
	$sql = "INSERT INTO ads VALUES (NULL, '$adstitle', '$adsbrand', '$adstipe','$adsimg', 1 , '$adsdate')";

	$go = mysqli_query($conn, $sql);

	header('location:index.php?data=ads');
?>