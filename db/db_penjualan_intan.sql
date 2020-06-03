-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 06:57 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penjualan_intan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'pimpinan', 'pimpinan', 'pimpinan'),
(3, 'aaz', 'aaz', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `idartikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `idadmin` int(11) DEFAULT NULL,
  PRIMARY KEY (`idartikel`),
  KEY `idadmin` (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idartikel`, `judul`, `isi`, `gambar`, `tanggal`, `idadmin`) VALUES
(11, 'Judul 1', '<p class="excert" style="background-color: transparent; box-sizing: border-box; color: #797979; font-family: &amp;quot; roboto&amp;quot;,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-bottom: 20px; margin-top: 0px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>\r\n<p>&nbsp;</p>\r\n<p style="background-color: transparent; box-sizing: border-box; color: #797979; font-family: &amp;quot; roboto&amp;quot;,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-bottom: 20px; margin-top: 0px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually</p>\r\n<p>&nbsp;</p>', 'm-blog-1.jpg', '2019-07-07', 1),
(12, 'Judul 2', '<p><span style="display: inline !important; float: none; background-color: transparent; color: #797979; font-family: ''Roboto'',sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">That dominion stars lights dominion divide years for fourth have don''t stars is that he earth it first without heaven in place seed it second morning saying.</span><u></u><span style="text-decoration: line-through;"></span></p>', 'm-blog-2.jpg', '2019-07-07', 1),
(13, 'Judul 3', '<p><span style="display: inline !important; float: none; background-color: transparent; color: #797979; font-family: ''Roboto'',sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">That dominion stars lights dominion divide years for fourth have don''t stars is that he earth it first without heaven in place seed it second morning saying.</span><u></u><span style="text-decoration: line-through;"></span></p>', 'm-blog-3.jpg', '2019-07-07', 1),
(14, 'Judul 4', '<p><span style="display: inline !important; float: none; background-color: transparent; color: #797979; font-family: ''Roboto'',sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">hat dominion stars lights dominion divide years for fourth have don''t stars is that he earth it first without heaven in place seed it second morning saying.</span><u></u><span style="text-decoration: line-through;"></span></p>', 'm-blog-4.jpg', '2019-07-07', 1),
(15, 'Judul 5', '<p><span style="display: inline !important; float: none; background-color: transparent; color: #797979; font-family: ''Roboto'',sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">That dominion stars lights dominion divide years for fourth have don''t stars is that he earth it first without heaven in place seed it second morning saying.</span><u></u><span style="text-decoration: line-through;"></span></p>', 'm-blog-5.jpg', '2019-07-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` char(5) NOT NULL,
  `namabarang` varchar(50) DEFAULT NULL,
  `berat` double(10,2) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `detail` text,
  `idkategori` char(3) DEFAULT NULL,
  PRIMARY KEY (`idbarang`),
  KEY `idmerk` (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `berat`, `harga`, `stok`, `gambar`, `detail`, `idkategori`) VALUES
('B0001', 'Barang  1', 1.00, 12000, 100, 'B1.jpg', '<p><strong style="margin: 0px; padding: 0px; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;">Lorem Ipsum</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', 'K01'),
('B0002', 'barang 2', 1.00, 36000, 100, 'B2.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'K01'),
('B0003', 'barang 3', 1.00, 36000, 100, 'B3.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'K01'),
('B0004', 'barang 4', 1.00, 36000, 100, 'B4.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'K01'),
('B0005', 'barang 5', 1.00, 36000, 100, 'B5.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'K01'),
('B0006', 'barang 6', 1.00, 36000, 100, 'B6.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'K02'),
('B0007', 'barang 7', 1.00, 36000, 99, 'B7.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'K02'),
('B0008', 'barang 8', 1.00, 36000, 100, 'B8.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'K02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `idcustomer` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcustomer`, `nama`, `nohp`, `email`, `password`, `alamat`) VALUES
(1, 'Anton', '081909890098', 'anton@email.com', 'anton', 'Sleman Jogjakarta'),
(2, 'Sukamto Harman', '087123456789', 'harman@email.com', 'harman', 'Kasihan, Bantul'),
(3, 'a', 'a', 'a@email.com', 'a', 'a'),
(4, 'intan', 'sleman', 'intan@gmail.com', 'intan', 'sleman');

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE IF NOT EXISTS `daerah` (
  `iddaerah` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddaerah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`iddaerah`, `provinsi`, `kota`, `ongkir`) VALUES
(1, 'Jawa Tengah', 'Wonosobo', 22000),
(2, 'Jawa Tengah', 'Wonogiri', 21000),
(3, 'Jawa Tengah', 'Pekalongan', 15000),
(4, 'Yogyakarta', 'Sleman', 19000),
(5, 'Yogyakarta', 'Bantul', 19000),
(6, 'Yogyakarta', 'Gunungkidul', 21000),
(7, 'Yogyakarta', 'Yogyakarta', 14000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` char(3) NOT NULL,
  `namakategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
('K01', 'Kategori 1'),
('K02', 'Kategori 2');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `idpembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `idtransaksi` char(8) DEFAULT NULL,
  `dibayar` int(11) DEFAULT NULL,
  `bank_no` varchar(50) DEFAULT NULL,
  `bank_nama` varchar(20) DEFAULT NULL,
  `bank_an` varchar(50) DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idpembayaran`),
  KEY `idtransaksi` (`idtransaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `idtransaksi`, `dibayar`, `bank_no`, `bank_nama`, `bank_an`, `bukti`) VALUES
(1, 'TP071901', 57000, '123', 'BCA', 'SUkamto', 'PB071901.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `idtransaksi` char(8) NOT NULL,
  `idcustomer` int(6) DEFAULT NULL,
  `iddaerah` int(11) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `alamat_penerima` text,
  `nama_penerima` varchar(50) DEFAULT NULL,
  `telpon_penerima` varchar(15) DEFAULT NULL,
  `berat` double(10,2) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `info_pengiriman` text,
  PRIMARY KEY (`idtransaksi`),
  KEY `idcustomer` (`idcustomer`),
  KEY `iddaerah` (`iddaerah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `idcustomer`, `iddaerah`, `ongkir`, `alamat_penerima`, `nama_penerima`, `telpon_penerima`, `berat`, `total`, `tanggal`, `status`, `info_pengiriman`) VALUES
('TP071901', 1, 2, 21000, 'Sleman Jogjakarta', 'Anton', '081909890098', 1.00, 57000, '2019-07-31', 'Diterima', '<p>mantap jaya</p>');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE IF NOT EXISTS `transaksi_detail` (
  `idtransaksi` char(8) DEFAULT NULL,
  `idbarang` char(5) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  KEY `idtransaksi` (`idtransaksi`),
  KEY `transaksi_detail_ibfk_2` (`idbarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`idtransaksi`, `idbarang`, `qty`, `harga`) VALUES
('TP071901', 'B0007', 1, 36000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`idtransaksi`) REFERENCES `transaksi` (`idtransaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idcustomer`) REFERENCES `customer` (`idcustomer`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`iddaerah`) REFERENCES `daerah` (`iddaerah`);

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`idtransaksi`) REFERENCES `transaksi` (`idtransaksi`),
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
