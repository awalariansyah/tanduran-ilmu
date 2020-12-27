<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Meta Tag -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:site_name" content="Tanduran Ilmu"/>
    <meta property="og:title" content="Daftar Menjadi Tandurarian"/>
    <meta property="og:description" content="Tanduran Ilmu adalah situs web yang bertujuan sebagai wadah berbagi ilmu yang dapat membantu orang lain serta sebagai wadah pengumpulan dana guna pelestarian pohon."/>
    <meta property="og:image" content="http://tanduranilmu.rf.gd/assets/img/logo-berwarna.png" />
    <meta property="og:type" content="blog"/>
    <meta property="og:url" content="http://tanduranilmu.rf.gd/mulai.php?daftar">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Memulai - Tanduran Ilmu</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="overflow-y: scroll;">
	<div class="wrappers">
		<div class="logo-form">
			<img src="assets/img/logo-putih.png" alt="">
		</div>
		<?php 
			if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				switch ($msg) {
					case 1:
						echo "<script>alert('Selamat! Kamu telah terdaftar menjadi Tandurarian. Silakan masuk untuk melanjutkan')</script>";
						break;
					case 2:
						echo "<script>alert('Mohon maaf! Kamu gagal terdaftar menjadi Tandurarian. Periksa kembali data yang kamu masukan.')</script>";
						break;
					case 3:
						echo "<script>alert('Mohon maaf! Akun tidak tersedia. Periksa kembali nama pengguna atau kata sandi yang kamu masukan.')</script>";
						break;
					case 4:
						echo "<script>>alert('Kata sandi baru telah dikirimkan ke email anda.');</script>";
						break;
					case 5:
						echo "<script>alert('Terjadi kesalahan, coba lagi nanti');</script>";
						break;
					case 6:
						echo '<script>alert("Atur ulang kata sandi gagal. Coba lagi nanti")</script>';
						break;
					default:
						break;
				}
			}
		if(isset($_GET['daftar'])){ ?>
		<form action="proses-daftar.php" method="POST" class="formku register" onsubmit="return n(this)">
			<div class="form-title">
				<h2>Buat sebuah akun</h2>
			</div>
			<div class="email">
				<label class='form-label' for="email">Email</label>
				<input type="email" class='masukan' oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="email" minlength="10" maxlength="100" required>
			</div>
			<div class="nama">
				<label class='form-label' for="fullname">Nama lengkap</label>
				<input type="text" class='masukan' minlength="3" name="fullname" maxlength="25" required>
			</div>
			<div class="username">
				<label class='form-label' for="username" >Nama pengguna</label>
				<input type="text" class='masukan' minlength="8" name="username"  maxlength="20" required>
			</div>
			<div class="password">
				<label class='form-label' for="password">Kata sandi</label>
				<input type="password" class='masukan' minlength="8" name="password"  maxlength="25" required>
			</div>
			<div class="pohon">
				<label class='form-label' for="tree">Pohon / Tanaman Kesukaan</label>
				<input type="text" class='masukan' minlength="3" name="tree" maxlength="10" required>
			</div>
			<div class="submits">
				<input type="submit" class='submitset' value="LANJUTKAN">
			</div>
			<div class="keterangan">
				<a href="?masuk">Sudah punya akun?</a>
				<p>Dengan mendaftar, anda menyetujui <a>Kebijakan Penggunaan</a> dan <a href="">Kebijakan Privasi</a> dari Tanduran Ilmu.</p>
			</div>
		</form>
	<?php }else if(isset($_GET['masuk'])){ ?>
		<form action="proses-masuk.php" method="POST" class="formku login">
			<div class="form-title">
				<h2>Selamat datang kembali!</h2>
				<p>Kami sangat bersemangat menyambut anda kembali!</p>
			</div>
			<div class="email">
				<label class='form-label' for="usernamem">Nama Pengguna</label>
				<input type="text" class='masukan' name="usernamem">
			</div>
			<div class="password">
				<label class='form-label' for="passwordm">Kata sandi</label>
				<input type="password" class='masukan'  name="passwordm" >
				<a href="mulai.php?lupa">Lupa kata sandi?</a>
			</div>
			<div class="nama"></div>
			<div class="email"></div>
			<div class="pohon"></div>
			<div class="submits">
				<input type="submit" class='submitset' value="LANJUTKAN">
			</div>	
			<div class="keterangan">
				<p>Belum punya akun?<a href='?daftar' > Daftar</a></p>
			</div>
		</form>
	<?php }else if(isset($_GET['lupa'])){ ?>
		<form action="lupa-sandi.php" method="POST" class="formku login">
			<div class="form-title">
				<h2>Jaga selalu akun anda</h2>
				<p>Jangan beritahu siapapun data akun anda.</p>
			</div>
			<div class="email">
				<label class='form-label' for="lusername">Nama Pengguna</label>
				<input type="text" class='masukan' name="lusername">
			</div>
			<div class="email">
				<label class='form-label' for="lemail">Email</label>
				<input type="email" class='masukan'  name="lemail" >
			</div>
			<div class="pohon">
				<label class='form-label' for="ltree">Pohon/Tanaman Kesukaan</label>
				<input type="password" class='masukan'  name="ltree" >
			</div>
			<div class="password">
			</div>
			<div class="nama"></div>
			<div class="submits">
				<input type="submit" class='submitset' value="ATUR ULANG">
			</div>	
			<div class="keterangan">
				<p>Sudah ingat kembali?<a href='?masuk' > Masuk</a></p>
			</div>
		</form>
	<?php } else {?>
		<div class="error">
			<h3>Nampaknya ada sesuatu yang salah. Mohon coba lagi nanti</h3>
			<a href="?daftar">Daftar</a>
			<a href="?masuk">Masuk</a>
		</div>
	<?php } ?>
	</div>
	<div class="btn-back">
		<div class="artikela">
			<a href="artikel.php">Artikel</a>
		</div>
	</div>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>