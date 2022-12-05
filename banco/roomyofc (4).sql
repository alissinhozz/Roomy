-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2022 às 18:18
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
  `foto` varchar(220) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `contato` varchar(25) DEFAULT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `Usuario_id`, `tam_quarto`, `tam_imovel`, `qtd_ban`, `qtd_pessoas`, `bairro`, `inst_prox`, `tipo`, `foto`, `descricao`, `contato`, `cidade`, `estado`) VALUES
(1, 2, 5, 8, 7, 9, 'santo antoni', 'udesc', 'casa', '', 'caramba bom demais', '22121212121', 'chapeco', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovell`
--

CREATE TABLE `imovell` (
  `id` int(11) UNSIGNED NOT NULL,
  `tamquarto` double DEFAULT NULL,
  `tam_imovel` double DEFAULT NULL,
  `qtd_ban` int(12) UNSIGNED DEFAULT NULL,
  `qtd_pessoas` int(20) UNSIGNED DEFAULT NULL,
  `bairro` varchar(55) DEFAULT NULL,
  `inst_prox` varchar(55) DEFAULT NULL,
  `tipo` varchar(55) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `contatoUser` varchar(55) NOT NULL,
  `cidade` varchar(55) NOT NULL,
  `estado` varchar(55) NOT NULL,
  `descricao` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imovell`
--

INSERT INTO `imovell` (`id`, `tamquarto`, `tam_imovel`, `qtd_ban`, `qtd_pessoas`, `bairro`, `inst_prox`, `tipo`, `foto`, `contatoUser`, `cidade`, `estado`, `descricao`) VALUES
(32, 390, 67, 2, 2, 'naosei', 'ifsc', 'apartamento', '', '123', 'Coronel Freitas', 'Santa Catarina', 'top'),
(33, 390, 67, 2, 2, 'floresta 1', 'ifsc', 'apartamento', '', '49 991983992', 'Coronel Freitas', 'Santa Catarina', 'top'),
(35, 390, 896, 2, 2, 'floresta 1', 'ifsc', 'apartamento', '', '49 991983992', 'Coronel Freitas', 'Santa Catarina', 'foda'),
(36, 54, 34, 12, 4, 'gagag', 'ifsc', 'ap', '', '87878979879898', 'sarandi', 'rs', 'djsdvisdvis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `foto` varchar(220) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `num_tel` varchar(12) NOT NULL,
  `data_nas` date DEFAULT NULL,
  `tipo` int(1) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `foto`, `genero`, `num_tel`, `data_nas`, `tipo`, `descricao`) VALUES
(1, 'Camisa social', 'teste@teste.gmail', '$2y$10$WYhZdqBRu.T.WvaHjmNcROtdgE79WLfWT1pW7RCKyXwKibU0KBpAW', '', '0', '', NULL, 0, ''),
(2, 'alisson ', 'alissson@alisson.gmail', '$2y$10$4h.SQDvKewajTl7/AxE9ueNVRONnqUIz5DbxLybOKFmi8I1iYwIia', '', '0', '', NULL, 0, ''),
(3, 'gabi', 'gabiamanda.bosa@gmail.com', '$2y$10$EiVp631bY20qpqMvEru1Iu86WPmnRRjXA5rOF0Rp/8mkjs7neSn56', '', '0', '', NULL, 0, ''),
(4, 'bia', 'bia@bia.gmail', '$2y$10$Xv4sRr5tV1N3r1I0pNb5huiOFNoYCOEYJIsKa/Ed6PIOVoThweCzq', '', '0', '121212121212', NULL, 0, ''),
(5, 'mari', 'mari@mari.gmail', '$2y$10$tqIEkPRRsDOW6U5ZSCdQa.P1PWS6OEvlh2hvPdhVgfBVxAg07/rBW', '', '0', '9999999999', '2222-02-22', 0, 'Gosto de gatos e sou intolerante à lactose'),
(7, 'roberta', 'roberta@roberta.gmail', '$2y$10$6EI7OkwKFQq8iP6xsq/aW.0LANGS27b4tBR/hl/otnG4L/dHwUOmu', '', 'F', '999999999999', '1121-12-12', 2, 'oioiooo'),
(8, 'tao', 'gabrieli.b@aluno.ifsc.edu.br', '$2y$10$OuoRtLxSwjlfPVLdqRuZROrQRKoqnZ1dB96sfzaVXEMeVGvz0rE/2', '', 'F', '49991837769', '1222-02-11', 1, 'trffwfwff'),
(9, 'GABRIELI', 'gabiamanda@gmail.com', '$2y$10$DVZRYqSdUvVPKX7Hvipqk.Ot7QedIBZapNZuex5iwJJ6NVDdcaRpe', '', 'F', '54997127543', '0012-12-12', 1, 'dqedqdeed'),
(10, 'gabi', 'gabiamanda@gmail.com', '$2y$10$tky3mkO937KGF61f.vc8.eGFYGSP/InGMOZOn/oS2vAWcgRlZeNPe', '', 'F', '54997127543', '0004-04-04', 1, 'qsfwfwewef'),
(11, 'gabi', 'youi@uiuio.com', '$2y$10$zJKSnM6UEz4CLFj4t/JMCOTzTWZZGuVibC6sIEuDYjTo7eV5IZNYC', '', 'F', '456464546546', '0012-12-12', 1, 'fwfrfwrfwrfwrf'),
(12, 'fdfs', 'gabii@gbaii.gmail', '$2y$10$H8FoG7xqYs5Y0H6fQMpib.hQYJIoreAGH5uE6bylfeoKXd2HEgGRK', '', 'm', '545465464645', '2022-12-09', 1, 'fasfcadgsfhsjsryjydtjedtyjeyjiyi'),
(13, 'ferf', 'gabri@gabri.hamoil', '$2y$10$JI2TBveiTdMTaHi0peKpbuenMfk9G/z8kSKLFFBZlN9AHu0RaWQ22', '', 'm', '49991837769', '2022-12-14', 1, 'fwefwefwefwefwef'),
(14, 'Gabiii', 'gabri@gabri.gmail.com', '$2y$10$Yd81PHZecT8DdsA6KlfoMeSyTyTzZdIpOqG5Q48gL1tJTOqbL0xyO', '', '', '', NULL, 0, ''),
(15, 'eetwrter', 'gabrie@fsdfsd.fsf', '$2y$10$1rdc0W8Wy.YiXW3O5HXVqenmdS.ubvpQCWb2cpFSPRBEHGgtEYs3.', '', '1', '54997127543', '0000-00-00', 1, 'wt4rtet'),
(16, 'gabirelffff', 'ga@agabiaia.com', '$2y$10$28Gj/t0dQ1uO4BDA07eOJumt7TFQxR6QSWKtV1/VAfo/ZQkNkbMWq', '', '2', '656565656565', '2022-12-15', 2, 'dadedfwefwe');

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
-- Índices para tabela `imovell`
--
ALTER TABLE `imovell`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `imovell`
--
ALTER TABLE `imovell`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
