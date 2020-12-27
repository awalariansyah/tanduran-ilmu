<?php include 'config/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Meta Tag -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:site_name" content="Tanduran Ilmu"/>
    <meta property="og:title" content="Artikel - Tanduran Ilmu"/>
    <meta property="og:description" content="Daftar Artikel di Tanduran Ilmu"/>
    <meta property="og:image" content="http://tanduranilmu.rf.gd/assets/img/logo-berwarna.png" />
    <meta property="og:type" content="blog"/>
    <meta property="og:url" content="http://tanduranilmu.rf.gd/artikel.php">

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
	<title>Artikel - Tanduran Ilmu</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav>
		<div class="menu">
			<div class="logo"><a href="/"><img src="assets/img/logo-teks.png"></a></div>
			<ul class="daftar-menu">
				<li><a href="/">Beranda</a></li>
				<li><a href="mulai.php?daftar">Daftar</a></li>
				<li><a href="index.php#contact">Kontak</a></li>
			</ul>
			<div class="masuk">
				<div class="premasuk">
					<a class="tombol" href="mulai.php?masuk">Masuk</a>
				</div>
				<button onclick="openSidebar(this)" class="menuIcon">
					<svg width="40" height="40">
						<path fill="#fff"  d="M33.3327 10H6.66602V15H33.3327V10ZM6.66602 18.3317H33.3327V23.3317H6.66602V18.3317ZM6.66602 26.665H33.3327V31.665H6.66602V26.665Z"></path>
					</svg>
				</button>
			</div>
		</div>	
	</nav>
	<section id="showcase">
		<div class="container">
			<div class="showcase-title">
				<h2>Cari Ilmu Bermanfaat</h2>
			</div>
			<div class="showcase-desc">
				<p>Gunakanlah kata kunci umum agar pencarian lebih optimal.</p>
			</div>
			<div class="showcase-search">
				<form class="frm" action="artikel.php" method="GET">
					<input type="text" placeholder="Cari disini" name='cari' class="inp" required>
					<div class="center">
						<input type="submit" class='black-btn' name='c' value="Cari"/>
					</div>
				</form>
				
			</div>
		</div>
	</section>
	<div style="background: #27ae60">
		<svg class="wavesvg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" style="display:block">
			<path class="wavePath" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="#eee"></path>
		</svg>
	</div>
	<section id="article">
		<div class="container">

