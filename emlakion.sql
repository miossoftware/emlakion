-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Eki 2025, 20:52:22
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emlakion`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `assets_definitons`
--

CREATE TABLE `assets_definitons` (
  `id` int(11) NOT NULL,
  `definition_name` varchar(100) NOT NULL,
  `insert_userid` int(11) DEFAULT NULL,
  `insert_datetime` timestamp NULL DEFAULT NULL,
  `update_userid` int(11) DEFAULT NULL,
  `update_datetime` timestamp NULL DEFAULT NULL,
  `delete_userid` int(11) DEFAULT NULL,
  `delete_datetime` timestamp NULL DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `customer_key` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `assets_definitons`
--

INSERT INTO `assets_definitons` (`id`, `definition_name`, `insert_userid`, `insert_datetime`, `update_userid`, `update_datetime`, `delete_userid`, `delete_datetime`, `status`, `customer_key`) VALUES
(1, 'Koltuk', 1, '2025-10-20 15:48:50', 1, '2025-10-20 15:51:11', NULL, NULL, 1, '1'),
(2, 'Masa', 1, '2025-10-20 15:51:15', NULL, NULL, NULL, NULL, 1, '1'),
(3, 'Sandalye', 1, '2025-10-20 15:51:19', NULL, NULL, NULL, NULL, 1, '1'),
(4, 'tesafdasfd', 1, '2025-10-20 15:51:29', NULL, NULL, 1, '2025-10-20 15:52:12', 0, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `general_conditions`
--

CREATE TABLE `general_conditions` (
  `id` int(11) NOT NULL,
  `conditions` longtext NOT NULL,
  `insert_userid` int(11) DEFAULT NULL,
  `insert_datetime` timestamp NULL DEFAULT NULL,
  `update_userid` int(11) DEFAULT NULL,
  `update_datetime` timestamp NULL DEFAULT NULL,
  `delete_userid` int(11) DEFAULT NULL,
  `delete_datetime` timestamp NULL DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `customer_key` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `general_conditions`
--

INSERT INTO `general_conditions` (`id`, `conditions`, `insert_userid`, `insert_datetime`, `update_userid`, `update_datetime`, `delete_userid`, `delete_datetime`, `status`, `customer_key`) VALUES
(1, 'Merhaba,\r\n\r\nBen Samet KABADAYI\r\nbu benim test yazım', 1, '2025-10-20 11:59:34', NULL, NULL, 1, '2025-10-20 15:33:44', 0, '1'),
(2, 'ASDLFASF\r\nASDFKASFM\r\n\r\nASDŞFŞ\r\nASFDM\r\nASŞDFMK\r\nASFMALKSFMLASKFM\r\nASDF\r\nASDFASDFAS\r\nDFASDFASDF\r\nASDFASDFASDF\r\nASDF', 1, '2025-10-20 12:01:36', NULL, NULL, 1, '2025-10-20 12:04:36', 0, '1'),
(3, 'ASDFLASMDFKAMSDF\r\nASFDLKASMFDKL\r\nASDF\r\nAS\r\nDFAS\r\nFDAS\r\nDF\r\nASFD\r\nAS\r\nDFAS\r\nDF\r\nASFD\r\nASDF\r\nASDF\r\nAS\r\nDFAS\r\nDF\r\nASFD\r\nASDF\r\nASDF\r\nAS\r\nFDAS\r\nDFAS\r\nDFA\r\nSFD\r\nASDF\r\nASFD\r\nAS\r\nDFAS\r\nDFAS\r\nFDAS\r\nFD\r\nASFD\r\nASFD\r\nASFD\r\nASDF', 1, '2025-10-20 12:01:48', NULL, NULL, 1, '2025-10-20 12:04:34', 0, '1'),
(4, 'Merhaba,\r\nBenim adım Samet KABADAYI\r\nNasılsınız iyimisiniz  ?', 1, '2025-10-20 12:03:32', NULL, NULL, 1, '2025-10-20 12:09:46', 1, '1'),
(5, 'Genel Koşullar Güncel', 1, '2025-10-20 12:10:02', NULL, NULL, NULL, NULL, 1, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `special_conditions`
--

CREATE TABLE `special_conditions` (
  `id` int(11) NOT NULL,
  `conditions` longtext NOT NULL,
  `insert_userid` int(11) DEFAULT NULL,
  `insert_datetime` timestamp NULL DEFAULT NULL,
  `update_userid` int(11) DEFAULT NULL,
  `update_datetime` timestamp NULL DEFAULT NULL,
  `delete_userid` int(11) DEFAULT NULL,
  `delete_datetime` timestamp NULL DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `customer_key` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `special_conditions`
--

INSERT INTO `special_conditions` (`id`, `conditions`, `insert_userid`, `insert_datetime`, `update_userid`, `update_datetime`, `delete_userid`, `delete_datetime`, `status`, `customer_key`) VALUES
(1, 'Merhaba,\r\n\r\nBen Samet KABADAYI\r\nbu benim test yazım', 1, '2025-10-20 15:31:30', 1, '2025-10-20 15:36:40', NULL, NULL, 1, '1'),
(2, 'asdasd', 1, '2025-10-20 15:37:00', NULL, NULL, 1, '2025-10-20 15:37:30', 0, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `assets_definitons`
--
ALTER TABLE `assets_definitons`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `general_conditions`
--
ALTER TABLE `general_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `special_conditions`
--
ALTER TABLE `special_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `assets_definitons`
--
ALTER TABLE `assets_definitons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `general_conditions`
--
ALTER TABLE `general_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `special_conditions`
--
ALTER TABLE `special_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
