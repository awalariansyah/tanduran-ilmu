<?php include 'config/koneksi.php';
	
	$username = filter_input(INPUT_POST, 'usernamem', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'passwordm', FILTER_DEFAULT);
    $password = md5($pass);

	$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$go = mysqli_query($conn, $query);
	$er = mysqli_fetch_array($go);
	$el = mysqli_num_rows($go);

	if($el != 0){
			session_start();
			$_SESSION['uid'] = $er['uid'];
			header("location:user/index.php");
	}else {
			mysqli_close($conn);
			header("location:mulai.php?daftar&msg=3");
	}

?>