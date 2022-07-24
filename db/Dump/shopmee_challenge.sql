-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jul-2022 às 23:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `shopmee_challenge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emailscolected`
--

CREATE TABLE `emailscolected` (
  `idEmailColected` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emailscolected`
--

INSERT INTO `emailscolected` (`idEmailColected`, `email`) VALUES
(9, 'emailNovo@kkk.com'),
(10, 'email@emial.com'),
(11, 'notHotEmail@email.com'),
(13, 'kkkkkkkkkkkkk@email.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emailscolected`
--
ALTER TABLE `emailscolected`
  ADD PRIMARY KEY (`idEmailColected`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emailscolected`
--
ALTER TABLE `emailscolected`
  MODIFY `idEmailColected` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
