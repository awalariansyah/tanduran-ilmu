<?php
	include '../config/koneksi.php';
	include 'sesi.php';

if(isset($_GET['postid'])){
	$pid = $_GET['postid'];
	$precheck = mysqli_query($conn, "SELECT * FROM post WHERE postId = $pid");
	if(mysqli_num_rows($precheck) == 0){
		echo '<script>alert("Artikel tidak ditemukan!");document.location="index.php";</script>';
	}else{
		$check = mysqli_query($conn, "SELECT * FROM report WHERE postId = $pid");
		if(mysqli_num_rows($check) == 0){
			$report = mysqli_query($conn, "INSERT INTO report VALUES ('', $pid, 1)");
			$rid = mysqli_fetch_array(mysqli_query($conn, "SELECT rid FROM report WHERE postId = $pid"))['rid'];
			$updateReport = mysqli_query($conn, "UPDATE post SET postReport = $rid WHERE postId = $pid");

			if($updateReport){
				echo '<script>alert("Berhasil melakukan laporan");document.location="ilmu.php?post='.$pid.'";</script>';
			}
		}else{
			$curVal = mysqli_fetch_array($check);
			$newVal = $curVal['totalReport'] + 1; 
			$report = mysqli_query($conn, "UPDATE report SET totalReport = $newVal WHERE postId = $pid");

			echo '<script>alert("Berhasil melakukan laporan");document.location="ilmu.php?post='.$pid.'";</script>';
		}
	}
}else{
	echo '
			<center>
				<h1>404 - Halaman Tidak Ditemukan</h1>
				<p>-------------------------------</p>
				<p>Hak cipta © 2020 - <a href="/">Tanduran Ilmu</a></p>
			</center>';
}





?>