-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jun-2020 às 04:39
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techquiz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bloco`
--

CREATE TABLE `bloco` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `evento_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `evento_id` int(11) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `semestre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerenciador`
--

CREATE TABLE `gerenciador` (
  `id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gerenciador`
--

INSERT INTO `gerenciador` (`id`, `login`, `senha`) VALUES
(1, 'doug', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro`
--

CREATE TABLE `membro` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `texto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_aberta`
--

CREATE TABLE `questao_aberta` (
  `questao_id` int(11) NOT NULL,
  `rubrica` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_has_bloco_has_equipe`
--

CREATE TABLE `questao_has_bloco_has_equipe` (
  `questao_id` int(11) DEFAULT NULL,
  `bloco_id` int(11) DEFAULT NULL,
  `evento_id` int(11) DEFAULT NULL,
  `equipe_id` int(11) DEFAULT NULL,
  `resposta` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_multipla`
--

CREATE TABLE `questao_multipla` (
  `questao_id` int(11) NOT NULL,
  `alternativa_a` varchar(100) NOT NULL,
  `alternativa_b` varchar(100) NOT NULL,
  `alternativa_c` varchar(100) NOT NULL,
  `alternativa_d` varchar(100) NOT NULL,
  `alternativa_e` varchar(100) NOT NULL,
  `alternativa_correta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_vf`
--

CREATE TABLE `questao_vf` (
  `questao_id` int(11) NOT NULL,
  `alternativa_correta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes_has_bloco`
--

CREATE TABLE `questoes_has_bloco` (
  `questao_id` int(11) DEFAULT NULL,
  `bloco_id` int(11) DEFAULT NULL,
  `evento_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vinculo`
--

CREATE TABLE `vinculo` (
  `equipe_id` int(11) DEFAULT NULL,
  `membro_matricula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloco`
--
ALTER TABLE `bloco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evento_id` (`evento_id`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `evento_id` (`evento_id`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gerenciador`
--
ALTER TABLE `gerenciador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `membro`
--
ALTER TABLE `membro`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questao_aberta`
--
ALTER TABLE `questao_aberta`
  ADD PRIMARY KEY (`questao_id`);

--
-- Indexes for table `questao_has_bloco_has_equipe`
--
ALTER TABLE `questao_has_bloco_has_equipe`
  ADD KEY `questao_id` (`questao_id`),
  ADD KEY `bloco_id` (`bloco_id`),
  ADD KEY `evento_id` (`evento_id`),
  ADD KEY `equipe_id` (`equipe_id`);

--
-- Indexes for table `questao_multipla`
--
ALTER TABLE `questao_multipla`
  ADD PRIMARY KEY (`questao_id`);

--
-- Indexes for table `questao_vf`
--
ALTER TABLE `questao_vf`
  ADD PRIMARY KEY (`questao_id`);

--
-- Indexes for table `questoes_has_bloco`
--
ALTER TABLE `questoes_has_bloco`
  ADD UNIQUE KEY `questao_id` (`questao_id`),
  ADD KEY `bloco_id` (`bloco_id`),
  ADD KEY `evento_id` (`evento_id`);

--
-- Indexes for table `vinculo`
--
ALTER TABLE `vinculo`
  ADD KEY `equipe_id` (`equipe_id`),
  ADD KEY `membro_matricula` (`membro_matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloco`
--
ALTER TABLE `bloco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gerenciador`
--
ALTER TABLE `gerenciador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membro`
--
ALTER TABLE `membro`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bloco`
--
ALTER TABLE `bloco`
  ADD CONSTRAINT `bloco_ibfk_1` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`);

--
-- Limitadores para a tabela `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`);

--
-- Limitadores para a tabela `questao_aberta`
--
ALTER TABLE `questao_aberta`
  ADD CONSTRAINT `questao_aberta_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questao` (`id`);

--
-- Limitadores para a tabela `questao_has_bloco_has_equipe`
--
ALTER TABLE `questao_has_bloco_has_equipe`
  ADD CONSTRAINT `questao_has_bloco_has_equipe_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questao` (`id`),
  ADD CONSTRAINT `questao_has_bloco_has_equipe_ibfk_2` FOREIGN KEY (`bloco_id`) REFERENCES `bloco` (`id`),
  ADD CONSTRAINT `questao_has_bloco_has_equipe_ibfk_3` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`),
  ADD CONSTRAINT `questao_has_bloco_has_equipe_ibfk_4` FOREIGN KEY (`equipe_id`) REFERENCES `equipe` (`id`);

--
-- Limitadores para a tabela `questao_multipla`
--
ALTER TABLE `questao_multipla`
  ADD CONSTRAINT `questao_multipla_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questao` (`id`);

--
-- Limitadores para a tabela `questao_vf`
--
ALTER TABLE `questao_vf`
  ADD CONSTRAINT `questao_vf_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questao` (`id`);

--
-- Limitadores para a tabela `questoes_has_bloco`
--
ALTER TABLE `questoes_has_bloco`
  ADD CONSTRAINT `questoes_has_bloco_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questao` (`id`),
  ADD CONSTRAINT `questoes_has_bloco_ibfk_2` FOREIGN KEY (`bloco_id`) REFERENCES `bloco` (`id`),
  ADD CONSTRAINT `questoes_has_bloco_ibfk_3` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`);

--
-- Limitadores para a tabela `vinculo`
--
ALTER TABLE `vinculo`
  ADD CONSTRAINT `vinculo_ibfk_1` FOREIGN KEY (`equipe_id`) REFERENCES `equipe` (`id`),
  ADD CONSTRAINT `vinculo_ibfk_2` FOREIGN KEY (`membro_matricula`) REFERENCES `membro` (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
