-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `entrevista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `banner`) VALUES
(1, 'http://localhost/EntrevistaWebZero/ban/5.jpg'),
(2, 'http://localhost/EntrevistaWebZero/ban/1.jpg'),
(4, 'http://localhost/EntrevistaWebZero/ban/2.jpg'),
(7, 'http://localhost/EntrevistaWebZero/ban/4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `emails`
--

INSERT INTO `emails` (`id`, `email`) VALUES
(3, 'gabrielblcampos_@hotmail.com'),
(5, 'contato@webzero.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE IF NOT EXISTS `membros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) NOT NULL,
  `foto` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`id`, `nome`, `foto`) VALUES
(1, 'Gabriel', 'sem foto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `textos`
--

CREATE TABLE IF NOT EXISTS `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) NOT NULL,
  `texto` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `textos`
--

INSERT INTO `textos` (`id`, `titulo`, `texto`) VALUES
(1, 'Desenvolvimento', 'Contamos com várias ferramentas, frameworks e novidades do universo web para agilizar a entrega do seu produto com a maior qualidade possível!'),
(2, 'Reconhecimento', 'Estamos no mercado a mais de 10 anos, acumulando experiência e conhecimentos fundamentais que fazem dos nossos serviços um diferencial no mercado de trabalho.'),
(3, 'Visão', 'Estamos preparados para atender a várias necessidades de sua empresa e, a partir deste ano de 2015, estamos ampliando nossos horizontes e expandindo nosso mercado através de outros setores das soluções informatizadas. Tudo para atender melhor você.'),
(4, 'Mantenha-se atualizado!', 'Você quer se manter atualizado de todas as informações, produtos, promoções, ofertas e novidade que publicarmos em nosso site? Não perca tempo e insira seu e-mail para nós e nos certificaremos de que você estará a par de tudo em primeira mão!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(64) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `status` varchar(3) NOT NULL DEFAULT 'off',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `status`) VALUES
(1, 'admin', '123', 'off');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
