<?php 
include 'config/koneksi.php';

$subject = 'Lupa kata sandi - Tanduran Ilmu';

$email = $_POST['lemail'];
$username = $_POST['lusername'];
$tree = ucwords($_POST['ltree']);

$check = mysqli_query($conn, "SELECT username, email, tree FROM user LEFT JOIN userdetails ON user.userDetails = userdetails.udid WHERE username = '$username' AND email = '$email' AND tree = '$tree'");

if (mysql_num_rows($check) == 0){
	header('location:mulai.php?lupa&msg=3');
}else{


$n = 20;
$result = bin2hex(random_bytes($n));
$pesan = 'Kata sandi anda telah di reset menjadi '.$result.' Silakan masuk menggunakan kata sandi tersebut ';

$message = 'Halo, '.$username.'. '.$pesan;
$headers = 'From: awalariansyah7@gmail.com';

$reset = mail($email,$subject,$message,$headers);

if ($reset) {
	$newpassword = md5($result);
	$update = mysqli_query($conn, "UPDATE user SET password = '$newpassword' WHERE username = '$username'");
	if ($update) {
		header('location:mulai.php?lupa&msg=4');
	}else{
		header('location:mulai.php?lupa&msg=5');
	}
}else{
	header('location:mulai.php?lupa&msg=6');
}

}
?>

