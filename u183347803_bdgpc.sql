
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2014 at 08:07 PM
-- Server version: 5.1.69
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u183347803_bdgpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `Agencias`
--

CREATE TABLE IF NOT EXISTS `Agencias` (
  `idagencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombreagencia` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Regiones_idregion` int(11) NOT NULL,
  PRIMARY KEY (`idagencia`),
  KEY `fk_Agencias_Regiones1_idx` (`Regiones_idregion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Agencias`
--

INSERT INTO `Agencias` (`idagencia`, `nombreagencia`, `Regiones_idregion`) VALUES
(1, 'Alameda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Anios`
--

CREATE TABLE IF NOT EXISTS `Anios` (
  `idanio` int(11) NOT NULL AUTO_INCREMENT,
  `anio` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idanio`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Anios`
--

INSERT INTO `Anios` (`idanio`, `anio`) VALUES
(1, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
  `csaldoinicial` int(11) DEFAULT NULL,
  `cenero` int(11) DEFAULT NULL,
  `cfebrero` int(11) DEFAULT NULL,
  `cmarzo` int(11) DEFAULT NULL,
  `cabril` int(11) DEFAULT NULL,
  `cmayo` int(11) DEFAULT NULL,
  `cjunio` int(11) DEFAULT NULL,
  `cjulio` int(11) DEFAULT NULL,
  `cagosto` int(11) DEFAULT NULL,
  `cseptiembre` int(11) DEFAULT NULL,
  `coctubre` int(11) DEFAULT NULL,
  `cnoviembre` int(11) DEFAULT NULL,
  `cdiciembre` int(11) DEFAULT NULL,
  `Presupuesto_idpresupuesto` int(11) NOT NULL,
  KEY `fk_Clientes_Presupuesto1_idx` (`Presupuesto_idpresupuesto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Montos`
--

CREATE TABLE IF NOT EXISTS `Montos` (
  `msaldoinicial` int(11) DEFAULT NULL COMMENT '	',
  `menero` int(11) DEFAULT NULL,
  `mfebrero` int(11) DEFAULT NULL,
  `mmarzo` int(11) DEFAULT NULL,
  `mabril` int(11) DEFAULT NULL,
  `mmayo` int(11) DEFAULT NULL,
  `mjunio` int(11) DEFAULT NULL,
  `mjulio` int(11) DEFAULT NULL,
  `magosto` int(11) DEFAULT NULL,
  `mseptiembre` int(11) DEFAULT NULL,
  `moctubre` int(11) DEFAULT NULL,
  `mnoviembre` int(11) DEFAULT NULL,
  `mdiciembre` int(11) DEFAULT NULL,
  `Presupuesto_idpresupuesto` int(11) NOT NULL,
  KEY `fk_Montos_Presupuesto1_idx` (`Presupuesto_idpresupuesto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Presupuesto`
--

CREATE TABLE IF NOT EXISTS `Presupuesto` (
  `idpresupuesto` int(11) NOT NULL AUTO_INCREMENT,
  `plazo` int(11) DEFAULT NULL,
  `porcentajederecuperacion` float DEFAULT NULL,
  `Programa_idprograma` int(11) NOT NULL,
  `Usuario_idasesor` int(11) NOT NULL,
  `Tipocliente_idtipocliente` int(11) NOT NULL,
  `Anios_idanio` int(11) NOT NULL,
  PRIMARY KEY (`idpresupuesto`),
  KEY `fk_Presupuesto_Programa_idx` (`Programa_idprograma`),
  KEY `fk_Presupuesto_Usuario1_idx` (`Usuario_idasesor`),
  KEY `fk_Presupuesto_Tipocliente1_idx` (`Tipocliente_idtipocliente`),
  KEY `fk_Presupuesto_Anios1_idx` (`Anios_idanio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Programa`
--

CREATE TABLE IF NOT EXISTS `Programa` (
  `idprograma` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idprograma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Programa`
--

INSERT INTO `Programa` (`idprograma`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `Regiones`
--

CREATE TABLE IF NOT EXISTS `Regiones` (
  `idregion` int(11) NOT NULL AUTO_INCREMENT,
  `nombreregion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idregion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Regiones`
--

INSERT INTO `Regiones` (`idregion`, `nombreregion`) VALUES
(1, 'Chimaltenango');

-- --------------------------------------------------------

--
-- Table structure for table `Tipocliente`
--

CREATE TABLE IF NOT EXISTS `Tipocliente` (
  `idtipocliente` int(11) NOT NULL AUTO_INCREMENT,
  `Tipoclientecol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idtipocliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Tipocliente`
--

INSERT INTO `Tipocliente` (`idtipocliente`, `Tipoclientecol`) VALUES
(1, 'Agricola');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idasesor` int(11) NOT NULL AUTO_INCREMENT,
  `passwordasesor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombresasesor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidosasesor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefonoasesor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Agencias_idagencia` int(11) NOT NULL,
  PRIMARY KEY (`idasesor`),
  KEY `fk_Usuario_Agencias1_idx` (`Agencias_idagencia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`idasesor`, `passwordasesor`, `nombresasesor`, `apellidosasesor`, `telefonoasesor`, `Agencias_idagencia`) VALUES
(1, '64275mtzul', 'mtzul', 'Tzul ', '77663953', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
