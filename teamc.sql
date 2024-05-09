-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-05-09 07:38:26
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `teamc`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `quetion_id` int(11) NOT NULL,
  `image_filename` varchar(255) DEFAULT NULL,
  `bestans` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `answers`
--

INSERT INTO `answers` (`answer_id`, `user_id`, `text`, `quetion_id`, `image_filename`, `bestans`) VALUES
(1, 2, 'いいと思います', 1, NULL, 0),
(2, 1, '出来てるやん', 3, NULL, 0),
(3, 1, 'テスト', 3, NULL, 0),
(4, 1, 'テスト', 1, NULL, 0),
(5, 1, 'いいですね', 1, NULL, 0),
(6, 1, 'ああああ', 16, NULL, 1),
(7, 1, 'aaa', 17, NULL, 0),
(8, 1, 'いいですね', 17, NULL, 0),
(9, 1, 'こんにちは', 17, NULL, 0),
(10, 10, 'いいね', 3, NULL, 0),
(11, 11, '神戸です', 19, NULL, 0),
(12, 11, '神戸でした', 19, NULL, 0),
(13, 12, '神戸ですか', 19, NULL, 1),
(14, 12, 'aaa?', 20, NULL, 1),
(15, 12, 'ほんまにな', 18, NULL, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `section_title` mediumtext DEFAULT NULL,
  `section_text` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `good` int(255) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `user_id`, `section_title`, `section_text`, `tag`, `good`, `created_at`, `updated_at`) VALUES
(1, '', 1, NULL, '作りました', '', 0, '2024-04-25 05:56:34', '2024-05-01 00:53:08'),
(2, 'てすととうこう', 3, 'はじめに//つぎに//', 'てすとです//てすです//', 'test', 1, '2024-04-30 02:51:48', '2024-05-02 00:40:08'),
(3, 'てすととうこう', 3, 'はじめに//つぎに//', 'てすとです//てすです//', 'test', 2, '2024-04-30 02:53:18', '2024-05-02 00:40:11'),
(4, 'てすととうこう', 3, 'はじめに//', 'てすとです//', 'test', 1, '2024-04-30 02:53:22', '2024-05-02 00:39:59'),
(5, 'てすととうこう', 3, 'はじめに//', 'てすとです//', 'test', 1, '2024-04-30 02:53:34', '2024-05-02 00:40:01'),
(6, 'テスト', 12, '作り方//コード//', 'このアプリでは//...//', 'C#', 1, '2024-05-01 00:38:55', '2024-05-02 00:40:02');

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_filename` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `review` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `user_id`, `text`, `image_filename`, `review`) VALUES
(1, 4, 10, 'さ', NULL, NULL),
(2, 5, 10, 'ささ', NULL, NULL),
(3, 5, 10, 'sasa', NULL, NULL),
(4, 5, 10, 'sasa', NULL, NULL),
(5, 5, 14, 'ｗｗｗｗｗ', NULL, NULL),
(6, 5, 14, 'ｗｗｗｗ', NULL, 4),
(7, 6, 14, 'aaaaaaaaaaaa', NULL, 4),
(8, 6, 14, 'aaaaaaa', NULL, 5);

-- --------------------------------------------------------

--
-- テーブルの構造 `goodarticle`
--

CREATE TABLE `goodarticle` (
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `good` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `goodarticle`
--

INSERT INTO `goodarticle` (`article_id`, `user_id`, `good`) VALUES
(2, 0, 1),
(1, 0, 1),
(1, 4, 0),
(2, 4, 1),
(1, 5, 1),
(2, 5, 0),
(1, 6, 0),
(2, 6, 0),
(1, 7, 0),
(1, 8, 1),
(2, 8, 0),
(1, 9, 1),
(2, 9, 0),
(1, 10, 0),
(2, 10, 1),
(5, 12, 0),
(3, 12, 1),
(2, 12, 1),
(4, 12, 1),
(1, 12, 1),
(5, 10, 1),
(4, 10, 1),
(3, 10, 1),
(6, 10, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `image_filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `question`
--

