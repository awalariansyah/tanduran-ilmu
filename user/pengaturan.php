<?php
	include '../config/koneksi.php';
	include 'sesi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>

	<!-- Meta Tag -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:site_name" content="Tanduran Ilmu"/>
    <meta property="og:title" content="Artikel - Tanduran Ilmu"/>
    <meta property="og:description" content="Tanduran Ilmu"/>
    <meta property="og:image" content="http://tanduranilmu.rf.gd/assets/img/logo-berwarna.png" />
    <meta property="og:type" content="blog"/>
    <meta property="og:url" content="http://tanduranilmu.rf.gd/artikel.php">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../assets/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tanduran Ilmu | Tanam Ilmu Lestarikan Pohon</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<nav>
		<div class="menu">
			<div class="logo"><a href="/"><img src="../assets/img/logo-teks.png"></a></div>
			<ul class="daftar-menu">
				<li><a href="index.php">Cari</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="buat.php">Buat</a></li>
			</ul>
			<div class="masuk">
				<div class="greet">Halo, <a href="profil.php?id=<?= $user['uid']?>"><?= $user['username'];?></a></div>
				<div class="premasuk">
					<a class="tombol" href="keluar.php">Keluar</a>
				</div>
				<button onclick="openSidebar(this)" class="menuIcon">
					<svg width="40" height="40">
						<path fill="#fff"  d="M33.3327 10H6.66602V15H33.3327V10ZM6.66602 18.3317H33.3327V23.3317H6.66602V18.3317ZM6.66602 26.665H33.3327V31.665H6.66602V26.665Z"></path>
					</svg>
				</button>
			</div>
		</div>	
	</nav>
	<div style="background: #27ae60">
		<svg class="wavesvg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" style="display:block">
			<path class="wavePath" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="#eee"></path>
		</svg>
	</div>
	<section id="setting">
		<div class="container setting">
			<h2 class="section-title">Jaga selalu keamanan akunmu!</h2>
			 	<div class="settingboard">
			<form class="make" action="proses-pengaturan.php" method="POST">
					<div class="buat-judul">
						<label for="nama">Nama</label>
						<input type="text" name="nama" value="<?= $user['fullname'];?>">
					</div>
					<div class="buat-file">
						<label for="email">Email</label>
						<input type="email" name="email" value="<?= $user['email'];?>">
					</div>
					<div class="buat-judul">
						<label for="password">Kata sandi baru</label>
						<h5>Kosongkan jika tidak ingin mengganti kata sandi</h5>
						<input type="password" name="password" value="">
					</div>
					<input type="submit" class="upload-konten black-btn" value="Ubah" name="ubah">
			</form>
				</div>
		</div>
	</section>
	<div>
		<svg class="wavesvg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" style="display:block">
			<path class="wavePath" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="#23272B"></path>
		</svg>
	</div>
	<div id="footer-classic">
		<div class="container-footer center">
			Hak cipta © 2020 - Tanduran Ilmu
		</div>
	</div>
<div class="sidebar">
	<div class="wrapper">
		<img src="../assets/img/logo-hitam.png" alt="">
		<button class="closeButton">
			<svg class="closeIcon" onclick="closeSidebar(this)" width="40" height="40" viewBox="0 0 12 12">
				<g fill="none" fill-rule="evenodd" aria-hidden="true">
					<path d="M0 0h12v12H0"></path>
					<path fill="currentColor" d="M9.5 3.205L8.795 2.5 6 5.295 3.205 2.5l-.705.705L5.295 6 2.5 8.795l.705.705L6 6.705 8.795 9.5l.705-.705L6.705 6"></path>
				</g>
			</svg>
		</button>
		<hr>
		<ul>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="buat.php">Buat</a></li>
			<li><a href="index.php">Cari</a></li></li>
			<li><a href="keluar.php" class='danger'>Keluar</a></li>
		</ul>
	</div>
</div>
<div class="backdrop" onclick="closeSidebar(this)"></div>
<script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html> 