-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/10/2020 às 09:35
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `monitoramento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `help_infra`
--

CREATE TABLE `help_infra` (
  `id` int(10) NOT NULL DEFAULT 0,
  `nome_professor` varchar(80) CHARACTER SET latin1 NOT NULL,
  `matricula` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(15) CHARACTER SET latin1 NOT NULL,
  `problema` varchar(150) CHARACTER SET latin1 NOT NULL,
  `unidade` varchar(30) CHARACTER SET latin1 NOT NULL,
  `predio` varchar(10) NOT NULL,
  `andar` varchar(10) NOT NULL,
  `sala` varchar(10) NOT NULL,
  `data_finalizacao` varchar(30) DEFAULT NULL,
  `abertura` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `help_infra`
--

INSERT INTO `help_infra` (`id`, `nome_professor`, `matricula`, `status`, `problema`, `unidade`, `predio`, `andar`, `sala`, `data_finalizacao`, `abertura`) VALUES
(1, 'MARIA FERNANDA ANNUNCIATO BROG', '001', 'Concluido', 'Wi-fi', 'Vergueiro', 'A', '', '1', '2020-07-16', '28-10-2020'),
(2, 'DENIZE DULCINEA MARTINS', '002', 'Andamento', 'Chromebook', 'Vergueiro', 'A', '', '2', '', '28-10-2020'),
(3, 'MARIA FERNANDA ANNUNCIATO BROG', '003', 'Nao iniciado', 'Wi-fi', 'Vergueiro', 'A', '', '3', '', '20-10-2020'),
(4, 'KLEBER APARECIDO ROSSI', '004', 'Concluido', 'Chromebook', 'Sao Manuel', 'A', '', '4', '2020-07-23', '2020-07-07'),
(5, 'RAQUEL LEOPOLDINA DE LIMA', '005', 'Andamento', 'Wi-fi', 'Memorial', 'A', '', '5', '', '2020-07-08'),
(6, 'MARIA ELENITA DA SILVA RAMOS', '006', 'Concluido', 'Chromebook', 'Vergueiro', 'A', '', '6', '2020-07-16', '28-10-2020'),
(7, 'MIREIA FLORENCIO MAIO', '007', 'Andamento', 'Projetor', 'Vergueiro', 'A', '', '7', '', '2020-07-09'),
(9, 'DALVA SOARES DA COSTA', '00', 'Concluido', 'Wi-fi', 'Vergueiro', 'A', '', '9', '2020-07-10', '2020-07-10'),
(10, 'VAGNER MAZZARO SILVA BARREIRO', '009', 'Nao iniciado', 'Outros', 'Vergueiro', 'A', '', '10', '', '28-10-2020'),
(11, 'PAULO AFONSO ARLINDO DE ANDRAD', '010', 'Andamento', 'Outros', 'Memorial A', 'A', '', '11', '', '2020-02-05'),
(12, 'OBEDE RODRIGUES DE FIGUEREDO', '011', 'Nao iniciado', 'Wi-fi', 'Vergueiro', 'A', '', '12', '', '28-10-2020'),
(13, 'MAURICIO DEL RASO DOS REIS', '012', 'Andamento', 'Apoio', 'Vergueiro', 'A', '', '13', '', '2020-07-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
