-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.4.3 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para cuphead
CREATE DATABASE IF NOT EXISTS `cuphead` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cuphead`;

-- Copiando estrutura para tabela cuphead.bosses
CREATE TABLE IF NOT EXISTS `bosses` (
  `boss_id` int NOT NULL AUTO_INCREMENT,
  `boss_name` varchar(100) DEFAULT NULL,
  `lvl_id` int NOT NULL,
  PRIMARY KEY (`boss_id`),
  KEY `lvl_id` (`lvl_id`),
  CONSTRAINT `bosses_ibfk_1` FOREIGN KEY (`lvl_id`) REFERENCES `level` (`lvl_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cuphead.bosses: ~0 rows (aproximadamente)
DELETE FROM `bosses`;
INSERT INTO `bosses` (`boss_id`, `boss_name`, `lvl_id`) VALUES
	(25, 'Cala Maria', 7),
	(26, 'Genésio, o Magnífico', 8),
	(27, 'Rei Dado', 9),
	(28, 'O Diabo', 10),
	(29, 'Muuria Bonita', 11),
	(30, 'Cactônio Spinoza', 12);

-- Copiando estrutura para tabela cuphead.characters
CREATE TABLE IF NOT EXISTS `characters` (
  `char_id` int NOT NULL AUTO_INCREMENT,
  `char_name` varchar(50) DEFAULT NULL,
  `char_esp` varchar(50) DEFAULT NULL,
  `char_gend` char(2) DEFAULT NULL,
  `supart_id` int DEFAULT NULL,
  `weapon1_id` int DEFAULT NULL,
  `weapon2_id` int DEFAULT NULL,
  `charm_id` int DEFAULT NULL,
  PRIMARY KEY (`char_id`),
  KEY `supart_id` (`supart_id`),
  KEY `weapon1_id` (`weapon1_id`),
  KEY `weapon2_id` (`weapon2_id`),
  KEY `charm_id` (`charm_id`),
  CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`supart_id`) REFERENCES `superart` (`supart_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `characters_ibfk_2` FOREIGN KEY (`weapon1_id`) REFERENCES `weapons` (`weapon_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `characters_ibfk_3` FOREIGN KEY (`weapon2_id`) REFERENCES `weapons` (`weapon_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `characters_ibfk_4` FOREIGN KEY (`charm_id`) REFERENCES `charms` (`charm_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cuphead.characters: ~0 rows (aproximadamente)
DELETE FROM `characters`;

-- Copiando estrutura para tabela cuphead.charms
CREATE TABLE IF NOT EXISTS `charms` (
  `charm_id` int NOT NULL AUTO_INCREMENT,
  `charm_name` varchar(50) DEFAULT NULL,
  `charm_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`charm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cuphead.charms: ~0 rows (aproximadamente)
DELETE FROM `charms`;
INSERT INTO `charms` (`charm_id`, `charm_name`, `charm_desc`) VALUES
	(1, 'Heart', 'Adiciona uma vida extra mas enfraquece levemente seu dano.'),
	(2, 'Smoke Bomb', 'Você não toma dano durante seu dash. Uma boa estratégia de defesa.'),
	(3, 'P. Sugar', 'O parry é automático - Só é preciso pular.'),
	(4, 'Coffee', 'As cargas de especial enchem constantemente -- mais o que você carrega normalmente.'),
	(5, 'Twin Heart', 'Adiciona duas vidas mas enfraquece seu dano.'),
	(6, 'Wheatstone', 'Seu parry também causa dano'),
	(7, 'Astral Cookie', 'Jogue com a Srta. Cálice e tenha acesso ao seu moveset'),
	(8, 'Heart King', 'Regenera um de HP para o primeiro, terceiro e sexto parry'),
	(9, 'Broken Relic', 'Um item simples de origem misteriosa');

-- Copiando estrutura para tabela cuphead.level
CREATE TABLE IF NOT EXISTS `level` (
  `lvl_id` int NOT NULL AUTO_INCREMENT,
  `lvl_name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`lvl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cuphead.level: ~0 rows (aproximadamente)
DELETE FROM `level`;
INSERT INTO `level` (`lvl_id`, `lvl_name`) VALUES
	(7, 'Alto Mar Hi-Jinx!'),
	(8, 'Pirâmides Problemáticas'),
	(9, 'Façam Suas Apostas!'),
	(10, 'Diversão Infernal'),
	(11, 'Sertão do Cangaço'),
	(12, 'Fúria Floral');

-- Copiando estrutura para tabela cuphead.superart
CREATE TABLE IF NOT EXISTS `superart` (
  `supart_id` int NOT NULL AUTO_INCREMENT,
  `supeart_name` varchar(50) DEFAULT NULL,
  `supart_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`supart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cuphead.superart: ~0 rows (aproximadamente)
DELETE FROM `superart`;
INSERT INTO `superart` (`supart_id`, `supeart_name`, `supart_desc`) VALUES
	(1, 'Energy Beam', 'Um devastador ataque que sai de suas cabeças. Apenas horizontalmente. Da 87 de dano.'),
	(2, 'Invincibility', 'Atravesse o plano astral para se tornar invulnerável por um curto período de tempo.'),
	(3, 'Giant Ghost', 'Cria um fantasma gigante giratório que da 5 de dano por hit e 127.5 se conseguir acertar todos eles. Após desaparecer, deixa um coração rosa que você pode dar parry.'),
	(4, 'Spiral Pillar', 'A versão vertical do Energy Beam que causa 107.5 de dano.'),
	(5, 'Shield Pal', 'Invoca um escudo que tomará um hit extra para você'),
	(6, 'Ghostly Barrage', 'Liberta a forma ancestral da Srta. Cálice e lança uma rajada espectral. Cada fantasma causa 2.5 de dano, e todos causam 125.5. Deixa para trás uma lança rosa que você pode dar parry.');

-- Copiando estrutura para tabela cuphead.weapons
CREATE TABLE IF NOT EXISTS `weapons` (
  `weapon_id` int NOT NULL AUTO_INCREMENT,
  `weapon_name` varchar(50) DEFAULT NULL,
  `weapon_dmg` decimal(5,2) NOT NULL,
  `weapon_dps` decimal(5,2) NOT NULL,
  `weapon_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`weapon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cuphead.weapons: ~9 rows (aproximadamente)
DELETE FROM `weapons`;
INSERT INTO `weapons` (`weapon_id`, `weapon_name`, `weapon_dmg`, `weapon_dps`, `weapon_desc`) VALUES
	(10, 'Peashooter', 4.00, 30.00, 'Arma padrão. Longo alcance e dano médio.'),
	(11, 'Spread', 6.20, 41.33, 'Um tiro de curta distância com bom dano -- se conseguir ficar próximo do alvo.'),
	(12, 'Chaser', 2.85, 17.10, 'Tiro de longa distância com dano abaixo da média. Não necessita de mira.'),
	(13, 'Lobber', 11.60, 33.14, 'Médio alcance e ótimo dano com um cadência de disparos menor.'),
	(14, 'Charge', 46.00, 35.38, 'Segurar o ataque aumenta o dano. Sem tiros rápidos, então a precisão é a chave.'),
	(15, 'Roundabout', 8.50, 31.87, 'Uma grande cobertura com dano mediano. Mire de costas para maximizar o alcance.'),
	(16, 'Crackshot', 10.56, 30.00, 'Tiro retilíneo com bom dano. Se divide em tiros menores e mais fracos.'),
	(17, 'Converge', 8.01, 33.00, 'Dispara três raios elétricos perfurantes que atravessam inimigos.'),
	(18, 'TwistUp', 6.99, 32.00, 'Atira rapidamente em direção arqueada. Dano médio.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
