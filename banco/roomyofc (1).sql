-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 20:32
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `roomyofc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_imovel`
--

CREATE TABLE `avaliacao_imovel` (
  `idAvaliacao_imovel` int(10) UNSIGNED NOT NULL,
  `Vinculo_id` int(10) UNSIGNED NOT NULL,
  `Imovel_id` int(10) UNSIGNED NOT NULL,
  `Av_condi` int(10) UNSIGNED DEFAULT NULL,
  `Av_local` int(10) UNSIGNED DEFAULT NULL,
  `Av_seguranca` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_usuario`
--

CREATE TABLE `avaliacao_usuario` (
  `idAvaliacao_usuario` int(10) UNSIGNED NOT NULL,
  `Usuario_id` int(10) UNSIGNED NOT NULL,
  `Vinculo_id` int(10) UNSIGNED NOT NULL,
  `Av_pag` int(10) UNSIGNED DEFAULT NULL,
  `Av_conv` int(10) UNSIGNED DEFAULT NULL,
  `Av_org` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `id` int(10) UNSIGNED NOT NULL,
  `Usuario_id` int(10) UNSIGNED NOT NULL,
  `tam_quarto` double DEFAULT NULL,
  `tam_imovel` double DEFAULT NULL,
  `qtd_ban` int(10) UNSIGNED DEFAULT NULL,
  `qtd_pessoas` int(10) UNSIGNED DEFAULT NULL,
  `bairro` varchar(18) DEFAULT NULL,
  `inst_prox` varchar(10) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `foto` longblob DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `contato` varchar(25) DEFAULT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `Usuario_id`, `tam_quarto`, `tam_imovel`, `qtd_ban`, `qtd_pessoas`, `bairro`, `inst_prox`, `tipo`, `foto`, `descricao`, `contato`, `cidade`, `estado`) VALUES
(1, 2, 5, 8, 7, 9, 'santo antoni', 'udesc', 'casa', NULL, 'caramba bom demais', '22121212121', 'chapeco', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `foto` longblob NOT NULL,
  `genero` int(1) NOT NULL,
  `num_tel` varchar(12) NOT NULL,
  `data_nas` date DEFAULT NULL,
  `tipo` int(1) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `foto`, `genero`, `num_tel`, `data_nas`, `tipo`, `descricao`) VALUES
(1, 'Camisa social', 'teste@teste.gmail', '$2y$10$WYhZdqBRu.T.WvaHjmNcROtdgE79WLfWT1pW7RCKyXwKibU0KBpAW', '', 0, '', NULL, 0, ''),
(2, 'alisson ', 'alissson@alisson.gmail', '$2y$10$4h.SQDvKewajTl7/AxE9ueNVRONnqUIz5DbxLybOKFmi8I1iYwIia', '', 0, '', NULL, 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vinculo`
--

CREATE TABLE `vinculo` (
  `id` int(10) UNSIGNED NOT NULL,
  `Usuario_id` int(10) UNSIGNED NOT NULL,
  `Imovel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacao_imovel`
--
ALTER TABLE `avaliacao_imovel`
  ADD PRIMARY KEY (`idAvaliacao_imovel`),
  ADD KEY `Avaliacao_imovel_FKIndex1` (`Imovel_id`),
  ADD KEY `Avaliacao_imovel_FKIndex2` (`Vinculo_id`);

--
-- Índices para tabela `avaliacao_usuario`
--
ALTER TABLE `avaliacao_usuario`
  ADD PRIMARY KEY (`idAvaliacao_usuario`),
  ADD KEY `Avaliacao_usuario_FKIndex1` (`Vinculo_id`),
  ADD KEY `Avaliacao_usuario_FKIndex2` (`Usuario_id`);

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Imovel_FKIndex1` (`Usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vinculo`
--
ALTER TABLE `vinculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Vinculo_FKIndex3` (`Imovel_id`),
  ADD KEY `Vinculo_FKIndex2` (`Usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacao_imovel`
--
ALTER TABLE `avaliacao_imovel`
  MODIFY `idAvaliacao_imovel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacao_usuario`
--
ALTER TABLE `avaliacao_usuario`
  MODIFY `idAvaliacao_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vinculo`
--
ALTER TABLE `vinculo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avaliacao_imovel`
--
ALTER TABLE `avaliacao_imovel`
  ADD CONSTRAINT `avaliacao_imovel_ibfk_1` FOREIGN KEY (`Imovel_id`) REFERENCES `imovel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `avaliacao_imovel_ibfk_2` FOREIGN KEY (`Vinculo_id`) REFERENCES `vinculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `avaliacao_usuario`
--
ALTER TABLE `avaliacao_usuario`
  ADD CONSTRAINT `avaliacao_usuario_ibfk_1` FOREIGN KEY (`Vinculo_id`) REFERENCES `vinculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `avaliacao_usuario_ibfk_2` FOREIGN KEY (`Usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`Usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vinculo`
--
ALTER TABLE `vinculo`
  ADD CONSTRAINT `vinculo_ibfk_1` FOREIGN KEY (`Imovel_id`) REFERENCES `imovel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vinculo_ibfk_2` FOREIGN KEY (`Usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
