-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Haz 2021, 22:14:39
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webarsiv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `archives`
--

CREATE TABLE `archives` (
  `arsivid` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `arsivadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `arsivturu` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `arsivkategori` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `arsivfoto` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `arsivaciklama` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `arsivicerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `arsivlike` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `archives`
--

INSERT INTO `archives` (`arsivid`, `username`, `userid`, `arsivadi`, `arsivturu`, `arsivkategori`, `arsivfoto`, `arsivaciklama`, `arsivicerik`, `arsivlike`) VALUES
(44, 'Anonim', 12, 'Youtube ve Reklamları', 'Anonim Arşiv', 'Sosyal Medya', 'ilkarsivfotom.jpg', 'Youtube Reklamları ve Süresi', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, ducimus nobis dignissimos pariatur id iste tempora soluta velit delectus voluptate nulla ab necessitatibus ipsa, veritatis, quos ad! Alias, quia nobis.', 7),
(48, 'Batuhan Aksoy ', 12, 'Hayvanlar Alemi', 'Kullanıcı Bazlı Arşiv', 'Hayvanlar', 'hyvnfoto.jpg', 'İlgi Çekici Hayvanlar Derlemesi', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dignissimos officia beatae placeat hic. A dignissimos sequi ipsa alias beatae velit earum aperiam, reiciendis ex? Magni ullam cumque perspiciatis quisquam?', 2),
(49, 'Anonim', 12, 'Programlama Dilleri', 'Anonim Arşiv', 'Programlama Dilleri', 'prgfoto.jpg', 'Başlangıç Seviyesi Programlama Dilleri', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugit soluta a maiores, adipisci pariatur eligendi corporis in debitis odit vel neque quia non tenetur provident dolores quos quaerat voluptate.', 7),
(50, 'Batuhan Aksoy ', 12, 'Facebook Gerçekleri', 'Kullanıcı Bazlı Arşiv', 'Sosyal Medya', 'faceimage.png', 'Facebook Hakkında Bilinmeyen Gerçekler', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste modi necessitatibus totam. Quaerat, ipsum cum? Earum harum, qui aperiam nisi cupiditate deserunt aliquam quam, soluta officiis distinctio reiciendis ad sint!', 1),
(51, 'Anonim', 12, 'Müzik Zevki', 'Anonim Arşiv', 'Müzik', 'muzik.jpg', 'Müziğin verdiği haz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?', 9),
(52, 'Batuhan Aksoy ', 12, 'Apple Teknolojisi', 'Kullanıcı Bazlı Arşiv', 'Teknoloji', 'images.png', 'Apple Kalitesi neden böyle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus, error ducimus pariatur enim nobis magni consequatur. Possimus asperiores cumque sunt magni rem magnam eos, harum ducimus exercitationem, quidem iure?', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `kategoriid` int(11) NOT NULL,
  `kategoriadi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kategorifoto` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `arsivsayisi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`kategoriid`, `kategoriadi`, `kategorifoto`, `arsivsayisi`) VALUES
(1, 'Sosyal Medya', 'ss.jpg', 2),
(2, 'Hayvanlar', 'hh.jpg', 1),
(3, 'Programlama Dilleri', 'p.jpg', 1),
(4, 'Üniversite', 'üni.png', 0),
(5, 'İnternet', 'int.png', 0),
(6, 'Teknoloji', 'ww.png', 1),
(7, 'Müzik', 'm.jpg', 1),
(8, 'Spor', 'spor.jpg', 0),
(9, 'Genel', 'genel.jpg', 0),
(10, 'İş', 'is.jpg', 0),
(11, 'Kitap', 'k.png', 0),
(12, 'Diğer', 'diger.jpg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `yorumid` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `arsivid` int(11) NOT NULL,
  `yorum` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`yorumid`, `username`, `userid`, `arsivid`, `yorum`) VALUES
(6, 'Batuhan Aksoy ', 12, 52, 'İlk Yorum'),
(7, 'Anonim', 13, 52, 'Farklı Kullanıcı Yorumu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `iletisimid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `useremail` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `iletisimturu` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `iletisimmesaj` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`iletisimid`, `userid`, `username`, `useremail`, `iletisimturu`, `iletisimmesaj`) VALUES
(1, 12, 'Batuhan Aksoy ', 'asda@gmail.com', 'Bilgi Almak', 'ilk iletişim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `karchives`
--

CREATE TABLE `karchives` (
  `karsivid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `karsivadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `karsivtarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `karchives`
--

INSERT INTO `karchives` (`karsivid`, `userid`, `karsivadi`, `karsivtarih`) VALUES
(12, 12, 'eem final takvimi.pdf', '2021-06-13'),
(13, 12, 'pc final takvimi.pdf', '2021-06-13'),
(14, 12, 'r5.jpg', '2021-06-13'),
(19, 12, 'Deney 2 Tablolar.docx', '2021-06-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `userps` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `useremail` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `usertel` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`userid`, `username`, `userps`, `useremail`, `usertel`) VALUES
(12, 'Batuhan Aksoy ', 'MTIzNDU2Nzg=', 'batu@gmail.com', '12123123123'),
(13, 'Kullanıcı2', 'MTIzNDU2Nzg=', 'kullanici@gmail.com', '23423232323'),
(14, 'Kullanıcı3', 'MTIzNDU2Nzg=', 'asda@gmail.com', '23423232323'),
(20, 'rexius34', 'MTIzNDU2Nzg=', 'asda@gmail.com', '23423232323');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`arsivid`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`kategoriid`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`yorumid`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`iletisimid`);

--
-- Tablo için indeksler `karchives`
--
ALTER TABLE `karchives`
  ADD PRIMARY KEY (`karsivid`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `archives`
--
ALTER TABLE `archives`
  MODIFY `arsivid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `kategoriid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `yorumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `iletisimid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `karchives`
--
ALTER TABLE `karchives`
  MODIFY `karsivid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
