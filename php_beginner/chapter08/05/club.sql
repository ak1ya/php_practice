-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 5 月 14 日 19:50
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sample`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `club`
--

CREATE TABLE `club` (
  `club_id` int(2) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `count` tinyint(2) NOT NULL,
  `overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `count`, `overview`) VALUES
(1, '球技愛好会', 4, '毎週日曜日に市営体育館で球技をしています。'),
(2, 'ハイキング', 1, '月に1度日曜日にハイキングをしています。'),
(3, 'ジャズ同好会', 2, '不定期で活動しています。'),
(4, '料理部', 4, 'レンタルキッチンをレンタルします。');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
