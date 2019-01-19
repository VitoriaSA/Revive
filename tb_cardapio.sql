-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2018 às 00:39
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_revive`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cardapio`
--

CREATE TABLE `tb_cardapio` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `TIPO` varchar(30) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `DESCRICAO` varchar(150) NOT NULL,
  `VALOR` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cardapio`
--

INSERT INTO `tb_cardapio` (`ID`, `NOME`, `TIPO`, `FOTO`, `DESCRICAO`, `VALOR`) VALUES
(1, 'Alagoas Burger', 'Hambúrguers', 'Imagens/Fotos/burger1.jpg', 'Hamburguer clássico de 160g grelhado com picles de pimenta, queijo prato, maionese sujinho e alface no pão de hamburguer', 30),
(2, 'Itacolomi Burger', 'Hambúrguers', 'Imagens/Fotos/burger2.jpg', 'Hamburguer de salmão de 160g grelhado com cogumelo shitake, chapeados com molho shoyo e catupiry no pão de hamburguer', 35),
(3, 'Cerveja Artesanal', 'Bebidas', 'Imagens/Fotos/bebidas1.jpg', 'Unidade', 20),
(4, 'Batata frita rústica ', 'Porcoes', 'Imagens/Fotos/porcoes1.jpg', 'Porção de batata frita', 25),
(5, 'Refrigerantes', 'Bebidas', 'Imagens/Fotos/bebidas2.jpg', 'Latinha', 6),
(6, 'Milk Shake', 'Sobremesas', 'Imagens/Fotos/sobremesa1.jpg', 'Milk Shake de diversos sabores', 15),
(7, 'Combo 1', 'Combos', 'Imagens/Fotos/combo1.jpg', 'Hamburguer, batata frita', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cardapio`
--
ALTER TABLE `tb_cardapio`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cardapio`
--
ALTER TABLE `tb_cardapio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
