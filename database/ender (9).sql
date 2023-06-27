-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Maio-2023 às 14:42
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ender`
--
CREATE DATABASE IF NOT EXISTS `ender` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci;
USE `ender`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `nome` varchar(25) DEFAULT NULL,
  `idade` int DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `endereco` text,
  `telefone` varchar(20) DEFAULT NULL,
  `valor_pago_curso` float(10,2) DEFAULT NULL,
  `dat_inscricao_curso` date DEFAULT NULL,
  `ativo_sn` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

DROP TABLE IF EXISTS `amigos`;
CREATE TABLE IF NOT EXISTS `amigos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_de` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_para` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`id`, `id_de`, `id_para`, `status`) VALUES
(1, '3', '1', 0),
(2, '5', '1', 0),
(3, '5', '2', 0),
(4, '9', '1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enviou` int NOT NULL,
  `recebeu` int NOT NULL,
  `mensagem` varchar(3000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `imagem` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `criacao` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `enviou`, `recebeu`, `mensagem`, `imagem`, `criacao`) VALUES
(1, 5, 6, 'Oi ', '', '2023-05-26 00:37:42'),
(2, 6, 5, 'Oi ', '', '2023-05-26 00:37:54'),
(3, 5, 6, 'Boa noite ', '', '2023-05-26 00:42:00'),
(4, 6, 5, 'Boa noite ', '', '2023-05-26 00:42:09'),
(5, 9, 1, 'oi ', '', '2023-05-26 01:20:04'),
(6, 9, 1, 'teste ', '', '2023-05-26 01:20:10'),
(7, 19, 1, 'oi ', '', '2023-05-26 10:58:24'),
(8, 1, 19, 'oi ', '', '2023-05-26 10:58:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `codComentario` int NOT NULL AUTO_INCREMENT,
  `codUsuario` int NOT NULL,
  `codPublicacao` int NOT NULL,
  `comentario` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dataComentario` datetime NOT NULL,
  PRIMARY KEY (`codComentario`),
  KEY `codPublicacao` (`codPublicacao`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`codComentario`, `codUsuario`, `codPublicacao`, `comentario`, `dataComentario`) VALUES
(1, 5, 2, 'alguem conseguiu um certificado na patrono ', '2023-05-26 00:23:52'),
(2, 9, 2, 'sou legal', '2023-05-26 01:16:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculo`
--

DROP TABLE IF EXISTS `curriculo`;
CREATE TABLE IF NOT EXISTS `curriculo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_cur` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `titulo_cur` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `inicio` year NOT NULL,
  `termino` year NOT NULL,
  `local` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc_cur` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

DROP TABLE IF EXISTS `curtidas`;
CREATE TABLE IF NOT EXISTS `curtidas` (
  `codCurtida` int NOT NULL AUTO_INCREMENT,
  `codPublicacao` int NOT NULL,
  `codUsuario` int NOT NULL,
  PRIMARY KEY (`codCurtida`),
  KEY `codUsuario` (`codUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `curtidas`
--

INSERT INTO `curtidas` (`codCurtida`, `codPublicacao`, `codUsuario`) VALUES
(1, 1, 5),
(3, 2, 5),
(5, 2, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `denunciar`
--

DROP TABLE IF EXISTS `denunciar`;
CREATE TABLE IF NOT EXISTS `denunciar` (
  `id_denuncia` int NOT NULL AUTO_INCREMENT,
  `id_publicacao` int NOT NULL,
  `denunciou` int NOT NULL,
  `denunciado` int NOT NULL,
  `motivo` varchar(1000) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_denuncia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_juridico` int NOT NULL AUTO_INCREMENT,
  `nomefantasia` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `razaosocial` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cnpj` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fundacao` year NOT NULL,
  `descricao` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'empresa.png',
  `online` datetime NOT NULL,
  `criacao` datetime NOT NULL,
  PRIMARY KEY (`id_juridico`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pais` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `estado` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cidade` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `pais`, `estado`, `cidade`, `id_cliente`) VALUES
(1, 'Brasil', 'SP', 'São Paulo', 2),
(2, 'Brasil', 'São Paulo', 'São Paulo', 3),
(3, 'Brasil', 'SP', 'São Paulo', 4),
(4, 'Brasil', 'SP', 'São Paulo', 5),
(5, '', 'SP', 'São Paulo', 6),
(6, 'Brasil', 'São Paulo', 'São Paulo', 7),
(7, 'Brasil', 'SP', 'São Paulo', 8),
(8, '', 'SP', 'São Paulo', 9),
(9, 'Brasil', 'SP', 'São Paulo', 10),
(10, '', 'Sp', 'sp', 3),
(11, 'Brasil', 'SP', 'São Paulo', 12),
(12, 'Angola', 'SP', 'São Paulo', 13),
(13, 'Japão', 'SP', 'São Paulo', 14),
(14, 'Brasil', 'SP', 'São Paulo', 15),
(15, 'Brasil', 'SP', 'São Paulo', 16),
(16, 'Brasil', 'SP', 'São Paulo', 17),
(17, 'Brasil', 'SP', 'São Paulo', 18),
(18, '', 'SP', 'São Paulo', 19),
(19, 'Brasil', 'SP', 'São Paulo', 18),
(20, '', 'SP', 'São Paulo', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilidades`
--

DROP TABLE IF EXISTS `habilidades`;
CREATE TABLE IF NOT EXISTS `habilidades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `linguagem1` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `linguagem2` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `linguagem3` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `linguagem4` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `linguagem5` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

DROP TABLE IF EXISTS `planos`;
CREATE TABLE IF NOT EXISTS `planos` (
  `id_plano` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `nome` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cpf` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `plano` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pagamento` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_plano`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id_plano`, `id_cliente`, `nome`, `cpf`, `plano`, `status`, `pagamento`) VALUES
(1, 1, 'Teste', '123.123.123.123', 'Galaxy', 'Realizado', '44,99'),
(2, 19, 'Irmandade', '343.767.754-10', 'Galaxy', 'Realizado', '44,99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo_port` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto_port` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc_port` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

DROP TABLE IF EXISTS `profissional`;
CREATE TABLE IF NOT EXISTS `profissional` (
  `id` int NOT NULL AUTO_INCREMENT,
  `experiencia` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `objetivo` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

DROP TABLE IF EXISTS `publicacoes`;
CREATE TABLE IF NOT EXISTS `publicacoes` (
  `codPublicacao` int NOT NULL AUTO_INCREMENT,
  `codUsuario` int NOT NULL,
  `descricao` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fotoPublicacao` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `curtidas` int NOT NULL,
  PRIMARY KEY (`codPublicacao`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`codPublicacao`, `codUsuario`, `descricao`, `fotoPublicacao`, `data`, `curtidas`) VALUES
(1, 5, 'Teste', 'imgs/33e02de3213378fc124927f6337b0605.jpg', '2023-05-26 00:22:00', 1),
(2, 5, 'Teste2', 'imgs/1bee67a07b1d8b5899165f31e4e3042e.jpg', '2023-05-26 00:23:09', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhos`
--

DROP TABLE IF EXISTS `trabalhos`;
CREATE TABLE IF NOT EXISTS `trabalhos` (
  `id_trabalho` int NOT NULL AUTO_INCREMENT,
  `desc_trabalho` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_cliente` int NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `pagamento` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_trabalho`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sobrenome` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo_user` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bio` varchar(700) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `caracteristicas` varchar(800) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `datanasc` date NOT NULL,
  `online` datetime NOT NULL,
  `criacao` datetime NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_cliente`, `nome`, `sobrenome`, `email`, `senha`, `tipo_user`, `bio`, `caracteristicas`, `foto`, `datanasc`, `online`, `criacao`) VALUES
(1, 'Guilherme', 'Pereira', 'g@gmail.com', '202cb962ac59075b964b07152d234b70', 'programador', 'Olá eu me chamo Guilherme Pereira e sou Diretor Executivo e Desenvolvedor Back-End da EnderSoftwares.', 'Eu trabalho em Back-End, trabalho como administrador geral da EnderSoftwares e trabalho muito bem em equipe, trabalho bem em linguagem de programação principalmente com Java e o Python, em questão eu trabalho muito bem com pessoas.', '11233gui.png', '2005-07-02', '2023-05-26 11:13:14', '2023-05-26 10:28:28'),
(2, 'Arthur', 'Santana', 'arthur@gmail.com', '202cb962ac59075b964b07152d234b70', 'programador', 'Olá eu me chamo Arthur Santana e sou um dos diretores principais da EnderSoftwares', 'Sou programador Full-Stack, atuei na criação de um feed  e sou um dos diretores da EnderSoftwares', '20865arthur.png', '2004-05-25', '2023-05-26 10:22:15', '2023-05-26 10:19:29'),
(3, 'Wilson', 'Nishi', 'wilson@gmail.com', 'f87dab8d027236545a2257c668603a4d', 'programador', 'Olá eu me chamo Wilson Nishi e sou supervisor geral de front-end na empresa EnderSoftwares', 'Sou muito bom em front-end, trabalho bem em equipe, atuo bem em prototipação e com editores de imagens.', '62146nishi.png', '2005-04-28', '2023-05-26 10:19:05', '2023-05-26 10:17:22'),
(4, 'Dayvid', 'José', 'dayvid@gmail.com', '09249a3a22d82eecb03ac85dd5ffce84', 'programador', 'Saudações! Meu nome é Dayvid, um entusiasta da tecnologia e estudante de Desenvolvimento de Softwares na Etec de Itaquera. Estou no último semestre do curso técnico e atualmente em busca de minha primeira experiência profissional.  Possuo um vasto conhecimento em pacote Office e habilidades intermediárias em inglês. Sou dedicado em aprimorar minhas habilidades e conhecimentos em programação, sempre buscando me manter atualizado com as mais recentes tendências do mercado.  Meu principal objetivo é trabalhar com algo que amo e, por isso, sou apaixonado por tecnologia e sua constante evolução. Acredito que a citação de Confúcio, \"Trabalhe com o que você ama e nunca mais precisará trabalhar na v', 'Sou programador de node.js, golang e python', '70773dayvid.png', '2004-05-28', '2023-05-26 10:16:54', '2023-05-26 10:14:04'),
(5, 'Harison', 'Rios', 'hari@gmail.com', '202cb962ac59075b964b07152d234b70', 'programador', 'EEEH FRONT-END', 'Sou programador front-end.', '66064harison.png', '2005-08-10', '2023-05-26 10:06:04', '2023-05-26 10:04:51'),
(6, 'Henrique', 'Santana', 'henrique@gmail.com', '202cb962ac59075b964b07152d234b70', 'programador', 'Olá eu me chamo Henrique Santana e sou um dos diretores da EnderSoftwares, atuei como back-end e trabalho bem em equipe.', 'Sou uma pessoa muito experiente em PHP, tenho um ótimo raciocínio lógico e sou muito bom trabalhando com linguagem de programação', '97787henrique.png', '2004-05-06', '2023-05-26 10:26:37', '2023-05-26 10:23:03'),
(18, 'Ana', 'Julia', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70', 'programador', 'Olá', 'Sou Bacana', '31019corte2.png', '2001-08-03', '2023-05-26 11:10:22', '2023-05-26 10:46:02'),
(19, 'Irmandade', 'Pandinha', 'teste@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'cliente', '', '', '33529corte.jpg', '3002-09-03', '2023-05-26 11:08:33', '2023-05-26 10:47:13'),
(20, 'Lucas', 'Sannino', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70', 'programador', '', '', 'user.jpg', '0000-00-00', '2023-05-26 11:09:51', '2023-05-26 11:09:51'),
(21, 'Sabrina', 'Rafaela', 'sabrina@gmail.com', '202cb962ac59075b964b07152d234b70', 'cliente', '', '', '6822roger-guedes-22052022195157076.jpeg', '1980-09-01', '2023-05-26 11:11:15', '2023-05-26 11:10:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `email` varchar(220) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `senha` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

DROP TABLE IF EXISTS `vagas`;
CREATE TABLE IF NOT EXISTS `vagas` (
  `id_vaga` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `titulo_vaga` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `descricao_vaga` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `imagem_vaga` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `imagem2_vaga` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `imagem3_vaga` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `imagem4_vaga` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `orcamento_vaga` int NOT NULL,
  `data_vaga` datetime NOT NULL,
  `data_final` date NOT NULL,
  PRIMARY KEY (`id_vaga`),
  KEY `codUsuario` (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id_vaga`, `id_usuario`, `titulo_vaga`, `descricao_vaga`, `imagem_vaga`, `imagem2_vaga`, `imagem3_vaga`, `imagem4_vaga`, `orcamento_vaga`, `data_vaga`, `data_final`) VALUES
(3, 6, 'Quero um sistema de css', 'em css, js e php', '21557Darth Vader.png', '9243background.jpg', '74478WhatsApp Image 2023-05-11 at 23.13.55.jpeg', '22929WhatsApp Image 2023-05-11 at 23.13.55.jpeg', 120, '2023-05-26 00:41:02', '0000-00-00'),
(4, 9, 'Trabalho com php', 'cadastro', '76217pngwing.com (7).png', '50378IMAGEM TESTE.png', '99911clear.png', '70802marcadores.png', 129, '2023-05-26 01:18:14', '0000-00-00'),
(5, 19, 'Quero um sistema de cadastro', 'em php, js e css', '66505capitao-america-novo-escudo-vingadores-guerra-infinita-760x428.webp', '911315g.jpeg', '45280PMI setor industrial - janeiro.png', '484615g.jpeg', 130, '2023-05-26 10:56:58', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
