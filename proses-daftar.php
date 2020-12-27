<?php include 'config/koneksi.php';
	
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$rawname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
	$fullname = ucwords($rawname);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$pass = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
	$password = md5($pass);
	$rawtree = filter_input(INPUT_POST, 'tree', FILTER_SANITIZE_STRING);
	$tree = ucwords($rawtree);
	$date = Date('Y-m-d');

	$query = "INSERT INTO userdetails VALUES (NULL, '$fullname', '$email', '$tree')";
	$go = mysqli_query($conn, $query);

	if($go){
		$og = mysqli_fetch_array(mysqli_query($conn, "SELECT udid FROM userdetails WHERE fullname = '$fullname'"));
		$uid = $og['udid'];
		$query2 = "INSERT INTO user VALUES (NULL, '$username', '$password', '$uid', '$date')";
		$gos = mysqli_query($conn, $query2);

		if($gos){
			mysqli_close($conn);
			header("location:mulai.php?masuk&msg=1");
		}else {
			mysqli_close($conn);
			header("location:mulai.php?daftar&msg=2");
		}
	}else {
			mysqli_close($conn);
			header("location:mulai.php?daftar&msg=2");
	}

?>