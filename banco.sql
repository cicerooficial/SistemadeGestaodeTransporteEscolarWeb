-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para transporte
DROP DATABASE IF EXISTS `transporte`;
CREATE DATABASE IF NOT EXISTS `transporte` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `transporte`;


-- Copiando estrutura para tabela transporte.crianca
DROP TABLE IF EXISTS `crianca`;
CREATE TABLE IF NOT EXISTS `crianca` (
  `id_crianca` int(11) NOT NULL AUTO_INCREMENT,
  `nome_crianca` varchar(50) NOT NULL,
  `sexo_crianca` varchar(15) NOT NULL,
  `dt_nasc_crianca` date NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `cpf_crianca` varchar(20) DEFAULT NULL,
  `rg_crianca` varchar(20) DEFAULT NULL,
  `turma` varchar(20) DEFAULT NULL,
  `professor` varchar(20) DEFAULT NULL,
  `observacoes` varchar(255) DEFAULT NULL,
  `cpf_resp` varchar(20) DEFAULT NULL,
  `nome_escola` varchar(50) DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  `status_crianca` varchar(50) DEFAULT NULL,
  `veiculo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_crianca`),
  UNIQUE KEY `cpf_crianca` (`cpf_crianca`),
  UNIQUE KEY `cpf_resp` (`cpf_resp`),
  KEY `FK_crianca_responsavel` (`cpf_resp`),
  KEY `nome_crianca` (`nome_crianca`),
  KEY `FK_crianca_escola` (`nome_escola`),
  CONSTRAINT `FK_crianca_escola` FOREIGN KEY (`nome_escola`) REFERENCES `escola` (`nome_escola`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_crianca_responsavel` FOREIGN KEY (`cpf_resp`) REFERENCES `responsavel` (`cpf_resp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.crianca: ~2 rows (aproximadamente)
DELETE FROM `crianca`;
/*!40000 ALTER TABLE `crianca` DISABLE KEYS */;
INSERT INTO `crianca` (`id_crianca`, `nome_crianca`, `sexo_crianca`, `dt_nasc_crianca`, `apelido`, `cpf_crianca`, `rg_crianca`, `turma`, `professor`, `observacoes`, `cpf_resp`, `nome_escola`, `horario`, `status_crianca`, `veiculo`) VALUES
	(11, 'Matheus', 'Masculino', '1996-06-30', 'Math', '123.456.789-55', '1265465', 'fassd', 'fasdfsdaaa', 'dfassfd', '418.748.938-02', 'Aracati 2', 'Manha', 'Ativo', '');
/*!40000 ALTER TABLE `crianca` ENABLE KEYS */;


-- Copiando estrutura para tabela transporte.despesas
DROP TABLE IF EXISTS `despesas`;
CREATE TABLE IF NOT EXISTS `despesas` (
  `id_despesa` int(11) NOT NULL AUTO_INCREMENT,
  `nome_despesa` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`id_despesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.despesas: ~0 rows (aproximadamente)
DELETE FROM `despesas`;
/*!40000 ALTER TABLE `despesas` DISABLE KEYS */;
/*!40000 ALTER TABLE `despesas` ENABLE KEYS */;


-- Copiando estrutura para tabela transporte.endereco_crianca
DROP TABLE IF EXISTS `endereco_crianca`;
CREATE TABLE IF NOT EXISTS `endereco_crianca` (
  `id_end_crianca` int(11) NOT NULL AUTO_INCREMENT,
  `localidade_crianca` varchar(50) DEFAULT NULL,
  `numero_crianca` varchar(10) DEFAULT NULL,
  `complemento_crianca` varchar(50) DEFAULT NULL,
  `bairro_crianca` varchar(50) DEFAULT NULL,
  `cep_crianca` varchar(10) NOT NULL,
  `cidade_crianca` varchar(50) DEFAULT NULL,
  `estado_crianca` varchar(50) DEFAULT NULL,
  `nome_crianca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_end_crianca`),
  KEY `FK_endereco_crianca_crianca` (`nome_crianca`),
  CONSTRAINT `FK_endereco_crianca_crianca` FOREIGN KEY (`nome_crianca`) REFERENCES `crianca` (`nome_crianca`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.endereco_crianca: ~2 rows (aproximadamente)
DELETE FROM `endereco_crianca`;
/*!40000 ALTER TABLE `endereco_crianca` DISABLE KEYS */;
INSERT INTO `endereco_crianca` (`id_end_crianca`, `localidade_crianca`, `numero_crianca`, `complemento_crianca`, `bairro_crianca`, `cep_crianca`, `cidade_crianca`, `estado_crianca`, `nome_crianca`) VALUES
	(10, 'locali', '2', 'comp', 'bair', '23457-434', 'cid', 'SP', 'Matheus');
/*!40000 ALTER TABLE `endereco_crianca` ENABLE KEYS */;


-- Copiando estrutura para tabela transporte.endereco_escola
DROP TABLE IF EXISTS `endereco_escola`;
CREATE TABLE IF NOT EXISTS `endereco_escola` (
  `id_end_escola` int(11) NOT NULL AUTO_INCREMENT,
  `localidade_escola` varchar(50) DEFAULT NULL,
  `numero_escola` varchar(10) DEFAULT NULL,
  `complemento_escola` varchar(50) DEFAULT NULL,
  `bairro_escola` varchar(50) DEFAULT NULL,
  `cep_escola` varchar(10) NOT NULL,
  `cidade_escola` varchar(50) DEFAULT NULL,
  `estado_escola` varchar(50) DEFAULT NULL,
  `nome_escola` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_end_escola`),
  KEY `FK_endereco_escola_escola` (`nome_escola`),
  CONSTRAINT `FK_endereco_escola_escola` FOREIGN KEY (`nome_escola`) REFERENCES `escola` (`nome_escola`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.endereco_escola: ~0 rows (aproximadamente)
DELETE FROM `endereco_escola`;
/*!40000 ALTER TABLE `endereco_escola` DISABLE KEYS */;
/*!40000 ALTER TABLE `endereco_escola` ENABLE KEYS */;


-- Copiando estrutura para tabela transporte.endereco_resp
DROP TABLE IF EXISTS `endereco_resp`;
CREATE TABLE IF NOT EXISTS `endereco_resp` (
  `id_end_resp` int(11) NOT NULL AUTO_INCREMENT,
  `localidade_resp` varchar(255) DEFAULT NULL,
  `numero_resp` varchar(10) DEFAULT NULL,
  `complemento_resp` varchar(50) DEFAULT NULL,
  `bairro_resp` varchar(50) DEFAULT NULL,
  `cep_resp` varchar(10) NOT NULL,
  `cidade_resp` varchar(50) DEFAULT NULL,
  `estado_resp` varchar(50) DEFAULT NULL,
  `cpf_resp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_end_resp`),
  UNIQUE KEY `cpf_resp` (`cpf_resp`),
  KEY `FK_endereco_resp_responsavel` (`cpf_resp`),
  CONSTRAINT `FK_endereco_resp_responsavel` FOREIGN KEY (`cpf_resp`) REFERENCES `responsavel` (`cpf_resp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.endereco_resp: ~4 rows (aproximadamente)
DELETE FROM `endereco_resp`;
/*!40000 ALTER TABLE `endereco_resp` DISABLE KEYS */;
INSERT INTO `endereco_resp` (`id_end_resp`, `localidade_resp`, `numero_resp`, `complemento_resp`, `bairro_resp`, `cep_resp`, `cidade_resp`, `estado_resp`, `cpf_resp`) VALUES
	(1, 'Rua Maria Silvina Tavares', '62', 'Trav 7', 'Morro do Indio', '05873-270', 'SÃ£o Paulo', 'SP', '418.748.938-02'),
	(6, 'fsad', 'fda', 'fds', 'fdsa', '54545-455', 'fsdafsd', 'TO', '787.945.612-12'),
	(9, '', '', '', '', '', '', 'Selecione...', '545.456.435-15');
/*!40000 ALTER TABLE `endereco_resp` ENABLE KEYS */;


-- Copiando estrutura para tabela transporte.escola
DROP TABLE IF EXISTS `escola`;
CREATE TABLE IF NOT EXISTS `escola` (
  `id_escola` int(11) NOT NULL AUTO_INCREMENT,
  `nome_escola` varchar(50) DEFAULT NULL,
  `tel_escola` varchar(50) DEFAULT NULL,
  `tel2_escola` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_escola`),
  KEY `nome_escola` (`nome_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.escola: ~12 rows (aproximadamente)
DELETE FROM `escola`;
/*!40000 ALTER TABLE `escola` DISABLE KEYS */;
INSERT INTO `escola` (`id_escola`, `nome_escola`, `tel_escola`, `tel2_escola`) VALUES
	(1, 'Aracati 2', NULL, NULL),
	(2, 'Soiche Mabe', NULL, NULL),
	(3, 'Tereza Margarida', NULL, NULL),
	(4, 'Gil Vicente', NULL, NULL),
	(5, 'Peratuba 1', NULL, NULL),
	(6, 'Peratuba 2', NULL, NULL),
	(7, 'Ciranda do Saber', NULL, NULL),
	(8, 'Juliao', NULL, NULL),
	(9, 'Santa Monica', NULL, NULL),
	(10, 'Bom Pastor', NULL, NULL),
	(11, 'Baby Happy', NULL, NULL),
	(12, 'Mae Zaza 1', NULL, NULL),
	(13, 'Mae Zaza 2', NULL, NULL);
/*!40000 ALTER TABLE `escola` ENABLE KEYS */;


-- Copiando estrutura para tabela transporte.parcela
DROP TABLE IF EXISTS `parcela`;
CREATE TABLE IF NOT EXISTS `parcela` (
  `id_parcela` int(11) NOT NULL AUTO_INCREMENT,
  `dt_pagamento` date NOT NULL,
  `dt_vencimento` date NOT NULL,
  `valor` double NOT NULL,
  `valor_pg` double NOT NULL,
  `pago` varchar(20) NOT NULL,
  `cpf_resp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_parcela`),
  KEY `FK_parcela_responsavel` (`cpf_resp`),
  CONSTRAINT `FK_parcela_responsavel` FOREIGN KEY (`cpf_resp`) REFERENCES `responsavel` (`cpf_resp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.parcela: ~0 rows (aproximadamente)
DELETE FROM `parcela`;
/*!40000 ALTER TABLE `parcela` DISABLE KEYS */;
INSERT INTO `parcela` (`id_parcela`, `dt_pagamento`, `dt_vencimento`, `valor`, `valor_pg`, `pago`, `cpf_resp`) VALUES
	(1, '2015-06-02', '2015-06-01', 90, 50, 'Atraso', '418.748.938-02'),
	(2, '2015-06-15', '2015-06-16', 100, 100, 'Pago', '545.456.435-15');
/*!40000 ALTER TABLE `parcela` ENABLE KEYS */;


-- Copiando estrutura para tabela transporte.responsavel
DROP TABLE IF EXISTS `responsavel`;
CREATE TABLE IF NOT EXISTS `responsavel` (
  `id_resp` int(11) NOT NULL AUTO_INCREMENT,
  `nome_resp` varchar(50) DEFAULT NULL,
  `sexo_resp` varchar(10) DEFAULT NULL,
  `dt_nasc_resp` date DEFAULT NULL,
  `cpf_resp` varchar(20) DEFAULT NULL,
  `rg_resp` varchar(15) DEFAULT NULL,
  `num_dependentes` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  `tel_principal` varchar(20) DEFAULT NULL,
  `tel_recado` varchar(20) DEFAULT NULL,
  `data de cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL,
  `condicao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_resp`),
  UNIQUE KEY `cpf_resp` (`cpf_resp`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela transporte.responsavel: ~3 rows (aproximadamente)
DELETE FROM `responsavel`;
/*!40000 ALTER TABLE `responsavel` DISABLE KEYS */;
INSERT INTO `responsavel` (`id_resp`, `nome_resp`, `sexo_resp`, `dt_nasc_resp`, `cpf_resp`, `rg_resp`, `num_dependentes`, `email`, `senha`, `tel_principal`, `tel_recado`, `data de cadastro`, `status`, `condicao`) VALUES
	(1, 'Matheus Martins Vargas', 'Masculino', '1996-06-30', '418.748.938-02', '387612336', 1, 'matheus-kbc@hotmail.com', '123', '(11) 9606-52052', '(11) 5834-0661', '2015-05-15 10:58:20', 'Ativo', 'Adm'),
	(6, 'fdsadsf', 'Masculino', '2015-06-12', '787.945.612-12', '44545454', 1, 'fsafd@fsdasd', '123', '(51) 5485-12451', '(45) 1220-4512', '2015-06-12 11:11:37', 'Inativo', 'Cliente'),
	(9, 'fasdsfd', 'Masculino', '2015-06-12', '545.456.435-15', '15512', 35, 'fasds@dfasd', '123', '(53) 5315-34531', '(51) 2513-2515', '2015-06-12 11:38:26', 'Ativo', 'Cliente');
/*!40000 ALTER TABLE `responsavel` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