<?php 

			if(!isset($_GET['c'])){?>
			<div class="articleboard center">				
				<h2 class="section-title">Artikel-Artikel Tandurarian</h2>
			</div>
				<div class="article-list">
					<?php

					$ads = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM ads WHERE adsTipe = 'square' ORDER BY RAND() LIMIT 1"));
					$adsid = $ads['adsId'];
					$view = "UPDATE ads SET adsView = adsView+1 WHERE adsId = $adsid";
					$addview = mysqli_query($conn, $view);
					 ?>
				<div class="article-card iklan">
						<div class="article-image">
							<img src="assets/img/ads/<?= $ads['adsImg'];?>" alt="<?= $ads['adsImg'];?>">
						</div>
						<div class="article-info center">
						<h3 class="article-title"><a><?= $ads['adsTitle'];?></h3></a>
						<p class="article-author"><a><?= $ads['adsBrand'];?></a></p>
						</div>
						<p class="article-date iklan-teks">Iklan</p>
				</div>
			<?php	


			$per_page = 20;
			$totalresult = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS red FROM post LEFT JOIN user ON post.postAuthor = user.uid"))['red'];
			$pages = ceil($totalresult / $per_page);
			$page = (isset($_GET['hlm'])) ? (int)$_GET['hlm'] : 1;
			$start = ($page - 1) * $per_page;


			$query = "SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid ORDER BY RAND() LIMIT $start, $per_page";

			$go = mysqli_query($conn, $query);
					while($el = mysqli_fetch_array($go)){
				?>
						<div class="article-card">
							<div class="article-image">
								<img src="assets/img/articles/<?= $el['postImg'];?>" alt="<?= $el['postImg'];?>">
							</div>
							<div class="article-info center">
							<h3 class="article-title"><a href="ilmu.php?post=<?= $el['postId'];?>"><?= $el['postTitle'];?></h3></a>
							<p class="article-author"><a onclick="alert('Kamu harus terdaftar menjadi Tandurarian')"><?= $el['username'];?></a></p>
						</div>
							<p class="article-date"><?= $el['postDate'];?></p>
						</div>
			<?php }}else if(strlen($_GET['c']) == 0){
				echo '<script>document.location="artikel.php";</script>';
			}else{ 	$katakunci = $_GET['cari'];?>
			<div class="articleboard center">				
				<h2 class="section-title">Menampilkan pencarian <?= $katakunci; ?></h2>
			</div>
			<div class="article-list">
									<?php

					$ads = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM ads WHERE adsTipe = 'square' ORDER BY RAND() LIMIT 1"));
					$adsid = $ads['adsId'];
					$view = "UPDATE ads SET adsView = adsView+1 WHERE adsId = $adsid";
					$addview = mysqli_query($conn, $view);
					 ?>
				<div class="article-card iklan">
						<div class="article-image">
							<img src="assets/img/ads/<?= $ads['adsImg'];?>" alt="<?= $ads['adsImg'];?>">
						</div>
						<div class="article-info center">
						<h3 class="article-title"><a><?= $ads['adsTitle'];?></h3></a>
						<p class="article-author"><a><?= $ads['adsBrand'];?></a></p>
						</div>
						<p class="article-date iklan-teks">Iklan</p>
				</div>
	<?php
		$cari = explode (" ", $katakunci );
		$per_page = 20;



                    $x = 0; 
                    $wadah = "";
                    foreach( $cari as $kata ) {

                           $x++;
                           if( $x == 1 )
                                  $wadah = "SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid WHERE postTitle LIKE '%$kata%' OR postDesc LIKE '%$kata%' OR postContent LIKE '%$kata%' ";
                           else
                                  $wadah .="UNION SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid WHERE postTitle LIKE '%$kata%' OR postDesc LIKE '%$kata%' OR postContent LIKE '%$kata%' ";
                    };
				$query = "$wadah ORDER BY postId DESC";
				$go = mysqli_query($conn, $query);
				$totalresult = mysqli_num_rows($go);
				$pages = ceil($totalresult / $per_page);
				$page = (isset($_GET['hlm'])) ? (int)$_GET['hlm'] : 1;
				$start = ($page - 1) * $per_page;

				if(mysqli_num_rows($go) != 0){

					$newquery = "$query LIMIT $start, $per_page";
					$og = mysqli_query($conn, $newquery);
					while($el = mysqli_fetch_array($og)){?>

					<div class="article-card">
						<div class="article-image">
							<img src="assets/img/articles/<?= $el['postImg'];?>" alt="<?= $el['postImg'];?>">
						</div>
						<div class="article-info center">
						<h3 class="article-title"><a href="ilmu.php?post=<?= $el['postId'];?>"><?= $el['postTitle'];?></h3></a>
						<p class="article-author"><a onclick="alert('Kamu harus terdaftar menjadi Tandurarian')"><?= $el['username'];?></a></p>
						</div>
						<p class="article-date"><?= $el['postDate'];?></p>
					</div>
			<?php }}else{?>

					<p>Pencarian tidak ditemukan</br>Maaf, tidak ada hasil pencarian untuk kata kunci <b><?= $katakunci; ?></b>. </br> </br> 1. Cobalah menggunakan kata kunci umum. Misalkan: Jika kamu ingin mencari 'Cara menanam padi' maka gunakan kata kunci umum seperti 'menanam', 'padi' </br></br> 2. Coba gunakan kata lain yang mempunyai makna yang sama </br></br> 3. Periksa kembali penulisan kata kunci</p>
				
	<?php		}} ?>


			</div>
		</div>
	</section>
		<div id="pagination">
<?php
			if(isset($_GET['c'])){
				if($pages >= 1 && $page <= $pages){
				for($z=1; $z<=$pages; $z++){
					echo ($z == $page) ? '<div class="selectedpage"><a>'.$z.'</a></div>' : '<div class="numberpage"><a href="artikel.php?cari='.$katakunci.'&hlm='.$z.'&c=Cari">'.$z.'</a></div>';
				}
			}
		}else{

			if($pages >= 1 && $page <= $pages){
				for($z=1; $z<=$pages; $z++){
					echo ($z == $page) ? '<div class="selectedpage"><a>'.$z.'</a></div>' : '<div class="numberpage"><a href="artikel.php?hlm='.$z.'">'.$z.'</a></div>';
				}
			}
		}
?>
		</div>
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
		<img src="assets/img/logo-hitam.png" alt="Logo Tanduran Ilmu">
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
			<li><a href="/">Beranda</a></li>
			<li><a href="index.php#contact">Kontak</a></li>
			<li><a href="#">Privasi</a></li>
			<li><a href="mulai.php?masuk">Masuk</a></li>
			<li><a href="mulai.php?daftar">Daftar</a></li>
		</ul>
	</div>
</div>
<div class="backdrop" onclick="closeSidebar(this)"></div>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html> 