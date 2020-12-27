-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 01:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanduranilmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `password`) VALUES
(1, 'alel', 'd4c25e4f6ec4b006fb69e0ded1a5ab78');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `adsId` int(5) NOT NULL,
  `adsTitle` varchar(255) NOT NULL,
  `adsBrand` varchar(255) NOT NULL,
  `adsTipe` enum('banner','square') NOT NULL,
  `adsImg` varchar(255) NOT NULL,
  `adsView` int(20) DEFAULT NULL,
  `adsDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`adsId`, `adsTitle`, `adsBrand`, `adsTipe`, `adsImg`, `adsView`, `adsDate`) VALUES
(1, 'Jasa Desain Logo', 'Jenester', 'banner', 'jenester1.png', 4, '2020-12-26 13:16:45'),
(2, 'Paket Internet Indosat Murah', 'Biji Shop', 'square', 'bijishop2.png', 2, '2020-12-26 13:17:44'),
(3, 'Jasa Desain Logo Murah', 'Jenester', 'banner', 'jenester2.png', 2, '2020-12-26 13:18:30'),
(4, 'Jasa Desain Logo 3x Revisi Murah', 'Jenester', 'square', 'jenester3.png', 4, '2020-12-26 13:19:15'),
(5, 'Tempat Paket Data Indosat Murah', 'Biji Shop', 'banner', 'bijishop1.png', 3, '2020-12-26 13:19:53'),
(6, 'Penerimaan Mahasiswa Baru', 'STMIK Komputama', 'square', 'stmik1.png', 6, '2020-12-26 13:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postId` int(15) NOT NULL,
  `postTitle` varchar(255) NOT NULL,
  `postDesc` varchar(255) NOT NULL,
  `postImg` varchar(255) NOT NULL,
  `postContent` text NOT NULL,
  `postAuthor` int(11) NOT NULL,
  `postReport` int(5) DEFAULT NULL,
  `postDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postTitle`, `postDesc`, `postImg`, `postContent`, `postAuthor`, `postReport`, `postDate`) VALUES
