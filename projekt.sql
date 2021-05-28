-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 04:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) COLLATE utf8mb4_croatian_ci NOT NULL,
  `prezime` varchar(32) COLLATE utf8mb4_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) COLLATE utf8mb4_croatian_ci NOT NULL,
  `lozinka` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(3, 'Ivan ', 'Stjepanovic', 'istjepan', '$2y$10$8uiKE8Aq1znN9yoyVkxr8uNdRqV5Sp7/WPf7KOrTdxWs/vrBpWE1i', 0),
(4, 'ete', 'tete', 'etetete', '$2y$10$39dZ75JsPNAv0TAkC3s/aOPO6d2G9OuhfkDahB2UwnEFNx4EDRL2i', 0),
(5, 'test', 'testic', 'testictest', '$2y$10$sFFQC8iqQo002.xKrRaisu1GD2VWLT/NXT/7zndaVqav.CnR3YtTu', 0),
(6, 'Marko', 'Maric', 'mmaric', '$2y$10$Vw0BR7OD3lSfMrOASnj6GOV208wdqKKcuhER5vuzV4HLRH0mzjwC.', 0),
(7, 'Marko', 'Dengru', 'dengruma', '$2y$10$SZOhBxV4h7I.cwQ4GbM9IOIm75tYvZG0M.GlKYSw6aJHcd5CngV9i', 0),
(8, 'Marko', 'Maric', 'gandal19990', '$2y$10$Iqw7RMAEm7haB5y4qKvIyeYWA5m8mvzlqdQK8RWKwqTUgkm/Jmm8a', 0),
(9, 'Ivan ', '99', 'ivan99', '$2y$10$bwPoPWbZp0rM3EdLyZCFNeQCY.MDO7hbU4V8JOcau.AMsgfusvwEa', 0),
(10, 'test', 'test', 'amen123', '$2y$10$.JwlgkpIpl5ovQKk0XvBDuYkj.GRxoMiNX4MLMGhVMjCwHsXn/viK', 0),
(11, 'Petar', 'da', 'dadadad', '$2y$10$EN8en9VfUUCn5BmRKBTxSuWLoq5BaZIFcEa6Xv.BtFMVURr/i5Di6', 0),
(12, 'Marko', 'stakovic', 'pgruden', '$2y$10$DjENhcqA5a.TMJnYnqKWCOY5Hv7Aoqn0nB5o103ebmSMPFMQhdkWC', 0),
(13, 'Stjepan', 'Maric', 'tadara', '$2y$10$4zLHGJH53CLUcx4ksz0qUutvz4EWZLFONs4GEWgZm.OVHrIWTxT6e', 0),
(14, 'stef', 'stefa', 'stefa', '$2y$10$ti6M6Kg.wGo4i/U16Cd0WOlFYUV4VMb6C7TzXRqHnkAplTUStGwFu', 0),
(15, 'Petar', 'Gruden', 'admin', '$2y$10$htg9b2LZTasbJlfT/4A8Leg59loOTJa/ZlQi.gFaUqe7dNyech4PS', 1),
(16, 'noviKorisnik', 'korisnik', 'korisnik', '$2y$10$tMt2nqAQV3cpbQ31oSxZSeCF0/00NoxirkXr2a/XGZ9mIPWI2KVfy', 0),
(17, 'Petar', 'da', 'user1', '$2y$10$JvwAofI6e09y/ofjHBmBQuyRlH1QpTDtC50EnJ6.RyJ94THX3y7XG', 0),
(18, 'Ratko', 'Ratkic', 'ratkic', '$2y$10$k7LCTYetyKgWvmyXR47vpuTqOXXuROFjc.vS0Ra1PGImY0Hq19f3m', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(8, '18.05.2021.', 'Update test clanka', 'Real madrid attlettticcco', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog1.png', 'Sport', 0),
(9, '18.05.2021.', 'REAL MADRID UPDATE', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, o', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog1.png', 'Sport', 0),
(10, '18.05.2021.', 'REAL MADRID vs BARCELONA', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, o', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog2.png', 'Sport', 0),
(11, '18.05.2021.', 'Nogometna lopta', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, o', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog1.png', 'Sport', 0),
(12, '18.05.2021.', 'VELIKI Naslov je ovo', '                        Lorem ipsum dolor sit amet', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam!\r\n', 'zabava1.png', 'Zabava', 1),
(13, '18.05.2021.', 'Naslov', '                        Lorem ipsum dolor sit amet', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam!\r\n', 'zabava.jpg', 'Zabava', 0),
(14, '18.05.2021.', 'Party godine!!!', 'tvz party godine', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam!\r\n', 'zabava.jpg', 'Zabava', 0),
(15, '18.05.2021.', 'REAL MADRID vs BARCELONA', 'dadasd', 'vijestu su laznevijestu su laznevijestu su laznevijestu su lazne', '', 'Zabava', 1),
(16, '18.05.2021.', 'test za 4 limit', 'pokusaj ubacivanja testa 4 prikaza', 'pokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikaza', 'zabava.jpg', 'Zabava', 0),
(17, '18.05.2021.', 'John D Carl', 'John D carl je god tarkova', 'aimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviran', 'nog2.png', 'Zabava', 0),
(18, '18.05.2021.', 'Test 4 reda', 'kratki sadrzaj neki', 'lkajskjfghersuihasuoifj lkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifj', 'zabava1.png', 'Zabava', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
