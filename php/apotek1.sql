-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2024 pada 08.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `product_id`, `quantity`) VALUES
(7, 'upcj0543vstvs27pq52ugl7jao', 1, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `stock`) VALUES
(1, 'Paracetamol', 'Obat untuk mengurangi demam dan mengatasi nyeri ringan', 10000.00, '../uploads/paracetamol.jpg', 100),
(0, 'Amoxicillin', 'Antibiotik untuk mengobati berbagai infeksi bakteri', 25.00, '../uploads/download.jpeg', 12),
(0, 'Ibuprofen', 'Obat antiinflamasi digunakan untuk mengurangi demam dan nyeri', 15.00, '../uploads/download (1).jpeg', 12),
(0, 'Captopril', ' Obat yang digunakan untuk mengobati tekanan darah tinggi (hipertensi) dan gagal jantung kongestif.', 30.00, '../uploads/download (2).jpeg', 12),
(0, 'Loperamide', 'mengobati diare akut dan kronis serta mengurangi volume buang air besar pada pasien dengan ileostomi.', 12.00, '../uploads/download (3).jpeg', 12),
(0, 'Cetirizine', 'Antihistamin untuk meredakan gejala alergi seperti bersin, gatal, mata berair, dan pilek.', 18.00, '../uploads/download (4).jpeg', 12),
(0, 'Ranitidine', 'mengurangi produksi asam lambung dan mengobati serta mencegah tukak lambung dan refluks asam.', 20.00, '../uploads/download (5).jpeg', 12),
(0, 'Metformin', 'untuk mengontrol kadar gula darah pada pasien dengan diabetes tipe 2.', 35.00, '../uploads/download (6).jpeg', 12),
(0, 'Amlodipine', 'Obat yang digunakan untuk mengobati tekanan darah tinggi dan angina.', 28.00, '../uploads/download (7).jpeg', 12),
(0, 'Salbutamol', 'meredakan penyempitan saluran napas pada kondisi seperti asma dan penyakit paru obstruktif kronik (PPOK).', 22.00, '../uploads/download (8).jpeg', 12),
(0, 'Omeprazole', 'mengobati masalah lambung dan kerongkongan (seperti refluks asam dan tukak lambung).', 32.00, '../uploads/download (9).jpeg', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
