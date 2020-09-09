-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Maio-2019 às 01:30
-- Versão do servidor: 5.7.20-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctrlbank`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

DROP TABLE IF EXISTS `cidades`;
CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `uf` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `uf`) VALUES
(1, 'Jaú', 'SP'),
(2, 'Dois Córregos', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_nasc` varchar(15) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `id_cidade` varchar(15) NOT NULL,
  `numero_casa` int(4) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `data_cad` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `data_nasc`, `cpf`, `rg`, `endereco`, `id_cidade`, `numero_casa`, `telefone`, `celular`, `email`, `data_cad`, `status`) VALUES
(1, 'Matheus Vinicius Coelho', '01/01/2001', '45645645614', '123456789', 'Rua tal do tal do tal ', '1', 2546, '1465983214', '1498653214', 'matheus.vinicius@hotmail.com', '2000-01-01', 0),
(2, 'Nicolas Machado', '2001-01-01', '123456789', '123456789', 'asd', '1', 123, '123', '123', '123', '2000-01-01', 0),
(3, 'Nicolas Machado', '11092002', '78978978911', '987654321', 'Rua tal do tal do tal', '1', 147, '35841245', '998653214', 'nicolas.machado@hotmail.com', '2000-01-01', 0),
(4, 'Roberto Justos', '2001-01-01', '36936936955', '987654321', 'Rua tal do tal do tal', '1', 147, '35841245', '998653214', 'roberto.justos@hotmail.com', '2000-01-01', 0),
(5, 'Felipe Cavalcante', '2001-01-01', '95195195195', '951951951', 'Rua Felipe', '1', 951, '123456789', '123456789', 'felipecavalcanteo14@gmail.com', '2000-01-01', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

DROP TABLE IF EXISTS `contas`;
CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_conta` varchar(7) NOT NULL,
  `cartao` varchar(16) NOT NULL,
  `cod_seg` varchar(3) NOT NULL,
  `senha` varchar(6) NOT NULL,
  `saldo` varchar(15) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`id`, `num_conta`, `cartao`, `cod_seg`, `senha`, `saldo`, `id_cliente`) VALUES
(1, '1231230', '1234123412341234', '123', '123456', '1000', 1),
(2, '3213210', '4321432143214321', '321', '258258', '0', 2),
(3, '1471470', '1477147714771477', '147', '147147', '1000000', 4),
(4, '2223330', '9511951195119511', '951', 'fefe10', '250', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `extrato`
--

DROP TABLE IF EXISTS `extrato`;
CREATE TABLE IF NOT EXISTS `extrato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numconta` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `action` varchar(10) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `extrato`
--

INSERT INTO `extrato` (`id`, `numconta`, `message`, `action`, `data`) VALUES
(11, 1471470, '- R$10', 'Subtrair', '2001-01-01'),
(12, 1231230, '+ R$10', 'Somar', '2001-01-01'),
(13, 1231230, '- R$10', 'Subtrair', '2001-01-01'),
(14, 1471470, '+ R$10', 'Somar', '2001-01-01'),
(15, 1231230, '- R$1050', 'Subtrair', '2001-01-01'),
(16, 1471470, '+ R$1050', 'Somar', '2001-01-01'),
(17, 3213210, '- R$3150', 'Subtrair', '2001-01-01'),
(18, 1471470, '+ R$3150', 'Somar', '2001-01-01'),
(19, 1471470, '- R$1000', 'Subtrair', '2001-01-01'),
(20, 1231230, '+ R$1000', 'Somar', '2001-01-01'),
(21, 1471470, '- R$1000', 'Subtrair', '2001-01-01'),
(22, 1231230, '+ R$1000', 'Somar', '2001-01-01'),
(23, 1231230, '- R$2000', 'Subtrair', '2001-01-01'),
(24, 1471470, '+ R$2000', 'Somar', '2001-01-01'),
(25, 1471470, '- R$1000', 'Subtrair', '2001-01-01'),
(26, 1231230, '+ R$1000', 'Somar', '2001-01-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