(1, 'Budidaya Tanaman Jagung', 'Jagung merupakan tanaman yang masuk dalam golongan tumbuhan biji-bijian. Di Indonesia sendiri jagung', 'Budidaya Tanaman Jagung.jpeg', '<p style=\"text-align: justify;\">Jagung merupakan tanaman yang masuk dalam golongan tumbuhan biji-bijian. Di Indonesia sendiri jagung biasa dikonsumsi sebagai bahan campuran makanan yang mengandung karbohidrat seperti roti dan nasi. Banyak masyarakat yang memilih jagung untuk di budidaya karena jagung merupakan salah satu tanaman pangan yang bernilai tinggi di pasaran.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Menanam jagung sudah tidak asing lagi bagi rakyat Indonesia. Hal ini kerap dilakukan untuk menopang perekonomian bagi para petani, apalagi bila ditanam dalam skala yang besar akan mendapat keuntungan yang besar pula. Untuk menanam jagung ada proses-proses seperti memilih bibit sampai panen dengan benar. Adapun hal-hal yang perlu diperhatikan sebelum menanam jagung, diantaranya adalah:</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Iklim</h2>\r\n\r\n<p style=\"text-align: justify;\">Tanaman jagung biasa tumbuh di daerah tropis. Suhu optimumnya berkisar 21-34 derajat celcius. Kemudian, intensitas sinar matahari minimal 8 jam perhari. Curah hujan tidak terlalu mempengaruhi pertumbuhan jagung. Apabila kekurangan air, produktivitas jagung akan menurun. Setiap varietas jagung membutuhkan pasokan air yang berbeda-beda tetapi pada umumnya membutuhkan 2 liter air per hari.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Memilih Bibit Jagung</h2>\r\n\r\n<p style=\"text-align: justify;\">Pilihlah bibit jagung yang berkualitas unggul atau bermerk, biasanya dijual di kios-kios pertanian. Dengan begitu tanaman jagung bisa terhindar dari hama dan penyakit. Daya tumbuh yang baik berkaitan dengan potensi hasil yang tinggi sehingga kualitas pertumbuhannya benar-benar baik dan sehat.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Mengolah Tanah</h2>\r\n\r\n<p style=\"text-align: justify;\">Tanah yang baik untuk ditanami adalah tanah gembur yang bernutrisi untuk menujang pertumbuhan tanaman. Tanah haruslah bersih dari sampah dan rumput-rumputan. Derajat keasaman tanah haruslah pas karena bila dibawah ph 5 maka jagung tidak bisa tumbuh dengan baik. Tingkat keasaman yang baik berkisar ph 5.5-7. Apabila tingkat keasamannya terlalu tinggi, sebaiknya sebelum menanam bisa dilakukan proses pengapuran pada tanah. Tanah dicangkul, kemudian diratakan kembali. Setelah itu dibuat parit bedengan agar mendapatkan air yang seimbang saat hujan.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Menanam Jagung</h2>\r\n\r\n<p style=\"text-align: justify;\">Masukan bibit jagung kedalam lubang dengan sistem tunggal berukuran sedalam 5 cm. Setiap lubang berisi 2 atau 3 bibit jagung. Lalu tutup dengan tanah. Tidak perlu ditekan, biarkan tertutup apa adanya. Beri jarak 75 x 25 cm dengan benih lain. Setelah itu beri pupuk oraganik atau bokashi di bekas lubang agar tanaman terhindar dari hama dan penyakit.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Pemeliharan Jagung</h2>\r\n\r\n<p style=\"text-align: justify;\">Tanaman jagung yang terlihat mati bisa dilakukan dengan proses penyulaman serta pembubunan yaitu menggantinya dengan tanaman baru dan memperkuat akar tanaman. Lakukan proses pembersihan di sekitar tanaman jagung dari tanaman pengganggu. Beri obat seminggu sekali agar jagung tidak terkena penyakit. Kontrol secara rutin dari hama perusak, seperti tikus dan burung.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\"><br />\r\nPanen</h2>\r\n\r\n<p style=\"text-align: justify;\">Tanaman jagung yang siap panen biasanya berumur 100 atau 100 HST. &nbsp;Warna daun sudah mengering dan rambut jagung berwarna hitam kecoklatan. Tekstur biji jagung keras dan terdapat warna kehitaman di ujung biji jagung. Setelah dipanen, jagung dijemur sampai kering. Kemudian dilakukan proses pemisahan biji dengan janggel jagung. Jagung siap didistribusikan.</p>\r\n', 1, 1, '2020-12-25'),
(2, 'Manfaat Getah Karet Bagi Kehidupan Manusia', 'Pohon karet merupakan tanaman yang menghasilkan getah karet. Pohon ini memiliki nama latin Hevea brasiliensis berasal dari hutan Amazon, Brazil serta kawasan Amerika Selatan. Industri perkebunan karet', 'Manfaat Getah Karet bagi Kehidupan Manusia.jpeg', '<p style=\"text-align:justify\">Pohon karet merupakan tanaman yang menghasilkan getah karet. Pohon ini memiliki nama latin Hevea brasiliensis berasal dari hutan Amazon, Brazil serta kawasan Amerika Selatan.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Industri perkebunan karet yang semakin berkembang membuat pohon ini tersebar di banyak negara, khususnya wilayah tropis. Itulah sebabnya, negara-negara di asia tenggara merupakan produsen karet terbesar di dunia. Selain itu, nilai guna pohon karet yang tinggi membuat komuditas budidaya ini menempatkan posisi ketiga sebagai tanaman perkebunan bernilai ekonomis tinggi.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Pohon karet mempunyai banyak manfaat, salah satunya getah karet. Getah karet yang dihasilkan dari pohon karet ini berwarna putih, lengket dan berbau tidak sedap. Untuk mengambil getahnya dilakukan dengan proses penyadapan. Penyadapan adalah teknik melukai pohon untuk membuka pembuluh pada kulit pohon agar getah bisa mengalir.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Teknik ini harus dilakukan dengan tepat mengikuti pola dari atas mengerucut ke bawah agar getah bisa masuk ke dalam wadah yang sudah disediakan. Biasanya getah ditampung terlebih dahulu sampai penuh dalam beberapa hari. Setelah itu baru diambil getah tersebut yang nantinya akan berbentuk blok yang sangat lengket.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Karet sendiri biasa diolah untuk dijadikan bahan baku produksi berbahan karet. Salah satu produk yang sering kita jumpai contohnya ban motor/mobil. Bahkan, ban karet yang sudah tidak berfungsi juga bisa di daur ulang sehingga bisa digunakan kembali. Kemudian, peralatan dapur berbahan karet memiliki ketahanan yang sangat baik aman sehingga lebih awet untuk dipakai.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Getah karet juga dibutuhkan sebagai bahan baku produk sintetis. Produk sintetis tentu saja berguna untuk memenuhi kebutuhan manusia. Produk yang dihasilkan antara lain alat kesehatan, perkakas, alat-alat kendaraan dan lain sebagainya.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Selain itu produksi getah karet yang tinggi membuat nilai fungsi sosial semakin meningkat. Lahan karet yang membutuhkan lahan luas dan pengaturan blok yang teratur biasanya berada di daerah terpencil sehingga membuka lapangan kerja baru bagi penduduk sekitar. Hal ini bisa membantu perekonomian mereka karena secara tidak langsung juga ikut andil dalam pemerataan penduduk.</p>\r\n', 4, NULL, '2020-12-25'),
(3, 'Cara Menanggulangi Banjir', 'ila banjir telah tiba atau datang melanda desa maka pemerintah akan disalahkan karena selalu dirasa tidak benar dalam mengatasi atau mencegah banjir atau datangnya banjir, namun aslinya kita juga bisa berperan sebagai salah satu penyebab terjadinya banjir', 'Cara Menanggulangi Banjir.png', '<p style=\"text-align:justify\">Negara Indonesia merupakan negara yang beriklim tropis yang memiliki musim kemarau dan musim hujan, sering disebut juga dengan berita banjir yang sering terjadi setiap tahunnya ketika hujan yang sangat deras datang, air sungai menguap karena tidak bisa menampung air lagi sehingga air mengalir kejalan sampai ke pemukiman warga atau penduduk.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Bila banjir telah tiba atau datang melanda desa maka pemerintah akan disalahkan karena selalu dirasa tidak benar dalam mengatasi atau mencegah banjir atau datangnya banjir, namun aslinya kita juga bisa berperan sebagai salah satu penyebab terjadinya banjir dengan melakukan kebiasaan buruk yang selalu membuang sampah sembarangan ke selokan maupun kesungai bahkan dipinggir jalan juga. Maka kita sebagai masyarakat atau penduduk yang pintar maka mari kita coba untuk menanggulanginya atau menyelesaikan masalah.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Berikut adalah cara yang dapat dilakukan untuk menanggulangi banjir saat ini:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Cek selokan atau sungai disekitar umah atau lingkungan bersih, bila masih terdapat banyak sekali sampah maka kumpulkan warga untuk melakukan gotong royong untuk membersihkan selokan atau sungai karena semua itu untuk kenyamanan kita bersama.</li>\r\n	<li style=\"text-align:justify\">Penebangan hutan atau penggundulan hutan adalah salah satu masalahnya, dan reboisasi tanaman bisa membantu mencegah banjir karena bisa membantu proses penyerapan air dengan cepat.</li>\r\n	<li style=\"text-align:justify\">Dilarang mendirikan rumah disekitar sungai, dikarenakan hal tersebut bisa membuat lahan sungai menjadi sempit dan bisa membuat sampah sampah jatuh ke dalam sungai.</li>\r\n	<li style=\"text-align:justify\">Janganlah membuang sampah sembarangan, seperti kedalam sungai atau selokan, dikarenakan dapat menjadi penyebab sungai meluap.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Pada saat ini pembuatan sumur buatan befungsi untuk resapan air, pada saat ini juga sudah dapat digunakan dengan mudah dan gampang terutama untuk proses pemasangannya. Pada daerah yang sering terkena bencana banjir atau kekurangan air ketika musim kemarau tiba.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Kini rucika rainwater system dapat diaplikasikan atau digunakan dihalaman rumah atau tempat umum lainnya seperti halaman gedung, perkantoran,parkiran atau bahkan jalan raya sekalipun. Rucika rainwater system digunakan untuk sumur resapan dikarenakan dibungkus menggunakan permeable geotextile dibawah tanah, sehingga bisa menyimpan air sementara untuk bisa dikelola kembali.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Oleh karena itu, sesuai dengan komintmen atau keputusan Rucika sebagai solusi total sistem perpipaan. Rucika Rainwater system merupakan solusi untuk memenuhi kebutuhan pengelolaan air hujan dengan menerapkan prinsip <em>Reduce</em> dan <em>Recycle</em>.</p>\r\n', 3, NULL, '2020-12-25'),
(4, 'Manfaat Reboisasi yang Perlu Kalian Ketahui', 'Manfaat reboisasi harus diperhatikan dengan baik oleh masyarakat atau warga Indonesia. Hal ini dikarenakan pada saat kini banyak terjadi penebangan liar yang tentu sangat merugikan bagi manusia', 'Manfaat Reboisasi yang Perlu Kalian Ketahui (2).png', '<p style=\"text-align:justify\">Manfaat reboisasi harus diperhatikan dengan baik oleh masyarakat atau warga Indonesia. Hal ini dikarenakan pada saat kini banyak terjadi penebangan liar yang tentu sangat merugikan bagi manusia.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Dampaknya tidak bisa dirasakan pada ini, namun bisa dirasakan beberapa puluh tahun kedepan atau beberapa tahun kemudian. Oleh karena itu kesadaran tentang reboisasi sangat penting diberitahukan kepada masyaakat, Dampak dari penebangan hutan secara liar adalah tanah longsor, erosi tanah dan terjadinya banjir di Indonesia.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Arti reboisasi itu melakukan penghijauan kembali supaya alam menjadi hijau dan dilakukan di hutan yang sudah gundul supaya bisa berfungsi sebagaimana mestinya. Hutan memiliki fungsi sebagai penyimpanan cadangan air, pelindung manusia dan sebagai rumah para satwa. Dengan ditamani kembali hutan yang gundul befungsi sebagai persediaan udara, air dan bencana alam bisa di cegah.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Manfaat Reboisasi</h2>\r\n\r\n<p style=\"text-align:justify\">Manfaat reboisasi wajib ditanamkan pada anak anak sejak kini, supaya anak peduli untuk melakukan penanaman pohon dan merawat pohon sangatlah penting. Melakukan reboisasi akan mendapatkan manfaat sebagai berikut:</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Mengurangi terjadinya erosi tanah yang disebabkan oleh angina dan air hujan yang sering.</li>\r\n	<li style=\"text-align:justify\">Menjaga kesuburan tanah yang bisa dijadikan untuk lahan pertanian</li>\r\n	<li style=\"text-align:justify\">Menjaga sumber daya alam yang terdapat dihutan dan bisa digunakan untuk peningkat produktifitas.</li>\r\n	<li style=\"text-align:justify\">Selalu membuat udara tetap bersih dan sehat bagi makhluk hidup yang ada di bumi.</li>\r\n	<li style=\"text-align:justify\">Menjaga struktur tanah supaya tidak rusak.</li>\r\n	<li style=\"text-align:justify\">Mencegah efek dari pencemaran udara dan global warming.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Kini sudah seharusnya kita memiliki kepedulian terhadap penghijauan hutan dan reboisasi yang ada di Indonesia. Apa lagi pada saat ini banyak sekali bencana alam yang tejadi dikarenakan oleh ulah tangan tangan manusia seperti tanah longsor, banjir dan masih banyak lagi yang lainnya.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Selain melakukan kegiatan reboisasi warga juga diharuskan untuk melakukan kegiatan penghijauan di halaman rumahnya sendiri dan melakukan kegiatan tebang pilih supaya hutan tidak lagi gundul, sekian semoga pengetian dan maanfaat reboisasi yang telah saya jelaskan semoga bermanfaat bagi kalian semua.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3, NULL, '2020-12-25'),
(5, 'Tips Merawat Tanaman Supaya Tidak Cepat Layu', 'Buat kalian yang suka berkebun dan cara merawat tanamana bisa menjadi hobi yang asik untuk dijalankan. Dimulai dari membeli benih, menanam, hingga merawatnya, Tentunya tedapat kepuasan tersendiri dan merawat tanaman sehingga menghasilkan tanaman yang subu', 'Tips Merawat Tanaman Supaya Tidak Cepat Layu (1).png', '<p style=\"text-align:justify\">Buat kalian yang suka berkebun dan cara merawat tanamana bisa menjadi hobi yang asik untuk dijalankan. Dimulai dari membeli benih, menanam, hingga merawatnya, Tentunya tedapat kepuasan tersendiri dan merawat tanaman sehingga menghasilkan tanaman yang subur, pastinya senang dong mempunyai tanaman yang tumbuh subur, sehingga kita tidak perlu kepasar karena sudah terdapat tanaman yang subur dan menghasilkan dirumah bukan?</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Apa jadinya bila hobi yang kita punya malah menjadi beban sehingga membuat kita stress karena tanaman yang kita tanam malah layu dan tidak berkembang dengan baik? Yuk langsung saja liat bagaimana cara merawat tanaman yang paling efektif dan benar.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Menggunakan teknik penyiraman air yang tepat</h2>\r\n\r\n<p style=\"text-align:justify\">Lakukanlah penyiraman secara berkala dan tidak terlalu sering, tetapi kita harus melihat kadar air yang dibutuhkan sang tanaman terlebih dahulu baru kita lakulan teknik penyiraman yang seharusnya, jangan terlalu banyak dan jangan terlalu sedikit supaya tidak kekeringan.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Lakukanlah penyiraman tanaman pada pagi atau malam hari janganlah pada siang hari karena terjadi perubahan suhu yang drastis sehingga membuat tanaman stress dan membuat tanaman mati. Dan siram tanamannya secara merata supaya adil.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Berikan sinar matahari secara merata</h2>\r\n\r\n<p style=\"text-align:justify\">Cara Kedua kemudian berikan sinar matahari secara merata maksudnya apa? Maksudnya adalah letakan tanaman di depan rumah tetapi pada siang hari pindahlah tanaman pada tempat yang tidak terkena sina matahari langsung supaya tanaman tersebut tidak layu dan mati.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Walaupun tanaman membutuhkan sinar matahari untuk proses fotosintesis tetapi ingat kadar sina matahari tesebut jangan terlalu lama sehingga membuat tanaman tersebut layu dan bahkan mati karena terlalu lama di letakan dibawah sinar matahari langsung, maka dari itu ingat kadar sinar matahari yang dibutuhkannya.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Cek suhu dan kelembapan yang cukup</h2>\r\n\r\n<p style=\"text-align:justify\">Segala jenis tanaman yang kalian miliki tentunya memiliki kadar suhu dan kelembapan yang pas. Sebagai kegiatan cara merawat tanaman yang pas maka kamu harus mencari tahu suhu dan kelembapan yang sesuai dengan jenis tanaman yang kalian miliki. Maka dari itu pemilihan tamanan yang pas akan mempengaruhi pemilihan suhu juga, pilihlah tanaman yang sesuai dengan suhu di tempat kalian berada, jangan berbanding terbalik dengan suhu kota anda.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align: justify;\">Pengecekan hama dan penyakit sejak awal</h2>\r\n\r\n<p style=\"text-align:justify\">Cara yang dapat dilakukan untuk mencegah tanaman teserang hama dan penyakit yaitu dengan merawat dan menjaga kualitas tanah. Bisa dilakukan dengan cara memberikan nutrisi organik dengan contoh kotoran hewan atau kompos secara rutin. Mencabut rumput yang tumbuh pada tamanan anda karena rumput tersebut akan menjadi hama bagi tanaman anda.</p>\r\n', 3, NULL, '2020-12-25'),
(6, 'Cara Menanam Buah Naga', 'Buah naga kerap kali menjadi buah favorit untuk dijadikan jus karena rasanya yang manis dan segar. Selain itu, buah naga juga dimanfaatkan sebagai pewarna makanan alami. Dagingnya ada yang berwarna merah dan putih dengan bintik-bintik hitam sebagai bijiny', 'Cara Menanam Buah Naga.jpg', '<p style=\"text-align:justify\">Buah naga masuk dalam kateogri tanaman kaktus dari marga Hylocereus dan Selenicereus. Buah ini pertama kali ditemukan di Meksiko, Amerika Tengah dan Amerika Selatan. Kepopulerannya terus berkembang hingga masuk ke Asia.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Buah naga kerap kali menjadi buah favorit untuk dijadikan jus karena rasanya yang manis dan segar. Selain itu, buah naga juga dimanfaatkan sebagai pewarna makanan alami. Dagingnya ada yang berwarna merah dan putih dengan bintik-bintik hitam sebagai bijinya. Kandungan airnya juga cukup tinggi.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Tanaman ini ditanam di daerah tropis. Untuk menanam buah naga-pun cukup mudah bahkan bisa dilakukan di rumah sendiri. Mereka yang menyukai buah naga biasanya menanam secara mandiri di halaman rumah atau lahan khusus agar bisa menikmati buah naga hasil budidaya sendiri.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Menanam buah naga haruslah melalui teknik penanaman yang benar. Dimana tanaman ini membutuhkan air yang cukup. Apabila terlalu banyak air maka akar tanaman buah naga bisa membusuk sehingga tidak bisa tumbuh dengan baik. Kelembapan tanah haruslah di jaga. Apabila kekeringan tanaman bisa mati. Sebab lain bisa terjadi perontokan pada bunga dan buah, penyerbukan gagal, batang tidak mau tumbuh dan lain sebagainya.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Untuk itu, berikut cara-cara menanam buah naga agar tumbuh dengan baik dan menghasilkan buah yang segar.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Memilih Media Tanam</h2>\r\n\r\n<p style=\"text-align:justify\">Pilihlah campuran tanah, pasir, dan pupuk kompos dengan perbandingan 2:1:1 , bila perlu dengan kapur pertanian agar keseimbangan ph tanah terjaga. Masukan campuran kedalam pot dengan ukuran yang agak besar karena tanaman buah naga bisa hidup dengan waktu yang cukup lama. Kemudian, masukan kerikil atau pecahan batu bata agar tanah tidak menggenang setelah disiram. Siram pot dengan air yang cukup, jangan terlalu banyak atau sedikit. Tanaman buah naga tidak tahan dengan tanah yang terlalu kering.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Siapkan tiang sebagai penyangga di dalam pot yang sudah dimasukan tanah pada bagian tengah atau pinggir. Tanaman ini akan semakin tumbuh dan panjang tetapi tidak bisa tegak berdiri sendiri. Oleh sebab itu diperlukan tiang ukuran sekitar 2 meter. Bahan tiang yang digunakan bisa kayu atau beton dengan diameter 10-15 cm. Tambahkan penopang yang melingkar diujung tiang karena tanaman akan terus tumbuh panjang dan bercabang. Hal ini bertujuan agar tanaman rapih dan sulurnya tidak menyebar kemana-mana.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Memilih Bibit</h2>\r\n\r\n<p style=\"text-align:justify\">Pilih bibit yang sehat. Bibit yang tidak sehat ditandai dengan adanya bercak dan berwarna agak kuning sehingga bisa membuat tanaman buah naga tidak berbuah. Cari bibit yang berwarna hijau cerah dengan panjang 50 cm dengan umur bibit sekitar 2 bulan.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Proses Penanaman</h2>\r\n\r\n<p style=\"text-align:justify\">Masukan bibit buah naga ke dalam pot yang sudah digunakan. Buat lubang berukuran sedalam 10-15 cm. Lalu tutup dengan tanah sambil sedikit ditekan agar tanaman kokoh berdiri. Ikat tanaman dengan tiang penyangga menggunakan tali. Simpan di tempat yang teduh. Sebenarnya tanaman buah naga bisa tumbuh dengan terkena matahari secara langsung ataupun tidak langsung. Tergantung dengan jenisnya. Namun secara umum, tanaman buah naga bisa hidup dengan sinar matahari secara langsung karena mereka merupakan jenis kaktus.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Pemeliharaan Tanaman Buah Naga</h2>\r\n\r\n<p style=\"text-align:justify\">Siram tanaman buah naga secara teratur. Saat musim kemarau siramlah 2 kali sehari, pagi dan sore. Pangkas sulur yang sudah terlalu panjang agar rapih.</p>\r\n', 2, NULL, '2020-12-25'),
(7, 'Indahnya Pesona Embung Nglanggeran', 'Embung Ngalanggerang terletak di Nglanggeran, Patuk, Gunung Kidul, Daerah Istimewa Yogyakarta. Objek wisata ini diresmikan oleh Sri Sultan Hamengkubuwono X pada tanggal 19 Februari 2013. Embung Nglanggeran adalah telaga yang dibuat sebagai sumber air untu', 'Indahnya Pesona Embung Nglanggeran.jpeg', '<p style=\"text-align:justify\">Embung Ngalanggerang terletak di Nglanggeran, Patuk, Gunung Kidul, Daerah Istimewa Yogyakarta. Objek wisata ini diresmikan oleh Sri Sultan Hamengkubuwono X pada tanggal 19 Februari 2013. Embung Nglanggeran adalah telaga yang dibuat sebagai sumber air untuk&nbsp; perkebunan warga saat musim kemarau. Spotnya yang menarik dan memanjakan mata membuat telaga ini dijadikan sebagai objek wisata bagi pengunjung lokal maupun mancanegara.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Keindahan alam yang tersaji membuat rasa kagum untuk diabadikan dengan jepretan kamera. Celah-celah perbukitan dari kompleks gunung Api Purba Nglanggeran mengelilingi telaga Embung Ngalanggeran. Perbukitannya berwarna hijau asri dengan hawa yang sejuk membuat wisatawan merasa betah menyaksikan keindahannya. Saat pagi hari, wisatawan bisa melihat panorama telaga dengan latarbelakang lembah hijau yang berkabut. Tak heran, lembah hijau itu seakan memiliki pesona tersendiri didukung dengan keeksotisan <em>sunsrise</em> matahari.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Terdapat deretan dinding-dinding tebing raksasa di sekitar area Embung. Tebing tersebut merupakan deretan tebing dari gunung Api Purba yang berada di kawasan Nglanggeran. Kita bisa melihat formasi batuan dengan latar Embung Nglanggeran dari sisi utara. Di sisi selatan, kabupaten Gunung kidul bisa terlihat jelas dengan hamparan yang luas. Di ujung selatan, terdapat pula pegunungan yang memanjang seperti pagar raksasa. Meskipun dikepung oleh pegunungan, hal ini tidak menghalangi untuk menyaksikan matahari terbenam saat musim kemarau.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Air telaga yang hijau dengan paduan langit biru membuat pemandangan ini menjadi super lengkap. Hamparan lumut disekeliling Embung Nglanggeran mengakibatkan air telaga berwarna hijau. Pesona itu sangat cocok untuk dijadikan konten menarik di media sosial. Apabila wisatawan ingin memotret Embung Nglanggeran saat petang, waktu yang cocok adalah sekitar pukul 18:00. Pada saat itu langit belum terlalu petang sehingga bisa terlihat perpaduan warna biru dan orange yang membentang di cakrawala barat.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Di sekitar kawasan Embung Nglanggeran terdapat perkebunan buah yang ditanam oleh penduduk sekitar. Diantaranya buah yang ditanaman sebagai komuditas utama adalah kelengkeng dan durian. Kebun ini mememiliki luas lebih dari 18 hektar. Warga setempat menamai kebun ini dengan nama kebun buah Nglanggeran.</p>\r\n', 2, NULL, '2020-12-25'),
(8, 'Mengenal Lebih Dekat Si Janda Bolong', 'Tanaman monstera atau yang biasa dikenal sebagai janda bolong merupakan tanaman hias yg memiliki bentuk unik dengan harga fantastis. Tidak hanya memberikan kesejukan, tanaman yang identik dengan bentuk daun bolong secara alami menambah nilai estetika untu', 'Mengenal Lebih Dekat Si Janda Bolong.jpg', '<p style=\"text-align:justify\">Tanaman monstera atau yang biasa dikenal sebagai <strong>janda bolong</strong> merupakan tanaman hias yg memiliki bentuk unik dengan harga fantastis. Tidak hanya memberikan kesejukan, tanaman yang identik dengan bentuk daun bolong secara alami menambah nilai estetika untuk dijadikan hiasan di dalam sebuah ruangan.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Untuk membeli satu pot janda bolong merogoh kocek yang cukup mahal tergantung dengan jenis spesies janda bolong tersebut. Harga janda bolong semakin mahal apabila daun yang bolong banyak dan lebar. Perpaduan warna seperti putih, hijau dan kuning menambah nilai dari tanaman tersebut karena tampilannya menjadi lebih menarik. Ada tiga jenis spesies yang populer, yaitu <strong>Monstera deliciosa, Monstera adansonii </strong>dan <strong>Monstera obliqua.</strong></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Dari ketiga spesies itu, jenis variegata adalah yang paling mahal. Hal ini dikarenakan corak dari daunnya yang belang karena kelainan genetik dan cenderung langka. Itulah sebabnya banyak dari pecinta tanaman hias yang mencari jenis spesies seperti ini.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Monstera merupakan nama genus dari tanaman berdaun besar daripada umumnya. Sebab itu dinamakan monstera. Sejak abad 20, monstera sudah diteliti oleh ahli botani. Kemudian, di masa modern ini monstera memiliki julukan dari beberapa negara. Di Indonesia dinamai janda bolong, sedangka di luar negeri dinamai swiss cheese plant.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Perawatan janda bolong relatif gampang. Tanaman ini bisa tumbuh di ruangan yang minim cahaya dan bisa tahan terhadap hama dan penyakit. Kemudian, pemupukannya bisa dilakukan satu kali dalam sebulan. Itulah yang menjadi nilai plus dari janda bolong.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Namun, untuk budidayanya terbilang cukup susah karena perlu ketrampilan khusus dalam penanganannya. Apabila tidak dilakukan dengan benar, bisa saja daunnya tidak bolong secara alami dan perpaduan warnanya tidak timbul. Hal ini yang mengakibatkan harga janda bolong menjadi biasa saja atau murah.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Ada pula masalah lainnya, seperti kekurangan dan kelebihan air yang mengakibatkan warna daun tidak sesuai aslinya. Bisa juga dikarenakan suhu ruangan yang terlalu dingin.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Perlu menjadi catatan bahwa janda bolong mengandung racun. Racun tersebut berasal dari kalsium oksalat yang ada di daun. Apabila daun tersebut robek dan getahnya secara tidak sengaja tertelan, gejalanya bisa mual, muntah, iritasi mulut, hingga kesulitan bernapas. Segeralah untuk menemui dokter atau tempat kesehatan setempat agar mendapatkan pertolongan.</p>\r\n', 2, NULL, '2020-12-25'),
(9, 'Tips Menanam Aglonema', 'Aglonema atau yang biasa disebut ‘Sri Rejeki’ merupakan tanaman hias populer yang kerap kali menjadi incaran bagi pecinta tanaman hias. Bercak warna merah muda yang ada pada daun membuat tampilannya menjadi menarik berbeda dari tanaman hias lainnya. Aglon', 'Tips Menanam Aglonema.jpg', '<p style=\"text-align:justify\">Aglonema atau yang biasa disebut &lsquo;Sri Rejeki&rsquo; merupakan tanaman hias populer yang kerap kali menjadi incaran bagi pecinta tanaman hias. Bercak warna merah muda yang ada pada daun membuat tampilannya menjadi menarik berbeda dari tanaman hias lainnya.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Aglonema tumbuh di lingkungan yang lembab tetapi masih membutuhkan sinar matahari yang tidak terlalu banyak.&nbsp; Selain itu, perawatannya yang mudah ditempatkan di sebuah ruangan membuat tanaman ini dimanfaatkan untuk memperindah tampilan di dalam ruangan.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Budidaya tanaman aglonema sebenarnya tidak terlalu sulit. Faktor lingkungan yang mempengaruhi pertumbuhan aglonema diantaranya pencahayaan, kelembapan dan lain sebagainya. Untuk lebih jelasnya, simak artikel berikut ini tentang langkah-langkah menanam aglonema dengan baik agar tumbuh subur.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Media Tanam</h2>\r\n\r\n<p style=\"text-align:justify\">Salah satu faktor penting dalam bercocok tanaman adalah media tanam. Media tanam yang baik membantu pertumbuhan tanaman menjadi subur.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Aglonema bisa tumbuh di media tanam campuran seperti tanah, sekam padi,&nbsp; kompos, pupuk kandang dan lain sebagainya. Media tanaman ini bisa di dapat di sekitar lingkungan anda. Fungsinya yang untuk menopang tumbuhan dan ruang gerak haruslah memiliki nutrisi agar tanaman dapat tumbuh dan berkembang dengan baik.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Campuran media tanam seperti tanah dan sekam padi membantu proses dalam perawatannya, selain itu bisa membuat pergerakan akar menjadi lebih bebas. Perbandingannya 1:1, kemudian siram dengan air secukupnya agar mudah dicampur. Masukan kedalam media pot yang sudah disediakan.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Pemilihan Bibit</h2>\r\n\r\n<p style=\"text-align:justify\">Pilihlah anakan bonggol yang terlihat baik dan bagus.&nbsp; Metode ini merupakan metode dengan cara anakan atau bibit.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Penanaman Aglonema</h2>\r\n\r\n<p style=\"text-align:justify\">Berikut teknik penanaman aglonema agar tumbuh dengan subur:</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Siapkan bibit yang akan ditanam.</li>\r\n	<li style=\"text-align:justify\">Siapkan media tanam tanah dan pot untuk diisi dengan bibit aglonema. Bila perlu campurkan dengan pupuk.</li>\r\n	<li style=\"text-align:justify\">Buat lubang pada media tanam dengan pot ukuran sedang sedalam 10 cm.</li>\r\n	<li style=\"text-align:justify\">Masukan bibit sampai batas akar ke dalam tanah.</li>\r\n	<li style=\"text-align:justify\">Tutup akar dengan tanah.</li>\r\n	<li style=\"text-align:justify\">Siram tanaman dengan air secukupnya.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\">Perawatan Aglonema</h2>\r\n\r\n<p style=\"text-align:justify\">Lakukan penyiraman secara teratur pagi dan sore. Apabila tanaman berada di luar ruangan intensitas penyiramannya tidak harus rutin tetapi tetap harus memperhatikan tingkat kelembapannya.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Bersihkan gulma atau rumput yang mengganggu di sekitar tanaman aglonema.&nbsp; Hal ini dilakukan agar tidak terjadi perebutan nutrisi dari pupuk yang diberikan.</p>\r\n', 2, NULL, '2020-12-25'),
(10, 'Senja Membawa Rasa Syukur dalam Hidup', 'Panorama terbenamnya matahari terjadi di bawah cakrawala bagian barat. Tingkat kepadatan atmosfer bumi dan hamburan Rayleigh warna biru menjadi penyebab timbulnya warna kemerahan. Itulah sebabnya di siang hari langit berwarna biru sedangkan pada sore hari', 'Senja Membawa Rasa Syukur dalam Hidup.jpg', '<p style=\"text-align:justify\">Rona kuning emas bercampur orange membentang kesepenjuru langit sore mengundang rasa kagum bagi orang-orang yang menikmatinya. <em>Sunset</em> bisa dinikmati ketika matahari mulai terbenam. Pemandangan ini sangat disukai banyak orang karena suasananya yang terasa begitu romantis sehingga banyak yang memanfaatkan momen ini bersama orang terkasih.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Panorama terbenamnya matahari terjadi di bawah cakrawala bagian barat. Tingkat kepadatan atmosfer bumi dan hamburan Rayleigh warna biru menjadi penyebab timbulnya warna kemerahan. Itulah sebabnya di siang hari langit berwarna biru sedangkan pada sore hari langit berwarna merah saat proses matahari tenggelam.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Menurut Nevada Kurt Ehler seorang profesor matematika di Truckee Community College mengatakan bahwa produk atmosfer dari setiap planet ketika partikelnya menyebarkan sinar matahari merupakan sebab dari perbedaan warna matahari.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Atmosfer sendiri terdiri dari nitrogen, oksigen dan molekul kecil dalam hamburan cahaya dengan golombang panjang merah serta gelombang pendek biru dan ungu. Warna-warna lain akan terus tertangkap mata, itulah kenapa warna matahari tenggelam sering berubah menjadi kuning, merah, dan orange.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Senja biasanya bisa didapati di area luas untuk penglihatan mata, seperti pantai, pegunungan, ataupun di belakang bangunan kota. Banyak sekali orang-orang ataupun fotografer yang ingin mengabadikan momen tersebut melalui kamera. Tidak jarang mereka yang memiliki keinginan kuat terhadap pesona sang surya berani menjelajahi bagian bumi lain untuk mendapatkan hasil yang terbaik.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Fenomena alam yang terjadi setiap hari ini merupakan anugrah dari Tuhan yang patut kita syukuri. Cahaya orange yang terpancar memberikan nuansa yang indah sehingga menimbulkan kebahagian sederhana namun memiliki makna tersendiri. Setiap hari, warna yang di lukis di langit selalu berubah dan memilki arti seakan sang pencipta ingin kita untuk terus belajar tentang keberagaman dalam hidup.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Dengan terus bersyukur, kita bisa mendapatkan kesejahteraan hidup karena kita bisa lebih berpikir optimis dan menciptakan emosi yang positif sehingga energi dalam diri akan menjadi bersih dan baik. Selain itu, Tuhan akan memberikan nikmat yang lebih bagi mereka yang senantiasa bersyukur dengan segala situasi dan kondisi dalam kehidupan ini.</p>\r\n', 2, NULL, '2020-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rid` int(5) NOT NULL,
  `postId` int(11) NOT NULL,
  `totalReport` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `postId`, `totalReport`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userDetails` int(11) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `userDetails`, `dateCreated`) VALUES
(1, 'alter_awaru', '3387c76f92218cc38d2fca3ac432d748', 1, '2020-12-25'),
(2, 'khusna.salsa', '7daef36cb0557f66ff2173575ca8a5a0', 2, '2020-12-25'),
(3, 'edgar.mikof', '98f441e4a693cc7863a789823031abcc', 3, '2020-12-25'),
(4, 'rafiq.cshb', 'e4c006a2a640324bc4276b61e7544bb2', 4, '2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `udid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`udid`, `fullname`, `email`, `tree`) VALUES
(1, 'Awal Ariansyah', 'awalariansyah7@gmail.com', 'Yggdrasil'),
(2, 'Khusna Salsabila', 'khusna.salsabila@gmail.com', 'Melati'),
(3, 'Edgar Miko Fernanda', 'edgarmikofernanda@gmail.com', 'Beringin'),
(4, 'Rafiq Chasnan Habibi', 'rafiqchasnanhabibi@gmail.com', 'Kurma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`adsId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `postAuthor` (`postAuthor`),
  ADD KEY `postReport` (`postReport`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `userDetails` (`userDetails`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`udid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `adsId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `udid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`postAuthor`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`postReport`) REFERENCES `report` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`userDetails`) REFERENCES `userdetails` (`udid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
