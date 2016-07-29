-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2012 at 06:40 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `excom`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `idperuntukan` char(10) NOT NULL,
  `nobast` char(60) NOT NULL,
  `tglbast` date NOT NULL,
  `idaset` char(10) NOT NULL,
  `kategoriaset` char(10) NOT NULL,
  `volume` double DEFAULT NULL,
  `satuan` char(10) NOT NULL,
  `nilainjop` double DEFAULT NULL,
  `nilaibast` double DEFAULT NULL,
  `nilaimix` double DEFAULT NULL,
  `nilaiapp` double DEFAULT NULL,
  `jumnjop` double DEFAULT NULL,
  `jumapp` double DEFAULT NULL,
  `ketakun` char(20) NOT NULL,
  `totnjop` double NOT NULL,
  `totbast` double NOT NULL,
  `totmix` double DEFAULT NULL,
  `totapp` double NOT NULL,
  `bastdokumen` double NOT NULL,
  PRIMARY KEY (`idperuntukan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idperuntukan`, `nobast`, `tglbast`, `idaset`, `kategoriaset`, `volume`, `satuan`, `nilainjop`, `nilaibast`, `nilaimix`, `nilaiapp`, `jumnjop`, `jumapp`, `ketakun`, `totnjop`, `totbast`, `totmix`, `totapp`, `bastdokumen`) VALUES
