-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 juil. 2024 à 12:03
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artisan`
--

-- --------------------------------------------------------

--
-- Structure de la table `artisans`
--

CREATE TABLE `artisans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `autre_ville` varchar(255) DEFAULT NULL,
  `quartier` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `nom_entreprise` varchar(255) NOT NULL,
  `num_entreprise` varchar(50) DEFAULT NULL,
  `secteur_activite` varchar(255) NOT NULL,
  `domaine_activite` varchar(255) NOT NULL,
  `certif` varchar(10) NOT NULL,
  `zone_couverture` varchar(255) DEFAULT NULL,
  `annee_existence` int(11) NOT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `artisans`
--

INSERT INTO `artisans` (`id`, `nom`, `sexe`, `ville`, `commune`, `autre_ville`, `quartier`, `email`, `telephone`, `nom_entreprise`, `num_entreprise`, `secteur_activite`, `domaine_activite`, `certif`, `zone_couverture`, `annee_existence`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'ôthentik', 'masculin', 'Krisborough', '', '0', 'Tamara Spring', NULL, '+1-304-959-7122', 'Stehr, Bergstrom and Lubowitz', NULL, 'Artisanat', 'Bijouterie', '', NULL, 125, NULL, NULL, NULL, '2024-07-04 19:06:05'),
(12, 'Williamson', 'F', 'Lurachester', '', '0', 'Ebert Station', NULL, '+1.520.655.8053', 'Jenkins, Quigley and Swaniawski', NULL, 'Artisanat', 'Menuiserie', '', NULL, 11, NULL, NULL, NULL, NULL),
(13, 'Blick', 'F', 'New Brandon', '', '0', 'Lynch Lane', NULL, '+1 (520) 882-9581', 'Schulist, Larson and Keeling', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 19, NULL, NULL, NULL, NULL),
(14, 'Batz', 'F', 'Penelopestad', '', '0', 'Brook Flat', NULL, '1-805-848-6874', 'Schneider-Reichert', NULL, 'Artisanat', 'Bijouterie', '', NULL, 19, NULL, NULL, NULL, NULL),
(15, 'Schinner', 'M', 'Beckerfort', '', '0', 'Gottlieb Causeway', NULL, '+1-636-410-9189', 'Connelly Inc', NULL, 'Artisanat', 'Bijouterie', '', NULL, 11, NULL, NULL, NULL, NULL),
(16, 'Stehr', 'F', 'New Braulioburgh', '', '0', 'Lavon Mills', NULL, '+1-520-836-1241', 'Leuschke, Haag and Smitham', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 11, NULL, NULL, NULL, NULL),
(17, 'Huel', 'M', 'New Jacinthe', '', '0', 'Shaina Parkways', NULL, '(364) 322-9355', 'Wunsch-Padberg', NULL, 'Artisanat', 'Bijouterie', '', NULL, 15, NULL, NULL, NULL, NULL),
(18, 'Hoppe', 'F', 'McGlynnborough', '', '0', 'Colleen Grove', NULL, '+1-229-243-7727', 'Haag Ltd', NULL, 'Artisanat', 'Couture', '', NULL, 4, NULL, NULL, NULL, NULL),
(19, 'Kuhic', 'M', 'Marielleville', '', '0', 'Rosina Harbor', NULL, '(610) 852-7343', 'Cummings, Schuster and Breitenberg', NULL, 'Artisanat', 'Bijouterie', '', NULL, 9, NULL, NULL, NULL, NULL),
(20, 'Bauch', 'F', 'Gulgowskistad', '', '0', 'Felicita Land', NULL, '+13857047069', 'Schuppe-Lind', NULL, 'Artisanat', 'Couture', '', NULL, 1, NULL, NULL, NULL, NULL),
(21, 'Welch', 'M', 'East Ebony', '', '0', 'Winston Village', NULL, '(248) 713-1873', 'Fay, Gaylord and Johns', NULL, 'Artisanat', 'Couture', '', NULL, 13, NULL, NULL, NULL, NULL),
(22, 'Stoltenberg', 'F', 'Port Kale', '', '0', 'Altenwerth Burg', NULL, '440-783-2921', 'Bradtke, Lemke and Rempel', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 9, NULL, NULL, NULL, NULL),
(23, 'Murphy', 'M', 'Lake Judd', '', '0', 'Blake Parkway', NULL, '+1-850-975-3486', 'Predovic Group', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 1, NULL, NULL, NULL, NULL),
(24, 'Spinka', 'F', 'Osinskihaven', '', '0', 'Lola Lodge', NULL, '+1-978-665-5719', 'Hudson LLC', NULL, 'Artisanat', 'Bijouterie', '', NULL, 12, NULL, NULL, NULL, NULL),
(25, 'Rowe', 'M', 'Feeneystad', '', '0', 'Palma Trail', NULL, '580.477.0972', 'Cormier Ltd', NULL, 'Artisanat', 'Couture', '', NULL, 4, NULL, NULL, NULL, NULL),
(26, 'Gutkowski', 'M', 'East Simone', '', '0', 'Veum Knoll', NULL, '(479) 283-0107', 'Schaefer, Lemke and Nader', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 7, NULL, NULL, NULL, NULL),
(27, 'Hyatt', 'M', 'Port Jessie', '', '0', 'Mathilde Circle', NULL, '(463) 323-3227', 'Satterfield, Sauer and Dickens', NULL, 'Artisanat', 'Menuiserie', '', NULL, 14, NULL, NULL, NULL, NULL),
(28, 'Murray', 'F', 'North Werner', '', '0', 'Jaskolski Springs', NULL, '1-559-329-9036', 'Schulist Inc', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 18, NULL, NULL, NULL, NULL),
(29, 'Gislason', 'M', 'Port Barbaramouth', '', '0', 'Frami Station', NULL, '1-769-485-9941', 'Grimes-Waters', NULL, 'Artisanat', 'Menuiserie', '', NULL, 9, NULL, NULL, NULL, NULL),
(30, 'Hyatt', 'F', 'Llewellynview', '', '0', 'McClure Mill', NULL, '(531) 866-3168', 'Sanford, Erdman and Koch', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 18, NULL, NULL, NULL, NULL),
(31, 'Barton', 'F', 'Friedamouth', '', '0', 'Carroll Brooks', NULL, '+1-479-358-2501', 'Bode and Sons', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 5, NULL, NULL, NULL, NULL),
(32, 'Boyle', 'F', 'Langworthview', '', '0', 'Louie Wall', NULL, '+13648215701', 'Huel, Prohaska and Braun', NULL, 'Artisanat', 'Menuiserie', '', NULL, 14, NULL, NULL, NULL, NULL),
(33, 'Franecki', 'F', 'Lake Marcia', '', '0', 'Marco Falls', NULL, '+15864908889', 'Howe LLC', NULL, 'Artisanat', 'Bijouterie', '', NULL, 20, NULL, NULL, NULL, NULL),
(34, 'Prohaska', 'M', 'South Conorside', '', '0', 'Strosin Court', NULL, '724-368-3584', 'Russel-Swift', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 19, NULL, NULL, NULL, NULL),
(35, 'O\'Connell', 'F', 'Carissaport', '', '0', 'Monahan Wall', NULL, '+1-919-651-0978', 'Hyatt-Swaniawski', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 16, NULL, NULL, NULL, NULL),
(36, 'Leuschke', 'M', 'Kurtmouth', '', '0', 'Trantow Circle', NULL, '+13615600959', 'Ondricka, Hermiston and Altenwerth', NULL, 'Artisanat', 'Menuiserie', '', NULL, 8, NULL, NULL, NULL, NULL),
(37, 'Bruen', 'F', 'West Janashire', '', '0', 'Jessyca Trail', NULL, '(681) 588-5390', 'Trantow, Johnston and Schmitt', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 16, NULL, NULL, NULL, NULL),
(38, 'Runolfsdottir', 'M', 'East Jadastad', '', '0', 'McDermott Alley', NULL, '(317) 397-7551', 'Nader, Johns and DuBuque', NULL, 'Artisanat', 'Bijouterie', '', NULL, 13, NULL, NULL, NULL, NULL),
(39, 'Nienow', 'F', 'New Elishatown', '', '0', 'Lizeth Brooks', NULL, '678.861.5076', 'Gorczany, Luettgen and Kirlin', NULL, 'Artisanat', 'Bijouterie', '', NULL, 5, NULL, NULL, NULL, NULL),
(40, 'Conn', 'M', 'North Uniquemouth', '', '0', 'Dietrich Valley', NULL, '+14697535829', 'Upton-Marvin', NULL, 'Artisanat', 'Menuiserie', '', NULL, 14, NULL, NULL, NULL, NULL),
(41, 'Bernhard', 'F', 'Port Rusty', '', '0', 'Simone Port', NULL, '531.652.1487', 'Gutkowski-Morissette', NULL, 'Artisanat', 'Couture', '', NULL, 11, NULL, NULL, NULL, NULL),
(42, 'Schuster', 'F', 'Odashire', '', '0', 'Antonio Park', NULL, '(419) 521-6931', 'Jaskolski, King and Windler', NULL, 'Artisanat', 'Menuiserie', '', NULL, 6, NULL, NULL, NULL, NULL),
(43, 'Schuster', 'M', 'Clairside', '', '0', 'Mac Mews', NULL, '+1.774.534.8853', 'Swift-O\'Connell', NULL, 'Artisanat', 'Bijouterie', '', NULL, 14, NULL, NULL, NULL, NULL),
(44, 'Hansen', 'F', 'West Alethaland', '', '0', 'Aufderhar Avenue', NULL, '930.843.4223', 'Fritsch Group', NULL, 'Artisanat', 'Bijouterie', '', NULL, 3, NULL, NULL, NULL, NULL),
(45, 'Hartmann', 'F', 'East Stacey', '', '0', 'Klein Crest', NULL, '1-720-704-6667', 'Luettgen, Carter and Cassin', NULL, 'Artisanat', 'Couture', '', NULL, 16, NULL, NULL, NULL, NULL),
(46, 'Schinner', 'M', 'Emilieport', '', '0', 'Rutherford Viaduct', NULL, '678.937.8634', 'Mraz-Johns', NULL, 'Artisanat', 'Couture', '', NULL, 7, NULL, NULL, NULL, NULL),
(47, 'Goyette', 'M', 'Leeville', '', '0', 'Larson Skyway', NULL, '(947) 362-3798', 'Green-Skiles', NULL, 'Artisanat', 'Bijouterie', '', NULL, 6, NULL, NULL, NULL, NULL),
(48, 'Hauck', 'M', 'Kayceeshire', '', '0', 'Aniyah Place', NULL, '(551) 633-7620', 'Dickens, Marvin and Homenick', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 1, NULL, NULL, NULL, NULL),
(49, 'Langosh', 'F', 'Emiliaton', '', '0', 'Rebecca Prairie', NULL, '458-268-8448', 'Fay, Kirlin and Hodkiewicz', NULL, 'Artisanat', 'Ferronnerie', '', NULL, 19, NULL, NULL, NULL, NULL),
(51, 'URIEL WILFRIED KIDOH', 'M', 'songon', '', '0', 'kassemble', NULL, '0713368570', 'fre', NULL, 'menusuerie', 'charpente', '', NULL, 5, NULL, NULL, '2024-07-03 15:37:25', '2024-07-03 15:37:25'),
(52, 'dongo yves', 'M', 'bouake', '', '0', 'belleville', NULL, '0102147965', 'ismo&frere', NULL, 'masonnerie', 'construction de maison base', '', NULL, 7, NULL, NULL, '2024-07-03 15:41:24', '2024-07-03 15:41:24'),
(55, 'dongo yves', 'M', 'bouake', '', '0', 'kassemble', NULL, '0102547965', 'URIEL WILFRIED KIDOH', NULL, 'menusuerie', 'charpente', '', NULL, 47, NULL, NULL, '2024-07-04 18:27:40', '2024-07-04 18:27:40'),
(56, 'dongo yves', 'M', 'bouake', '', '0', 'kassemble', NULL, '0107447965', 'cacao qui seche au soleil', NULL, 'menusuerie', 'charpente', '', NULL, 47, NULL, NULL, '2024-07-04 18:32:15', '2024-07-04 19:04:53'),
(58, 'konan binde', 'Femme', 'Abidjan', 'Abobo', 'songon', 'deguerpis', 'bindekonan@gmail.com', '0768303199', 'bois sec', NULL, 'Agriculture', 'vente de boisss', '', NULL, 100000, 5.3224000, -4.0359000, '2024-07-09 10:48:36', '2024-07-09 14:51:45'),
(60, 'dongo yves', 'Homme', 'Abidjan', 'Abobo', NULL, 'avocatier', 'yvesdonsgo@gmail.com', '0102147967', 'konan binde', '0145789635', 'Agriculture', 'vente habit', 'oui', 'local', 4001, 5.3224000, -4.0359000, '2024-07-09 15:23:32', '2024-07-09 20:06:52'),
(72, 'ayas', 'Femme', 'Divo', 'Abobo', NULL, 'yamoussoukro', 'bindekonlan@gmail.com', '0768303197', 'luis vutton', '0777976448', 'Commerce', 'charpente', 'oui', 'local', 4, 5.3223000, -4.0344000, '2024-07-14 08:32:39', '2024-07-14 08:32:39'),
(73, 'dongo yves', 'Homme', 'Bouaké', 'Abobo', NULL, 'kassemble', 'yvesdongo@gmail.com', '0102147960', 'URIEL WILFRIED KIDOH', '0708090450', 'Agriculture', 'vente de bois', 'oui', 'abidjan', 3, 5.3223000, -4.0344000, '2024-07-14 21:47:46', '2024-07-14 21:47:46'),
(74, 'dongo yves', 'Homme', 'Bouaké', 'Abobo', NULL, 'kassemble', 'yvesdpongo@gmail.com', '0102147950', 'URIEL WILFRIED KIDOH', '0708090469', 'Agriculture', 'vente de bois', 'oui', 'abidjan', 3, 5.3223000, -4.0344000, '2024-07-14 21:53:08', '2024-07-14 21:53:08'),
(75, 'kacou steph', 'Femme', 'San-Pédro', 'Abobo', NULL, 'agban', 'kacou@gmail.com', '025478965', 'versashe', '05879641', 'Services', 'vende de pain', 'oui', 'abidjan', 4, 5.3223480, -4.0344330, '2024-07-17 23:40:42', '2024-07-17 23:40:42');

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('john@gmail.com|127.0.0.1', 'i:1;', 1720858643),
('john@gmail.com|127.0.0.1:timer', 'i:1720858643;', 1720858643);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_01_143348_create_artisans_table', 1),
(5, '2024_07_01_153142_create_produits_table', 2),
(6, '2024_07_01_154413_create_commandes_table', 3),
(7, '2024_07_08_133432_add_geolocation_to_artisans_table', 4),
(8, '2024_07_11_190428_add_is_artisan_to_users_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7E5CBaTIdcZmVQUXZ6ErZuB2Nudblq9fiB2kOs2N', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzJ3VHV1RGpaQ0QwY1dkQ0FINVlnQjJNRTVQaG5BVFdYZGRmQmJsZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721300553),
('7RlNoL1b6DtsEUqI0j3gpta1fVmUVI2qCQCzKN8j', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYXpnWVJDTnZVb29QYng1aHdzWVkxV0FBMmtodkNkTmFNdEdoWldSWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1721136795),
('8ellxp6CC6Yp2Kmep3QDTJem7nYwkZ5BCi76aQvD', 3, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibWVMdmxDN1NqQjVoYU5GVXZIWk91eWFwWXF5bnlhM3RMcFptOGU4SSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1721343399),
('9nGkb1XSSjtfIyOp7wjqLmt13UVs5wk04cQxT7jZ', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib25VZUw0eWFodXU5UGpVYXFtRWlWRXVRTkhwMHF0VEtvekJBYUJISCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnRpc2Fuc3MvNzUiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1721377162),
('EByN0dkMill3Py90ZwVOTRDhxtnjDFS0wEagQouB', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS0lCVzBydm1kQjlzYmdvY3BBZndiR1dMdEhkU0daRmk3Zm81MTh2ZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1721344516),
('eiGpX5zUnKTjvrU91xk63FfmMlG4BuaCBqJhozrT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamVuWEZIMDdUeTA3dEpUbGFqcTU5TU1HMGhzMnFqbW1UUTZQdG04TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnRpc2Fuc3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721299903),
('GIy8IPje0F5roQtvQZm245OgdaWZuFLn1KVvJ8nY', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNWlFQ3Z6bnM4VUx6VEhjR3pIYjBoUEU2NEdndWp3RXBmT0xndDVjViI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1721203947),
('hjiSWbz8TEe3ZKplnZPHbTLO8SQv4A6jnw7KnN9o', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRm9XR3I3QnQxMlExU0EyMm10S2x5bVhOaUJ5U1BOSzkyakRjanh0eiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXJ0aXNhbnNzLzEzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1721260950),
('tooNDbWtUgkneVjwx9hZopyaz9jnIL6ZkccFPHan', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTWJVRUtvcGlxMjhmQkFPc2pQWjg1RGNsRDJ1MG9jemViRzFNZWdkdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1721174862);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_artisan` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_artisan`) VALUES
(1, 'willy', 'john@gmail.com', NULL, '$2y$12$mBOfGQ8/clF7UOTdw/.7pOLbdBhVZ4qBexzVVCRv.yntMuP5//Vrm', 'LbjF2SlPYx8h0LaHBfuJf33bcJyFaffd2Roaa8aMxCVyyi9yWX5ng96JM76P', '2024-07-01 20:46:20', '2024-07-01 20:46:20', 0),
(2, 'URIEL WILFRIED KIDOH', 'urielkidoh@gmail.com', NULL, '$2y$12$r3d.zVWe4D7KaI4ZqAGJteyoyvM4YGwjEuFLZ.s15vufbpsXr7Kre', NULL, '2024-07-11 19:26:44', '2024-07-11 19:26:44', 0),
(3, 'yves konan', 'yves3716@gmail.com', NULL, '$2y$12$.vcgDgz65kx5QH8fOHxCzeSCj3M28gBej6NL6SBjhi6IxIkK34zcm', NULL, '2024-07-18 22:27:16', '2024-07-19 07:38:09', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artisans`
--
ALTER TABLE `artisans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artisans_email_unique` (`email`),
  ADD UNIQUE KEY `artisans_telephone_unique` (`telephone`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_user_id_foreign` (`user_id`),
  ADD KEY `commandes_produit_id_foreign` (`produit_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artisans`
--
ALTER TABLE `artisans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_produit_id_foreign` FOREIGN KEY (`produit_id`) REFERENCES `produits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commandes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
