-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Mar-2022 às 03:22
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf_cnpj` varchar(14) COLLATE utf8_bin NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(100) COLLATE utf8_bin NOT NULL,
  `cep` int(8) NOT NULL,
  `cidade` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefone` int(13) NOT NULL,
  `celular` int(13) NOT NULL,
  `ie` int(11) NOT NULL,
  `criacao` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL COMMENT 'id do perfil',
  `perfil` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'perfil de acesso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='tabela com os perfis de acesso';

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `perfil`) VALUES
(1, 'Administrador'),
(3, 'Backup'),
(4, 'Supervisor'),
(5, 'Backup'),
(7, 'Usuario comum'),
(8, 'Banido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `codigo` decimal(13,0) NOT NULL COMMENT 'ean-13 do produto',
  `descproduto` varchar(255) COLLATE utf8_bin NOT NULL,
  `valorunitario` decimal(10,0) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `fabricante` varchar(100) COLLATE utf8_bin NOT NULL,
  `validade` date NOT NULL COMMENT 'data de validade'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='tabela de produtos';

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL COMMENT 'id do usuário',
  `login` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'login escolhido pelo usuario',
  `senha` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'hash da senha',
  `perfil` int(11) NOT NULL COMMENT 'perfil de acesso do usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='tabela de usuários do sistema';

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `perfil`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idvenda` int(11) NOT NULL,
  `idproduto` int(10) NOT NULL,
  `valordavenda` decimal(10,0) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='tabela com registro de vendas';

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idvenda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id do perfil', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id do usuário', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
