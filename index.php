<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Meta Tag -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:site_name" content="Tanduran Ilmu"/>
    <meta property="og:title" content="Tanduran Ilmu - Tanam Ilmu Lestarikan Pohon"/>
    <meta property="og:description" content="Tanduran Ilmu adalah situs web yang bertujuan sebagai wadah berbagi ilmu yang dapat membantu orang lain serta sebagai wadah pengumpulan dana guna pelestarian pohon."/>
    <meta property="og:image" content="http://tanduranilmu.rf.gd/assets/img/logo-berwarna.png" />
    <meta property="og:type" content="blog"/>
    <meta property="og:url" content="http://tanduranilmu.rf.gd/">

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

	<title>Tanduran Ilmu | Tanam Ilmu Lestarikan Pohon</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav>
		<div class="menu">
			<div class="logo"><a href="/"><img src="assets/img/logo-teks.png"></a></div>
			<ul class="daftar-menu">
				<li><a href="#contact">Kontak</a></li>
				<li><a href="#team">Tim</a></li>
				<li><a href="#dokumentasi">Dokumentasi</a></li>
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
				<h2>Tanam Ilmu Lestarikan Pohon</h2>
			</div>
			<div class="showcase-desc">
				<p>Kami adalah situs web yang bertujuan sebagai wadah berbagi ilmu yang dapat membantu orang lain serta sebagai wadah pengumpulan dana guna pelestarian pohon.</p>
			</div>
			<div class="showcase-button">
				<a class='white-btn' href="mulai.php?daftar">Daftar Menjadi Tandurarian</a>
				<span class="spacing"> </span>
				<a class='black-btn' href="artikel.php">Cari Artikel</a>
			</div>
		</div>
	</section>
	<section id="work">
		<div class="container">
			<div class="workboard">
				<img class="timeline" src="assets/img/timeline.png">
				<div class="work-title section-title">
					<h2> Bagaimana cara kami bekerja</h2>
				</div>
				<div class="work-desc work-title">
					Kami memasang iklan sebagai sumber dana untuk mengadakan kegiatan penanaman pohon.
				</div>
			</div>
		</div>
	</section>
	<div>
		<svg class="wavesvg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" style="display:block">
			<path class="wavePath" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="#f6f6f6"></path>
		</svg>
	</div>
	<section id="contact">
		<div class="container">
			<div class="contactboard">
				<div class="section-title contact-title">
					<h2>Hubungi kami</h2>
				</div>
				<div class="section-desc contact-desc">
					<p>Kami selalu siap menerima masukan, saran dan kritikan dari anda. Beritahu kami jika anda ingin bekerja sama dengan kami.</p>
				</div>
				<form class="formulir" method="post" action="mail.php">
						<input type="text" placeholder="Nama" maxlength="20" name="nama">
						<input type="email" placeholder="Email" maxlength="100" name="email">
						<input type="number" placeholder="No. Handphone" name="no" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "13">
						<textarea name="pesan" placeholder="Pesan Anda" maxlength="300"></textarea>
						<input class="black-btn" type="submit" value="Kirim">
				</form>
			</div>
		</div>
	</section>
	<div style="background: #f6f6f6">
		<svg class="wave" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" style="display: block;">
			<path class="wavePath2" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="#fff"></path>
		</svg>
	</div>
	<section id="dokumentasi">
		<div class="container">
			<div class="dokumentasiboard">
				<h2 class="section-title">Dokumentasi</h2>
				<p class="section-desc">Galeri kondisi alam temuan kami di daerah Cilacap akhir tahun 2020.</p>
				<div class="galeri">
					<div class="imgwrap">
						<span><p>Hutan Cinangsi</p></span>
						<img onclick="openModal(this.src)" src="assets/img/galeri/1.jpg" alt="Hutan Cinangsi">
					</div>
					<div class="imgwrap">
						<span><p>Hutan Mangrove Kampung Laut</p></span>
						<img onclick="openModal(this.src)" src="assets/img/galeri/2.jpg" alt="Hutan Mangrove Kampung Laut">
					</div>
					<div class="imgwrap">
						<span><p>Hutan Mangrove Kampung Laut</p></span>
						<img onclick="openModal(this.src)" src="assets/img/galeri/3.jpg" alt="Hutan Mangrove Kampung Laut">
					</div>
					<div class="imgwrap">
						<span><p>Banjir Kedungreja</p></span>
						<img onclick="openModal(this.src)" src="assets/img/galeri/6.jpg" alt="Banjir Kedungreja">
					</div>
					<div class="imgwrap">
						<span><p>Banjir Cipari</p></span>
						<img onclick="openModal(this.src)" src="assets/img/galeri/7.jpg" alt="Banjir Cipari">
					</div>
					<div class="imgwrap">
						<span><p>Banjir Sidamulya</p></span>
						<img onclick="openModal(this.src)" src="assets/img/galeri/8.jpg" alt="Banjir Sidamulya">
					</div>
				</div>
			</div>
		</div>
	</section>
	<div style="background: #fff">
		<svg class="wave" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" style="display: block;">
			<path class="wavePath2" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="#f6f6f6"></path>
		</svg>
	</div>
	<section id="team">
		<div class="teamboard">
			<h2 class="section-title">Tim</h2>
			<p class="section-desc">Berkenalan dengan kami lebih dekat lagi.</p>
		</div>
		<div class="container">
			<div class="teammember">
				<div class="profileboard pa">	
					<img src="assets/img/team/awal.jpg" alt="Awal Ariansyah">
					<h3>Awal Ariansyah</h3>
					<p>Web Developer</p>
				</div>
				<div class="profileboard pb">	
					<img src="assets/img/team/rafiq.jpg" alt="Rafiq Chasnan Habibi">
					<h3>Rafiq Chasnan Habibi</h3>
					<p>Graphic Designer</p>
				</div>
				<div class="profileboard pc">	
					<img src="assets/img/team/khusna.jpg" alt="Khusna Salsabila">
					<h3>Khusna Salsabila</h3>
					<p>Content Writer</p>
				</div>
				<div class="profileboard pd">	
					<img src="assets/img/team/edgar.jpg" alt="Edgar Miko Fernanda">
					<h3>Edgar Miko Fernanda</h3>
					<p>Photographer</p>
				</div>
			</div>
		</div>
	</section>
	<section id="join">
		<center>
			<h2 class="join-title section-title">Sudah siap bergerak untuk alam?</h2>
		</center>
		<div>
			<a class="black-btn" href="mulai.php?daftar">Bergabung Menjadi Tandurarian</a>
		</div>
	</section>
	<section id="footer">
		<div class="container-footer">
			<div class="footerbar">
				<div class="left-footer">
					<h2 class="section-title fg">Tanam Ilmu Lestarikan Pohon</h2>
					<div class="addressboard">
						<p class="section-desc fw lf">Jl. Raya Majenang - Cimanggu KM 08 No 99 Desa Cilempuyang, Kec. Cimanggu, Kabupaten Cilacap, Jawa Tengah 53256</p><p class="section-desc fw lf">cs@tanduranilmu.com</p><p class="section-desc fw lf">+62 854 3209 XXXX</p>
					</div>
					<div class="socmed-board">
						<img src="assets/img/icon/fb.png" alt="Facebook Tanduran Ilmu">
						<img src="assets/img/icon/tw.png" alt="Twitter Tanduran Ilmu">
						<img src="assets/img/icon/ig.png" alt="Instagram Tanduran Ilmu">
						<img src="assets/img/icon/yt.png" alt="Youtube Tanduran Ilmu">
					</div>
				</div>
				<div class="right-footer">
					<div class="empty"></div>
					<p class="fg">Laman Terkait</p>
					<ul class="link-list">
						<li><a href="#">Kebijakan Privasi</a></li>
						<li><a href="#">Peraturan Website</a></li>
						<li><a href="http://stmikkomputama.ac.id/">STMIK Komputama</a></li>
					</ul>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="sponsor"><img src="assets/img/sponsor/cintaforest.png" alt="Sponsor Cinta Forest"></div>
				<div class="sponsor"><img src="assets/img/sponsor/gallerymacul.png" alt="Sponsor Gallery Macul"></div>
				<div class="sponsor"><img src="assets/img/sponsor/Girles.png" alt="Sponsor Girles"></div>
				<div class="sponsor"><img src="assets/img/sponsor/GunaTani.png" alt="Sponsor Guna Tani"></div>
				<div class="sponsor"><img src="assets/img/sponsor/sahabatarit.png" alt="Spnsor Sahabat Arit"></div>
				<div class="sponsor"><img src="assets/img/sponsor/tudungan.png" alt="Sponsor Tudungan"></div>
				<div class="sponsor"><img src="assets/img/sponsor/falahAlfaaz.png" alt="Sponsor Falah Alfaaz"></div>
				<div class="sponsor"><img src="assets/img/sponsor/winihijo.png" alt="Spnsor Winih Ijo"></div>
			</div>
			<div>
				<hr class="line">
			</div>
				<div class="last-foot">
					<img src="assets/img/logo-teks.png" alt=" Logo Teks Tanduran Ilmu">
					<span></span>
					<div class="foot">
						<a class="foot-btn" href="mulai.php?daftar">Daftar</a>
					</div>
				</div>
		</div>
	</section>


<div class="sidebar">
	<div class="wrapper">
		<img src="assets/img/logo-hitam.png" alt="Logo Tanduran Ilmu Hitam">
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
			<li><a href="artikel.php">Artikel</a></li>
			<li><a href="#dokumentasi">Dokumentasi</a></li>
			<li><a href="#">Privasi</a></li>
			<li><a href="mulai.php?masuk">Masuk</a></li>
			<li><a href="mulai.php?daftar">Daftar</a></li>
		</ul>
	</div>
</div>
<div onclick="closeModal(this)" class="modal">
	<img src="" alt="">
</div>
<div class="backdrop" onclick="closeSidebar(this)"></div>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html> 