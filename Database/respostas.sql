-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/02/2025 às 20:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aireadiness`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `questioes` int(11) NOT NULL,
  `resposta` int(11) NOT NULL CHECK (`resposta` between 0 and 3),
  `data_resposta` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `respostas`
--

INSERT INTO `respostas` (`id`, `questioes`, `resposta`, `data_resposta`) VALUES
(12, 1, 1, '2025-02-26 18:57:37'),
(13, 2, 1, '2025-02-26 18:57:37'),
(14, 3, 2, '2025-02-26 18:57:37'),
(15, 4, 1, '2025-02-26 18:57:37'),
(16, 5, 2, '2025-02-26 18:57:37'),
(17, 6, 1, '2025-02-26 18:57:37'),
(18, 7, 2, '2025-02-26 18:57:37'),
(19, 8, 2, '2025-02-26 18:57:37'),
(20, 9, 2, '2025-02-26 18:57:37'),
(21, 10, 2, '2025-02-26 18:57:37'),
(22, 11, 2, '2025-02-26 18:57:37'),
(23, 6, 0, '2025-02-26 19:55:05'),
(24, 7, 0, '2025-02-26 19:55:05'),
(25, 8, 0, '2025-02-26 19:55:05'),
(26, 9, 0, '2025-02-26 19:55:05'),
(27, 10, 0, '2025-02-26 19:55:05'),
(28, 11, 0, '2025-02-26 19:55:05');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
