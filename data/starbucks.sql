/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  TianyangLiu
 * Created: Dec 8, 2016
 */

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starbucks`
--

DROP TABLE IF EXISTS 'Inventories';
CREATE TABLE 'Inventories' (
    'id' varchar(11) NOT NULL,
    'name' varchar(64) NOT NULL,
    'quantity' varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `Inventories`
  ADD PRIMARY KEY (`id`);

INSERT INTO 'Inventories' ('id', 'name', 'quantity') VALUES
(1, 'Milk', 1000),
(2, 'Ice', 1000),
(3, 'Sugar', 1000),
(4, 'Water', 1000),
(5, 'Banana', 1000),
(6, 'Blueberry', 1000),
(7, 'Apple', 1000),
(8, 'Grape', 1000),
(9, 'Orange', 1000),
(10, 'Coconut Milk', 1000),
(11, 'Honey', 1000),
(12, 'Lime Refresher Base', 1000),
(13, 'Berry Refresher Base', 1000),
(14, 'Classic Syrup', 1000),
(15, 'An Infusion Of', 1000),
(16, 'Mocha Sauce', 1000),
(17, 'Whipped Cream', 1000),
(18, 'Vanilla Syrup', 1000),
(19, 'Chili Mocha Powder', 1000),
(20, 'Spiced Mocha Topping', 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
