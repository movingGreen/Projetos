-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.36 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela bd_teste_php.cliente: 5 rows
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`ID_Cliente`, `nome`, `sexo`, `cpf`) VALUES
	(1, 'PlÃ¡cido David', 'M', '98363847111'),
	(2, 'Pedrinho WÃ¡lter', 'M', '98560861111'),
	(3, 'Cezar Joel', 'M', '48399422111'),
	(4, 'Ã“scar Teobaldo', 'M', '37683400111'),
	(5, 'Valente Ademar', 'M', '49360005111');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando dados para a tabela bd_teste_php.compra: 10 rows
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` (`ID_Compra`, `DT_Compra`, `VL_Total_Compra`, `Atendente`, `ID_Forma_Pagto`, `ID_Cliente`, `ID_Compra_Produto`) VALUES
	(1, '2022-10-10', 510.00, 'Atendente 1', 1, 1, 1),
	(2, '2022-05-11', 100.00, 'Atendente 2', 3, 2, 2),
	(3, '2022-03-12', 173.00, 'Atendente 3', 4, 3, 3),
	(4, '2022-07-13', 1293.90, 'Atendente 4', 5, 4, 4),
	(5, '2022-12-14', 102.00, 'Atendente 5', 2, 5, 5),
	(6, '2022-11-15', 500.00, 'Atendente 6', 1, 4, 6),
	(7, '2022-09-16', 45.60, 'Atendente 7', 4, 3, 7),
	(8, '2022-02-17', 300.00, 'Atendente 8', 5, 2, 8),
	(9, '2022-10-18', 190.30, 'Atendente 9', 2, 1, 9),
	(10, '2022-06-19', 153.00, 'Atendente 10', 3, 5, 10);
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

-- Copiando dados para a tabela bd_teste_php.compra_produto: 20 rows
/*!40000 ALTER TABLE `compra_produto` DISABLE KEYS */;
INSERT INTO `compra_produto` (`ID_Compra_Produto`, `QTD_Comprada`, `VL_Total_Item`, `ID_Produto`) VALUES
	(1, 100, 510.00, 4),
	(2, 1, 100.00, 2),
	(3, 10, 173.00, 5),
	(4, 15, 1293.90, 3),
	(5, 20, 102.00, 4),
	(6, 5, 500.00, 2),
	(7, 3, 45.60, 1),
	(8, 4, 300.00, 2),
	(9, 11, 190.30, 5),
	(10, 30, 153.00, 4),
	(11, 2, 10.20, 4),
	(12, 50, 865.00, 5),
	(13, 7, 603.82, 3),
	(14, 10, 1000.00, 2),
	(15, 2, 34.60, 5),
	(16, 1, 15.20, 1),
	(17, 18, 91.80, 4),
	(18, 15, 259.50, 5),
	(19, 12, 182.40, 1),
	(20, 6, 30.60, 4);
/*!40000 ALTER TABLE `compra_produto` ENABLE KEYS */;

-- Copiando dados para a tabela bd_teste_php.forma_pagto: 5 rows
/*!40000 ALTER TABLE `forma_pagto` DISABLE KEYS */;
INSERT INTO `forma_pagto` (`ID_Forma_Pagto`, `Descricao`) VALUES
	(1, 'BOLETO'),
	(2, 'CRÃ‰DITO'),
	(3, 'DÃ‰BITO'),
	(4, 'DINHEIRO'),
	(5, 'VALE ALIMENTAÃ‡ÃƒO');
/*!40000 ALTER TABLE `forma_pagto` ENABLE KEYS */;

-- Copiando dados para a tabela bd_teste_php.produto: 5 rows
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`ID_Produto`, `VL_Unitario`, `Descricao`, `DT_Validade`, `DT_Fabricacao`, `Lote`, `QTD_Estoque`, `Marca`) VALUES
	(1, 15.20, 'produto A', '2023-12-04', '2021-05-02', 1022, 90, 'marca x'),
	(2, 100.00, 'produto B', '2024-11-08', '2020-09-12', 4123, 5, 'marca y'),
	(3, 86.26, 'produto C', '2022-10-24', '2021-10-05', 14327, 190, 'marca z'),
	(4, 5.10, 'produto D', '2025-07-19', '2021-11-14', 834, 385, 'marca xx'),
	(5, 17.30, 'produto E', '2022-12-26', '2021-08-30', 1256, 20, 'marca yy');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
