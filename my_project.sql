-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'C:\\xampp\\tmp\\phpFE9B.tmp', 'sejarah', '<p>IKA UNDIP mendirikan Yayasan Alumni Universitas Diponegoro dengan Akte Notaris No.4 tanggal 20 Januari 1987, sebagai wadah resmi yang melakukan berbagai usaha untuk menindaklanjuti upaya pendirian Perguruan Tinggi yang kini dikenal dengan nama Universitas Semarang (USM).</p>\r\n\r\n<p>Selanjutnya, jabatan Ketua IKA UNDIP dipegang oleh Prof.DR. Muladi, SH Periode berikutnya, IKA UNDIP dipimpin oleh Ir. Widjatmoko. Kemudian, lewat Munas VI, terpilihlah Sigit Pramono (saat itu menjabat sebagai Dirut Bank BNI) sebagai Ketua Umum IKA UNDIP</p>\r\n\r\n<p>Pada masa kepemimpinan Sigit Pramono inilah, kedudukan Kepengurusan Pusat dipindah ke Jakarta dan periode kepengurusan menjadi 4 tahun. Logo IKA UNDIP yang digunakan sekarang ini, adalah karya yang diciptakan pada periode kepengurusan beliau.</p>\r\n\r\n<p>Tahun 2009, pada Munas VII, terpilih secara aklamasi Hendarman Supandji (saat itu menjabat sebagai Jaksa Agung RI) sebagai Ketua Umum IKA UNDIP Pengurus DPP IKA UNDIP periode 2013-2017 untuk periode th. 2009 - 2013. Beliaulah yang mempopulerkan panggilan diantara sesama alumni dengan sebutan Mas dan Mbak.</p>\r\n\r\n<p>Mas Maryono (Dirut Bank BTN), Ketua Umum IKA UNDIP kita sekarang ini, juga terpilih secara aklamasi lewat Munas VIII untuk periode kepengurusan tahun 2013 - 2017.</p>\r\n\r\n<p>Totalitas kepemimpinan mas Maryono bersama armada DPP IKA UNDIP&shy;nya, terlihat dari kerja dan kinerjanya selama ini. Berikut beberapa kegiatan IKA UNDIP di bawah kepemimpinan beliau.</p>', '2024-06-09 16:41:32', '2024-06-10 10:41:09'),
(2, 'C:\\xampp\\tmp\\php739C.tmp', 'Tentang Kami', '<h3>Apa itu IKA UNDIP?</h3>\r\n\r\n<p><strong>IKA UNDIP</strong>, singkatan dari Ikatan Keluarga Alumni Universitas Diponegoro, merupakan organisasi yang mempersatukan para alumni dari Universitas Diponegoro (UNDIP) di Semarang, Jawa Tengah, Indonesia. Organisasi ini bertujuan untuk memelihara hubungan dan kerjasama antara alumni serta dengan universitas.</p>\r\n\r\n<h3>Tujuan IKA UNDIP</h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Mempererat Silaturahmi</strong>: IKA UNDIP berupaya mempererat silaturahmi antara alumni UNDIP dari berbagai angkatan dan program studi.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Membantu Pengembangan Universitas</strong>: Melalui kerjasama dan dukungan, IKA UNDIP berkontribusi dalam pengembangan Universitas Diponegoro, baik dari segi akademis, riset, maupun fasilitas.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Memberikan Dukungan Sosial dan Profesional</strong>: IKA UNDIP menyediakan platform bagi para alumni untuk saling membantu dalam karier dan kegiatan sosial.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menyelenggarakan Acara dan Program</strong>: Organisasi ini mengadakan berbagai acara seperti reuni, seminar, pelatihan, dan kegiatan sosial lainnya untuk memperkuat jaringan alumni dan memberikan manfaat bagi anggotanya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3>Aktivitas dan Program</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Reuni dan Pertemuan Alumni</strong>: IKA UNDIP secara rutin menyelenggarakan reuni dan pertemuan alumni baik di tingkat lokal maupun nasional.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pelatihan dan Seminar</strong>: Untuk meningkatkan kompetensi anggotanya, IKA UNDIP mengadakan berbagai pelatihan dan seminar yang relevan dengan bidang keahlian para alumni.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bantuan dan Dukungan</strong>: Melalui berbagai inisiatif, IKA UNDIP memberikan bantuan kepada mahasiswa, alumni, dan masyarakat umum dalam bentuk beasiswa, program sosial, dan bantuan lainnya.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Jaringan Profesional</strong>: Anggota IKA UNDIP dapat memanfaatkan jaringan ini untuk mencari kesempatan kerja, berkolaborasi dalam proyek-proyek bersama, dan bertukar informasi dan pengalaman.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Peran dalam Komunitas</h3>\r\n\r\n<p>IKA UNDIP berperan penting dalam mempertahankan tradisi dan nilai-nilai Universitas Diponegoro serta menjaga keberlanjutan pengabdian alumni terhadap almamater mereka. Dengan memanfaatkan kekuatan kolaborasi antara alumni, IKA UNDIP turut berkontribusi dalam memajukan pendidikan, penelitian, dan pengabdian masyarakat di Indonesia.</p>\r\n\r\n<p>Organisasi semacam IKA UNDIP tidak hanya membangun hubungan yang kuat di antara alumni, tetapi juga memperkaya pengalaman pendidikan universitas bagi mahasiswa saat ini dengan memberikan akses ke jaringan dan pengalaman yang luas dalam berbagai bidang.</p>', '2024-06-25 22:56:08', '2024-06-25 22:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `tahun_lulus` varchar(5) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nim`, `angkatan`, `tahun_lulus`, `jurusan`, `profesi`, `nama_instansi`, `alamat`, `kota`, `ijazah`, `ktp`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '123', '123', '123', '123', '123', '123', '123', '123', '1717834099.png', '1717834099.png', '1717834099.png', 3, '2024-06-08 01:08:19', '2024-06-08 01:08:19'),
(2, '123', '21', '21', 'ti', 'pelajar', 'poltek', 'batam center', 'Batam, Kepulauan Riau', '1717931926.png', '1717931926.png', '1717931926.png', 4, '2024-06-09 04:18:46', '2024-06-25 09:08:56'),
(3, '313425', '45', '2019', 'Teknik Arsitektur', 'Engginer', 'PT.apa aja', 'Batu Aji', 'Batam, Kepulauan Riau', '1719406524.png', '1719406524.png', '1719406524.png', 5, '2024-06-26 05:55:24', '2024-06-26 05:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_profile`
--

CREATE TABLE `alumni_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `tahun_lulus` varchar(5) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `desk` text DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni_profile`
--

INSERT INTO `alumni_profile` (`id`, `nama`, `profesi`, `tahun_lulus`, `jurusan`, `desk`, `img`, `created_at`, `updated_at`) VALUES
(6, 'ELFRIDA TENTI NURLELA', 'Guru', '2019', 'Teknik Arsitektur', '<p>Elfrida</p>', '1719407618.png', '2024-06-26 06:13:38', '2024-06-26 06:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Manfaat Keanggotaan', '<p>Kami menyadari bahwa era digital mampu memudahkan mahasiswa dan alumni untuk mendapatkan beragam informasi mengenai peluang karier. Oleh karena itu, kami meluncurkan Aplikasi IKA Undip sebagai platform yang terintegrasi dan memiliki fitur yang lengkap untuk memenuhi pengembangan karier mahasiswa dan alumni UNDIP.</p>\r\n\r\n<p>Aplikasi IKA Undip tidak hanya memudahkan mahasiswa dan alumni UNDIP dalam mengakses informasi karier tetapi juga mampu memfasilitasi kebutuhan mitra UNDIP. Beragam fitur yang lengkap di Aplikasi IKA Undip akan memudahkan mitra dalam memperoleh talent yang berkualitas.</p>\r\n\r\n<p><strong>Keunggulan</strong></p>\r\n\r\n<ul>\r\n	<li>IKA Undip adalah aplikasi Pusat Karier Universitas Diponegoro yang dapat diakses oleh lebih dari 50.000 mahasiswa yang selalu terupdate secara real time. Selain itu, aplikasi ini dapat diakses oleh seluruh alumni UNDIP.</li>\r\n	<li>IKA Undip mempermudah Anda dalam mencari talent yang berkualitas dan sesuai kualifikasi. Anda dapat membagikan infomasi rekrutmen, menyelenggarakan campus hiring, career talks, presentasi perusahaan dan juga berpartisipasi dalam Career Fair (Integrated Career Days).</li>\r\n	<li>IKA Undip membantu meningkatkan citra (image building) perusahaan Anda di mata mahasiswa dan alumni. Kepercayaan civitas akademika UNDIP terhadap brand perusahaan Anda akan meningkat sehingga lebih menumbuhkan ketertarikan para talent untuk berkarya.</li>\r\n</ul>\r\n\r\n<p><strong>Fitur IKA Undip</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Posting Lowongan Kerja dan Magang</strong>\r\n\r\n	<p>Aplikasi IKA Undip memfasilitasi Anda untuk membagikan berbagai informasi terkait lowongan pekerjaan dan kesempatan magang, serta menjaring talent unggul secara efisien dan tepat sasaran.</p>\r\n	</li>\r\n	<li><strong>Company Talk</strong>\r\n	<p>Kenalkan brand perusahaan Anda kepada mahasiswa dan alumni secara online (daring) maupun offline. Pengaturan jadwal presentasi, kelengkapan fasilitas, dan pemilihan kapasitas ruang akan lebih mudah melalui Aplikasi IKA Undip.</p>\r\n	</li>\r\n	<li><strong>Career Fair</strong>\r\n	<p>Kami telah berpengalaman dalam menyelenggarakan Career Fair (Integrated Career Days) setiap tahun yang dihadiri oleh lebih dari 10.000 talent yang berkualitas. Daftarkan brand perusahaan Anda untuk berpartisipasi dalam Career Fair (Integrated Career Days) hanya melalui Aplikasi IKA Undip</p>\r\n	</li>\r\n	<li><strong>Campus Hiring</strong>\r\n	<p>Aplikasi IKA Undip memudahkan Anda dalam melakukan Campus Hiring meliputi assessment test, tes psikologi, interview, FGD, dan LGD. Anda dapat langsung mengatur penjadwalan campus hiring, desain kegiatan, waktu pelaksanaan, dan fasilitas ruang melalui Aplikasi IKA Undip.</p>\r\n	</li>\r\n</ul>', 'manfaat-keanggotaan', '2024-06-08 00:51:42', '2024-06-08 00:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `ibu_kandung` varchar(255) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama_lengkap`, `no_ktp`, `no_telp`, `ibu_kandung`, `jk`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Vonso2', '123', '123', '123', 'Laki - Laki', '123', '2024-06-08', '1232', 3, '2024-06-08 01:07:56', '2024-06-08 01:36:54'),
(2, 'donna lady a', '1234', '123', 'rahmita', 'Perempuan', 'lubuk alung', '2024-06-01', 'batam center', 4, '2024-06-09 04:17:48', '2024-06-09 04:17:48'),
(3, 'Elfrida Tenti Nurlele', '123', '0837', 'ibu', 'Perempuan', 'pandau', '2024-06-26', 'batu aji', 5, '2024-06-26 05:53:46', '2024-06-26 05:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `desk` text NOT NULL,
  `cover` varchar(100) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama`, `desk`, `cover`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'Coba Item 1', 'asdnkasd nasd jkadnjkasnkdaskd', '1714701206.jpg', 'foto', '2024-05-02 17:19:54', '2024-05-02 17:53:26'),
(2, 'Deskripsi Kegiatan', 'Deskripsi percobaa galeri asdnk asdkas', '1714700034.png', 'foto', '2024-05-02 17:33:54', '2024-05-02 17:49:54'),
(3, 'Kegiatan 1', 'Deskripsi percobaa galeri 1', '1714700232.jpg', 'foto', '2024-05-02 17:37:12', '2024-05-02 17:37:12'),
(5, 'Coba Galery Vide', 'basdjbasd asd jasdjasdjas dj', '1714721046.jpg', 'foto', '2024-05-02 23:24:07', '2024-05-02 23:24:07'),
(9, 'main', 'weee', '1719407743.png', 'video', '2024-06-26 06:15:43', '2024-06-26 06:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_item`
--

CREATE TABLE `gallery_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(100) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_item`
--

INSERT INTO `gallery_item` (`id`, `item`, `gallery_id`, `created_at`, `updated_at`) VALUES
(1, '1714718293.jpg', 3, '2024-05-02 22:38:13', '2024-05-02 22:38:13'),
(2, '1714718440.jpg', 3, '2024-05-02 22:40:40', '2024-05-02 22:40:40'),
(3, '1714718451.jpg', 3, '2024-05-02 22:40:51', '2024-05-02 22:40:51'),
(5, '1714719452.jpg', 2, '2024-05-02 22:57:32', '2024-05-02 22:57:32'),
(6, '1714719459.jpg', 2, '2024-05-02 22:57:39', '2024-05-02 22:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancies`
--

CREATE TABLE `job_vacancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_11_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_03_21_055027_create_alumni', 1),
(12, '2024_04_05_063056_create_data_diri', 1),
(13, '2024_04_16_001504_create_alumni_profile', 2),
(14, '2024_04_18_011948_create_news_table', 3),
(18, '2024_05_02_074104_create_gallery', 4),
(19, '2024_05_03_061533_create_gallery_item', 5),
(20, '2024_05_12_103438_create_articles_table', 6),
(21, '2024_05_12_120322_create_job_vacancies_table', 6),
(23, '2024_06_09_231400_create_abouts_table', 7),
(24, '2024_06_10_122848_add_slug', 8),
(25, '2024_06_10_175850_create_posts_table', 8),
(26, '2024_06_11_110926_create_contacts_table', 9),
(28, '2024_06_11_133410_create_strukturs_table', 10),
(29, '2024_06_25_141334_prosesbergabungs', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `slug`, `is_published`, `published_at`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'berita', '<p>todays</p>', 'PeiEMBaNeqhnlTZ5vjQcSXikbWdwxdDoLzxoxFbl.jpg', 'berita', 1, '2024-06-11 10:38:41', 1, '2024-06-11 10:38:41', '2024-06-11 10:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Visi-Misi', '<h3><strong>Visi</strong></h3>\r\n\r\n<p>Menjadi wadah yang solid dan inspiratif bagi alumni Universitas Diponegoro untuk berkontribusi dalam pembangunan bangsa dan kesejahteraan masyarakat.</p>\r\n\r\n<h3><strong>Misi</strong></h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Menguatkan Ikatan Alumni:</strong></p>\r\n\r\n	<ul>\r\n		<li>Membangun jaringan komunikasi yang efektif antar alumni dari berbagai angkatan dan jurusan.</li>\r\n		<li>Mengadakan kegiatan reuni, pertemuan, dan acara-acara sosial yang mempererat hubungan antar alumni.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Mendukung Pengembangan Karier:</strong></p>\r\n\r\n	<ul>\r\n		<li>Menyediakan platform untuk berbagi informasi tentang peluang kerja, pelatihan, dan pengembangan profesional.</li>\r\n		<li>Mengadakan seminar, workshop, dan pelatihan yang relevan dengan kebutuhan pasar kerja saat ini.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Berperan Aktif dalam Pembangunan:</strong></p>\r\n\r\n	<ul>\r\n		<li>Menginisiasi dan mendukung program-program sosial yang berdampak positif bagi masyarakat.</li>\r\n		<li>Mendorong alumni untuk berpartisipasi dalam kegiatan pengabdian masyarakat dan pembangunan daerah.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Meningkatkan Kontribusi kepada Almamater:</strong></p>\r\n\r\n	<ul>\r\n		<li>Mendukung program-program Universitas Diponegoro dalam meningkatkan kualitas pendidikan dan penelitian.</li>\r\n		<li>Mengadakan kegiatan penggalangan dana untuk beasiswa dan pengembangan fasilitas universitas.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Memajukan Kehidupan Kampus:</strong></p>\r\n\r\n	<ul>\r\n		<li>Bekerjasama dengan mahasiswa aktif untuk memberikan mentoring, bimbingan karier, dan dukungan akademis.</li>\r\n		<li>Membantu dalam penyelenggaraan kegiatan mahasiswa yang inovatif dan berwawasan kebangsaan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Mempromosikan Nilai-Nilai Kebangsaan:</strong></p>\r\n\r\n	<ul>\r\n		<li>Menanamkan nilai-nilai nasionalisme, kepemimpinan, dan integritas dalam setiap kegiatan IKA UNDIP.</li>\r\n		<li>Mendorong alumni untuk menjadi teladan dalam kehidupan bermasyarakat dan bernegara.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p>Dengan visi dan misi ini, IKA UNDIP diharapkan dapat menjadi organisasi yang bermanfaat tidak hanya bagi para anggotanya, tetapi juga bagi almamater dan masyarakat luas.</p>', 'visi-misi', '2024-06-10 23:41:23', '2024-06-11 04:24:33'),
(2, 'Tentang Kami', '<h3>Apa itu IKA UNDIP?</h3>\r\n\r\n<p><strong>IKA UNDIP</strong>, singkatan dari Ikatan Keluarga Alumni Universitas Diponegoro, merupakan organisasi yang mempersatukan para alumni dari Universitas Diponegoro (UNDIP) di Semarang, Jawa Tengah, Indonesia. Organisasi ini bertujuan untuk memelihara hubungan dan kerjasama antara alumni serta dengan universitas.</p>\r\n\r\n<h3>Tujuan IKA UNDIP</h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Mempererat Silaturahmi</strong>: IKA UNDIP berupaya mempererat silaturahmi antara alumni UNDIP dari berbagai angkatan dan program studi.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Membantu Pengembangan Universitas</strong>: Melalui kerjasama dan dukungan, IKA UNDIP berkontribusi dalam pengembangan Universitas Diponegoro, baik dari segi akademis, riset, maupun fasilitas.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Memberikan Dukungan Sosial dan Profesional</strong>: IKA UNDIP menyediakan platform bagi para alumni untuk saling membantu dalam karier dan kegiatan sosial.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menyelenggarakan Acara dan Program</strong>: Organisasi ini mengadakan berbagai acara seperti reuni, seminar, pelatihan, dan kegiatan sosial lainnya untuk memperkuat jaringan alumni dan memberikan manfaat bagi anggotanya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3>Aktivitas dan Program</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Reuni dan Pertemuan Alumni</strong>: IKA UNDIP secara rutin menyelenggarakan reuni dan pertemuan alumni baik di tingkat lokal maupun nasional.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pelatihan dan Seminar</strong>: Untuk meningkatkan kompetensi anggotanya, IKA UNDIP mengadakan berbagai pelatihan dan seminar yang relevan dengan bidang keahlian para alumni.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bantuan dan Dukungan</strong>: Melalui berbagai inisiatif, IKA UNDIP memberikan bantuan kepada mahasiswa, alumni, dan masyarakat umum dalam bentuk beasiswa, program sosial, dan bantuan lainnya.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Jaringan Profesional</strong>: Anggota IKA UNDIP dapat memanfaatkan jaringan ini untuk mencari kesempatan kerja, berkolaborasi dalam proyek-proyek bersama, dan bertukar informasi dan pengalaman.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Peran dalam Komunitas</h3>\r\n\r\n<p>IKA UNDIP berperan penting dalam mempertahankan tradisi dan nilai-nilai Universitas Diponegoro serta menjaga keberlanjutan pengabdian alumni terhadap almamater mereka. Dengan memanfaatkan kekuatan kolaborasi antara alumni, IKA UNDIP turut berkontribusi dalam memajukan pendidikan, penelitian, dan pengabdian masyarakat di Indonesia.</p>\r\n\r\n<p>Organisasi semacam IKA UNDIP tidak hanya membangun hubungan yang kuat di antara alumni, tetapi juga memperkaya pengalaman pendidikan universitas bagi mahasiswa saat ini dengan memberikan akses ke jaringan dan pengalaman yang luas dalam berbagai bidang.</p>', 'tentang-kami', '2024-06-26 00:02:13', '2024-06-26 00:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `prosesbergabungs`
--

CREATE TABLE `prosesbergabungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strukturs`
--

CREATE TABLE `strukturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strukturs`
--

INSERT INTO `strukturs` (`id`, `nama`, `foto`, `jabatan`, `created_at`, `updated_at`) VALUES
(7, 'DONNA LADY AFISHE', 'fotos/alXFPmcINnfF6JaBdOQJbYNEG5XL4mE682MhEXoO.png', 'mhs', '2024-06-11 11:55:49', '2024-06-11 11:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `token`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '2024-04-16 16:09:21', '$2y$12$Lu1yWJR9VQLSNnmGsOilL.g6CKljpZ7YpBvbu8vH/kCVZGsxC9TwC', '', 'admin', NULL, '2024-04-16 16:09:32', '2024-04-16 16:09:34'),
(3, 'vonsofh@gmail.com', '2024-06-08 01:40:07', '$2y$12$/TBSvuSNC/Ovuavh.yJ5ROmKwA3qf535klZx5yNZ59XX4tYYILEcy', '66660', 'alumni', NULL, '2024-06-08 01:06:55', '2024-06-08 01:07:40'),
(4, 'donnaladyafishe@gmail.com', '2024-06-09 04:40:16', '$2y$12$FXhk0SeLH1ujO9FPktTSPeMfsBQEVSjexpY2mHzTWTVP4FG0KMK4G', '19593', 'alumni', NULL, '2024-06-09 04:16:12', '2024-06-09 04:16:40'),
(5, 'elfridatenti@gmail.com', '2024-06-26 05:09:53', '$2y$12$iJM3VcmSvhYfZd5n7AERuO5pQVyr9f.HPnr0pOV.ET1x5iDoaEsDK', '32699', 'alumni', NULL, '2024-06-26 05:52:37', '2024-06-26 05:53:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_profile`
--
ALTER TABLE `alumni_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_item`
--
ALTER TABLE `gallery_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `prosesbergabungs`
--
ALTER TABLE `prosesbergabungs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prosesbergabungs_slug_unique` (`slug`);

--
-- Indexes for table `strukturs`
--
ALTER TABLE `strukturs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumni_profile`
--
ALTER TABLE `alumni_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery_item`
--
ALTER TABLE `gallery_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prosesbergabungs`
--
ALTER TABLE `prosesbergabungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
