-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2018 às 01:22
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turismotcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `dtnasc` date DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `numero_casa` varchar(10) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cep` varchar(40) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `rg`, `cpf`, `sexo`, `dtnasc`, `telefone`, `numero_casa`, `rua`, `bairro`, `cidade`, `estado`, `cep`, `login`, `senha`, `situacao`) VALUES
(48, 'Paulo', '', '', 'masculino', '0000-00-00', '', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerente`
--

CREATE TABLE `gerente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `dtnasc` date DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `numero_casa` varchar(10) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nivel_func` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gerente`
--

INSERT INTO `gerente` (`id`, `nome`, `rg`, `cpf`, `sexo`, `dtnasc`, `telefone`, `numero_casa`, `rua`, `bairro`, `cidade`, `estado`, `cep`, `login`, `senha`, `nivel_func`, `cargo`) VALUES
(1, 'Paulo', '909090', '909000000', 'masculino', '2018-10-02', '', '0990ABC', 'rua das benÃ§Ã£os', 'centro', 'JOÃƒO PESSOA', 'PB', '8990000', 'teste', 'teste', 'Administrador', '1'),
(2, 'Alex Costa de lima da Silva', '9.000.888.00', '123.999.888-09', 'masculino', '2018-10-01', '081 989102393', '1029ACB', 'Rua patriarca manoel de almeida golveia', 'cesar augusto', 'GUADALAJARA', 'PB', '55999-000', 'alex.costa', '123456789ABN', 'administrador', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `dtnasc` date DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `numero_casa` varchar(50) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nivel_func` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id`, `nome`, `rg`, `cpf`, `sexo`, `dtnasc`, `telefone`, `numero_casa`, `rua`, `bairro`, `cidade`, `estado`, `cep`, `login`, `senha`, `nivel_func`, `cargo`) VALUES
(1, 'Ana Paula Ferreira da Silva', '1.999.999', '122.333.444-09', 'masculino', '2018-10-01', '81989102393', '', 'Eufranio de oliveira neto junior braga', 'Santa ana de assis', 'GUADALAJARA', 'PB', '889000-000', 'paulosergioferreira.silva', '12333444555P', 'usuario', 'vendedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `id` int(11) NOT NULL,
  `destino` varchar(200) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `transporte` varchar(200) DEFAULT NULL,
  `nivelhotel` varchar(200) DEFAULT NULL,
  `translado` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `diaria` varchar(200) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `usuarioId` int(11) NOT NULL,
  `nome_cliente` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `viagem`
--

INSERT INTO `viagem` (`id`, `destino`, `preco`, `transporte`, `nivelhotel`, `translado`, `descricao`, `diaria`, `tipo`, `usuarioId`, `nome_cliente`) VALUES
(4, 'Pernambuco', 1200, 'onibus', '2', '2', '', '8', 'Ã€ VISTA', 48, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_venda` (`usuarioId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `cliente_venda` FOREIGN KEY (`usuarioId`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
