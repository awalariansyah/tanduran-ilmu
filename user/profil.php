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
				<li><a href="buat.php">Buat</a></li>
				<li><a href="pengaturan.php">Pengaturan</a></li>
			</ul>
			<div class="masuk">
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
	<section id="profil">
		<div class="container profil center">

<?php
	if(isset($_GET['uid'])){
		$id = $_GET['uid'];
		$pregas = 'SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid WHERE postAuthor = '.$id.' ORDER BY postId DESC';
		$pregass = mysqli_query($conn, $pregas);

		$per_page = 20;
		$totalresult = mysqli_num_rows($pregass);
		$pages = ceil($totalresult / $per_page);
		$page = (isset($_GET['hlm'])) ? (int)$_GET['hlm'] : 1;
		$start = ($page - 1) * $per_page;
		$gas = 'SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid WHERE postAuthor = '.$id.' ORDER BY postId DESC LIMIT '.$start.', '.$per_page;
		$gass = mysqli_query($conn, $gas);
			if(mysqli_num_rows($gass) != 0 || $id != $user['uid']){

				$sqli = mysqli_query($conn, "SELECT * FROM user LEFT JOIN userdetails ON user.userDetails = userdetails.udid WHERE uid = ".$id);
				$er = mysqli_fetch_array($sqli);
				?>
					<h2 class="section-title"><?= $er['fullname'];?></h2>
					<p class="section-desc"><?= $er['username'];?></p>
					<h3 class="section-subtitle">Daftar benih yang sudah ditanam</h3>
					 	<div class="article-list">
	<?php	while($el = mysqli_fetch_array($gass)){ ?>
			 			<div class="article-card">
							<div class="article-image">
								<img src="../assets/img/articles/<?= $el['postImg'];?>" alt="<?= $el['postImg'];?>">
							</div>
						<div class="article-info center"><?php if($el['username'] == $user['username']){ ?>
								<a class="laporan" href="buat.php?ubah=<?= $el['postId'];?>">Ubah</a>
								<?php } ?>
							<h3 class="article-title"><a href="ilmu.php?post=<?= $el['postId'];?>"><?= $el['postTitle'];?></a></h3>
							<p class="article-author lefty-profile"><?= $el['postDesc'];?>...</p>
						</div>
						<p class="article-date"><?= $el['postDate'];?></p>
						</div>
		<?php 	}
			 }else{
			 	echo '<script>document.location="profil.php";</script>';
			 	return;
			 }
	} else { 
		$postAuthor = $user['uid'];
		$tmpquery = "SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid WHERE postAuthor = $postAuthor ORDER BY postId DESC";
		$tmpgo = mysqli_query($conn, $tmpquery);

		$per_page = 20;
		$totalresult = mysqli_num_rows($tmpgo);
		$pages = ceil($totalresult / $per_page);
		$page = (isset($_GET['hlm'])) ? (int)$_GET['hlm'] : 1;
		$start = ($page - 1) * $per_page;

		$query = "SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid WHERE postAuthor = $postAuthor ORDER BY postId DESC LIMIT $start, $per_page";

		$go = mysqli_query($conn, $query);?>

			<h2 class="section-title"><?= $user['fullname'];?></h2>
			<p class="section-desc"><?= $user['username'];?></p>
			<h3 class="section-subtitle">Daftar benih yang sudah ditanam</h3>
			<div class="article-list">

<?php		if(mysqli_num_rows($go) == 0){
				echo "<h1> Belum terdapat benih yang ditanam.</h1>";
			}

			while($el = mysqli_fetch_array($go)){
				?>
				<div class="article-card">
					<div class="article-image">
						<img src="../assets/img/articles/<?= $el['postImg'];?>" alt="<?= $el['postImg'];?>">
					</div>
					<div class="article-info center">

					<a class="laporan" href="buat.php?ubah=<?= $el['postId'];?>">Ubah</a>
					<h3 class="article-title"><a href="ilmu.php?post=<?= $el['postId'];?>"><?= $el['postTitle'];?></a></h3>
					<p class="article-author lefty-profile"><?= $el['postDesc'];?>...</p>
				</div>
					<p class="article-date"><?= $el['postDate'];?></p>
				</div>
			<?php }} ?>
			</div>
		</div>
	</section>
	<div id="pagination">
		<?php
			if(isset($_GET['uid'])){
				$id = $_GET['uid'];
				if($pages >= 1 && $page <= $pages){
				for($z=1; $z<=$pages; $z++){
					echo ($z == $page) ? '<div class="selectedpage"><a>'.$z.'</a></div>' : '<div class="numberpage"><a href="profil.php?uid='.$id.'&hlm='.$z.'">'.$z.'</a></div>';
				}
			}
		}else{
			if($pages >= 1 && $page <= $pages){
				for($z=1; $z<=$pages; $z++){
					echo ($z == $page) ? '<div class="selectedpage"><a>'.$z.'</a></div>' : '<div class="numberpage"><a href="profil.php?hlm='.$z.'">'.$z.'</a></div>';
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
			<li><a href="index.php">Beranda</a></li>
			<li><a href="buat.php">Buat</a></li>
			<li><a href="pengaturan.php">Pengaturan</a></li>
			<li><a href="keluar.php" class='danger'>Keluar</a></li>
		</ul>
	</div>
</div>
<div class="backdrop" onclick="closeSidebar(this)"></div>
<script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html> 