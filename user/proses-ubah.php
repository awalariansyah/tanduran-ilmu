<?php 
include '../config/koneksi.php';
include 'sesi.php';

if (isset($_POST["ubah"])) {
	if($_FILES['berkas']['size'] == 0){
		$postId = $_POST['pid'];
		$postTitle = $_POST['judul'];
		$postDesc = $_POST['deskripsi'];

		$postAuthor = $user['uid'];
		$postContent = $_POST['isiankonten'];

		$postDate = date("Y-m-d");			
		
		$queries = "UPDATE post SET postTitle ='$postTitle', postDesc = '$postDesc', postContent = '$postContent', postDate = '$postDate' WHERE postId = $postId ";
		$final = mysqli_query($conn, $queries);	
				
		if($final){
			echo '<script language="javascript">';
			echo 'alert("Proses perubahan artikel berhasil!");document.location="ilmu.php?post='.$postId.'";</script>';
			return;
		}else{
			echo '<script language="javascript">';
			echo 'alert("Proses perubahan artikel gagal! Coba lagi dalam beberapa menit.");document.location="ilmu.php?post='.$postId.'";</script>';
			return;
		}
	}else{
		$postId = $_POST['pid'];
		$postTitle = $_POST['judul'];
		$postDesc = $_POST['deskripsi'];

		$postAuthor = $user['uid'];
		$postContent = $_POST['isiankonten'];

		$postDate = date("Y-m-d");
		$file_name = $_FILES['berkas']['name'];
		$file_size = $_FILES['berkas']['size'];

		$tmp_name = $_FILES['berkas']['tmp_name'];
		$acceptedFormats = array('png', 'jpg', 'jpeg');

		if(!in_array(pathinfo($file_name, PATHINFO_EXTENSION), $acceptedFormats)) {
			
			echo '<script language="javascript">';
			echo 'alert("Format berkas tidak didukung! Hanya mendukung .png .jpg dan .jpeg");document.location="buat.php";</script>';
			return;
		}else if($file_size > 1048576){
			echo '<script language="javascript">';
			echo 'alert("Ukuran gambar terlalu besar, batas ukuran gambar adalah 1 MB");document.location="buat.php";</script>';
		}else{				
			move_uploaded_file($tmp_name, "../assets/img/articles/".$file_name);
			$queries = "UPDATE post SET postTitle ='$postTitle', postDesc = '$postDesc', postContent = '$postContent', postDate = '$postDate', postImg = '$file_name' WHERE postId = $postId ";
			$final = mysqli_query($conn, $queries);	
			
			if($final){
				echo '<script language="javascript">';
				echo 'alert("Proses perubahan artikel berhasil!");document.location="ilmu.php?post='.$postId.'";</script>';
				return;
			}else{
				echo '<script language="javascript">';
				echo 'alert("Proses perubahan artikel gagal! Coba lagi dalam beberapa menit.");document.location="ilmu.php?post='.$postId.'";</script>';
				return;
			}
		}
	}
}else{ 
		echo "
			<center>
				<h1>404 - Halaman Tidak Ditemukan</h1>
				<p>-------------------------------</p>
				<p>Hak cipta © 2020 - <a href='/'>Tanduran Ilmu</a></p>
			</center>";
}?>