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
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `club_id` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `email`, `club_id`) VALUES
(1, '鈴木太郎', 26, 'sample1@sample1.com', 1),
(2, '中村花子', 46, 'sample2@sample2.com', 2),
(3, '佐藤次郎', 67, 'prepare@statement.com', 4),
(4, '山本京子', 38, 'sample4@sample4.com', 3),
(5, '田中三郎', 28, 'sample5@sample5.com', 3),
(6, '田中三郎', 28, 'sample5@sample5.com', 1),
(7, '太田美香', 32, NULL, 4);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
