-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql
-- 生成日時: 2024 年 7 月 13 日 15:28
-- サーバのバージョン： 9.0.0
-- PHP のバージョン: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `today-menu`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `photo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'curryrice.png',
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'カレーライス',
  `price` int NOT NULL DEFAULT '380'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `menu`
--

INSERT INTO `menu` (`id`, `photo`, `name`, `price`) VALUES
(1, 'curry_rice.png', 'カレーライス', 380),
(2, 'taiwan_ramen.png', '台湾ラーメン', 600),
(3, 'neapolitan.png', 'ナポリタン', 500),
(4, 'ebikatsu.png', 'エビカツ', 600),
(5, 'stargazy_pie.png', 'スターゲイジーパイ', 700),
(6, 'udon.png', 'うどん', 400),
(7, 'gapao_rice.png', 'ガパオライス', 450),
(8, 'syougayaki.png', '生姜焼き', 520),
(9, 'shiromi_sakana.png', '白身魚', 480),
(10, 'karaage.png', '唐揚げ', 600),
(11, 'soba.png', 'そば', 400);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
