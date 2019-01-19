--
-- Base de Dados: `db_revive`
--
CREATE DATABASE IF NOT EXISTS `db_revive`
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `db_revive`;

-- --------------------------------------------------------
-- Estrutura da tabela `tb_cardapio`

CREATE TABLE IF NOT EXISTS `tb_cardapio` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(40) NOT NULL,
  `TIPO` varchar(30) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `DESCRICAO` varchar(150) NOT NULL,
  `VALOR` float NOT NULL,
  PRIMARY KEY (`ID`)
) DEFAULT CHARSET=utf8;


-- ------------------------
-- Usuário BD


CREATE USER 'dbadmin'@'localhost' IDENTIFIED BY 'dbadmin';

GRANT ALL PRIVILEGES ON `db_revive` . * TO 'dbadmin'@'localhost';
