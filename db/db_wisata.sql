-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2021 at 08:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `isi`, `createdAt`) VALUES
(1, '4edc31e8-3ddd-480f-997e-1068313dab23_169.jpeg', 'Virus Corona, Insentif Fiskal, dan Mencegah Panik', 'Jakarta - Panik! Itulah kondisi masyarakat setelah pengumuman oleh Presiden Jokowi pada Senin (2/3). Secara resmi dinyatakan bahwa dua orang warga negara Indonesia yang tinggal di Depok positif terjangkit virus corona. Mereka terinfeksi setelah berinteraksi dengan warga negara Jepang yang tinggal di Indonesia selama beberapa hari. Kini terpatahkanlah mitos bahwa orang Indonesia \"kebal\" dengan virus tersebut.\r\n\r\nIndonesia sekarang berada bersama 50 negara lainnya yang telah mengkonfirmasi positif infeksi Coronavirus Disease 2019 (COVID-19). Respons langsung dari pengumuman tersebut adalah kenaikan harga masker penutup hidung dan mulut yang drastis. Juga dilaporkan antrean yang tidak biasa di beberapa pusat perbelanjaan karena masyarakat berbondong-bondong membeli barang dalam jumlah besar.', '2020-03-03 21:27:55'),
(2, 'c2db680f-1aa1-4789-858e-1972d5e3c7ac_169.jpg', 'RI Siapkan Rp 72 M untuk Jaring Wisman, Buat Influencer?', 'Jakarta - Pemerintah sudah menyiapkan sederet insentif untuk menyembuhkan sektor pariwisata yang sudah babak belur dihantam virus corona. Salah satunya anggaran untuk promosi lewat influencer.\r\nPemerintah sendiri menyediakan dana Rp 10,3 triliun untuk sederet insentif di tengah-tengah merebaknya virus corona. Khusus di sektor pariwisata, pemerintah menganggarkan Rp 298,5 miliar. Secara rinci, dana tersebut merupakan insentif untuk maskapai dan travel agent sebesar Rp 98,5 miliar, anggaran promosi wisata Rp 103 miliar, kegiatan pariwisata Rp 25 miliar, dan influencer Rp 72 miliar.\r\n\r\nMenteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Wishnutama memaparkan tentang dana influencer sebesar Rp 72 miliar itu.\r\nBuat apa saja dana influencer Rp 72 M?', '2020-03-03 21:28:58'),
(3, 'c6ffdf70-3782-42d8-9190-57fed4968c39_169.jpeg', 'Lanjutkan Duet dengan Kemenparekraf, Ini Rencana Traveloka', 'Jakarta - Tak hanya memberikan layanan perjalanan dan gaya hidup untuk konsumen, Traveloka rupanya juga membantu pemerintah dalam mempromosikan pariwisata Indonesia.\r\n\"Kerja sama dengan Kemenpar sebagai co-brandingnya, itu berhubungan dengan promosi. Jadi tahun lalu kami sudah melakukan kerjasama dengan Kementerian Pariwisata untuk promosi di negara Malaysia dan Singapura untuk tujuan destinasinya Indonesia,\" kata Vice President of Market Management-Accomodation Traveloka, John Safenson, kepada pewarta beberapa hari lalu.', '2020-03-03 22:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text,
  `jenis_id` int(11) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(12) DEFAULT '-',
  `website` varchar(100) NOT NULL,
  `ig` varchar(100) DEFAULT '-',
  `fb` varchar(100) DEFAULT '-',
  `yt` varchar(100) DEFAULT '-',
  `jam_buka` varchar(100) DEFAULT '-',
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `deskripsi`, `jenis_id`, `alamat`, `no_hp`, `website`, `ig`, `fb`, `yt`, `jam_buka`, `lat`, `lng`, `photo`) VALUES
(1, 'Taman Nasional Bukit Tiga Puluh', 'Taman Nasional Bukit Tiga Puluh adalah taman nasional yang terletak di Sumatra, Indonesia. Taman Nasional ini terletak di provinsi Riau dan Jambi.', 1, 'Kec. Batang Gangsal, Kabupaten Indragiri Hulu, Riau 29355', '082245654321', '#', '#', '#', '#', '24 Jam', -0.922584, 102.4684642, 'pulau-cinta-teluk-jering-kampar_20180128_150954.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `gambar`, `judul`, `isi`, `createdAt`) VALUES
(1, '1292286713.jpg', 'Jalan Bersama Warga', 'Perubahan iklim terpengaruh oleh hutan yang kian menipis . Setidaknya Indonesia kehilangan 1000 Ha  setiap harinya ,pemerintah selayaknya memperhatikan hal ini. Masyarakat pun harus berkontribusi dalam pengawasan setiap jengkal', '2020-02-27 21:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `judul`, `createdAt`) VALUES
(1, 'ic_artikel02.png', 'Gallery One', '2020-04-25 22:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_destinasi`
--

CREATE TABLE `jenis_destinasi` (
  `id` int(11) NOT NULL,
  `jenis_destinasi` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_destinasi`
--

INSERT INTO `jenis_destinasi` (`id`, `jenis_destinasi`, `icon`) VALUES
(1, 'Hiburan', 'target.png');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `gambar`, `judul`, `isi`, `createdAt`) VALUES
(1, '4edc31e8-3ddd-480f-997e-1068313dab23_169.jpeg', 'Virus Corona, Insentif Fiskal, dan Mencegah Panik', 'Jakarta - Panik! Itulah kondisi masyarakat setelah pengumuman oleh Presiden Jokowi pada Senin (2/3). Secara resmi dinyatakan bahwa dua orang warga negara Indonesia yang tinggal di Depok positif terjangkit virus corona. Mereka terinfeksi setelah berinteraksi dengan warga negara Jepang yang tinggal di Indonesia selama beberapa hari. Kini terpatahkanlah mitos bahwa orang Indonesia \"kebal\" dengan virus tersebut.\r\n\r\nIndonesia sekarang berada bersama 50 negara lainnya yang telah mengkonfirmasi positif infeksi Coronavirus Disease 2019 (COVID-19). Respons langsung dari pengumuman tersebut adalah kenaikan harga masker penutup hidung dan mulut yang drastis. Juga dilaporkan antrean yang tidak biasa di beberapa pusat perbelanjaan karena masyarakat berbondong-bondong membeli barang dalam jumlah besar.', '2020-03-03 21:27:55'),
(2, 'c2db680f-1aa1-4789-858e-1972d5e3c7ac_169.jpg', 'RI Siapkan Rp 72 M untuk Jaring Wisman, Buat Influencer?', 'Jakarta - Pemerintah sudah menyiapkan sederet insentif untuk menyembuhkan sektor pariwisata yang sudah babak belur dihantam virus corona. Salah satunya anggaran untuk promosi lewat influencer.\r\nPemerintah sendiri menyediakan dana Rp 10,3 triliun untuk sederet insentif di tengah-tengah merebaknya virus corona. Khusus di sektor pariwisata, pemerintah menganggarkan Rp 298,5 miliar. Secara rinci, dana tersebut merupakan insentif untuk maskapai dan travel agent sebesar Rp 98,5 miliar, anggaran promosi wisata Rp 103 miliar, kegiatan pariwisata Rp 25 miliar, dan influencer Rp 72 miliar.\r\n\r\nMenteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Wishnutama memaparkan tentang dana influencer sebesar Rp 72 miliar itu.\r\nBuat apa saja dana influencer Rp 72 M?', '2020-03-03 21:28:58'),
(3, 'c6ffdf70-3782-42d8-9190-57fed4968c39_169.jpeg', 'Lanjutkan Duet dengan Kemenparekraf, Ini Rencana Traveloka', 'Jakarta - Tak hanya memberikan layanan perjalanan dan gaya hidup untuk konsumen, Traveloka rupanya juga membantu pemerintah dalam mempromosikan pariwisata Indonesia.\r\n\"Kerja sama dengan Kemenpar sebagai co-brandingnya, itu berhubungan dengan promosi. Jadi tahun lalu kami sudah melakukan kerjasama dengan Kementerian Pariwisata untuk promosi di negara Malaysia dan Singapura untuk tujuan destinasinya Indonesia,\" kata Vice President of Market Management-Accomodation Traveloka, John Safenson, kepada pewarta beberapa hari lalu.', '2020-03-03 22:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `authkey` varchar(50) NOT NULL,
  `accesToken` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_destinasi`
--
ALTER TABLE `jenis_destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_destinasi`
--
ALTER TABLE `jenis_destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
