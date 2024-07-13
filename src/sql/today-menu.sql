-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql
-- 生成日時: 2024 年 7 月 13 日 15:27
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
-- テーブルの構造 `today-menu`
--

CREATE TABLE `today-menu` (
  `id` int NOT NULL,
  `status` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `today-menu`
--

INSERT INTO `today-menu` (`id`, `status`, `name`, `price`) VALUES
(1, 0, 'カレーライス', '380'),
(2, 1, '台湾ラーメン', '380'),
(3, 2, 'ナポリタン', '500'),
(4, 3, 'エビカツ', '600'),
(5, 4, 'スターゲイジーパイ', '700');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `today-menu`
--
ALTER TABLE `today-menu`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `today-menu`
--
ALTER TABLE `today-menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
