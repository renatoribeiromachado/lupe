-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22-Jun-2022 às 11:02
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `markp728_arcserve`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `leads_acorp`
--

CREATE TABLE `leads_acorp` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  `whatsapp` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `leads_acorp`
--

INSERT INTO `leads_acorp` (`id`, `name`, `last_name`, `email`, `company`, `url`, `message`, `created_at`, `updated_at`, `deleted_at`, `whatsapp`) VALUES
(14, 'natalia', 'gomes', 'natalia@markp.com.br', 'Markp', 'acorp data protection', 'Teste', '2022-06-17', '2022-06-17', '0000-00-00', '21970760646'),
(15, 'cadu', 'teste', 'cadu@markp.com.br', 'MarkP', 'acorp data protection', 'teste123', '2022-06-17', '2022-06-17', '0000-00-00', 'teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `leads_acorp`
--
ALTER TABLE `leads_acorp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `leads_acorp`
--
ALTER TABLE `leads_acorp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
