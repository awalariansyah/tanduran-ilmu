<?php
	include '../config/koneksi.php';
	include 'session.php';

	$id = $_GET['id'];


	$sql = "DELETE FROM ads WHERE adsId = $id";

	$go = mysqli_query($conn, $sql);

	header('location:index.php?data=ads');
?>