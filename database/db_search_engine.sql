-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Mar-2025 às 02:06
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_search_engine`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_register`
--

CREATE TABLE `tb_register` (
  `id` bigint(20) NOT NULL,
  `name` varchar(512) NOT NULL,
  `url` varchar(2048) NOT NULL,
  `description` varchar(512) NOT NULL,
  `site_keys` varchar(1024) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'visible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_register`
--

INSERT INTO `tb_register` (`id`, `name`, `url`, `description`, `site_keys`, `date_create`, `status`) VALUES
(1, 'google', 'https://www.google.com/', 'The Google website is the leading search engine on the internet and one of the most visited websites in the world. It allows users to quickly find information through keyword-based searches.', 'google, sites, websites, world, search, engine, find', '2025-03-09 22:04:53', 'visible');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
