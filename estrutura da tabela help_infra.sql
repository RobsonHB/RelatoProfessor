

CREATE TABLE `help_infra` (
  `id` int(10) NOT NULL,
  `nome_professor` varchar(80) CHARACTER SET latin1 NOT NULL,
  `matricula` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(15) CHARACTER SET latin1 NOT NULL,
  `problema` varchar(150) CHARACTER SET latin1 NOT NULL,
  `unidade` varchar(30) CHARACTER SET latin1 NOT NULL,
  `predio` varchar(10) NOT NULL,
  `andar` varchar(10) NOT NULL,
  `sala` varchar(10) NOT NULL,
  `data_finalizacao` varchar(30) DEFAULT NULL,
  `abertura` varchar(100) CHARACTER SET latin1 NOT NULL,
  `hora_abertura` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

