<?php
	include '../config/koneksi.php';
	include 'session.php';

	$newfullname = $_POST['fullname'];
	$newemail = $_POST['email'];
	$newtree = $_POST['tree'];
	$newusername = $_POST['username'];
	$id = $_POST['id'];


	$sql = "UPDATE userdetails SET fullname = '$newfullname', email = '$newemail', tree = '$newtree' WHERE udid = $id";
	$ssql = "UPDATE user SET username = '$newusername' WHERE userDetails = $id";

	$goo = mysqli_query($conn, $sql);
	$ggo = mysqli_query($conn, $ssql);

	header('location:index.php?data=user');
?>