<?php
include '../config/koneksi.php';
include 'session.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
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
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../assets/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TandurAdmin</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/style.css">
	<script type="text/javascript" src="../assets/js/script.js"></script>
</head>
<body>
	<div class="container yeah">
		
	<nav class="navy">
		<div class="menu">
			<div class="logo"><a href="/"><img src="../assets/img/logo-teks.png"></a></div>
			<ul class="daftar-menu">
				<li><a>Tetap</a></li>
				<li><a>Semangat</a></li>
				<li><a>TandurAdmin</a></li>

			</ul>
			<div class="masuk">
				<div class="premasuk">
					<a class="tombol" href="logout.php">Keluar</a>
				</div>
				<button onclick="openSidebar(this)" class="menuIcon">
					<svg width="40" height="40">
						<path fill="#fff"  d="M33.3327 10H6.66602V15H33.3327V10ZM6.66602 18.3317H33.3327V23.3317H6.66602V18.3317ZM6.66602 26.665H33.3327V31.665H6.66602V26.665Z"></path>
					</svg>
				</button>
			</div>
		</div>	
	</nav>
	<div class="side">
		<ul class="menuadminlist">
			<li class="mm menuclick"><a class="menuadmin" href="index.php?data=user">Tandurarian</a></li>
			<li class="mm"><a class="menuadmin" href="index.php?data=post">Artikel</a></li>
			<li class="mm"><a class="menuadmin" href="index.php?data=report">Laporan</a></li>
			<li class="mm"><a class="menuadmin" href="index.php?data=ads">Iklan</a></li>
		</ul>
	</div>

	<?php
		if(!isset($_GET['data'])){
			$a = 'user';
		}else {
			$a = $_GET['data'];
		};


		if (!$a){
			$a = 'user';
		};


		switch($a){
			case 'user':

	?>
			<script type="text/javascript">changeSide(0);</script>
			<script type="text/javascript"></script>
			<div class="main-admin">
				<h2 class="section-title">Daftar Tandurarian</h2>
				<div class="adminsearch">
						<form class="datasearch" action="index.php" method="GET">
							<input type="text" placeholder="Cari data disini" name="search" class="inp" required>
							<div class="center">
								<input type="submit" class='black-btn' value="Cari"/>
							</div>
						</form>
						
					</div>
			<?php		if(!isset($_GET['search'])){ ?>
							<div class="customTable">
								<p>Untuk mengubah data, ubah langsung pada kolom yang ingin diubah lalu tekan tombol <kbd>Ubah</kbd>.</p><br>
								<table class="wadahdata">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Nama Pengguna</th>
										<th>Email</th>
										<th>Pohon</th>
										<th>Aksi</th>
									</tr>
										<?php

											$qux = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result FROM user LEFT JOIN userdetails ON user.userDetails = userdetails.udid"))['result'];

											$per_page = 10;
											$totalresult = $qux;
											$pages = ceil($totalresult / $per_page);
											$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
											$start = ($page - 1) * $per_page;

											$u = "SELECT * FROM user LEFT JOIN userdetails ON user.userDetails = userdetails.udid ORDER BY fullname ASC";
											$qu = mysqli_query($conn, $u);
											$v = 1;
											while($ru = mysqli_fetch_array($qu)){
										?>
									<tr>
										<form action="edit.php" method="POST">
											<input type="hidden" name="id" value="<?= $ru['udid'];?>">
										<td><?= $v++;?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="fullname" value ="<?= $ru['fullname'];?>"/><?= $ru['fullname'];?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="username" value ="<?= $ru['username'];?>"/><?= $ru['username'];?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="email" value ="<?= $ru['email'];?>"/><?= $ru['email'];?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="tree" value ="<?= $ru['tree'];?>"/><?= $ru['tree'];?></td>
										<td><a href="profile.php?uid=<?= $ru['uid'];?>" class="akmin edlia" target="_blank">Lihat</a><input type="submit" class="akmin greeny aksbm" value='Ubah'><a href="delete.php?id=<?= $ru['udid'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus pengguna ini?')" class="akmin redish">Hapus</a></td>
										</form>
									</tr>
										<?php } ?>
								</table>
									<br>
									<div class="">
										<center>Halaman: 
											<?php if($pages >= 1 && $page <= $pages){
												for($z=1; $z<=$pages; $z++){
													echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=user&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
												}
											} ?>
										</center>
									</div>
							</div>
						<?php } else {?>
							<div class="customTable">
								<?php $keyword = $_GET['search'];?>
								<h4 class="sadmin"><a class="kembalilah" href="index.php?data=user">[kembali]</a> Menampilkan pencarian untuk <u><?= $keyword;?></u></h2>
								<p>Untuk mengubah data, ubah langsung pada kolom yang ingin diubah lalu tekan tombol <kbd>Ubah</kbd>.</p><br>
								<table class="wadahdata">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Nama Pengguna</th>
										<th>Email</th>
										<th>Pohon</th>
										<th>Aksi</th>
									</tr>
										<?php

											$qux = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result FROM user LEFT JOIN userdetails ON user.userDetails = userdetails.udid WHERE username LIKE '%$keyword%' OR fullname LIKE '%$keyword%' OR email LIKE '%$keyword%' OR tree LIKE '%$keyword%'"))['result'];

											$per_page = 10;
											$totalresult = $qux;
											$pages = ceil($totalresult / $per_page);
											$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
											$start = ($page - 1) * $per_page;

											$u = "SELECT * FROM user LEFT JOIN userdetails ON user.userDetails = userdetails.udid WHERE username LIKE '%$keyword%' OR fullname LIKE '%$keyword%' OR email LIKE '%$keyword%' OR tree LIKE '%$keyword%' ORDER BY fullname ASC";
											$qu = mysqli_query($conn, $u);
											$v = 1;
											while($ru = mysqli_fetch_array($qu)){
										?>
									<tr>
										<form action="edit.php" method="POST">
											<input type="hidden" name="id" value="<?= $ru['udid'];?>">
										<td><?= $v++;?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="fullname" value ="<?= $ru['fullname'];?>"/><?= $ru['fullname'];?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="username" value ="<?= $ru['username'];?>"/><?= $ru['username'];?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="email" value ="<?= $ru['email'];?>"/><?= $ru['email'];?></td>
										<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="hidden" name="tree" value ="<?= $ru['tree'];?>"/><?= $ru['tree'];?></td>
										<td><a href="profile.php?uid=<?= $ru['uid'];?>" class="akmin edlia" target="_blank">Lihat</a><input type="submit" class="akmin greeny aksbm" value='Ubah'><a href="delete.php?id=<?= $ru['udid'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus pengguna ini?')" class="akmin redish">Hapus</a></td>
										</form>
									</tr>
										<?php } ?>
								</table>
								<br>
									<div class="">
										<center>Halaman: 
											<?php if($pages >= 1 && $page <= $pages){
												for($z=1; $z<=$pages; $z++){
													echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=user&search='.$keyword.'&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
												}
											} ?>
										</center>
									</div>
							</div>
						<?php } ?>
			</div>
	<?php 
		break;
		case 'post':
	?>
	<script type="text/javascript">changeSide(1);</script>
	<div class="main-admin">
		<h2 class="section-title">Daftar Artikel</h2>
		<div class="adminsearch">	
				<form class="datasearch" action="index.php"  method="GET">
					<input type="hidden" name="data" value="post">
					<input type="text" placeholder="Cari data disini" name="search" class="inp" required>
					<div class="center">
						<input type="submit" class='black-btn' value="Cari"/>
					</div>
				</form>
				
			</div>

		<?php if(!isset($_GET['search'])){ ?>	
					<div class="customTable">
						<table class="wadahdata">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Penulis</th>
								<th>Gambar</th>
								<th>Tanggal</th>
								<th>Aksi</th>
							</tr>
							<?php
								$qpx = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result  FROM post LEFT JOIN user ON post.postAuthor = user.uid LEFT JOIN userdetails ON user.userDetails = userdetails.udid"))['result'];

								$per_page = 10;
								$totalresult = $qpx;
								$pages = ceil($totalresult / $per_page);
								$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
								$start = ($page - 1) * $per_page;

								$p = "SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid LEFT JOIN userdetails ON user.userDetails = userdetails.udid ORDER BY postId DESC";
								$qp = mysqli_query($conn, $p);
								$j = 1;
								while($rp = mysqli_fetch_array($qp)){

							?>

							<tr>
								<td><?= $j++;?></td>
								<td style="text-align: left;"><?= $rp['postTitle'];?></td>
								<td><?= $rp['fullname'];?></td>
								<td><a class="akmin greeny" onclick="openModal(this.ariaLabel)" href="#" aria-label='../assets/img/articles/<?= $rp['postImg'];?>' >Lihat</a></td>
								<td><?= $rp['postDate'];?></td>
								<td><a class="akmin edlia" target="_blank" href="article.php?id=<?= $rp['postId']?>">Lihat</a> <a href="delete-post.php?id=<?= $rp['postId']?>" onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')" class="akmin redish">Hapus</a></td>
							</tr>

						<?php } ?>

						</table>
						<br>
						<div class="">
							<center>Halaman: 
								<?php if($pages >= 1 && $page <= $pages){
									for($z=1; $z<=$pages; $z++){
										echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=post&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
									}
								} ?>
							</center>
						</div>
					</div>
				<?php }else{ ?>

					<div class="customTable">
					<?php $keyword = $_GET['search'];?>
						<h4 class="sadmin"><a class="kembalilah" href="index.php?data=post">[kembali]</a> Menampilkan pencarian untuk <u><?= $keyword;?></u></h2>
						<table class="wadahdata">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Penulis</th>
								<th>Gambar</th>
								<th>Tanggal</th>
								<th>Aksi</th>
							</tr>
							<?php
								$qpx = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result FROM post LEFT JOIN user ON post.postAuthor = user.uid LEFT JOIN userdetails ON user.userDetails = userdetails.udid WHERE postTitle LIKE '%$keyword%' OR username LIKE '%$keyword%' OR fullname LIKE '%$keyword%' OR email LIKE '%$keyword%'"))['result'];

								$per_page = 10;
								$totalresult = $qpx;
								$pages = ceil($totalresult / $per_page);
								$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
								$start = ($page - 1) * $per_page;

								$p = "SELECT * FROM post LEFT JOIN user ON post.postAuthor = user.uid LEFT JOIN userdetails ON user.userDetails = userdetails.udid WHERE postTitle LIKE '%$keyword%' OR username LIKE '%$keyword%' OR fullname LIKE '%$keyword%' OR email LIKE '%$keyword%' ORDER BY postId DESC LIMIT $start, $per_page";
								$qp = mysqli_query($conn, $p);
								$j = 1;
								while($rp = mysqli_fetch_array($qp)){

							?>

							<tr>
								<td><?= $j++;?></td>
								<td style="text-align: left;"><?= $rp['postTitle'];?></td>
								<td><?= $rp['fullname'];?></td>
								<td><a class="akmin greeny" onclick="openModal(this.ariaLabel)" href="#" aria-label='../assets/img/articles/<?= $rp['postImg'];?>' >Lihat</a></td>
								<td><?= $rp['postDate'];?></td>
								<td><a class="akmin edlia" target="_blank" href="article.php?id=<?= $rp['postId']?>">Lihat</a> <a href="delete-post.php?id=<?= $rp['postId']?>" onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')" class="akmin redish">Hapus</a></td>
							</tr>

						<?php } ?>

						</table>


						<br>
						<div class="">
							<center>Halaman: 
								<?php if($pages >= 1 && $page <= $pages){
									for($z=1; $z<=$pages; $z++){
										echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=post&search='.$keyword.'&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
									}
								} ?>
							</center>
						</div>
					</div>

				<?php } ?>
	</div>
	<?php
		break;
		case 'report':
	?>
	<script type="text/javascript">changeSide(2);</script>
	<div class="main-admin">
		<h2 class="section-title">Daftar Laporan</h2>
		<div class="adminsearch">
				<form class="datasearch" action="index.php" method="GET">
					<input type="hidden" name="data" value="report">
					<input type="text" placeholder="Cari data disini" name="search" class="inp" required>
					<div class="center">
						<input type="submit" class='black-btn' value="Cari"/>
					</div>
				</form>
				
			</div>

			<?php if(!isset($_GET['search'])){ ?>
				<div class="customTable">
					<table class="wadahdata">
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Penulis</th>
							<th>Tanggal</th>
							<th>Jumlah</th>
							<th>Aksi</th>
						</tr>

						<?php 

								$qrx = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result FROM report LEFT JOIN post ON report.rid = post.postReport LEFT JOIN user ON post.postAuthor = user.uid"))['result'];

								$per_page = 10;
								$totalresult = $qrx;
								$pages = ceil($totalresult / $per_page);
								$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
								$start = ($page - 1) * $per_page;

							$r = "SELECT * FROM report LEFT JOIN post ON report.rid = post.postReport LEFT JOIN user ON post.postAuthor = user.uid";
							$qr = mysqli_query($conn, $r);
							$y = 1;
							while($rr = mysqli_fetch_array($qr)){
						?>

						<tr>
							<td><?= $y++;?></td>
							<td style="text-align: left;"><?= $rr['postTitle'];?></td>
							<td><?= $rr['username'];?></td>
							<td><?= $rr['postDate'];?></td>
							<th><?= $rr['totalReport'];?></th>
							<td><a class="akmin edlia" target="_blank" href="article.php?id=<?= $rr['postId']?>">Lihat</a> <a href="rejected.php?id=<?= $rr['postId']?>&rid=<?= $rr['rid'];?>" onclick="return confirm('Apakah anda yakin ingin menolak laporan ini?')" class="akmin greeny">Tolak</a><a onclick="return confirm('Apakah anda yakin ingin menerima laporan dan menghapus artikel terkait?')" href="accepted.php?rid=<?= $rr['rid'];?>"  class="akmin redish">Setuju</a></td>
						</tr>

						<?php } ?>
					</table>
					<br>
						<div class="">
							<center>Halaman: 
								<?php if($pages >= 1 && $page <= $pages){
									for($z=1; $z<=$pages; $z++){
										echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=report&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
									}
								} ?>
							</center>
						</div>
				</div>
			<?php }else{ ?>

				<div class="customTable">
					<?php $keyword = $_GET['search'];?>
						<h4 class="sadmin"><a class="kembalilah" href="index.php?data=report">[kembali]</a> Menampilkan pencarian untuk <u><?= $keyword;?></u></h2>
					<table class="wadahdata">
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Penulis</th>
							<th>Tanggal</th>
							<th>Jumlah</th>
							<th>Aksi</th>
						</tr>

						<?php

								$qrx = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result FROM report LEFT JOIN post ON report.rid = post.postReport LEFT JOIN user ON post.postAuthor = user.uid WHERE postTitle LIKE '%$keyword%' OR username LIKE '%$keyword%'"))['result'];

								$per_page = 10;
								$totalresult = $qrx;
								$pages = ceil($totalresult / $per_page);
								$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
								$start = ($page - 1) * $per_page;

							$r = "SELECT * FROM report LEFT JOIN post ON report.rid = post.postReport LEFT JOIN user ON post.postAuthor = user.uid WHERE postTitle LIKE '%$keyword%' OR username LIKE '%$keyword%' ORDER BY postTitle ASC";
							$qr = mysqli_query($conn, $r);
							$y = 1;
							while($rr = mysqli_fetch_array($qr)){
						?>

						<tr>
							<td><?= $y++;?></td>
							<td style="text-align: left;"><?= $rr['postTitle'];?></td>
							<td><?= $rr['username'];?></td>
							<td><?= $rr['postDate'];?></td>
							<th><?= $rr['totalReport'];?></th>
							<td><a class="akmin edlia" target="_blank" href="article.php?id=<?= $rr['postId']?>">Lihat</a> <a href="rejected.php?id=<?= $rr['postId']?>&rid=<?= $rr['rid'];?>" onclick="return confirm('Apakah anda yakin ingin menolak laporan ini?')" class="akmin greeny">Tolak</a><a onclick="return confirm('Apakah anda yakin ingin menerima laporan dan menghapus artikel terkait?')" href="accepted.php?rid=<?= $rr['rid'];?>"  class="akmin redish">Setuju</a></td>
						</tr>

						<?php } ?>
					</table>

					<br>
						<div class="">
							<center>Halaman: 
									<?php if($pages >= 1 && $page <= $pages){
										for($z=1; $z<=$pages; $z++){
											echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=report&search='.$keyword.'&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
										}
									} ?>
							</center>
						</div>

				</div>

			<?php } ?>
	</div>
	<?php
		break;
// Breakpoints
	case 'ads':
		?>
		<script type="text/javascript">changeSide(3);</script>
		<div class="main-admin">
			<h2 class="section-title">Daftar Iklan</h2>
			<div class="adminsearch">
					<form class="datasearch" action="index.php" method="GET">
						<input type="hidden" name="data" value="ads">
						<input type="text" placeholder="Cari data disini" name="search" class="inp" required>
						<div class="center">
							<input type="submit" class='black-btn' value="Cari"/>
						</div>
					</form>
					
				</div>

				<?php if(!isset($_GET['search'])){ ?>
					<div class="customTable">
						<p>Untuk menambah data, klik pada baris paling atas lalu tekan tombol <kbd>Tambah</kbd>.</p><br>
						<table class="wadahdata">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Merk</th>
								<th>Tipe</th>
								<th>Tayang</th>
								<th>Aksi</th>
							</tr>
							<tr style="background:#ddd !important"><form method="POST" action="add-ads.php">
								<td></td>
								<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;" style="text-align: left;"><input class="hide" type="text" name="adstitle" value ="" required />Masukan iklan baru disini</td>
								<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="text" class="hide" name="adsbrand" value ="" required />Merk disini</td>
								<td contenteditable oninput="javascript: this.firstChild.value = this.innerText;"><input type="text" class="hide" name="adstipe" value ="" required/>banner/square</td>
								<td><a onclick="javascript: this.firstChild.click()" class="akmin greeny test"><input type="file" class="hide" name="adsimg" required>Gambar</a></td>
								<td><input type="submit" class="akmin greeny aksbm" value='Tambah'></td>
							</form></tr>
							<?php 

									$qax = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result FROM ads"))['result'];

									$per_page = 10;
									$totalresult = $qax;
									$pages = ceil($totalresult / $per_page);
									$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
									$start = ($page - 1) * $per_page;

								$a = "SELECT * FROM ads";
								$qa = mysqli_query($conn, $a);
								$y = 1;
								while($ra = mysqli_fetch_array($qa)){
							?>

							<tr>
								<td><?= $y++;?></td>
								<td style="text-align: left;"><?= $ra['adsTitle'];?></td>
								<td><?= $ra['adsBrand'];?></td>
								<td><?= $ra['adsTipe'];?></td>
								<td><?= $ra['adsView'];?> kali</td>
								<td><a href="delete-ads.php?id=<?= $ra['adsId'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus iklan ini?')" class="akmin redish">Hapus</a></td>
							</tr>

							<?php } ?>
						</table>
						<br>
							<div class="">
								<center>Halaman: 
									<?php if($pages >= 1 && $page <= $pages){
										for($z=1; $z<=$pages; $z++){
											echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=ads&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
										}
									} ?>
								</center>
							</div>
					</div>
				<?php }else{ ?>

					<div class="customTable">
						<?php $keyword = $_GET['search'];?>
							<h4 class="sadmin"><a class="kembalilah" href="index.php?data=ads">[kembali]</a> Menampilkan pencarian untuk <u><?= $keyword;?></u></h2>
						<table class="wadahdata">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Merk</th>
								<th>Tipe</th>
								<th>Tayang</th>
								<th>Aksi</th>
							</tr>
							<?php

									$qax = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) AS result FROM ads WHERE adsTitle LIKE '%$keyword%' OR adsBrand LIKE '%$keyword%' OR adsTipe LIKE '%$keyword%'"))['result'];

									$per_page = 10;
									$totalresult = $qax;
									$pages = ceil($totalresult / $per_page);
									$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
									$start = ($page - 1) * $per_page;

								$a = "SELECT * FROM ads WHERE adsTitle LIKE '%$keyword%' OR adsBrand LIKE '%$keyword%' OR adsTipe LIKE '%$keyword%' ORDER BY adsTitle ASC";
								$qa = mysqli_query($conn, $a);
								$y = 1;
								while($ra = mysqli_fetch_array($qa)){
							?>

							<tr>
								<td><?= $y++;?></td>
								<td style="text-align: left;"><?= $ra['adsTitle'];?></td>
								<td><?= $ra['adsBrand'];?></td>
								<td><?= $ra['adsTipe'];?></td>
								<td><?= $ra['adsView'];?> kali</td>
								<td><a href="delete-ads.php?id=<?= $ra['adsId'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus iklan ini?')" class="akmin redish">Hapus</a></td>
							</tr>

							<?php } ?>
						</table>

						<br>
							<div class="">
								<center>Halaman: 
										<?php if($pages >= 1 && $page <= $pages){
											for($z=1; $z<=$pages; $z++){
												echo ($z == $page) ? '<a class="sadnum current"><kbd>'.$z.'</kbd></a>' : '<a href="index.php?data=report&search='.$keyword.'&p='.$z.'" class="sadnum"><kbd>'.$z.'</kbd></a>';
											}
										} ?>
								</center>
							</div>

					</div>

				<?php } ?>
		</div>
		<?php
			break;
// Breakpoints
		default:
	?> <h3>Nampaknya ada sesuatu yang salah. Coba lagi nanti.</h3>
	<?php 
		break;
	} ?>
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
			<li><a href="index.php?data=user">Tandurarian</a></li>
			<li><a href="index.php?data=post">Artikel</a></li>
			<li><a href="index.php?data=report">Laporan</a></li>
			<li><a href="keluar.php" class='danger'>Keluar</a></li>
		</ul>
	</div>
</div>
<div onclick="closeModal(this)" class="modal">
	<img src="" alt="">
</div>
<div class="backdrop" onclick="closeSidebar(this)"></div>
<script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>
