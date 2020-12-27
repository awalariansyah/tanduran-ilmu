<?php
	include '../config/koneksi.php';
	include 'session.php';

	$id = $_GET['id'];
	$rid = $_GET['rid'];

	$sqll = "UPDATE post SET postReport = NULL WHERE postId = $id";
	$sql = "DELETE FROM report WHERE rid = $rid";

	$goo = mysqli_query($conn, $sqll);
	$go = mysqli_query($conn, $sql);

	header('location:index.php?data=report');

?>