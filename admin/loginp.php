<?php include '../config/koneksi.php';
	
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
    $password = md5($pass);

	$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$go = mysqli_query($conn, $query);

	$el = mysqli_num_rows($go);

	if($el != 0){
			$er = mysqli_fetch_array($go);
			session_start();
			$_SESSION['adminId'] = $er['adminId'];
			header("location:index.php");
	}else {
			mysqli_close($conn);
			echo '<script>alert("Anda tidak terdaftar sebagai admin!");document.location="login.php";</script>';
	}

?>