('1', '6536/077.73', '2007-12-17', '1', 'KIB A', 300, 'm2', 1147000, 0, 344100000, 0, 344100000, 0, 'nilai PerGub 132', 470828000, 0, 470828000, 0, 0),
('10', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 600, 'm2', 1573000, 764400000, 764400000, 0, 943800000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('11', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 381, 'm2', 1573000, 485394000, 485394000, 0, 599313000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('12', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 528, 'm2', 1573000, 672672000, 672672000, 0, 830544000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('13', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 446, 'm2', 1573000, 568204000, 568204000, 0, 701558000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('14', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 440, 'm2', 1573000, 560560000, 560560000, 0, 692120000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('15', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 450, 'm2', 1573000, 573300000, 573300000, 0, 707850000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('16', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 600, 'm2', 1573000, 764400000, 764400000, 0, 943800000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('17', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 1200, 'm2', 1573000, 1528800000, 1528800000, 0, 1887600000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('18', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 3200, 'm2', 1573000, 4076800000, 4076800000, 0, 5033600000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('19', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 2600, 'm2', 1573000, 3312400000, 3312400000, 0, 4089800000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('2', '6536/077.73', '2007-12-17', '1', 'KIB C', 217, 'm2', 584000, 0, 126728000, 0, 126728000, 0, 'nilai PerGub 132', 470828000, 0, 470828000, 0, 0),
('20', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 625, 'm2', 1573000, 796250000, 796250000, 0, 983125000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('21', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 625, 'm2', 1573000, 796250000, 796250000, 0, 983125000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('22', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 4234, 'm2', 1573000, 5394116000, 5394116000, 0, 6660082000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('23', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 60, 'unit', 9900000, 594000000, 594000000, 0, 594000000, 0, 'nilai perolehan BAST', 2607508700, 2607508700, 2607508700, 0, 0),
('24', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, 'nilai perolehan BAST', 2607508700, 2607508700, 2607508700, 0, 0),
('25', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, 'nilai perolehan BAST', 2607508700, 2607508700, 2607508700, 0, 0),
('26', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, 'nilai perolehan BAST', 2607508700, 2607508700, 2607508700, 0, 0),
('27', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 1, 'unit', 295250000, 295250000, 295250000, 0, 295250000, 0, 'nilai perolehan BAST', 2607508700, 2607508700, 2607508700, 0, 0),
('28', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 1, 'unit', 447258700, 447258700, 447258700, 0, 447258700, 0, 'nilai perolehan BAST', 2607508700, 2607508700, 2607508700, 0, 0),
('29', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 1, 'unit', 295250000, 295250000, 295250000, 0, 295250000, 0, 'nilai perolehan BAST', 2607508700, 2607508700, 2607508700, 0, 0),
('3', '1410/-077.523', '2008-04-18', '2', 'KIB B', 7, 'buah', 493406138.5718, 3453842970, 3453842970, 0, 3453842970.0025997, 0, 'nilai perolehan BAST', 3453842970.0025997, 3453842970, 3453842970, 0, 0),
('30', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 73252240, 92983400, 92983400, 0, 73252240, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('31', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 92983400, 73252240, 73252240, 0, 92983400, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('32', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 92983400, 73252240, 73252240, 0, 92983400, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('33', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 73252240, 92983400, 92983400, 0, 73252240, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('34', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('35', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('36', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('37', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('38', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('39', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('4', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 77481, 'm2', 750000, 102704179000, 102704179000, 0, 58110750000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('40', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('41', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('42', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('43', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('44', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('45', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('46', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('47', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, 'nilai perolehan BAST', 332471280, 1476389600, 1476389600, 0, 0),
('5', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 12232, 'm2', 750000, 795080000, 795080000, 0, 9174000000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('6', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 3150, 'm2', 1573000, 4013100000, 4013100000, 0, 4954950000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('7', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB D', 1, 'unit', 208500000, 208500000, 208500000, 0, 208500000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('8', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 564, 'm2', 1573000, 718536000, 718536000, 0, 887172000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0),
('9', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 539, 'm2', 1573000, 686686000, 686686000, 0, 847847000, 0, 'nilai perolehan BAST', 99239536000, 129419627000, 129419627000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `akunhistory`
--

CREATE TABLE IF NOT EXISTS `akunhistory` (
  `idperuntukan` char(10) NOT NULL,
  `nobast` char(60) NOT NULL,
  `tglbast` date NOT NULL,
  `idaset` char(10) NOT NULL,
  `kategoriaset` char(10) NOT NULL,
  `volume` double DEFAULT NULL,
  `satuan` char(10) NOT NULL,
  `nilainjop` double DEFAULT NULL,
  `nilaibast` double DEFAULT NULL,
  `nilaimix` double DEFAULT NULL,
  `nilaiapp` double DEFAULT NULL,
  `jumnjop` double DEFAULT NULL,
  `jumapp` double DEFAULT NULL,
  `ketakun` char(20) NOT NULL,
  `totnjop` double NOT NULL,
  `totbast` double NOT NULL,
  `totmix` double DEFAULT NULL,
  `totapp` double NOT NULL,
  `bastdokumen` double NOT NULL,
  PRIMARY KEY (`idperuntukan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akunhistory`
--

INSERT INTO `akunhistory` (`idperuntukan`, `nobast`, `tglbast`, `idaset`, `kategoriaset`, `volume`, `satuan`, `nilainjop`, `nilaibast`, `nilaimix`, `nilaiapp`, `jumnjop`, `jumapp`, `ketakun`, `totnjop`, `totbast`, `totmix`, `totapp`, `bastdokumen`) VALUES
('1', '6536/077.73', '2007-12-17', '1', 'KIB A', 300, 'm2', 1147000, 0, 344100000, 0, 344100000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('10', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 600, 'm2', 1573000, 764400000, 764400000, 0, 943800000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('11', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 381, 'm2', 1573000, 485394000, 485394000, 0, 599313000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('12', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 528, 'm2', 1573000, 672672000, 672672000, 0, 830544000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('13', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 446, 'm2', 1573000, 568204000, 568204000, 0, 701558000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('14', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 440, 'm2', 1573000, 560560000, 560560000, 0, 692120000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('15', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 450, 'm2', 1573000, 573300000, 573300000, 0, 707850000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('16', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 600, 'm2', 1573000, 764400000, 764400000, 0, 943800000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('17', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 1200, 'm2', 1573000, 1528800000, 1528800000, 0, 1887600000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('18', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 3200, 'm2', 1573000, 4076800000, 4076800000, 0, 5033600000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('19', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 2600, 'm2', 1573000, 3312400000, 3312400000, 0, 4089800000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('2', '6536/077.73', '2007-12-17', '1', 'KIB A', 217, 'm2', 584000, 0, 126728000, 0, 126728000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('20', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 625, 'm2', 1573000, 796250000, 796250000, 0, 983125000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('21', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 625, 'm2', 1573000, 796250000, 796250000, 0, 983125000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('22', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 4234, 'm2', 1573000, 5394116000, 5394116000, 0, 6660082000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('23', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 60, 'unit', 9900000, 594000000, 594000000, 0, 594000000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('24', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('25', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('26', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('27', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 295250000, 295250000, 295250000, 0, 295250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('28', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 447258700, 447258700, 447258700, 0, 447258700, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('29', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 295250000, 295250000, 295250000, 0, 295250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('3', '1410/-077.523', '2008-04-18', '2', 'KIB B', 7, 'buah', 493406138.5718, 3453842970, 3453842970, 0, 3453842970.0025997, 0, '', 3453842970.0025997, 3453842970, 3453842970, 0, 0),
('30', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 73252240, 92983400, 92983400, 0, 73252240, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('31', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 92983400, 73252240, 73252240, 0, 92983400, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('32', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 92983400, 73252240, 73252240, 0, 92983400, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('33', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 73252240, 92983400, 92983400, 0, 73252240, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('34', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('35', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('36', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('37', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('38', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('39', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('4', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 77481, 'm2', 750000, 102704179000, 102704179000, 0, 58110750000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('40', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('41', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('42', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('43', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('44', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('45', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('46', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('47', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('48', '6536/077.73', '2007-12-17', '1', 'KIB A', 300, 'm2', 0, 0, 0, 0, 0, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('49', '6536/077.73', '2007-12-17', '1', 'KIB A', 300, 'm2', 2450000, 0, 735000000, 0, 735000000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('5', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 12232, 'm2', 750000, 795080000, 795080000, 0, 9174000000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('50', '6536/077.73', '2007-12-17', '1', 'KIB A', 217, 'm2', 0, 0, 0, 0, 0, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('51', '6536/077.73', '2007-12-17', '1', 'KIB A', 217, 'm2', 3550000, 0, 770350000, 0, 770350000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('6', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 3150, 'm2', 1573000, 4013100000, 4013100000, 0, 4954950000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('7', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB D', 1, 'unit', 208500000, 208500000, 208500000, 0, 208500000, 0, '139 titik', 99239536000, 129419627000, 129419627000, 0, 0),
('8', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 564, 'm2', 1573000, 718536000, 718536000, 0, 887172000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('9', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 539, 'm2', 1573000, 686686000, 686686000, 0, 847847000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `akunjournal`
--

CREATE TABLE IF NOT EXISTS `akunjournal` (
  `idperuntukan` char(10) NOT NULL,
  `nobast` char(60) NOT NULL,
  `tglbast` date NOT NULL,
  `idaset` char(10) NOT NULL,
  `hkategoriaset` char(10) NOT NULL,
  `hvolume` double DEFAULT NULL,
  `hsatuan` char(10) NOT NULL,
  `nilainjop` double DEFAULT NULL,
  `nilaibast` double DEFAULT NULL,
  `hnilaimix` double DEFAULT NULL,
  `nilaiapp` double DEFAULT NULL,
  `jumnjop` double DEFAULT NULL,
  `jumapp` double DEFAULT NULL,
  `hketakun` char(20) NOT NULL,
  `totnjop` double NOT NULL,
  `totbast` double NOT NULL,
  `totmix` double DEFAULT NULL,
  `totapp` double NOT NULL,
  `bastdokumen` double NOT NULL,
  PRIMARY KEY (`idperuntukan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akunjournal`
--

INSERT INTO `akunjournal` (`idperuntukan`, `nobast`, `tglbast`, `idaset`, `hkategoriaset`, `hvolume`, `hsatuan`, `nilainjop`, `nilaibast`, `hnilaimix`, `nilaiapp`, `jumnjop`, `jumapp`, `hketakun`, `totnjop`, `totbast`, `totmix`, `totapp`, `bastdokumen`) VALUES
('1', '6536/077.73', '2007-12-17', '1', 'KIB A', 300, 'm2', 1147000, 0, 344100000, 0, 344100000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('10', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 600, 'm2', 1573000, 764400000, 764400000, 0, 943800000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('11', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 381, 'm2', 1573000, 485394000, 485394000, 0, 599313000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('12', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 528, 'm2', 1573000, 672672000, 672672000, 0, 830544000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('13', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 446, 'm2', 1573000, 568204000, 568204000, 0, 701558000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('14', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 440, 'm2', 1573000, 560560000, 560560000, 0, 692120000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('15', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 450, 'm2', 1573000, 573300000, 573300000, 0, 707850000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('16', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 600, 'm2', 1573000, 764400000, 764400000, 0, 943800000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('17', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 1200, 'm2', 1573000, 1528800000, 1528800000, 0, 1887600000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('18', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 3200, 'm2', 1573000, 4076800000, 4076800000, 0, 5033600000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('19', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 2600, 'm2', 1573000, 3312400000, 3312400000, 0, 4089800000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('2', '6536/077.73', '2007-12-17', '1', 'KIB A', 217, 'm2', 584000, 0, 126728000, 0, 126728000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('20', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 625, 'm2', 1573000, 796250000, 796250000, 0, 983125000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('21', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 625, 'm2', 1573000, 796250000, 796250000, 0, 983125000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('22', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 4234, 'm2', 1573000, 5394116000, 5394116000, 0, 6660082000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('23', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB B', 60, 'unit', 9900000, 594000000, 594000000, 0, 594000000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('24', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('25', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('26', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 325250000, 325250000, 325250000, 0, 325250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('27', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 295250000, 295250000, 295250000, 0, 295250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('28', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 447258700, 447258700, 447258700, 0, 447258700, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('29', 'Non/Jamsostek/080205/7', '2005-02-08', '4', 'KIB E', 1, 'unit', 295250000, 295250000, 295250000, 0, 295250000, 0, '', 2607508700, 2607508700, 2607508700, 0, 0),
('3', '1410/-077.523', '2008-04-18', '2', 'KIB B', 7, 'buah', 493406138.5718, 3453842970, 3453842970, 0, 3453842970.0025997, 0, '', 3453842970.0025997, 3453842970, 3453842970, 0, 0),
('30', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 73252240, 92983400, 92983400, 0, 73252240, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('31', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 92983400, 73252240, 73252240, 0, 92983400, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('32', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 92983400, 73252240, 73252240, 0, 92983400, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('33', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 73252240, 92983400, 92983400, 0, 73252240, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('34', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('35', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('36', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('37', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('38', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('39', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('4', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 77481, 'm2', 750000, 102704179000, 102704179000, 0, 58110750000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('40', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('41', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('42', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('43', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('44', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('45', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('46', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 92983400, 92983400, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('47', 'Non/MediaIndraBuana/070109/18', '2009-01-07', '5', 'KIB C', 1, 'unit', 0, 73252240, 73252240, 0, 0, 0, '', 332471280, 1476389600, 1476389600, 0, 0),
('48', '6536/077.73', '2007-12-17', '1', 'KIB A', 300, 'm2', 0, 0, 0, 0, 0, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('49', '6536/077.73', '2007-12-17', '1', 'KIB A', 300, 'm2', 2450000, 0, 735000000, 0, 735000000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('5', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 12232, 'm2', 750000, 795080000, 795080000, 0, 9174000000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('50', '6536/077.73', '2007-12-17', '1', 'KIB A', 217, 'm2', 0, 0, 0, 0, 0, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('51', '6536/077.73', '2007-12-17', '1', 'KIB A', 217, 'm2', 3550000, 0, 770350000, 0, 770350000, 0, 'Nilai berdasarkan re', 1976178000, 0, 1976178000, 0, 0),
('6', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 3150, 'm2', 1573000, 4013100000, 4013100000, 0, 4954950000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('7', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB D', 1, 'unit', 208500000, 208500000, 208500000, 0, 208500000, 0, '139 titik', 99239536000, 129419627000, 129419627000, 0, 0),
('8', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 564, 'm2', 1573000, 718536000, 718536000, 0, 887172000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0),
('9', 'Non/AnekaElok/120706/19', '2006-07-12', '3', 'KIB A', 539, 'm2', 1573000, 686686000, 686686000, 0, 847847000, 0, '', 99239536000, 129419627000, 129419627000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bast`
--

CREATE TABLE IF NOT EXISTS `bast` (
  `nobast` char(60) NOT NULL,
  `tglbast` char(10) NOT NULL,
  `perihalbast` longtext NOT NULL,
  `pengembangbast` char(100) NOT NULL,
  `keterangan` longtext NOT NULL,
  `nodokacuan` char(40) NOT NULL,
  `kodearsip` char(40) NOT NULL,
  PRIMARY KEY (`nobast`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bast`
--

INSERT INTO `bast` (`nobast`, `tglbast`, `perihalbast`, `pengembangbast`, `keterangan`, `nodokacuan`, `kodearsip`) VALUES
('1410/-077.523', '18/04/2008', '-  ', 'PT. Mandara Permai', 'BAST Kepala Biro Perlengkapan ', '001/PIK/GUB/II/2008', '-'),
('6536/077.73', '17/12/2007', 'Berita Acara Serah Terima Kembali', 'Yayasan Yarsi', 'BAST Biro Perlengkapan', '523/PEN/BIA/XI/2007', '-'),
('Non/AnekaElok/120706/19', '12/07/2006', '-  ', 'PT. Aneka Elok RE', 'BAPF Walikota Jakarta Timur', 'ExComAnekaElok', '-'),
('Non/Jamsostek/080205/7', '08/02/2005', '- ', 'PT. Jamsostek', 'BAST Gubernur', 'ExComJamsostek', '-'),
('Non/MediaIndraBuana/070109/18', '07/01/2009', '- ', 'PT. Media Indra Buana', 'BAST Gubernur', 'ExComMediaIndraBuana', '-');

-- --------------------------------------------------------

--
-- Table structure for table `bht`
--

CREATE TABLE IF NOT EXISTS `bht` (
  `idperuntukan` char(40) NOT NULL,
  `nobast` char(40) NOT NULL,
  `sertifikasi` char(40) NOT NULL,
  `pemilik` char(40) NOT NULL,
  `jenissertifikat` char(10) NOT NULL,
  `nosertifikat` char(20) NOT NULL,
  `masaberlaku` char(10) NOT NULL,
  `luas` decimal(10,0) NOT NULL,
  `keterangan` char(80) NOT NULL,
  PRIMARY KEY (`idperuntukan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bht`
--

INSERT INTO `bht` (`idperuntukan`, `nobast`, `sertifikasi`, `pemilik`, `jenissertifikat`, `nosertifikat`, `masaberlaku`, `luas`, `keterangan`) VALUES
('056/BA/PPBDPK/VI/1989-P01', '056/BA/PPBDPK/VI/1989-P01', 'Sertifikat', 'PT. Aneka Elok Real Estate', 'HGB', '159/1977', '28/03/1997', 236495, 'Sertifikat Induk dari 12 Peruntukan'),
('1517/1994-P01', '1517/1994', 'Sertifikat', 'PT. Tarumah Indah', 'HGB', '248/1994', '26/01/2007', 12510, '-'),
('4357/1.712.52-P01', '4357/1.712.52', 'Sertifikat', 'PT. Bangun Tjipta Sarana', 'HGB', '20/1984', '21/08/2004', 5778, ''),
('Non/CentralBumiIndah/17092003/10-P05', 'Non/CentralBumiIndah/17092003/10', 'Sertifikat', 'PT. Central Bumi Indah', 'HGB', '832/1988', '24/07/2008', 1487, '-'),
('Non/CentralBumiIndah/17092003/10-P07', 'Non/CentralBumiIndah/17092003/10', 'Sertifikat', 'PT. Central Bumi Indah', 'HGB', '826/1988', '24/07/2008', 1660, '-'),
('Non/CentralBumiIndah/17092003/10-P09', 'Non/CentralBumiIndah/17092003/10', 'Sertifikat', 'PT. Central Bumi Indah', 'HGB', '815/1988', '24/07/2008', 729, '-'),
('Non/CentralBumiIndah/17092003/10-P11', 'Non/CentralBumiIndah/17092003/10', 'Sertifikat', 'PT. Central Bumi Indah', 'HGB', '816/1988', '24/07/2008', 578, '-'),
('Non/GudangGaram/04022004/1-P01', 'Non/GudangGaram/04022004/1', 'Sertifikat', 'PT. Gudang Garam', 'HGB', 'HGB4659/2000', '20', 9867, 'HGB a/n PT. Gudang Garam'),
('Non/KramaYudhaTigaBerlian/04032005/3-P01', 'Non/KramaYudhaTigaBerlian/04032005/3', 'Sertifikat', '-', 'HGB', '2363/1990', '22/09/2009', 320, '-'),
('Non/KramaYudhaTigaBerlian/04032005/3-P02', 'Non/KramaYudhaTigaBerlian/04032005/3', 'Sertifikat', '-', 'HGB', '3262/1990', '22/09/2009', 209, '-'),
('Non/KramaYudhaTigaBerlian/04032005/3-P03', 'Non/KramaYudhaTigaBerlian/04032005/3', 'Sertifikat', '-', 'HGB', '-', '-', 334, '-');

-- --------------------------------------------------------

--
-- Table structure for table `dataaset`
--

CREATE TABLE IF NOT EXISTS `dataaset` (
  `idaset` int(8) NOT NULL AUTO_INCREMENT,
  `alamataset` char(80) NOT NULL,
  `wilayah` char(40) NOT NULL,
  `kecamatan` char(40) NOT NULL,
  `kelurahan` char(40) NOT NULL,
  `nobastaset` char(60) NOT NULL,
  PRIMARY KEY (`idaset`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dataaset`
--

INSERT INTO `dataaset` (`idaset`, `alamataset`, `wilayah`, `kecamatan`, `kelurahan`, `nobastaset`) VALUES
(1, 'Jalan Cempaka Putih Barat XIX No.3 RW 07', 'Jakarta Pusat', 'Cempaka Putih', 'Cempaka Putih Barat', '6536/077.73'),
(2, 'Pinggir Tol Cengkareng', 'Jakarta Utara', 'Penjaringan', 'Kapuk', '1410/-077.523'),
(3, 'Perumahan Taman Pulo Indah', 'Jakarta Timur', 'Cakung', 'Penggilingan', 'Non/AnekaElok/120706/19'),
(4, '5 Lokasi', 'Jakarta Barat', 'Cengkareng', 'Cengkareng Barat', 'Non/Jamsostek/080205/7'),
(5, '5 Wilayah Kota Administrasi', 'Jakarta Pusat', 'Senen', 'Johar Baru', 'Non/MediaIndraBuana/070109/18');

-- --------------------------------------------------------

--
-- Table structure for table `datapeta`
--

CREATE TABLE IF NOT EXISTS `datapeta` (
  `nomor` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `lat1` double NOT NULL,
  `lng1` double NOT NULL,
  `lat2` double NOT NULL,
  `lng2` double NOT NULL,
  `warna` varchar(10) NOT NULL,
  PRIMARY KEY (`nomor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `datapeta`
--

INSERT INTO `datapeta` (`nomor`, `judul`, `deskripsi`, `lat1`, `lng1`, `lat2`, `lng2`, `warna`) VALUES
(5, 'No BAST : 222/1.712.52', 'Jl. Pembina I No.5 Cipinang Muara Jakarta Timur FASOS/FASUM : Trotoar Pejalan Kaki ', -6.228522222308052, 106.88374621734624, -6.229311469053477, 106.88456160888677, '#FF0000');

-- --------------------------------------------------------

--
-- Table structure for table `detaildokacuan`
--

CREATE TABLE IF NOT EXISTS `detaildokacuan` (
  `nodokacuan` char(60) NOT NULL,
  `tgldokacuan` text NOT NULL,
  `haldokacuan` text NOT NULL,
  `pemegangdokacuan` char(80) NOT NULL,
  `ketdokacuan` text NOT NULL,
  `idkategori` char(10) NOT NULL,
  PRIMARY KEY (`nodokacuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detaildokacuan`
--

INSERT INTO `detaildokacuan` (`nodokacuan`, `tgldokacuan`, `haldokacuan`, `pemegangdokacuan`, `ketdokacuan`, `idkategori`) VALUES
('001/PIK/GUB/II/2008', '25/02/2008', '-', 'PT. Mandara Permai', '-', '3'),
('523/PEN/BIA/XI/2007', '08/11/2007', 'Surat Yayasan Yars', 'Yayasan Yarsi', 'Penyerahan Eks Gedung Puskesmas Yarsi', '6'),
('ExComAnekaElok', '17/09/1982', '-', 'PT. Aneka Elok RE', '-', '1'),
('ExComJamsostek', '08/02/2005', '-', 'PT. Jamsostek', '-', '3'),
('ExComMediaIndraBuana', '09/10/2007', '-', 'PT. Media Indra Buana', '-', '2');

-- --------------------------------------------------------

--
-- Table structure for table `dokumenacuan`
--

CREATE TABLE IF NOT EXISTS `dokumenacuan` (
  `idkategori` int(4) NOT NULL AUTO_INCREMENT,
  `jenisdokumen` char(20) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `dokumenacuan`
--

INSERT INTO `dokumenacuan` (`idkategori`, `jenisdokumen`) VALUES
(1, 'SIPPT'),
(2, 'PKS'),
(3, 'Sumbangan/Hibah'),
(4, 'Tukar Menukar'),
(5, 'Persetujuan Prinsip'),
(6, 'Keputusan Gubernur'),
(7, 'Instruksi Gubernur');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriaset`
--

CREATE TABLE IF NOT EXISTS `kategoriaset` (
  `kategoriaset` varchar(10) NOT NULL,
  `deskripsikategori` char(40) NOT NULL,
  PRIMARY KEY (`kategoriaset`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoriaset`
--

INSERT INTO `kategoriaset` (`kategoriaset`, `deskripsikategori`) VALUES
('KIB A', 'Tanah'),
('KIB B', 'Peralatan dan Mesin'),
('KIB C', 'Gedung dan Bangunan'),
('KIB D', 'Jalan, Jaringan dan Instalasi'),
('KIB E', 'Aset Tetap Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` char(20) NOT NULL,
  `namakecamatan` char(40) NOT NULL,
  `wilayah` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `namakecamatan`, `wilayah`) VALUES
('310101', 'Kepulauan Seribu Utara', 'Kepulauan Seribu'),
('310102', 'Kepulauan Seribu Selatan', 'Kepulauan Seribu'),
('317101', 'Gambir', 'Jakarta Pusat'),
('317102', 'Sawah Besar', 'Jakarta Pusat'),
('317103', 'Kemayoran', 'Jakarta Pusat'),
('317104', 'Senen', 'Jakarta Pusat'),
('317105', 'Cempaka Putih', 'Jakarta Pusat'),
('317106', 'Menteng', 'Jakarta Pusat'),
('317107', 'Tanah Abang', 'Jakarta Pusat'),
('317108', 'Johar Baru', 'Jakarta Pusat'),
('317201', 'Penjaringan', 'Jakarta Utara'),
('317202', 'Tanjung Priok', 'Jakarta Utara'),
('317203', 'Koja', 'Jakarta Utara'),
('317204', 'Cilincing', 'Jakarta Utara'),
('317205', 'Pademangan', 'Jakarta Utara'),
('317206', 'Kelapa Gading', 'Jakarta Utara'),
('317301', 'Cengkareng', 'Jakarta Barat'),
('317302', 'Grogol Petamburan', 'Jakarta Barat'),
('317303', 'Taman Sari', 'Jakarta Barat'),
('317304', 'Tambora', 'Jakarta Barat'),
('317305', 'Kebon Jeruk', 'Jakarta Barat'),
('317306', 'Kalideres', 'Jakarta Barat'),
('317307', 'Pal Merah', 'Jakarta Barat'),
('317308', 'Kembangan', 'Jakarta Barat'),
('317401', 'Tebet', 'Jakarta Selatan'),
('317402', 'Setiabudi', 'Jakarta Selatan'),
('317403', 'Mampang Prapatan', 'Jakarta Selatan'),
('317404', 'Pasar Minggu', 'Jakarta Selatan'),
('317405', 'Kebayoran Lama', 'Jakarta Selatan'),
('317406', 'Cilandak', 'Jakarta Selatan'),
('317407', 'Kebayoran Baru', 'Jakarta Selatan'),
('317408', 'Pancoran', 'Jakarta Selatan'),
('317409', 'Jagakarsa', 'Jakarta Selatan'),
('317410', 'Pesanggrahan', 'Jakarta Selatan'),
('317501', 'Matraman', 'Jakarta Timur'),
('317502', 'Pulogadung', 'Jakarta Timur'),
('317503', 'Jatinegara', 'Jakarta Timur'),
('317504', 'Kramatjati', 'Jakarta Timur'),
('317505', 'Pasar Rebo', 'Jakarta Timur'),
('317506', 'Cakung', 'Jakarta Timur'),
('317507', 'Duren sawit', 'Jakarta Timur'),
('317508', 'Makasar', 'Jakarta Timur'),
('317509', 'Ciracas', 'Jakarta Timur'),
('317510', 'Cipayung', 'Jakarta Timur');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `nobastkelompok` char(80) NOT NULL,
  `fisiknol` int(1) NOT NULL,
  `rangkap` int(1) NOT NULL,
  `sippt` int(1) NOT NULL,
  `nonsippt` int(1) NOT NULL,
  `sisa27` int(1) NOT NULL,
  PRIMARY KEY (`nobastkelompok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`nobastkelompok`, `fisiknol`, `rangkap`, `sippt`, `nonsippt`, `sisa27`) VALUES
('005/BA/PPBDPK/BPP/II/1990', 0, 0, 0, 0, 0),
('006/BA/PPBDPK/BPP/II/1990', 0, 0, 0, 0, 0),
('007/BA/PPBDPK/BPP/II/1990', 0, 0, 0, 0, 0),
('008/BA/PPBDPK/BPP/II/1990', 0, 0, 0, 0, 0),
('009/PPBDPK/III/1988', 0, 0, 0, 0, 0),
('012/PPBDPK/III/1988', 0, 0, 0, 0, 0),
('014/PPBDPK/IV/1988', 0, 0, 0, 0, 0),
('014/PPTDPK/DPP/II/1991', 0, 0, 0, 0, 0),
('015/PPBDPK/BPP/II/1991', 0, 0, 0, 0, 0),
('015/PPBDPK/IV/1988', 0, 0, 0, 0, 0),
('016/PPBDPK/BPP/II1991', 0, 0, 0, 0, 0),
('016/PPBDPK/IV/1988', 0, 0, 0, 0, 0),
('017/PPBDPK/BPP/II/1991', 0, 0, 0, 0, 0),
('017/PPBDPK/III/1988', 0, 0, 0, 0, 0),
('018/PPBDPK/BPP/II/1991', 0, 0, 0, 0, 0),
('018/PPBDPK/IV/1988', 0, 0, 0, 0, 0),
('019/PPBDPK/IV/1988', 0, 0, 0, 0, 0),
('019/PPDBPK/BPP/II/1991', 0, 0, 0, 0, 0),
('020/PPBDPK/BPP/II/1991', 0, 0, 0, 0, 0),
('021/PPBDPK/BPP/II/1991', 0, 0, 0, 0, 0),
('023/1998', 0, 0, 0, 0, 0),
('023/PPB/BPP/IV/1991', 0, 0, 0, 0, 0),
('026/BA/PPB/BPP/VI/1991', 0, 0, 0, 0, 0),
('026/BA/PPB/BPP/VIII/1991', 0, 0, 0, 0, 0),
('027/BPP/PI/IX/86', 0, 0, 0, 0, 0),
('028/PPBDPK/BA/BPP/I/1992', 0, 0, 0, 0, 0),
('029/BA/PPB/BPP/I/1992', 0, 0, 0, 0, 0),
('030/PPBDPK/BA/BPP/I/1992', 0, 0, 0, 0, 0),
('031/PPB/BA/BPP/I/1991', 0, 0, 0, 0, 0),
('032/PPBDPK/BA/I/BPP/1991', 0, 0, 0, 0, 0),
('033/PPBDPK/BA/BPP/I/1992', 0, 0, 0, 0, 0),
('034/PPBDPK/BA/BPP/1991', 0, 0, 0, 0, 0),
('034/PPBDPK/IX/1988', 0, 0, 0, 0, 0),
('035/PPBDPK/BPP/X/1988', 0, 0, 0, 0, 0),
('035/PTBDPK/BA/BPP/I/1991', 0, 0, 0, 0, 0),
('036/PPB/BPP/I/1991', 0, 0, 0, 0, 0),
('036/PPBDPK/BPP/XI/1988', 0, 0, 0, 0, 0),
('037/PPBDPK/BA/PPP/I/1991', 0, 0, 0, 0, 0),
('038/PPBDPK/BA/BPP/I/1991', 0, 0, 0, 0, 0),
('039/PPBDPK/BA/BPP/I/1991', 0, 0, 0, 0, 0),
('040/BA/PPBDPK/BPP/XII/1988', 0, 0, 0, 0, 0),
('042/BA/PPBDPK/BPP/II/1989', 0, 0, 0, 0, 0),
('055/BA/PPBDPK/VI/1989', 0, 0, 0, 0, 0),
('056/BA/PPBDPK/VI/1989', 0, 0, 0, 0, 0),
('058/BA/PPBDPK/BPP/VII/1989', 0, 0, 0, 0, 0),
('10/2001', 0, 0, 0, 0, 0),
('100/2000', 0, 0, 0, 0, 0),
('101/PPBDPK/X/1990', 0, 0, 0, 0, 0),
('10638/1987', 0, 0, 0, 0, 0),
('1076/BA/V/1997', 0, 0, 0, 0, 0),
('108/2002', 0, 0, 0, 0, 0),
('1089/1995', 0, 0, 0, 0, 0),
('1092/1.824.17', 0, 0, 0, 0, 0),
('1093/1.824.17', 0, 0, 0, 0, 0),
('111/2000', 0, 0, 0, 0, 0),
('1112/BA/1.712.3', 0, 0, 0, 0, 0),
('1133/BA/VI/1997', 0, 0, 0, 0, 0),
('1134/1.824.17', 0, 0, 0, 0, 0),
('114/2001', 0, 0, 0, 0, 0),
('1145/1995', 0, 0, 0, 0, 0),
('1164/1996', 0, 0, 0, 0, 0),
('117/2002', 0, 0, 0, 0, 0),
('118/2000', 0, 0, 0, 0, 0),
('118/2001', 0, 0, 0, 0, 0),
('1193/1997', 0, 0, 0, 0, 0),
('1196/BA/VII/1997', 0, 0, 0, 0, 0),
('1197/BA/VII/1997', 0, 0, 0, 0, 0),
('1199/1.711', 0, 0, 0, 0, 0),
('1217/1997', 0, 0, 0, 0, 0),
('1218/BA/VI/1997', 0, 0, 0, 0, 0),
('122/2002', 0, 0, 0, 0, 0),
('123/2002', 0, 0, 0, 0, 0),
('126/2000', 0, 0, 0, 0, 0),
('130/2001', 0, 0, 0, 0, 0),
('1343/077.73', 0, 0, 0, 0, 0),
('135/2002', 0, 0, 0, 0, 0),
('1368/1995', 0, 0, 0, 0, 0),
('1370/1995', 0, 0, 0, 0, 0),
('1375/1995', 0, 0, 0, 0, 0),
('138/2002', 0, 0, 0, 0, 0),
('139/2002', 0, 0, 0, 0, 0),
('140/2000', 0, 0, 0, 0, 0),
('140/2002', 0, 0, 0, 0, 0),
('141/2002', 0, 0, 0, 0, 0),
('1441/1992', 0, 0, 0, 0, 0),
('1442/1992', 0, 0, 0, 0, 0),
('1471/077.7', 0, 0, 0, 0, 0),
('1473/1.824.17', 0, 0, 0, 0, 0),
('1473/1993', 0, 0, 0, 0, 0),
('1474/1993', 0, 0, 0, 0, 0),
('1476/1993', 0, 0, 0, 0, 0),
('1484/077.73', 0, 0, 0, 0, 0),
('1489/1995', 0, 0, 0, 0, 0),
('1517/1994', 0, 0, 0, 0, 0),
('153/2000', 0, 0, 0, 0, 0),
('1542/1.711/1997', 0, 0, 0, 0, 0),
('1573/1996', 0, 0, 0, 0, 0),
('1582/1997', 0, 0, 0, 0, 0),
('1591/1.712.52', 0, 0, 0, 0, 0),
('1596/1.712.52', 0, 0, 0, 0, 0),
('160/2000', 0, 0, 0, 0, 0),
('1626/077.7', 0, 0, 0, 0, 0),
('1637/1994', 0, 0, 0, 0, 0),
('1652/1996', 0, 0, 0, 0, 0),
('1697/1996', 0, 0, 0, 0, 0),
('1710/1996', 0, 0, 0, 0, 0),
('1730/1996', 0, 0, 0, 0, 0),
('1731/1996', 0, 0, 0, 0, 0),
('1745/1997', 0, 0, 0, 0, 0),
('1765/1992', 0, 0, 0, 0, 0),
('1766/1992', 0, 0, 0, 0, 0),
('1767/1992', 0, 0, 0, 0, 0),
('1769/1992', 0, 0, 0, 0, 0),
('180/1993', 0, 0, 0, 0, 0),
('1805/1997', 0, 0, 0, 0, 0),
('1806/1991', 0, 0, 0, 0, 0),
('1863/1992', 0, 0, 0, 0, 0),
('1911/1997', 0, 0, 0, 0, 0),
('1973/BA/1.712.3', 0, 0, 0, 0, 0),
('209/1998', 0, 0, 0, 0, 0),
('21/2001', 0, 0, 0, 0, 0),
('210/1998', 0, 0, 0, 0, 0),
('211/1998', 0, 0, 0, 0, 0),
('2119/BA/1.712.6', 0, 0, 0, 0, 0),
('2147/1.778.53', 0, 0, 0, 0, 0),
('215/1998', 0, 0, 0, 0, 0),
('2156/077.73', 0, 0, 0, 0, 0),
('22/2001', 0, 0, 0, 0, 0),
('2242/1.712.13', 0, 0, 0, 0, 0),
('2257/BA/1.712.6', 0, 0, 0, 0, 0),
('2258/BA/1.712.6', 0, 0, 0, 0, 0),
('23/2001', 0, 0, 0, 0, 0),
('234/Sekwilda/II/1993', 0, 0, 0, 0, 0),
('2408/1.712.53', 0, 0, 0, 0, 0),
('245/1995', 0, 0, 0, 0, 0),
('2507/BA/1.712.6', 0, 0, 0, 0, 0),
('2508/BA/1.712.6', 0, 0, 0, 0, 0),
('2539/1.712.52', 0, 0, 0, 0, 0),
('25422/1995', 0, 0, 0, 0, 0),
('25423/1995', 0, 0, 0, 0, 0),
('25424/1995', 0, 0, 0, 0, 0),
('25425/1995', 0, 0, 0, 0, 0),
('25426/1995', 0, 0, 0, 0, 0),
('25427/1995', 0, 0, 0, 0, 0),
('25428/1995', 0, 0, 0, 0, 0),
('26/2002', 1, 0, 0, 0, 0),
('270/1.824.17', 0, 0, 0, 0, 0),
('2716/BA/1.712.3', 0, 0, 0, 0, 0),
('279/1.824.17', 0, 0, 0, 0, 0),
('2920/1989', 0, 0, 0, 0, 0),
('3165/-1.711', 0, 0, 0, 0, 0),
('34/2002', 0, 0, 0, 0, 0),
('351/1.711.9', 0, 0, 0, 0, 0),
('353/1.824.17', 0, 0, 0, 0, 0),
('3539/1995', 0, 0, 0, 0, 0),
('358/STR/I/01/1986-1.851', 0, 0, 0, 0, 0),
('3629/1995', 0, 0, 0, 0, 0),
('3630/1995', 0, 0, 0, 0, 0),
('37/2002', 0, 0, 0, 0, 0),
('376/1997', 0, 0, 0, 0, 0),
('389/1997', 0, 0, 0, 0, 0),
('4092/1.778.53', 0, 0, 0, 0, 0),
('43/2002', 0, 0, 0, 0, 0),
('434/1.778.53', 0, 0, 0, 0, 0),
('4354/1.712.52', 0, 0, 0, 0, 0),
('4355/1.712.52', 0, 0, 0, 0, 0),
('4356/1.712.52', 0, 0, 0, 0, 0),
('4356/1992', 0, 0, 0, 0, 0),
('4357/1.712.52', 0, 0, 0, 0, 0),
('436/1997', 0, 0, 0, 0, 0),
('437/1997', 0, 0, 0, 0, 0),
('438/1997', 0, 0, 0, 0, 0),
('439/1997', 0, 0, 0, 0, 0),
('44/2000', 0, 0, 0, 0, 0),
('4480/1992', 0, 0, 0, 0, 0),
('4481/1992', 0, 0, 0, 0, 0),
('4485/1.778.53', 0, 0, 0, 0, 0),
('4583/073.54', 0, 0, 0, 0, 0),
('487/K/Sekwilda/VII/1990', 0, 0, 0, 0, 0),
('4918/1992', 0, 0, 0, 0, 0),
('5/2002', 0, 0, 0, 0, 0),
('50/2002', 0, 0, 0, 0, 0),
('5060/1991', 0, 0, 0, 0, 0),
('5061/1991', 0, 0, 0, 0, 0),
('5062/1991', 0, 0, 0, 0, 0),
('5065/1991', 0, 0, 0, 0, 0),
('5069/1991', 0, 0, 0, 0, 0),
('5070/1991', 0, 0, 0, 0, 0),
('5071/1991', 0, 0, 0, 0, 0),
('51/STR/II/1987/1.771/1.857/1.793', 0, 0, 0, 0, 0),
('52/BA/1.712.6', 0, 0, 0, 0, 0),
('53/BA/1.712.6', 0, 0, 0, 0, 0),
('5382/1992', 0, 0, 0, 0, 0),
('5383/1992', 0, 0, 0, 0, 0),
('5384/1992', 0, 0, 0, 0, 0),
('5385/1992', 0, 0, 0, 0, 0),
('5386/1992', 0, 0, 0, 0, 0),
('5387/1992', 0, 0, 0, 0, 0),
('5389/1992', 0, 0, 0, 0, 0),
('5405/1990', 0, 0, 0, 0, 0),
('5412/1990', 0, 0, 0, 0, 0),
('5454/1992', 0, 0, 0, 0, 0),
('562/BA/1.712.3', 0, 0, 0, 0, 0),
('57/BA/PPBDPK/VI/1989', 0, 0, 0, 0, 0),
('582/1995', 0, 0, 0, 0, 0),
('59/2000', 0, 0, 0, 0, 0),
('59/2001', 0, 0, 0, 0, 0),
('60/1996', 0, 0, 0, 0, 0),
('60/2001', 0, 0, 0, 0, 0),
('61/2001', 0, 0, 0, 0, 0),
('615/BA/IV/1997', 0, 0, 0, 0, 0),
('62/1996', 0, 0, 0, 0, 0),
('623/1997', 0, 0, 0, 0, 0),
('63/1996', 0, 0, 0, 0, 0),
('635/BA/1.712.6', 0, 0, 0, 0, 0),
('637/k/Sekwilda/VI/93', 0, 0, 0, 0, 0),
('64/1996', 0, 0, 0, 0, 0),
('6449/1990', 0, 0, 0, 0, 0),
('657A/-1.711', 0, 0, 0, 0, 0),
('67/1999', 0, 0, 0, 0, 0),
('67/2001', 0, 0, 0, 0, 0),
('673/BA/1.712.6', 0, 0, 0, 0, 0),
('6785/1996', 0, 0, 0, 0, 0),
('68/2001', 0, 0, 0, 0, 0),
('681/K/Sekwilda/VI/1993', 0, 0, 0, 0, 0),
('69/2001', 0, 0, 0, 0, 0),
('698/1993', 0, 0, 0, 0, 0),
('7/2000', 0, 0, 0, 0, 0),
('710/1.824.17', 0, 0, 0, 0, 0),
('719/1993', 0, 0, 0, 0, 0),
('720/1995', 0, 0, 0, 0, 0),
('722/1995', 0, 0, 0, 0, 0),
('723/1995', 0, 0, 0, 0, 0),
('724/1995', 0, 0, 0, 0, 0),
('729/1995', 0, 0, 0, 0, 0),
('73/2000', 0, 0, 0, 0, 0),
('75/1999', 0, 0, 0, 0, 0),
('76/2002', 0, 0, 0, 0, 0),
('7694/1996', 0, 0, 0, 0, 0),
('77/1999', 0, 0, 0, 0, 0),
('791/1996', 0, 0, 0, 0, 0),
('792/1996', 0, 0, 0, 0, 0),
('792/STR/I/4/1983', 0, 0, 0, 0, 0),
('792/STR/I/4/1983.', 0, 0, 0, 0, 0),
('792/STR/I/4/1983..', 0, 0, 0, 0, 0),
('793/1996', 0, 0, 0, 0, 0),
('80/2002', 0, 0, 0, 0, 0),
('802/1995', 0, 0, 0, 0, 0),
('803/1995', 0, 0, 0, 0, 0),
('81/1999', 0, 0, 0, 0, 0),
('82/1999', 0, 0, 0, 0, 0),
('82/2001', 0, 0, 0, 0, 0),
('82/2002', 0, 0, 0, 0, 0),
('833/BA/1.712.6', 0, 0, 0, 0, 0),
('84/1995', 0, 0, 0, 0, 0),
('8428/1.824.17', 0, 0, 0, 0, 0),
('85/1995', 0, 0, 0, 0, 0),
('85/2000', 0, 0, 0, 0, 0),
('855/1990', 0, 0, 0, 0, 0),
('86/1995', 0, 0, 0, 0, 0),
('86/2000', 0, 0, 0, 0, 0),
('87/1995', 0, 0, 0, 0, 0),
('8754/1990', 0, 0, 0, 0, 0),
('876/1996', 0, 0, 0, 0, 0),
('88/1995', 0, 0, 0, 0, 0),
('883/BA/1.712.6', 0, 0, 0, 0, 0),
('89/1995', 0, 0, 0, 0, 0),
('91/2002', 0, 0, 0, 0, 0),
('917/BA/IV/1997', 0, 0, 0, 0, 0),
('918/BA/4/1977', 0, 0, 0, 0, 0),
('9185/1995', 0, 0, 0, 0, 0),
('9186/1995', 0, 0, 0, 0, 0),
('9187/1995', 0, 0, 0, 0, 0),
('9188/1995', 0, 0, 0, 0, 0),
('92/2002', 0, 0, 0, 0, 0),
('9313/1.712.3', 0, 0, 0, 0, 0),
('94/2001', 0, 0, 0, 0, 0),
('946/1994', 0, 0, 0, 0, 0),
('955/BA/1.712.6', 0, 0, 0, 0, 0),
('959/BA/V/1997', 0, 0, 0, 0, 0),
('983/BA/1.712.6', 0, 0, 0, 0, 0),
('99/2001', 0, 0, 0, 0, 0),
('Non/AgungPodomoro/080607/1', 0, 0, 0, 0, 0),
('Non/AgungPodomoro/241003/1', 0, 0, 0, 0, 0),
('Non/AgungPodomoro/241003/3', 0, 0, 0, 0, 0),
('Non/AgungPodomoro/301204/1', 0, 0, 0, 0, 0),
('Non/AnekaElok/031104/1', 0, 0, 0, 0, 0),
('Non/AnekaElok/150205/1', 0, 0, 0, 0, 0),
('Non/AnekaElok/270103/1', 0, 0, 0, 0, 0),
('Non/AntilopeMadju/141004/1', 0, 0, 0, 0, 0),
('Non/ApoelBatubara/140906/9', 0, 0, 0, 0, 0),
('Non/AriesUtama/200898/39', 0, 0, 0, 0, 0),
('Non/AsiaSejahteraPerdanaParmaceutical/12', 0, 0, 0, 0, 0),
('Non/AstraInternasional/070905/1', 0, 0, 0, 0, 0),
('Non/AstraInternasional/101005/1', 0, 0, 0, 0, 0),
('Non/AstraInternational/150507/6', 0, 0, 0, 0, 0),
('Non/AstraInternational/230997/2', 0, 0, 0, 0, 0),
('Non/AvabanindoPerkasa/120506/1', 0, 0, 0, 0, 0),
('Non/BakrieSwasaktiUtama/051007/4', 0, 0, 0, 0, 0),
('Non/BambuKuning/230997/1', 0, 0, 0, 0, 0),
('Non/BandarayaWiramedia/100211/1', 0, 0, 0, 0, 0),
('Non/BangunTjiptaSarana/011104/1', 0, 0, 0, 0, 0),
('Non/BASFIndonesia/240903/2', 0, 0, 0, 0, 0),
('Non/BinaKaryaCiptaIndah/270404/5', 0, 0, 0, 0, 0),
('Non/BinongNuansaPermai/230606/6', 0, 0, 0, 0, 0),
('Non/BojongPermai/130807/6', 0, 0, 0, 0, 0),
('Non/BojongPermai/190506/2', 0, 0, 0, 0, 0),
('Non/Bratakusuma/080607/4', 0, 0, 0, 0, 0),
('Non/BuanaSakti/280308/7', 0, 0, 0, 0, 0),
('Non/BudiGriyaPermai/010903/16', 0, 0, 0, 0, 0),
('Non/BudiGriyaPermai/080205/1', 0, 0, 0, 0, 0),
('Non/CakraBinaLestari/090201/6', 0, 0, 0, 0, 0),
('Non/CakraBinaLestari/150703/17', 0, 0, 0, 0, 0),
('Non/CakraBinaLestari/251002/8', 0, 0, 0, 0, 0),
('Non/CakraBinaLestari/270404/5', 0, 0, 0, 0, 0),
('Non/CakraBinaLestari/311202/2', 0, 0, 0, 0, 0),
('Non/CakrawalaRespati/150311/16', 0, 0, 0, 0, 0),
('Non/CandrasaPranaguna/050406/2', 0, 0, 0, 0, 0),
('Non/CandrasaPranaguna/070803/2', 0, 0, 0, 0, 0),
('Non/CandrasaPranaguna/100605/1', 0, 0, 0, 0, 0),
('Non/CandrasaPranaguna/150403/46', 0, 0, 0, 0, 0),
('Non/CandrasaPranaguna/270504/1', 0, 0, 0, 0, 0),
('Non/CandrasaPranaguna/280305/1', 0, 0, 0, 0, 0),
('Non/CandrasaPranaguna/280607/1', 0, 0, 0, 0, 0),
('Non/CentralBumiIndah/17092003/10', 0, 0, 0, 0, 0),
('Non/CentralKencanaUtama/260905/1', 0, 0, 0, 0, 0),
('Non/CenturyBatteries/201204/1', 0, 0, 0, 0, 0),
('Non/CitraHabitatIndonesia/060295/28', 0, 0, 0, 0, 0),
('Non/CitramasPentama/150205/1', 0, 0, 0, 0, 0),
('Non/CitramasPentama/180703/1', 0, 0, 0, 0, 0),
('Non/CitramasPentama/270103/1', 0, 0, 0, 0, 0),
('NON/ColoramaJayaTradingCOLTD/050607/5', 0, 0, 0, 0, 0),
('Non/CosmosMegahPermai/131202/4', 0, 0, 0, 0, 0),
('Non/DanaPensiunBankMandiriTiga/090304/4', 0, 0, 0, 0, 0),
('Non/DutaAnggada/260404/5', 0, 0, 0, 0, 0),
('Non/DutaKreasiBersamaRealtindo/140408/1', 0, 0, 0, 0, 0),
('Non/DutaPertiwi/110703/1', 0, 0, 0, 0, 0),
('Non/DutaPertiwi/12042006/28', 0, 0, 0, 0, 0),
('Non/DutaWisataLoka/200111/1', 0, 0, 0, 0, 0),
('Non/FajarSetiaMandiri/000606/1', 0, 0, 0, 0, 0),
('Non/FajarSetiaMandiri/030903/26', 0, 0, 0, 0, 0),
('Non/FajarSuryaPerkasa/080503/7', 0, 0, 0, 0, 0),
('Non/FajarSuryaPerkasa/221104/1', 0, 0, 0, 0, 0),
('Non/FajarSuryaPerkasa/231003/2', 0, 0, 0, 0, 0),
('Non/FajarSuryaPerkasa/290805/1', 0, 0, 0, 0, 0),
('Non/GayaMotor/230997/1', 0, 0, 0, 0, 0),
('Non/GBIJemaatSungaiYordan/160804/1', 0, 0, 0, 0, 0),
('Non/GoldindoMenawan/050607/1', 0, 0, 0, 0, 0),
('Non/GriyaEmasSejati/230408/4', 0, 0, 0, 0, 0),
('Non/GriyaIntiPrimaSentosa/050607/2', 0, 0, 0, 0, 0),
('Non/GudangGaram/04022004/1', 0, 0, 0, 0, 0),
('Non/HatmohadjiKawan/060607/1', 0, 0, 0, 0, 0),
('Non/HenryMaknawi/141105/1', 0, 0, 0, 0, 0),
('Non/ImpackPratama/270306/2', 0, 0, 0, 0, 0),
('Non/ImpactPratama/230997/2', 0, 0, 0, 0, 0),
('Non/IndoficaHousing/030806/2', 0, 0, 0, 0, 0),
('Non/IndoficaHousing/030806/3', 0, 0, 0, 0, 0),
('Non/IndoficaHousing/040806/1', 0, 0, 0, 0, 0),
('Non/IndoficaHousing/041203/1', 0, 0, 0, 0, 0),
('Non/IndoficaHousing/101204/2', 0, 0, 0, 0, 0),
('Non/indoficaHousing/230997/1', 0, 0, 0, 0, 0),
('Non/IndoficaHousing/280605/1', 0, 0, 0, 0, 0),
('Non/IndokisarDjaya/030204/4', 0, 0, 0, 0, 0),
('Non/Indomilk/17032005/2', 0, 0, 0, 0, 0),
('Non/InsanPerwiraMegah/130810/2', 0, 0, 0, 0, 0),
('Non/Intercon/130603/24', 0, 0, 0, 0, 0),
('Non/InterkonKebonJeruk/150205/1', 0, 0, 0, 0, 0),
('Non/IntiUtamaDharma/090606/13', 0, 0, 0, 0, 0),
('Non/IntiUtamaDharma/090606/26', 0, 0, 0, 0, 0),
('Non/JakartaRealty/250707/2', 0, 0, 0, 0, 0),
('Non/JasaJakartaInvestindo/031104/2', 0, 0, 0, 0, 0),
('Non/JasaJakartaInvestindo/050204/1', 0, 0, 0, 0, 0),
('Non/JasaJakartaInvestindo/191009/1', 0, 0, 0, 0, 0),
('Non/JasaJakartaInvestindo/270103/2', 0, 0, 0, 0, 0),
('Non/JasaJakartaInvestindo/270504/1', 0, 0, 0, 0, 0),
('Non/JayaAdhimedia/290411/1', 0, 0, 0, 0, 0),
('Non/JayaRealProperti/250797/66', 0, 0, 0, 0, 0),
('Non/JosephYEEMYE/240311/1', 0, 0, 0, 0, 0),
('Non/KaryamegahKharismaAbadi/240308/10', 0, 0, 0, 0, 0),
('Non/KedaungIndustrial/171207/17', 0, 0, 0, 0, 0),
('Non/KedoyaAdyaraya/150405/1', 0, 0, 0, 0, 0),
('Non/KeluargaBesarKijangKencana/230104/1', 0, 0, 0, 0, 0),
('Non/KetuaGerejaBethelIndonesia/061200/1', 0, 0, 0, 0, 0),
('Non/KramaYudhaTigaBerlian/04032005/3', 0, 0, 0, 0, 0),
('Non/KramaYudhaTigaBerlian/090304/1', 0, 0, 0, 0, 0),
('Non/KredosindoPerkasa/041007/1', 0, 0, 0, 0, 0),
('Non/KwarnasGerakanPramuka/230108/1', 0, 0, 0, 0, 0),
('Non/LahanAdyabumi/151211/12', 0, 0, 0, 0, 0),
('Non/MandaraPermai/041007/2', 0, 0, 0, 0, 0),
('Non/MandaraPermai/100807/7', 0, 0, 0, 0, 0),
('Non/MandaraPermai/110411/20', 0, 0, 0, 0, 0),
('Non/MandaraPermai/190309/8', 0, 0, 0, 0, 0),
('Non/MediaIndraBuana/281005/1', 0, 0, 0, 0, 0),
('Non/MediaIndraBuana/301208/4', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/020903/10', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/020903/8', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/070406/9', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/080607/6', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/17062010/13', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/230908/3', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/250908/1', 0, 0, 0, 0, 0),
('Non/MetropolitanDevelopment/280206/1', 0, 0, 0, 0, 0),
('Non/MetropolitanKentjana/121004/1', 0, 0, 0, 0, 0),
('Non/MetropolitanKentjana/121004/8', 0, 0, 0, 0, 0),
('Non/MetropolitanKentjana/210604/7', 0, 0, 0, 0, 0),
('Non/MultiAngsanaGanda/210508/6', 0, 0, 0, 0, 0),
('Non/MultiAngsanaGanda/311008/5', 0, 0, 0, 0, 0),
('Non/MultiPlazaProperties/100998/2', 0, 0, 0, 0, 0),
('Non/MultiSaranaAbadi/230294/2', 0, 0, 0, 0, 0),
('Non/MustikaKaryaSejati/251102/13', 0, 0, 0, 0, 0),
('Non/MustikaKaryaSejati/251102/3', 0, 0, 0, 0, 0),
('Non/MutiaraIdamanJaya/200499/1', 0, 0, 0, 0, 0),
('Non/Neonlite/070803/1', 0, 0, 0, 0, 0),
('Non/NusaKirana/060106/1', 0, 0, 0, 0, 0),
('Non/PandjiRamaOtomotif/091104/1', 0, 0, 0, 0, 0),
('Non/PangestuLuhur/260905/1', 0, 0, 0, 0, 0),
('Non/ParokiStYohanesMariaVianney/150408/1', 0, 0, 0, 0, 0),
('Non/PembangunanSaranaJaya/060608/1', 0, 0, 0, 0, 0),
('Non/PembangunanSaranaJaya/190506/2', 0, 0, 0, 0, 0),
('Non/PembangunanSaranaJaya/250107/1.', 0, 0, 0, 0, 0),
('Non/PembangunanSaranaJaya/270306/1', 0, 0, 0, 0, 0),
('Non/PentaOktoektama/050204/1', 0, 0, 0, 0, 0),
('Non/PentaOktoektama/070803/1', 0, 0, 0, 0, 0),
('Non/PermataHijau/070704/2', 0, 0, 0, 0, 0),
('Non/PermataIntiPrima/080411/4', 0, 0, 0, 0, 0),
('Non/PermataMedialand/311008/1', 0, 0, 0, 0, 0),
('Non/PerumPerumnas/030506/15', 0, 0, 0, 0, 0),
('Non/PerumPerumnas/060505/20', 0, 0, 0, 0, 0),
('Non/PerumPerumnas/210906/30', 0, 0, 0, 0, 0),
('Non/PerwitaMargaSakti/110703/1', 0, 0, 0, 0, 0),
('Non/PerwitaMargaSakti/120406/1', 0, 0, 0, 0, 0),
('Non/PesonaMargaMandiri/130505/1', 0, 0, 0, 0, 0),
('Non/PrimaJayaTeguhPersada/100511/2', 0, 0, 0, 0, 0),
('Non/PrimaKaryaKencana/140207/2', 0, 0, 0, 0, 0),
('Non/ProspeckMotor/230997/1', 0, 0, 0, 0, 0),
('Non/RajawaliNusantaraIndonesia/200705/18', 0, 0, 0, 0, 0),
('Non/RapiGrahaUtama/050510/1', 0, 0, 0, 0, 0),
('Non/RatnaKalimajaPersada/010903/1', 0, 0, 0, 0, 0),
('Non/RizkiLancarSentosa/220206/4', 0, 0, 0, 0, 0),
('Non/RointaEkaJaya/060405/1', 0, 0, 0, 0, 0),
('Non/RumahSakitIslamJakartaTimur/061204/2', 0, 0, 0, 0, 0),
('Non/SamuelMaruli/020605/2', 0, 0, 0, 0, 0),
('Non/SaranaJaya/020305/1', 0, 0, 0, 0, 0),
('Non/SaranaJaya/250107/1', 0, 0, 0, 0, 0),
('Non/SaranaWisesaPropertindo/270606/3', 0, 0, 0, 0, 0),
('Non/SariKebonJerukPermai/260908/7', 0, 0, 0, 0, 0),
('Non/SatwikaPermaiIndah/071111/2', 0, 0, 0, 0, 0),
('Non/SatwikaPermaiIndah/181105/7', 0, 0, 0, 0, 0),
('Non/SatwikaPermaiIndah/260908/2', 0, 0, 0, 0, 0),
('Non/SeabreezIndonesia/290805/1', 0, 0, 0, 0, 0),
('Non/SentragrahaSentosa/240908/2', 0, 0, 0, 0, 0),
('Non/SinarMasGriya/230603/2', 0, 0, 0, 0, 0),
('Non/SolidGoldAbadi/180506/1', 0, 0, 0, 0, 0),
('Non/SumberMesinRaya/061206/2', 0, 0, 0, 0, 0),
('Non/SummareconAgung/100804/1', 0, 0, 0, 0, 0),
('Non/SummareconAgung/101204/7', 0, 0, 0, 0, 0),
('Non/SummareconAgung/150304/2', 0, 0, 0, 0, 0),
('NON/SummareconAgung/180705/28', 0, 0, 0, 0, 0),
('Non/SummareconAgung/240406/7', 0, 0, 0, 0, 0),
('Non/SunterAgung/040806/1', 0, 0, 0, 0, 0),
('Non/SunterAgung/130410/1', 0, 0, 0, 0, 0),
('Non/SunterAgung/130603/5', 0, 0, 0, 0, 0),
('Non/SunterAgung/150507/3', 0, 0, 0, 0, 0),
('Non/SunterAgung/230997/4', 0, 0, 0, 0, 0),
('Non/SunterGarden/230997/1', 0, 0, 0, 0, 0),
('Non/SuryarayaPrawira/151211/3', 0, 0, 0, 0, 0),
('Non/SuryarayaPrawira/190404/4', 0, 0, 0, 0, 0),
('Non/SwadayaPanduartha/240703/7', 0, 0, 0, 0, 0),
('Non/SwadayaPanduartha/291209/2', 0, 0, 0, 0, 0),
('Non/TamanHarapanIndah/071011/20', 0, 0, 0, 0, 0),
('Non/TamaraGreenGarden/160108/12', 0, 0, 0, 0, 0),
('Non/TanchoIndonesia/230997/1', 0, 0, 0, 0, 0),
('Non/TataBumi/290905/3', 0, 0, 0, 0, 0),
('Non/TotalBangunPersada/030707/7', 0, 0, 0, 0, 0),
('Non/TotalBangunPersada/080607/4', 0, 0, 0, 0, 0),
('Non/TriDharmaWisesa/100507/2', 0, 0, 0, 0, 0),
('Non/UnggulDianPerkasa/240209/4', 0, 0, 0, 0, 0),
('Non/WahanaCiptaSejahtera/190508/1', 0, 0, 0, 0, 0),
('Non/YASBHUM/210611/1', 0, 0, 0, 0, 0),
('Non/YayasanBismaSetjenDephankamnas/140806/8', 0, 0, 0, 0, 0),
('Non/YayasanDawahQaryahThayyibah/200499/3', 0, 0, 0, 0, 0),
('Non/YayasanDharmaBaktiMahaka/130505/14', 0, 0, 0, 0, 0),
('Non/YayasanNurulJannah/100605/1', 0, 0, 0, 0, 0),
('Non/YayasanPatmos/270807/1', 0, 0, 0, 0, 0),
('Non/YayasanPendidikanKatolikMardiLuhur/060505/22', 0, 0, 0, 0, 0),
('Non/YayasanPendidikanKristenTiaraKasih/060505/16', 0, 0, 0, 0, 0),
('Non/YayasanPendidikanKristenTiaraKasih/230603/19', 0, 0, 0, 0, 0),
('Non/YayasanPendidikanPermai/140108/3', 0, 0, 0, 0, 0),
('Non/YayasanPondokKaryaPembangunan/310305/1', 0, 0, 0, 0, 0),
('Non/YayasanPusatPelatihanEdanPIndonesia/010811/1', 0, 0, 0, 0, 0),
('Non/YayasanPusatPelatihanEdanPSDMIndonesia/080206/11', 0, 0, 0, 0, 0),
('Non/YayasanSafaMarwah/270406/50', 0, 0, 0, 0, 0),
('Non/YayasanSaranaSatwaRagunan/281205/3', 0, 0, 0, 0, 0),
('Non/YayasanTugasku/111104/1', 0, 0, 0, 0, 0),
('Non/YayasanTunasMuda/100304/1', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id` char(40) NOT NULL,
  `namakelurahan` char(80) NOT NULL,
  `namakecamatan` char(40) NOT NULL,
  `wilayah` char(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `namakelurahan`, `namakecamatan`, `wilayah`) VALUES
('3101011001', 'Pulau Panggang', 'Kepulauan Seribu Utara', 'Kepulauan Seribu'),
('3101011002', 'Pulau Kelapa', 'Kepulauan Seribu Utara', 'Kepulauan Seribu'),
('3101011003', 'Pulau Harapan', 'Kepulauan Seribu Utara', 'Kepulauan Seribu'),
('3101021001', 'Pulau Tidung', 'Kepulauan Seribu Selatan', 'Kepulauan Seribu'),
('3101021002', 'Pulau Pari', 'Kepulauan Seribu Selatan', 'Kepulauan Seribu'),
('3101021003', 'Pulau Untung Jawa', 'Kepulauan Seribu Selatan', 'Kepulauan Seribu'),
('3171011001', 'Gambir', 'Gambir', 'Jakarta Pusat'),
('3171011002', 'Cideng', 'Gambir', 'Jakarta Pusat'),
('3171011003', 'Petojo Utara', 'Gambir', 'Jakarta Pusat'),
('3171011004', 'Petojo Selatan', 'Gambir', 'Jakarta Pusat'),
('3171011005', 'Kebon Kelapa', 'Gambir', 'Jakarta Pusat'),
('3171011006', 'Duri Pulo', 'Gambir', 'Jakarta Pusat'),
('3171021001', 'Pasar Baru', 'Sawah Besar', 'Jakarta Pusat'),
('3171021002', 'Karang Anyar', 'Sawah Besar', 'Jakarta Pusat'),
('3171021003', 'Kartini', 'Sawah Besar', 'Jakarta Pusat'),
('3171021004', 'Gunung Sahari Utara', 'Sawah Besar', 'Jakarta Pusat'),
('3171021005', 'Mangga Dua Selatan', 'Sawah Besar', 'Jakarta Pusat'),
('3171031001', 'Kemayoran', 'Kemayoran', 'Jakarta Pusat'),
('3171031002', 'Kebon Kosong', 'Kemayoran', 'Jakarta Pusat'),
('3171031003', 'Harapan Mulia', 'Kemayoran', 'Jakarta Pusat'),
('3171031004', 'Serdang', 'Kemayoran', 'Jakarta Pusat'),
('3171031005', 'Gunung Sahari Selatan', 'Kemayoran', 'Jakarta Pusat'),
('3171031006', 'Cempaka Baru', 'Kemayoran', 'Jakarta Pusat'),
('3171031007', 'Sumur Batu', 'Kemayoran', 'Jakarta Pusat'),
('3171031008', 'Utan Panjang', 'Kemayoran', 'Jakarta Pusat'),
('3171041001', 'Senen', 'Senen', 'Jakarta Pusat'),
('3171041002', 'Kenari', 'Senen', 'Jakarta Pusat'),
('3171041003', 'Paseban', 'Senen', 'Jakarta Pusat'),
('3171041004', 'Kramat', 'Senen', 'Jakarta Pusat'),
('3171041005', 'Kwitang', 'Senen', 'Jakarta Pusat'),
('3171041006', 'Bungur', 'Senen', 'Jakarta Pusat'),
('3171051001', 'Cempaka Putih Timur', 'Cempaka Putih', 'Jakarta Pusat'),
('3171051002', 'Cempaka Putih Barat', 'Cempaka Putih', 'Jakarta Pusat'),
('3171051003', 'Rawasari', 'Cempaka Putih', 'Jakarta Pusat'),
('3171061001', 'Menteng', 'Menteng', 'Jakarta Pusat'),
('3171061002', 'Pegangsaan', 'Menteng', 'Jakarta Pusat'),
('3171061003', 'Cikini', 'Menteng', 'Jakarta Pusat'),
('3171061004', 'Gondangdia', 'Menteng', 'Jakarta Pusat'),
('3171061005', 'Kebon Sirih', 'Menteng', 'Jakarta Pusat'),
('3171071001', 'Gelora', 'Tanah Abang', 'Jakarta Pusat'),
('3171071002', 'Bendungan Hilir', 'Tanah Abang', 'Jakarta Pusat'),
('3171071003', 'Karet Tengsin', 'Tanah Abang', 'Jakarta Pusat'),
('3171071004', 'Petamburan', 'Tanah Abang', 'Jakarta Pusat'),
('3171071005', 'Kebon Melati', 'Tanah Abang', 'Jakarta Pusat'),
('3171071006', 'Kebon Kacang', 'Tanah Abang', 'Jakarta Pusat'),
('3171071007', 'Kampung Bali', 'Tanah Abang', 'Jakarta Pusat'),
('3171081001', 'Johar Baru', 'Johar Baru', 'Jakarta Pusat'),
('3171081002', 'Kampung Rawa', 'Johar Baru', 'Jakarta Pusat'),
('3171081003', 'Galur', 'Johar Baru', 'Jakarta Pusat'),
('3171081004', 'Tanah Tinggi', 'Johar Baru', 'Jakarta Pusat'),
('3172011001', 'Penjaringan', 'Penjaringan', 'Jakarta Utara'),
('3172011002', 'Kamal Muara', 'Penjaringan', 'Jakarta Utara'),
('3172011003', 'Penjaringan', 'Penjaringan', 'Jakarta Utara'),
('3172011004', 'Pejagalan', 'Penjaringan', 'Jakarta Utara'),
('3172011005', 'Pluit', 'Penjaringan', 'Jakarta Utara'),
('3172021001', 'Tanjung Priok', 'Tanjung Priok', 'Jakarta Utara'),
('3172021002', 'Sunter Jaya', 'Tanjung Priok', 'Jakarta Utara'),
('3172021003', 'Papanggo', 'Tanjung Priok', 'Jakarta Utara'),
('3172021004', 'Sungai Bambu', 'Tanjung Priok', 'Jakarta Utara'),
('3172021005', 'Kebon Bawang', 'Tanjung Priok', 'Jakarta Utara'),
('3172021006', 'Sunter Agung', 'Tanjung Priok', 'Jakarta Utara'),
('3172021007', 'Warakas', 'Tanjung Priok', 'Jakarta Utara'),
('3172031001', 'Koja', 'Koja', 'Jakarta Utara'),
('3172031002', 'Koja', 'Tugu Utara', 'Jakarta Utara'),
('3172031003', 'Koja', 'Lagoa', 'Jakarta Utara'),
('3172031004', 'Koja', 'Rawa Badak Utara', 'Jakarta Utara'),
('3172031005', 'Koja', 'Tugu Selatan', 'Jakarta Utara'),
('3172031006', 'Koja', 'Rawa Badak Selatan', 'Jakarta Utara'),
('3172041001', 'Cilincing', 'Cilincing', 'Jakarta Utara'),
('3172041002', 'Sukapura', 'Cilincing', 'Jakarta Utara'),
('3172041003', 'Marunda', 'Cilincing', 'Jakarta Utara'),
('3172041004', 'Kalibaru', 'Cilincing', 'Jakarta Utara'),
('3172041005', 'Semper Timur', 'Cilincing', 'Jakarta Utara'),
('3172041006', 'Rorotan', 'Cilincing', 'Jakarta Utara'),
('3172041007', 'Semper Barat', 'Cilincing', 'Jakarta Utara'),
('3172051001', 'Pademangan Timur', 'Pademangan', 'Jakarta Utara'),
('3172051002', 'Pademangan Barat', 'Pademangan', 'Jakarta Utara'),
('3172051003', 'Ancol', 'Pademangan', 'Jakarta Utara'),
('3172061001', 'Kelapa Gading Timur', 'Kelapa Gading', 'Jakarta Utara'),
('3172061002', 'Pegangsaan Dua', 'Kelapa Gading', 'Jakarta Utara'),
('3172061003', 'Kelapa Gading Barat', 'Kelapa Gading', 'Jakarta Utara'),
('3173011001', 'Cengkareng Barat', 'Cengkareng', 'Jakarta Barat'),
('3173011002', 'Duri Kosambi', 'Cengkareng', 'Jakarta Barat'),
('3173011003', 'Rawa Buaya', 'Cengkareng', 'Jakarta Barat'),
('3173011004', 'Kedaung Kaliangke', 'Cengkareng', 'Jakarta Barat'),
('3173011005', 'Kapuk', 'Cengkareng', 'Jakarta Barat'),
('3173011006', 'Cengkareng Timur', 'Cengkareng', 'Jakarta Barat'),
('3173021001', 'Grogol', 'Grogol Petamburan', 'Jakarta Barat'),
('3173021002', 'Tanjung Duren Utara', 'Grogol Petamburan', 'Jakarta Barat'),
('3173021003', 'Tomang', 'Grogol Petamburan', 'Jakarta Barat'),
('3173021004', 'Jelambar', 'Grogol Petamburan', 'Jakarta Barat'),
('3173021005', 'Tanjung Duren Selatan', 'Grogol Petamburan', 'Jakarta Barat'),
('3173021006', 'Jelambar Baru', 'Grogol Petamburan', 'Jakarta Barat'),
('3173021007', 'Wijaya Kusumah', 'Grogol Petamburan', 'Jakarta Barat'),
('3173031001', 'Taman Sari', 'Taman Sari', 'Jakarta Barat'),
('3173031002', 'Krukut', 'Taman Sari', 'Jakarta Barat'),
('3173031003', 'Maphar', 'Taman Sari', 'Jakarta Barat'),
('3173031004', 'Tangki', 'Taman Sari', 'Jakarta Barat'),
('3173031005', 'Mangga Besar', 'Taman Sari', 'Jakarta Barat'),
('3173031006', 'Keagungan', 'Taman Sari', 'Jakarta Barat'),
('3173031007', 'Glodok', 'Taman Sari', 'Jakarta Barat'),
('3173031008', 'Pinangsia', 'Taman Sari', 'Jakarta Barat'),
('3173041001', 'Tambora', 'Tambora', 'Jakarta Barat'),
('3173041002', 'Kali Anyar', 'Tambora', 'Jakarta Barat'),
('3173041003', 'Duri Utara', 'Tambora', 'Jakarta Barat'),
('3173041004', 'Tanah Sereal', 'Tambora', 'Jakarta Barat'),
('3173041005', 'Krendang', 'Tambora', 'Jakarta Barat'),
('3173041006', 'Jembatan Besi', 'Tambora', 'Jakarta Barat'),
('3173041007', 'Angke', 'Tambora', 'Jakarta Barat'),
('3173041008', 'Jembatan Lima', 'Tambora', 'Jakarta Barat'),
('3173041009', 'Pekojan', 'Tambora', 'Jakarta Barat'),
('3173041010', 'Roa Malaka', 'Tambora', 'Jakarta Barat'),
('3173041011', 'Duri Selatan', 'Tambora', 'Jakarta Barat'),
('3173051001', 'Kebon Jeruk', 'Kebon Jeruk', 'Jakarta Barat'),
('3173051002', 'Sukabumi Utara', 'Kebon Jeruk', 'Jakarta Barat'),
('3173051003', 'Sukabumi Selatan', 'Kebon Jeruk', 'Jakarta Barat'),
('3173051004', 'Kelapa Dua', 'Kebon Jeruk', 'Jakarta Barat'),
('3173051005', 'Duri Kepa', 'Kebon Jeruk', 'Jakarta Barat'),
('3173051006', 'Kedoya Utara', 'Kebon Jeruk', 'Jakarta Barat'),
('3173051007', 'Kedoya Selatan', 'Kebon Jeruk', 'Jakarta Barat'),
('3173061001', 'Kalideres', 'Kalideres', 'Jakarta Barat'),
('3173061002', 'Semanan', 'Kalideres', 'Jakarta Barat'),
('3173061003', 'Tegal Alur', 'Kalideres', 'Jakarta Barat'),
('3173061004', 'Kamal', 'Kalideres', 'Jakarta Barat'),
('3173061005', 'Pegadungan', 'Kalideres', 'Jakarta Barat'),
('3173071001', 'Palmerah', ' Palmerah', 'Jakarta Barat'),
('3173071002', 'Slipi', ' Palmerah', 'Jakarta Barat'),
('3173071003', 'Kota Bambu Utara', ' Palmerah', 'Jakarta Barat'),
('3173071004', 'Jatipulo', ' Palmerah', 'Jakarta Barat'),
('3173071005', 'Kemanggisan', ' Palmerah', 'Jakarta Barat'),
('3173071006', 'Kota Bambu Selatan', ' Palmerah', 'Jakarta Barat'),
('3173081001', 'Kembangan Utara', 'Kembangan', 'Jakarta Barat'),
('3173081002', 'Meruya Utara', 'Kembangan', 'Jakarta Barat'),
('3173081003', 'Meruya Selatan', 'Kembangan', 'Jakarta Barat'),
('3173081004', 'Srengseng', 'Kembangan', 'Jakarta Barat'),
('3173081005', 'Joglo', 'Kembangan', 'Jakarta Barat'),
('3173081006', 'Kembangan Selatan', 'Kembangan', 'Jakarta Barat'),
('3174011001', 'Tebet Timur', 'Tebet', 'Jakarta Selatan'),
('3174011002', 'Tebet Barat', 'Tebet', 'Jakarta Selatan'),
('3174011003', 'Menteng Dalam', 'Tebet', 'Jakarta Selatan'),
('3174011004', 'Kebon Baru', 'Tebet', 'Jakarta Selatan'),
('3174011005', 'Bukit Duri', 'Tebet', 'Jakarta Selatan'),
('3174011006', 'Manggarai Selatan', ' Tebet', 'Jakarta Selatan'),
('3174011007', 'Manggarai', 'Tebet', 'Jakarta Selatan'),
('3174021001', 'Setiabudi', 'Setiabudi', 'Jakarta Selatan'),
('3174021002', 'Karet Semanggi', 'Setiabudi', 'Jakarta Selatan'),
('3174021003', 'Karet Kuningan', 'Setiabudi', 'Jakarta Selatan'),
('3174021004', 'Karet', 'Setiabudi', 'Jakarta Selatan'),
('3174021005', 'Menteng Atas', 'Setiabudi', 'Jakarta Selatan'),
('3174021006', 'Pasar Manggis', 'Setiabudi', 'Jakarta Selatan'),
('3174021007', 'Guntur', 'Setiabudi', 'Jakarta Selatan'),
('3174021008', 'Kuningan Timur', 'Setiabudi', 'Jakarta Selatan'),
('3174031001', 'Mampang Prapatan', 'Mampang Prapatan', 'Jakarta Selatan'),
('3174031002', 'Bangka', 'Mampang Prapatan', 'Jakarta Selatan'),
('3174031003', 'Pela Mampang', 'Mampang Prapatan', 'Jakarta Selatan'),
('3174031004', 'Tegal Parang', 'Mampang Prapatan', 'Jakarta Selatan'),
('3174031005', 'Kuningan Barat', 'Mampang Prapatan', 'Jakarta Selatan'),
('3174041001', 'Pasar Minggu', 'Pasar Minggu', 'Jakarta Selatan'),
('3174041002', 'Jatipadang', 'Pasar Minggu', 'Jakarta Selatan'),
('3174041003', 'Cilandak Timur', 'Pasar Minggu', 'Jakarta Selatan'),
('3174041004', 'Ragunan', 'Pasar Minggu', 'Jakarta Selatan'),
('3174041005', 'Pejaten Timur', 'Pasar Minggu', 'Jakarta Selatan'),
('3174041006', 'Pejaten Barat', 'Pasar Minggu', 'Jakarta Selatan'),
('3174041007', ' Kebagusan', 'Pasar Minggu', 'Jakarta Selatan'),
('3174051001', 'Kebayoran Lama Utara', 'Kebayoran Lama', 'Jakarta Selatan'),
('3174051002', 'Pondok Pinang', 'Kebayoran Lama', 'Jakarta Selatan'),
('3174051003', 'Cipulir', 'Kebayoran Lama', 'Jakarta Selatan'),
('3174051004', 'Grogol Utara', 'Kebayoran Lama', 'Jakarta Selatan'),
('3174051005', 'Grogol Selatan', 'Kebayoran Lama', 'Jakarta Selatan'),
('3174051006', 'Kebayoran Lama', 'Kebayoran Lama', 'Jakarta Selatan'),
('3174061001', 'Cilandak Barat', 'Cilandak', 'Jakarta Selatan'),
('3174061002', 'Lebak Bulus', 'Cilandak', 'Jakarta Selatan'),
('3174061003', 'Pondok Labu', 'Cilandak', 'Jakarta Selatan'),
('3174061004', 'Gandaria Selatan', 'Cilandak', 'Jakarta Selatan'),
('3174061005', 'Cipete Selatan', 'Cilandak', 'Jakarta Selatan'),
('3174071001', 'Melawai', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071002', 'Gunung', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071003', 'Kramat Pela', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071004', 'Selong', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071005', 'Rawa Barat', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071006', 'Senayan', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071007', 'Pulo', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071008', 'Petogogan', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071009', 'Gandaria Utara', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174071010', 'Cipete Utara', 'Kebayoran Baru', 'Jakarta Selatan'),
('3174081001', 'Pancoran', 'Pancoran', 'Jakarta Selatan'),
('3174081002', 'Kalibata', 'Pancoran', 'Jakarta Selatan'),
('3174081003', 'Rawajati', 'Pancoran', 'Jakarta Selatan'),
('3174081004', 'Duren Tiga', 'Pancoran', 'Jakarta Selatan'),
('3174081005', 'Pengadegan', 'Pancoran', 'Jakarta Selatan'),
('3174081006', 'Cikoko', 'Pancoran', 'Jakarta Selatan'),
('3174091001', 'Jagakarsa', 'Jagakarsa', 'Jakarta Selatan'),
('3174091002', 'Srengseng Sawah', 'Jagakarsa', 'Jakarta Selatan'),
('3174091003', 'Ciganjur', 'Jagakarsa', 'Jakarta Selatan'),
('3174091004', 'Lenteng Agung', 'Jagakarsa', 'Jakarta Selatan'),
('3174091005', 'Tanjung Barat', 'Jagakarsa', 'Jakarta Selatan'),
('3174091006', 'Cipedak', 'Jagakarsa', 'Jakarta Selatan'),
('3174101001', 'Jagakarsa', 'Pesanggrahan', 'Jakarta Selatan'),
('3174101002', 'Bintaro', 'Pesanggrahan', 'Jakarta Selatan'),
('3174101003', 'Petukangan Utara', 'Pesanggrahan', 'Jakarta Selatan'),
('3174101004', 'Petukangan Selatan', 'Pesanggrahan', 'Jakarta Selatan'),
('3174101005', 'Ulujami', 'Pesanggrahan', 'Jakarta Selatan'),
('3175011001', 'Pisangan Baru', 'Matraman', 'Jakarta Timur'),
('3175011002', 'Utan Kayu Utara', 'Matraman', 'Jakarta Timur'),
('3175011003', 'Kayu Manis', 'Matraman', 'Jakarta Timur'),
('3175011004', 'Palmeriam', 'Matraman', 'Jakarta Timur'),
('3175011005', 'Kebon Manggis', 'Matraman', 'Jakarta Timur'),
('3175011006', 'Utan Kayu Selatan', 'Matraman', 'Jakarta Timur'),
('3175021001', 'Pulogadung', 'Pulogadung', 'Jakarta Timur'),
('3175021002', 'Pisangan Timur', 'Pulogadung', 'Jakarta Timur'),
('3175021003', 'Cipinang', 'Pulogadung', 'Jakarta Timur'),
('3175021004', 'Jatinegara Kaum', 'Pulogadung', 'Jakarta Timur'),
('3175021005', 'Rawamangun', 'Pulogadung', 'Jakarta Timur'),
('3175021006', ' Kayu Putih', 'Pulogadung', 'Jakarta Timur'),
('3175021007', 'Jati', 'Pulogadung', 'Jakarta Timur'),
('3175031001', 'Kampung Melayu', 'Jatinegara', 'Jakarta Timur'),
('3175031002', 'Bidaracina', 'Jatinegara', 'Jakarta Timur'),
('3175031003', 'Balimester', 'Jatinegara', 'Jakarta Timur'),
('3175031004', 'Rawa Bunga', 'Jatinegara', 'Jakarta Timur'),
('3175031005', 'Cipinang Cempedak', 'Jatinegara', 'Jakarta Timur'),
('3175031006', 'Cipinang Muara', 'Jatinegara', 'Jakarta Timur'),
('3175031007', 'Cipinang Besar Selatan', 'Jatinegara', 'Jakarta Timur'),
('3175031008', 'Cipinang Besar Utara', 'Jatinegara', 'Jakarta Timur'),
('3175041001', 'Kramatjati', 'Kramatjati', 'Jakarta Timur'),
('3175041002', 'Kampung Tengah', 'Kramatjati', 'Jakarta Timur'),
('3175041003', 'Dukuh', 'Kramatjati', 'Jakarta Timur'),
('3175041004', 'Batuampar', 'Kramatjati', 'Jakarta Timur'),
('3175041005', 'Balekambang', 'Kramatjati', 'Jakarta Timur'),
('3175041006', 'Cililitan', 'Kramatjati', 'Jakarta Timur'),
('3175041007', 'Cawang', 'Kramatjati', 'Jakarta Timur'),
('3175051001', 'Pekayon', 'Pasar Rebo', 'Jakarta Timur'),
('3175051002', 'Kalisari', 'Pasar Rebo', 'Jakarta Timur'),
('3175051003', 'Baru', 'Pasar Rebo', 'Jakarta Timur'),
('3175051004', 'Cijantung', 'Pasar Rebo', 'Jakarta Timur'),
('3175051005', 'Gedong', 'Pasar Rebo', 'Jakarta Timur'),
('3175061001', 'Cakung Timur', 'Cakung', 'Jakarta Timur'),
('3175061002', 'Jatinegara', 'Cakung', 'Jakarta Timur'),
('3175061003', 'Rawaterate', 'Cakung', 'Jakarta Timur'),
('3175061004', 'Penggilingan', 'Cakung', 'Jakarta Timur'),
('3175061005', 'Pulogebang', 'Cakung', 'Jakarta Timur'),
('3175061006', 'Ujung Menteng', 'Cakung', 'Jakarta Timur'),
('3175061007', 'Cakung Barat', 'Cakung', 'Jakarta Timur'),
('3175071001', 'Duren Sawit', 'Duren Sawit', 'Jakarta Timur'),
('3175071002', 'Pondok Bambu', 'Duren Sawit', 'Jakarta Timur'),
('3175071003', 'Klender', 'Duren Sawit', 'Jakarta Timur'),
('3175071004', 'Pondok Kelapa', 'Duren Sawit', 'Jakarta Timur'),
('3175071005', 'Malaka Sari', 'Duren Sawit', 'Jakarta Timur'),
('3175071006', 'Malaka Jaya', 'Duren Sawit', 'Jakarta Timur'),
('3175071007', 'Pondok Kopi', 'Duren Sawit', 'Jakarta Timur'),
('3175081001', 'Makasar', 'Makasar', 'Jakarta Timur'),
('3175081002', 'Pinangranti', 'Makasar', 'Jakarta Timur'),
('3175081003', 'Kebon Pala', 'Makasar', 'Jakarta Timur'),
('3175081004', 'Halim Perdana Kusuma', 'Makasar', 'Jakarta Timur'),
('3175081005', 'Cipinang Melayu', 'Makasar', 'Jakarta Timur'),
('3175091001', 'Ciracas', 'Ciracas', 'Jakarta Timur'),
('3175091002', 'Cibubur', 'Ciracas', 'Jakarta Timur'),
('3175091003', 'Kelapa Dua Wetan', 'Ciracas', 'Jakarta Timur'),
('3175091004', 'Susukan', 'Ciracas', 'Jakarta Timur'),
('3175091005', 'Rambutan', 'Ciracas', 'Jakarta Timur'),
('3175101001', 'Cipayung', 'Cipayung', 'Jakarta Timur'),
('3175101002', 'Cilangkap', 'Cipayung', 'Jakarta Timur'),
('3175101003', 'Pondok Ranggon', 'Cipayung', 'Jakarta Timur'),
('3175101004', 'Munjul', 'Cipayung', 'Jakarta Timur'),
('3175101005', 'Setu', 'Cipayung', 'Jakarta Timur'),
('3175101006', 'Bambu Apus', 'Cipayung', 'Jakarta Timur'),
('3175101007', 'Lubang Buaya', 'Cipayung', 'Jakarta Timur'),
('3175101008', 'Ceger', 'Cipayung', 'Jakarta Timur');

-- --------------------------------------------------------

--
-- Table structure for table `lokasidokumen`
--

CREATE TABLE IF NOT EXISTS `lokasidokumen` (
  `nobastlokasi` char(80) NOT NULL,
  `pulomas` int(1) NOT NULL,
  `rekon163` int(1) NOT NULL,
  `rekon54` int(1) NOT NULL,
  `rekon129` int(1) NOT NULL,
  `rekon101` int(1) NOT NULL,
  `balaikota` int(1) NOT NULL,
  `dtr` int(1) NOT NULL,
  `tp3w` int(1) NOT NULL,
  `lokasi58` int(1) NOT NULL,
  `bpk357` int(1) NOT NULL,
  `mutasi` int(1) NOT NULL,
  `kel90` int(1) NOT NULL,
  PRIMARY KEY (`nobastlokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasidokumen`
--

INSERT INTO `lokasidokumen` (`nobastlokasi`, `pulomas`, `rekon163`, `rekon54`, `rekon129`, `rekon101`, `balaikota`, `dtr`, `tp3w`, `lokasi58`, `bpk357`, `mutasi`, `kel90`) VALUES
('1410/-077.523', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('6536/077.73', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('Non/AnekaElok/120706/19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('Non/Jamsostek/080205/7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('Non/MediaIndraBuana/070109/18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penjelasan`
--

CREATE TABLE IF NOT EXISTS `penjelasan` (
  `nobast` varchar(100) NOT NULL,
  `detailpenjelasan` longtext NOT NULL,
  PRIMARY KEY (`nobast`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjelasan`
--

INSERT INTO `penjelasan` (`nobast`, `detailpenjelasan`) VALUES
('1410/-077.523', '-  Penyerahan kewajiban merupakan sumbangan murni dari PT. Mandara Permai\r\n- Peruntukan tersebut diterma oleh Pemerintah Pusat\r\n- Peruntukan tersebut terletak pada lokasi sepanjang jalan Tol Sedyatmo (menuju bandara Soe-Ta), dalam mengantisipasi banjir yang terjadi di lokasi tsb.'),
('6536/077.73', '- BAST merupakan serah terima pengelolaan penyerahan kembali atas kepemilikan, penggunaan dan pengelolaan tanah, dan bangunan eks Puskesmas Yarsi Milik Pemprov DKI Jakarta yang selama ini dikelola oleh Yayasan Yarsi.\r\n- Perubahan KIB A menjadi KIB C pada peruntukan bangunan eks Puskesmas.\r\n- Dilakukan pengurangan 4 peruntukan dikarenakan double input. '),
('Non/AnekaElok/120706/19', '- BAST merupakan Berita Acara Penelitian Fisik (BAPF) yang merupakan syarat dalam pembuatan Berita Acara Serah Terima Sementara maupun definitif. '),
('Non/Jamsostek/080205/7', '- Penyerahan merupakan sumbangan dari PT. Jamsostek dalam hal penanggulangan nyamuk demam berdarah dan penanggulangan kecelakaan kerja peserta Jamsostek serta klinik bersalin.\r\n- Perubahan KIB E menjadi KIB B pada peruntukan mobil ambulance.\r\n- Lokasi ambulance berada di beberapa wilayah Puskesmas di DKI Jakarta.'),
('Non/MediaIndraBuana/070109/18', '- Penyerahan merupakan realisasi PKS antara Pemprov DKI dengan PT. Media Indra Buana.');

-- --------------------------------------------------------

--
-- Table structure for table `peruntukan`
--

CREATE TABLE IF NOT EXISTS `peruntukan` (
  `idperuntukan` int(15) NOT NULL AUTO_INCREMENT,
  `deskripsi` char(100) NOT NULL,
  `jenis` char(40) NOT NULL,
  `luas` double NOT NULL,
  `nokrk` char(20) NOT NULL,
  `noimb` char(40) NOT NULL,
  `noblokplan` char(80) NOT NULL,
  `sertifikasi` char(30) NOT NULL,
  `pemilik` char(80) NOT NULL,
  `jenissertifikat` char(20) NOT NULL,
  `nosertifikat` char(30) NOT NULL,
  `masaberlaku` char(10) NOT NULL,
  `luassertifikat` double NOT NULL,
  `keterangan` char(255) NOT NULL,
  `nobast` char(60) NOT NULL,
  `idaset` char(80) NOT NULL,
  PRIMARY KEY (`idperuntukan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `peruntukan`
--

INSERT INTO `peruntukan` (`idperuntukan`, `deskripsi`, `jenis`, `luas`, `nokrk`, `noimb`, `noblokplan`, `sertifikasi`, `pemilik`, `jenissertifikat`, `nosertifikat`, `masaberlaku`, `luassertifikat`, `keterangan`, `nobast`, `idaset`) VALUES
(1, 'Tanah Eks Puskesmas Yars', 'Tanah', 300, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1'),
(2, 'Bangunan Eks Puskesmas Yarsi', 'Tanah', 217, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1'),
(3, 'Pompa Portable Indobora Movable Pump Model Tipe IBB-Modis-MP05Q', 'Non-Tanah', 7, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '1410/-077.523', '2'),
(4, 'Tanah Jalan', 'Tanah', 77481, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(5, 'Tanah Saluran', 'Tanah', 12232, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(6, 'Lahan Jalur Hijau', 'Tanah', 3150, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(7, 'Penerangan Lampu Jalan', 'Non-Tanah', 139, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(8, 'Lahan Taman Blok P2', 'Tanah', 564, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(9, 'Lahan Taman Blok T2', 'Tanah', 539, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(10, 'Lahan Taman Blok Q2', 'Tanah', 600, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(11, 'Lahan Taman Blok Q3', 'Tanah', 381, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(12, 'Lahan Taman Blok U2', 'Tanah', 528, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(13, 'Lahan Taman Blok W2', 'Tanah', 446, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(14, 'Lahan Taman Blok R3', 'Tanah', 440, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(15, 'Lahan Taman Blok M2', 'Tanah', 450, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(16, 'Lahan TK BLok Q2', 'Tanah', 600, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(17, 'Lahan SPU dan SSK Blok Q2', 'Tanah', 1200, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(18, 'Lahan SD Blok V2', 'Tanah', 3200, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(19, 'Lahan SLP Blok V2', 'Tanah', 2600, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(20, 'Lahan SSB Blok V2', 'Tanah', 625, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(21, 'Lahan SSI Blok V2', 'Tanah', 625, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(22, 'Lahan SRO Blok V2', 'Tanah', 4234, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(23, 'Alat Fogging', 'Non-Tanah', 60, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(24, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Cengkareng', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(25, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Tarakan', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(26, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Pasar Rebo', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(27, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Koja', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(28, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin Puskesmas Tanjung Priok', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(29, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin Puskesmas Penjaringan', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(30, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Kramat Bunder Senen', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(31, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Gunung Sahari', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(32, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Hasyim Ashari', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(33, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Salemba Raya', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(34, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Raya Pasar Jumat', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(35, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan MT Haryono', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(36, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Sisingamaharaja', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(37, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Pangeran Antasar', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(38, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Lenteng Agung', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(39, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Jend. S Parman', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(40, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Jend. S Parman Simpang Grogo', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(41, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Jend. S Parman Simpang Slipi', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(42, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Pluit Selatan', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(43, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan A Yani', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(44, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Mayjen Sutoyo UK', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(45, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Kalimalang', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(46, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Pusdika Cibubur', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(47, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Raya Taman Min', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5');

-- --------------------------------------------------------

--
-- Table structure for table `peruntukanhistory`
--

CREATE TABLE IF NOT EXISTS `peruntukanhistory` (
  `idperuntukan` int(15) NOT NULL AUTO_INCREMENT,
  `deskripsi` char(100) NOT NULL,
  `jenis` char(40) NOT NULL,
  `luas` double NOT NULL,
  `nokrk` char(20) NOT NULL,
  `noimb` char(40) NOT NULL,
  `noblokplan` char(80) NOT NULL,
  `sertifikasi` char(30) NOT NULL,
  `pemilik` char(80) NOT NULL,
  `jenissertifikat` char(20) NOT NULL,
  `nosertifikat` char(30) NOT NULL,
  `masaberlaku` char(10) NOT NULL,
  `luassertifikat` double NOT NULL,
  `keterangan` char(255) NOT NULL,
  `nobast` char(60) NOT NULL,
  `idaset` char(80) NOT NULL,
  PRIMARY KEY (`idperuntukan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `peruntukanhistory`
--

INSERT INTO `peruntukanhistory` (`idperuntukan`, `deskripsi`, `jenis`, `luas`, `nokrk`, `noimb`, `noblokplan`, `sertifikasi`, `pemilik`, `jenissertifikat`, `nosertifikat`, `masaberlaku`, `luassertifikat`, `keterangan`, `nobast`, `idaset`) VALUES
(1, 'Tanah Eks Puskesmas Yars', 'Tanah', 300, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1'),
(2, 'Bangunan Eks Puskesmas Yarsi', 'Tanah', 217, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1'),
(3, 'Pompa Portable Indobora Movable Pump Model Tipe IBB-Modis-MP05Q', 'Non-Tanah', 7, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '1410/-077.523', '2'),
(4, 'Tanah Jalan', 'Tanah', 77481, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(5, 'Tanah Saluran', 'Tanah', 12232, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(6, 'Lahan Jalur Hijau', 'Tanah', 3150, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(7, 'Penerangan Lampu Jalan', 'Non-Tanah', 139, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(8, 'Lahan Taman Blok P2', 'Tanah', 564, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(9, 'Lahan Taman Blok T2', 'Tanah', 539, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(10, 'Lahan Taman Blok Q2', 'Tanah', 600, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(11, 'Lahan Taman Blok Q3', 'Tanah', 381, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(12, 'Lahan Taman Blok U2', 'Tanah', 528, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(13, 'Lahan Taman Blok W2', 'Tanah', 446, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(14, 'Lahan Taman Blok R3', 'Tanah', 440, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(15, 'Lahan Taman Blok M2', 'Tanah', 450, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(16, 'Lahan TK BLok Q2', 'Tanah', 600, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(17, 'Lahan SPU dan SSK Blok Q2', 'Tanah', 1200, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(18, 'Lahan SD Blok V2', 'Tanah', 3200, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(19, 'Lahan SLP Blok V2', 'Tanah', 2600, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(20, 'Lahan SSB Blok V2', 'Tanah', 625, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(21, 'Lahan SSI Blok V2', 'Tanah', 625, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(22, 'Lahan SRO Blok V2', 'Tanah', 4234, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/AnekaElok/120706/19', '3'),
(23, 'Alat Fogging', 'Non-Tanah', 60, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(24, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Cengkareng', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(25, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Tarakan', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(26, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Pasar Rebo', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(27, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin RSUD Koja', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(28, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin Puskesmas Tanjung Priok', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(29, 'Mobil Ambulance Trauma Centre dan Klinik Bersalin Puskesmas Penjaringan', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/Jamsostek/080205/7', '4'),
(30, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Kramat Bunder Senen', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(31, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Gunung Sahari', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(32, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Hasyim Ashari', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(33, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Salemba Raya', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(34, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Raya Pasar Jumat', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(35, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan MT Haryono', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(36, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Sisingamaharaja', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(37, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Pangeran Antasar', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(38, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Lenteng Agung', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(39, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Jend. S Parman', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(40, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Jend. S Parman Simpang Grogo', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(41, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Jend. S Parman Simpang Slipi', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(42, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Pluit Selatan', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(43, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan A Yani', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(44, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Mayjen Sutoyo UK', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(45, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Kalimalang', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(46, 'Bangunan Pos Penjagaan Polisi Ukuran 3 X 4 Jalan Pusdika Cibubur', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(47, 'Bangunan Pos Penjagaan Polisi Ukuran 2 X 3 Jalan Raya Taman Min', 'Non-Tanah', 1, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', 'Non/MediaIndraBuana/070109/18', '5'),
(48, 'Puskesmas', 'Non-Tanah', 300, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1'),
(49, 'Puskesmas', 'Non-Tanah', 300, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1'),
(50, 'Puskesmas', 'Non-Tanah', 217, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1'),
(51, 'Puskesmas', 'Non-Tanah', 217, '', '', '', 'Non-Sertifikat', '', 'Non-Sertifikat', '', '', 0, '', '6536/077.73', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE IF NOT EXISTS `wilayah` (
  `idwilayah` int(4) NOT NULL,
  `wilayah` char(40) NOT NULL,
  PRIMARY KEY (`idwilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`idwilayah`, `wilayah`) VALUES
(1, 'Kepulauan Seribu'),
(2, 'Jakarta Pusat'),
(3, 'Jakarta Utara'),
(4, 'Jakarta Barat'),
(5, 'Jakarta Selatan'),
(6, 'Jakarta Timur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
