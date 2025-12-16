-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2025 pada 06.20
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
-- Database: `webrcc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description_history` text NOT NULL,
  `description_vision` text NOT NULL,
  `description_mission1` text NOT NULL,
  `description_mission2` text NOT NULL,
  `description_mission3` text NOT NULL,
  `description_ceo` text NOT NULL,
  `description_secretary` text NOT NULL,
  `description_treasurer` text NOT NULL,
  `description_supervisor` text NOT NULL,
  `description_member1` text NOT NULL,
  `description_member2` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `description_history`, `description_vision`, `description_mission1`, `description_mission2`, `description_mission3`, `description_ceo`, `description_secretary`, `description_treasurer`, `description_supervisor`, `description_member1`, `description_member2`, `created_at`, `updated_at`) VALUES
(1, 'The company Research Collaborations Community (RCC) was established on May 25, 2019. Based at Jl. Riung Ampuh No.3, Riung Bandung, Bandung City 40295, West Java, Indonesia. The association aims to gather individuals who share a common interest in research and scientific collaboration. Since its establishment, the Research Collaboration Community Association has endeavored to become a forum for researchers and academics to share knowledge, resources, and innovative ideas to encourage the advancement of science and technology in Indonesia.', 'Research is often described as a process of investigation that is conducted actively, diligently, and systematically, with the aims to discover, interpret, and revise facts. The role of the researcher in research is as a planner, data collector, analyzer, and finally as the originator of the research. To conduct research, collaboration between researchers is needed, in order to obtain quality research results.  Research Collaboration Community is an organization of scholars and researchers from various fields of science, as a medium for collaborating, exchanging ideas, and sharing knowledge,in order to improve the quantity and quality of research results.', 'Fostering and developing quality research.', 'Fostering and developing quantitative and quantitative and qualitative research methods.', 'Increasing the role of research both directly and as as a support for other sciences in order to contribute to improve human resources for the success of development of the nation and state based on Pancasila and 1945 Constitution.', 'Mr. Firman Sukono, M.M. M.Si.', 'Mr. Aceng Sambas. M.Sc.', 'Mr. Djufri Liga, S.E., M.M.', 'Mr. Ruly Budiono, M.Sc.', 'Mr. Andri Saputra', 'Mr. Agung Prabowo, M.Si.', '2025-02-16 21:45:23', '2025-08-07 01:42:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `maps_embed` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `maps_embed`, `created_at`, `updated_at`) VALUES
(1, 'Jl. Riung Ampuh No.3, Riung Bandung, Bandung City 40295, West Java, Indonesia', 'rcc.conference.id@gmail.com', '+62 898-7058-643', '!1m14!1m8!1m3!1d3831.6385937978234!2d107.6824629!3d-6.9426923!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2bce89a2a5d%3A0xbbe514b98cce6516!2sJl.%20Riung%20Ampuh%20No.3%2C%20Cisaranten%20Kidul%2C%20Kec.%20Gedebage%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040295!5e1!3m2!1sid!2sid!4v1733450394231!5m2!1sid!2sid', '2025-02-17 00:46:12', '2025-08-07 01:43:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asep', 'asep@gmail.com', 'apa aja boleh', '2025-06-29 08:32:38', '2025-06-29 08:32:38'),
(2, 'asep', 'asep@gmail.com', 'apa aja boleh bang', '2025-06-29 08:43:19', '2025-06-29 08:43:19'),
(3, 'Riki', 'rikicahya426@gmail.com', 'apa aja boleh bang', '2025-06-29 08:49:49', '2025-06-29 08:49:49'),
(4, 'Riki', 'srikicahya@gmail.com', 'asdswadsa', '2025-06-29 08:53:23', '2025-06-29 08:53:23'),
(5, 'Riki', 'srikicahya@gmail.com', 'asdwadsa', '2025-06-29 08:55:33', '2025-06-29 08:55:33'),
(6, 'Riki', 'rikicahya426@gmail.com', 'HAYO SIAPAA', '2025-06-29 09:05:09', '2025-06-29 09:05:09'),
(7, 'Riki', 'rikicahya426@gmail.com', 'asdwadsa', '2025-06-29 09:09:19', '2025-06-29 09:09:19'),
(8, 'Riki', 'rikicahya426@gmail.com', 'awadasdsa', '2025-06-29 09:33:36', '2025-06-29 09:33:36'),
(9, 'asep', 'asep@gmail.com', 'Coba perbaiki lagi ya', '2025-06-29 10:26:39', '2025-06-29 10:26:39'),
(10, 'Lili', 'lili@gmail.com', 'Menurut saya coba tambahkan lagi beberapa publikasi jurnal nya agar lebih menarik', '2025-07-16 03:10:35', '2025-07-16 03:10:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2025_01_04_092132_create_home_table', 2),
(6, '2025_01_04_101734_create_services_table', 3),
(7, '2025_01_04_120115_create_services_table', 4),
(8, '2025_01_05_135915_create_contact_table', 5),
(10, '2025_01_05_141033_create_contacts_table', 6),
(11, '2025_01_05_153609_create_contacts_table', 7),
(13, '2025_01_25_055103_create_teams_table', 8),
(46, '2014_10_12_000000_create_users_table', 9),
(47, '2014_10_12_100000_create_password_resets_table', 9),
(48, '2019_08_19_000000_create_failed_jobs_table', 9),
(49, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(50, '2025_02_03_120336_create_services_table', 9),
(51, '2025_02_03_153323_create_publications_table', 9),
(52, '2025_02_04_032812_create_contacts_table', 9),
(53, '2025_02_05_095521_create_abouts_table', 9),
(54, '2025_02_17_044429_create_abouts_table', 10),
(55, '2025_02_17_074205_create_contacts_table', 11),
(58, '2025_02_18_014058_create_publications_table', 12),
(60, '2025_06_02_162742_create_sliders_table', 13),
(61, '2025_06_02_164550_add_link_to_publications_table', 13),
(62, '2025_06_29_134209_create_feedback_table', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `publications`
--

INSERT INTO `publications` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `link`) VALUES
(1, 'IJBESD', 'International Journal of Business, Economics, and Social Development', 'IJQRM.png', '2025-02-17 19:15:24', '2025-06-14 04:51:16', 'https://journal.rescollacomm.com/index.php/ijbesd/index'),
(2, 'IJRICS', 'International Journal of Research in Community Service', 'IJRICS.png', '2025-02-17 19:19:00', '2025-06-02 10:07:51', 'https://journal.rescollacomm.com/index.php/ijrcs/index'),
(3, 'IJQRM', 'International Journal of Quantitative Research and Modeling', 'IJQRM.png', '2025-02-17 19:19:27', '2025-06-02 10:08:13', 'https://journal.rescollacomm.com/index.php/ijqrm/index'),
(4, 'IJEER', 'International Journal of Ethno-Sciences and Education Research', 'IJEER.png', '2025-02-17 19:20:02', '2025-06-03 09:10:59', 'https://journal.rescollacomm.com/index.php/ijeer'),
(5, 'IJGOR', 'International Journal of Global Operations Research', 'IJGOR.jpg', '2025-02-17 23:55:03', '2025-06-03 09:21:19', 'https://www.iorajournal.org/index.php/ijgor/index'),
(6, 'ORICS', 'Operations Research: International Conference Series', 'ORICS.jpg', '2025-06-03 09:23:45', '2025-06-03 09:23:45', 'https://www.iorajournal.org/index.php/orics'),
(7, 'IJHLP', 'International Journal of Humanities, Law, and Politics', 'IJHLP.jpg', '2025-06-03 09:25:11', '2025-06-03 09:25:11', 'https://ejournal.corespub.com/index.php/ijhlp/index'),
(8, 'IJLCB', 'International Journal of Linguistics, Communication, and Broadcasting', 'IJLCB.jpg', '2025-06-03 09:26:07', '2025-06-29 20:54:24', 'https://ejournal.corespub.com/index.php/ijlcb/index'),
(9, 'IJHMS', 'International Journal of Health, Medicine, and Sports', 'IJHMS.jpg', '2025-06-03 09:27:40', '2025-06-03 09:27:40', 'https://ejournal.corespub.com/index.php/ijhms/index'),
(17, 'IJMSC', 'International Journal of Mathematics, Statistics, and Computing', 'IJMSC.jpg', '2025-07-16 02:51:08', '2025-07-16 02:52:28', 'https://ejournal.corespub.com/index.php/ijmsc/index'),
(23, 'example', 'only provides an example.', 'IJRICS.png', '2025-08-07 01:40:17', '2025-08-07 01:40:17', 'https://journal.rescollacomm.com/index.php/ijrcs/index');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Publisher Journal', 'Icon-publish-01.png', '2025-02-05 03:20:44', '2025-06-10 07:01:31'),
(6, 'Publication Consultant', 'icon-consultant-02.png', '2025-02-06 23:29:17', '2025-02-07 03:06:31'),
(8, 'Conference and Workshop Organizer', 'Icon-Conference-03.png', '2025-02-07 03:05:27', '2025-07-16 02:44:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `publish` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `publish`, `link`, `image`, `created_at`, `updated_at`) VALUES
(7, 'IJBESD', 'Research Collaboration Community (RCC)', 'https://journal.rescollacomm.com/index.php/ijbesd/index', 'IJBESD.png', '2025-06-03 03:56:03', '2025-06-10 06:21:10'),
(8, 'IJRCS', 'Research Collaboration Community (RCC)', 'https://journal.rescollacomm.com/index.php/ijrcs/index', 'IJRICS.png', '2025-06-03 03:56:26', '2025-06-03 09:40:10'),
(9, 'IJQRM', 'Research Collaboration Community (RCC)', 'https://journal.rescollacomm.com/index.php/ijqrm/index', 'IJQRM.png', '2025-06-03 03:58:35', '2025-07-16 02:59:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riki', 'srikicahya@gmail.com', NULL, '$2y$10$LWN5NBeb/STWo8r2bIwLDemDXd3hTBeuqLqKLbo.aFkhT8NtRWvcG', NULL, '2025-02-05 03:17:24', '2025-02-05 03:17:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
