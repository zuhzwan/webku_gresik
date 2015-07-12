-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2015 at 09:41 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mediagresik`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_kategori` int(3) unsigned NOT NULL DEFAULT '0',
  `judul` varchar(100) NOT NULL DEFAULT '',
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `pengirim` varchar(15) NOT NULL DEFAULT '',
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `isi`, `gambar`, `pengirim`, `tanggal`) VALUES
(54, 10, 'Industri Manufaktur Kapasitas Semen Gresik Meningkat', '<p style="text-align: justify;"><span style="font-size: small;">Surabaya - Menteri Perindustrian (Menperin) MS Hidayat mengapresiasi pembangunan pabrik semen Tuban IV milik PT Semen Gresik (SG) yang dijadwalkan beroperasi pada awal 2012 mendatang.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">Penambahan kapasitas produksi Semen Gresik ini diharapkan bisa mencukupi kebutuhan semen di masa mendatang yang diproyeksikan akan tumbuh sekitar 10 persen per tahun. Menperin MS Hidayat memperkirakan, di masa mendatang dibutuhkan tambahan pasokan semen hingga 5 juta ton per tahun.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">"Faktor utama yang menjadi pendorong pertumbuhan konsumsi semen domestik adalah pertumbuhan ekonomi nasional yang cukup baik, pembangunan infrastruktur secara besar-besaran, dan sebagainya," ujar MS Hidayat saat berada di Tuban, pekan lalu (9/12).</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">Pabrik semen Tuban IV milik Semen Gresik direncanakan berkapasitas 2,5 juta ton per tahun. Selain membangun Tuban IV, Semen Gresik juga membangun pabrik baru PT Semen Tonasa (Grup Semen Gresik) di Sulawesi Selatan. Pabrik semen baru di Sulsel ini juga berkapasitas 2,5 juta ton.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">Menurut Sekretaris Perusahaan Semen Gresik Sunarti Prionomurti, pembangunan pabrik semen baru ini membutuhkan anggaran Rp 3,5 triliun. Dengan ini, pada 2012 mendatang, Semen Gresik Group akan memiliki kapasitas produksi hingga 22 juta ton.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">Selama 2011, kapasitas produksi semen masih sekitar 20,2 juta ton. Namun, pada 2016, kapasitas produksi Semen Gresik Group bakal mencapai 30 juta ton per tahun. Berikutnya produsen semen dengan pangsa pasar nasional lebih dari 40 persen ini juga akan membangun pabrik semen baru di Kabupaten Rembang, Jateng. Pembangunan pabrik semen berkapasitas 2,5 juta ton per tahun ini sudah memasuki fase pengujian dokumen analisis mengenai dampak lingkungan (amdal).</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">Semen Gresik optimistis kehadiran pabrik semen baru di sejumlah daerah akan bermanfaat positif. Selain mendorong lonjakan penerimaan pendapatan asli daerah (PAD), kegiatan ekonomi masyarakat sekitar juga bakal berkembang.</span></p>', 'IMG00356-20120707-2019.jpg', 'Admin', '2015-03-19 15:21:30'),
(52, 10, 'Kawasan Industri Gresik Berburu Lahan 200 Ha Lahan Baru', 'MAPPI Jatim &ndash; Dalam rangka pengembangan kawasan industri baru, PT Kawasan Industri Gresik (KIG) tengah berupaya mencari 200 hektare lahan di wilayah Jawa Timur.\r\nManajer Pemasaran Kawasan Industri Gresik Hery Setiawan mengatakan perluasan wilayah itu dilakukan melihat minat investor untuk masuk ke wilayah Jawa Timur cukup besar.\r\n&ldquo;Saat ini Jawa Timur cukup prospektif, sehingga banyak investor yang berminat masuk ke wilayah ini. Kami tetap mencari peluang untuk memperluas kawasan industri. Kami sudah punya di Tuban, tetapi masih melihat peluang juga untuk di daerah lainnya, ya sekitar 200 hektare. Tetapi belum tahu untuk tahun ini atau tidak, yang jelas kami tetap mencari peluang yang ada,&rdquo; ujarnya, kemarin.\r\nMenurutnya, sejumlah perusahaan yang berminat untuk mengembangkan kawasan industri di Jawa Timur diantaranya perusahaan pengelola mineral, perusahaan pengolahan ikan, perusahaan baja.\r\nAdapun minat antara investor lokal dan asing, lanjut dia, cukup berimbang. Sejumlah investor asing yang juga terlihat berminat a.l dari Jepang, China, Korea.\r\n&ldquo;Banyak industri mau masuk ke Jatim, tetapi lahan juga kan saat ini sudah terbatas. Dan harga lahan di Jawa Timur sudah cukup tinggi, sehingga kami juga akan sulit menentukan harga jual. Jadi, saat ini kami memang masih mencari-cari,&rdquo; tutur Hery.\r\nSelain berupaya mencari lahan kawasan industri baru, PT KIG juga sedang mengebut proses pembangunan tahap pertama di Kawasan Industri Tuban (KIT).\r\nTargetnya, pertengahan 2014, pembangunan tahap pertama itu mencakup pembangunan jalan dan infrastruktur di lahan seluas 60 hektare.\r\n&ldquo;Luas kawasan industri di Tuban mencapai 227 hektare. Tapi pembangunannya akan dilakukan secara bertahap. Untuk tahap pertama, 60 hektar untuk jalan dan infrastruktur. Di Tuban, lahannya dipasarkan dengan harga jual mulai Rp 500.000 per meter persegi,&rdquo; pungkas Hery.\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;', 'kawasan-industri-gresik.jpg', 'Admin', '2015-03-19 15:16:40'),
(53, 10, 'Ini 5 Kawasan Industri Baru Jawa Timur', '<p style="text-align: justify;"><span style="font-size: small;">Kawasan industri baru dengan total luas hingga 5000 hektar ini telah disiapkan di 5 kota besar daerah timur pulau jawa. Beberapa kota tersebut adalah Gresik, Lamongan, Tuban, Mojokerto, dan Jombang, tak ayal perkembangan pesat dua hingga lima tahun ke depan akan terlihat di beberapa kota tersebut.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">&ldquo;Separuh dari total luas lahan kawasan industri tersebut dikembangkan oleh PT Pelindo III (Persero) yang berkolaborasi dengan PT AKR Land yakni 2.500 hektar,&rdquo; ujar Head of Surabaya Office JLL, Joseph Lukito, Kompas (15/10/2014).</span></p>\r\n<p style="text-align: justify;"><span style="font-size: small;">Sisanya, lanjut Joseph, berasal dari pengembang seperti PT Intiland Development Tbk, Jawa Pos, dan lainnya. Adapun PT Pelindo III dan AKR Land akan membangun kawasan industri yang terintegrasi dengan pelabuhan, yakni Java Integrated Industrial and Port Estate (JIIPE) dengan proyeksi investasi sekitar Rp 4 triliun.</span></p>', 'Salah-Satu-Kawasan-Industri-Gresik-Jawa-Timur.png', 'Admin', '2015-03-19 15:19:33'),
(50, 9, 'Freeport Akan Membangun Smelter di Kawasan Industri Gresik, Jawa Timur', 'Media Gresik - PT Freeport Indonesia, anak usaha Freeport McMoRan Copper&amp;Gold Inc, perusahaan tambang asal Amerika Serikat, akan merealisasikan pembangunan fasilitas pengolahan dan pemurnian (smelter) di Kawasan Industri Gresik, Jawa Timur Direktur Pembinaan dan Pengusahaan Mineral Kementerian ESDM, Dede I Suhendra sebelumnya menuturkan bahwa ada empat alternatif lokasi smelter Freeport, Namun Freeport telah menentukan lokasi smelter yakni berada di kawasan industri Gresik, Jawa Timur. &nbsp; \r\n&nbsp;\r\nMemilih Gresik dengan pertimbangan ketersediaan energi listrik, serta terdapatnya infrastruktur penunjang seperti pelabuhan. Smelter Freeport berkapasitas 400 ribu ton katoda ini akan berdiri diatas lahan mencapai 300 hektar. &ldquo;Kalau (lokasi smelter) di luar Jawa kan akan ada kendala terkait listrik. Freeport sudah memastikan lokasi smelter di Gresik, meskipun hingga sekarang belum masuk tahap pembebasan lahan. Untuk mempercepat proses pembangunan smelter, Freeport sudah mengajukan permohonan kepada pihaknya agar tidak terkendala penerbitan perizinan Freeport akan membangun smelter sendiri berdasarkan rencana kerja yang diajukan ke Kementerian ESDM. &nbsp;\r\n&nbsp;\r\n Tahapan yang telah tercapai saat ini pada tahap perampungan pra studi kelayakan (pre-feasibility study) yang menggandeng PT Aneka Tambang (persero) Tbk. Freeport berencana mengintegrasikan usahanya dari hulu tambang hingga ke pengelolaan smelter tembaga batangan, saat ini, perusahaan yang bermarkas di Amerika Serikat tersebut berencana membangun smelter dengan kapasitas produksi 400.000 ton per tahun dengan investasi mencapai US$ 2,2 miliar.Smelter tersebut akan membutuhkan pasokan bahan baku konsentrat tembaga sebesar 1,6 juta ton per tahun. untuk membantu pemenuhan pasokan bahan baku konsentrat tembaga PT Newmont Nusa Tenggara yang memiliki tambang tembaga di Nusa Tenggara Barat, juga akan menjadi pemasok konsentrat ke smelter tersebut. &nbsp; &nbsp; &nbsp;', 'frespot.jpg', 'Admin', '2015-03-19 15:10:11'),
(51, 9, 'Semen Indonesia Bangun Kebun Raya, Museum Industri, dan Education Park Terbesar di Kabupaten Gresik', '<p style="text-align: justify;"><span style="font-size: small;">[GRESIK] PT Semen Indonesia (Persero) Tbk memantapkan langkah untuk melestarikan lingkungan dengan membangun berbagai fasilitas umum yang bisa dimanfaatkan masyarakat untuk rekreasi dan belajar di bekas lahan tambang dan area pabrik Gresik yang sudah tidak dimanfaatkan lagi. Kawasan Heritage yang dibangun diantaranya Botanical Garden (Kebun Raya), Museum dan Education Park.</span><br /><br /><span style="font-size: small;">Plt Dirut Semen Indonesia, Suparni mengatakan, pembangunan Heritage di kawasan Semen Indonesia ini merupakan inovasi PT SI dalam melestarikan industri persemenan. Karena Pabrik Semen Gresik yang bertempat di Jl Veteran Gresik ini merupakan pabrik semen pertama kali yang diresmikan oleh Presiden RI pertama Soekarno pada tanggal 7 Agustus 1957 dengan kapasitas terpasang 250.000 ton semen per tahun.</span><br /><br /><span style="font-size: small;">&ldquo;Pembangunan akan memakan waktu selama 2 tahun dimulai tahun ini dan selesai tahun 2017. Semen Indonesia merupakan BUMN pertama yang membangun kawasan industri menjadi Wisata Industri Nasional yang terpadu&rdquo; imbuh Suparni, saat pencanangan yang bertepatan dengan HUT Ke 2 PT SI, Rabu (7/1).</span><br /><br /><span style="font-size: small;">Suparni menjelaskan, pembangunan Kebun raya, Museum dan Education Park diharapkan menjadi kawasan terpadu dan terolah yang menjawab tuntutan generasi masa kini dan masa mendatang akan fasilitas edukasi yang rekreatif. Kedepan diharapkan wisata industri ini juga menjadi pilihan salah satu wisata menarik yang bisa diselaraskan dengan wisata religi seperti Sunan Giri dan Malik Ibrahim&rdquo;.</span><br /><br /><span style="font-size: small;">&ldquo;Jadi para wisatawan selain berkunjung ke makam Sunan Giri dan Maulana malik Ibrahim juga bisa berkunjung ke wisata yang dimiliki oleh Semen Indonesia, kami sangat senang jika masyarakat antusias untuk mengunjungi Heritage di kawasan kami&rdquo;, imbuh Suparni.</span><br /><br /><span style="font-size: small;">Pembangunan Kebun raya dilaksanakan di bekas lahan tambang Ngipik dengan luas sebesar 49 Ha, Konsepnya adalah taman budaya dengan tanaman langka, buah langka, tanaman obat dan tanaman penghasil O2 tinggi yang dilengkapi dengan tempat olah raga, tempat pembelajaran, rekreasi, tempat makan, tempat peristirahatan dan lahan penelitian yang mana pengunjung akan terlibat di dalamnya.</span><br /><br /><span style="font-size: small;">Museum dan Education Park dibangun dilokasi bekas pabrik Semen Gresik dengan luas 3.2 Ha. Museum digunakan sebagai tempat untuk pameran tetap benda benda yang patut mendapat perhatian umum seperti peninggalan sejarah, seni, ilmu pengetahuan dan menyimpan barang kuno. Education digunakan untuk aktifitas pembelajaran yang menghasilkan sebuah pengetahuan dan keahlian.</span><br /><br /><span style="font-size: small;">&ldquo;Museum ini akan difungsikan juga sebagai tempat rekreasi anak dan keluarga yang dilengkapi dengan berbagai mainan, hiburan, tempat istirahat dan resto, jadi kita konsep museum ini sebagai tempat rekreasi yang edukatif dan nyaman bagi keluarga. Selain itu mereka bisa mengetahui bagaimana proses pembuatan semen,&rsquo;&rsquo; ujar Suparni.</span><br /><br /><span style="font-size: small;">Selain itu juga akan dibangun Universitas International Semen Indonesia dengan luas 1.19 Ha merupakan satu wadah pembelajaran untuk mahasiswa dan mahasiswi seluruh Indonesia bertaraf international yang memiliki 3 Fakultas dan 10 program studi. Fakultasnya&nbsp; adalah pertama Fakultas Ekonomi bisnis dengan program studi Manajemen, Akuntasi dan Ekonomi Syariah.</span><br /><br /><span style="font-size: small;">Kedua&nbsp; adalah Fakultas Teknologi Indutri dan Agribisnis dengan Program studi, Teknik Kimia, Teknik Logistik,&nbsp; Manajemen rekayasa dan Teknologi Industri pertanian. Ketiga adalah Fakultas Teknologi Informasi dan Desain Kreatif dengan program studi&nbsp; Teknik Informatika, System Informasi dan Desain Komunikasi Visual. [142/N-6]</span></p>', 'gusgatnight.jpg', 'Admin', '2015-03-19 15:14:50'),
(55, 11, 'UKM Gresik Jajaki Pasar China', '<p style="text-align: justify;"><span style="font-size: small;">Gresik, (Antara Jatim) - Sejumlah pelaku Usaha Kecil Menengah (UKM) asal Kabupaten Gresik, Jatim mulai menjajaki pasar. China dengan memanfaatkan "Exchange Centre" (EC) milik Provinsi Jatim yang ada di wilayah Tianjin, China.</span><br /><br /><span style="font-size: small;">Kepala Dinas Koperasi, UKM, Perindustrian dan Perdagangan Kabupaten Gresik, M Najikh, Jumat mengatakan, sebagai langkah awal pihaknya telah mempertemukan 20 pelaku UKM Gresik dengan Senior Advisor Jatim, Mr Jasper Ho di Tianjin China beberapa waktu lalu.</span><br /><br /><span style="font-size: small;">Najikh berharap, pertemuan itu bisa dimanfaatkan pelaku UKM Gresik untuk memberikan penawaran dan berkoordinasi lebih lanjut dengan China.</span><br /><br /><span style="font-size: small;">Serta mampu memberikan informasi dan pelatihan, supaya produk asal Gresik memiliki kualitas yang baik dan bisa laku serta diminati di China.</span><br /><br /><span style="font-size: small;">Senior Advisor Jatim, Mr Jasper Ho mengakui bila China sangat banyak membutuhkan barang-barang dari Indonesia.&nbsp;</span><br /><br /><span style="font-size: small;">Sebab, neraca perdagangan Indonesia dan China sudah defisit, yakni nilai ekspor Indonesia ke China hanya sekitar $ 25 juta, sedangkan nilai importnya sekitar $ 30 juta lebih.</span><br /><br /><span style="font-size: small;">"Oleh karena itu, peluang pasar di Tianjin China sangat terbuka, karena jumlah penduduk Tianjin mencapai 14 juta lebih," katanya.</span><br /><br /><span style="font-size: small;">Ia menjelaskan, dengan jumlah penduduk yang sangat besar, China merupakan pasar potensial bagi Indonesia.</span><br /><br /><span style="font-size: small;">"Pemerintah China juga sangat mendorong dengan memberikan berbagai kemudahan untuk perdagangan Indonesia yang masuk ke China," katanya.</span><br /><br /><span style="font-size: small;">Selain itu, wilayah Tianjin juga merupakan "Free Trade Area" atau pasar bebas seluruh bagi produk Indonesia khususnya dari Jawa Timur.</span><br /><br /><span style="font-size: small;">Ia menyebut produk yang kini dibutuhkan masyarakat China seperti makanan ringan, peralatan rumah tangga, kerajinan tangan, batu alam, batu marmer, perak, Perhiasan dan aksesoris, Tas dan berbagai kerajinan tangan, minyak atsiri, kemenyan, bahan industri, ramuan rempah-rempah, minyak kelapa, produk perikanan serta pertanian.</span><br /><br /><span style="font-size: small;">"Untuk produk jenis garmen tidak dibutuhkan, sebab di Tianjin China banyak sekali produsen garmen," katanya.(*)</span></p>', 'impor-asean130404c.jpg', 'Admin', '2015-03-19 15:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nm_kategori` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
(14, 'Bisnis'),
(12, 'Ekonomi'),
(11, 'UKM'),
(10, 'Berita'),
(9, 'Industri'),
(15, '');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(10) NOT NULL AUTO_INCREMENT,
  `id_berita` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `komentar`) VALUES
(20, 55, 'Syaiful Nazar', 'Percobaan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123460 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Syaiful Nazar', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Zwan Alex', 'zwan', '534b44a19bf18d20b71ecc4eb77c572f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