INSERT INTO `question` (`question_id`, `user_id`, `text`, `tag`, `image_filename`, `created_at`, `updated_at`) VALUES
(1, 1, '作りたいです', 'C#', NULL, '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(2, 1, 'AIを活用する', 'Python', NULL, '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(3, 1, '初めまして！！！神戸電子専門学校の学生に向けた情報共有サイトの作成を現在行っているのですが、○○が中々上手く行かず苦戦しています。テキストの文字数が多すぎると...に変更出来るようにすることが現在取り組んでいる課題です。', 'C#', NULL, '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(12, 1, '今回作ろうと思っている物は....', 'C#', NULL, '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(13, 1, '今作っているショッピングサイトに以下の機能を追加したいです。\r\n\r\n・カート\r\n・ユーザー\r\n・ジャンル検索\r\n\r\nこのうちジャンル検索だけ上手く出来ませんでした。', 'PHP', '0J01018 (2).png', '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(14, 1, 'Pythonで作成したいです', 'Python', NULL, '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(15, 4, 'a', 'aa', NULL, '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(16, 10, '神戸太郎です', '神戸', NULL, '2024-04-24 05:43:28', '2024-04-24 05:43:28'),
(17, 10, 'こんにちは', 'C#', NULL, '2024-04-24 05:54:55', '2024-04-24 05:54:55'),
(18, 10, 'aa', 'a', NULL, '2024-04-25 05:49:16', '2024-04-25 05:49:16'),
(19, 10, 'インプット\r\nこんにちは\r\n私はC#\r\nPythonのKotlin\r\nそのPHPは私のHTMLですか？\r\nいいえrubyです。SQL!?なに？\r\nこのC++\r\nそんな私のCSS\r\nです', 'C++', NULL, '2024-04-26 04:54:24', '2024-05-01 00:46:38'),
(20, 10, 'aa', 'a', NULL, '2024-04-30 00:34:54', '2024-04-30 00:34:54'),
(21, 12, 'テスト', 'C#,C,Python', NULL, '2024-05-01 00:30:21', '2024-05-01 00:30:21'),
(22, 12, 'てすとのとうこう', 'あ', NULL, '2024-05-01 00:36:59', '2024-05-01 00:36:59');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT '',
  `name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `icon_filename` varchar(255) DEFAULT 'defaulticon.png',
  `point` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `password`, `icon_filename`, `point`) VALUES
(1, 'aaaa@gmail.com', '山田太郎', '123456789', 'defaulticon.png', 0),
(2, 'bbbb@gmail.com', '山田二郎', '987654321', 'defaulticon.png', 0),
(3, 'syu@gmail.com', 'syu', '$2y$10$PK7NxXgaNLgQrR859e7OUeObTIZXuDQy/hXTonukwfGdP.3ioG2/G', 'defaulticon.png', 0),
(4, 'syuto@gmail.com', 'syuto', '$2y$10$aIhxfvn0qjv2PkjgMJLJ1OJyiizK4n7SWRB8r8gOFWs5RfuSVLigC', 'defaulticon.png', 0),
(5, 'syuto2@gmail.com', '住谷柊斗', '$2y$10$8BbdFDnxrSjlPyFTqJwBfONGGxqaMxZitiFAoLvLUWhY0604Uk.Im', 'defaulticon.png', 0),
(6, 'syuto123@gmail.com', 'しゅ', '$2y$10$Kg8EsKH61ygx0ZLDDA61hO.SgLl17OW8pg4Ai7RdWMRbh0CURObKW', 'defaulticon.png', 0),
(7, 'aa@aaaa', 'a', '$2y$10$YbWEawvqtVgcmpWGpyKx3uy5KJsGtTdH9RfJYE1FSpGBIfwWlGynK', 'defaulticon.png', 0),
(8, 'a@aaa', 'a', '$2y$10$EyNkK41CsXzKBkN8tN4O3ew8WKBfuaFNXcmrihLqr1gdHcN9tiNXG', 'defaulticon.png', 0),
(9, 'a@a', 'aaaaa', '$2y$10$LtITLEVD34Sxo2oWysI.DeARRSsGBpqhHlN5pY0kg3a/XIC708Q6S', 'defaulticon.png', 0),
(10, 'kobe@gmail.com', '神戸太郎', '$2y$10$CpFA6OJqPAzEVxzIAKnn0uYFshMrbSyW0NkxHDxNtXrj/ULp7CgQK', 'tomato.jpg', 0),
(11, 'kobe2@gmail.com', '神戸太郎セカンド', '$2y$10$9JAmK5.d0JOb1XW2UzHU2uXP4YgvOWJXtue/bn84m0aN3gVI0jwPy', 'defaulticon.png', 0),
(12, 'kobe3@gmail.com', '神戸太郎サード', '$2y$10$c8E45RisebKkvLPl0520JOiZaDZcFseNJO1BfUhkwOfNJlaOeJSpK', 'defaulticon.png', 2),
(13, 'kishiyutaka0000@gmail.com', 'スギハラユタ', '$2y$10$.qkXEBEPFAmjlRrwdd/GJuHlCTttM30fgKvqOKmTrfzQDSZ3xmrRm', NULL, 0),
(14, 'kishiyutaka00@gmail.com', '杉原優孝', '$2y$10$Hv7gevZmgfg8JSrvAiAJCuTFbyCheR5Zo9KvpU9iL/38TSfdSaY2a', 'defaulticon.png', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- テーブルのインデックス `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- テーブルのインデックス `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`) USING BTREE;

--
-- テーブルのインデックス `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
