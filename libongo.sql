-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Set-2020 às 23:44
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libongo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Bebida', '2020-08-30 11:09:55', '2020-08-30 11:09:55'),
(2, 'Comida', '2020-09-15 01:22:58', '2020-09-15 01:22:58'),
(3, 'Petisco', '2020-09-15 01:33:36', '2020-09-15 01:33:36'),
(4, 'M', '2020-09-15 01:36:27', '2020-09-15 01:36:27'),
(5, 'Jaiandra', '2020-09-15 02:17:26', '2020-09-15 02:17:26'),
(6, 'Balet', '2020-09-15 02:18:33', '2020-09-15 02:18:33'),
(7, 'Vestuario', '2020-09-15 02:20:13', '2020-09-15 02:20:13'),
(8, 'Natação', '2020-09-15 02:22:08', '2020-09-15 02:22:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedors`
--

CREATE TABLE `fornecedors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fornecedors`
--

INSERT INTO `fornecedors` (`id`, `nome`, `morada`, `telefone`, `email`, `nif`, `created_at`, `updated_at`) VALUES
(1, 'Alexandra Fuamba', 'Viana/Zango3QG', '942007976', 'elizeltonsatolia@gmail.com', 'skdlksdslkkdsl', '2020-08-30 11:08:53', '2020-08-30 11:08:53'),
(2, 'SatoliaSoft LTD', 'ZANGO3QG', '991905818', 'alexa@gmail.com', 'skdlksdslkkdsl', '2020-09-16 18:54:39', '2020-09-16 18:54:39'),
(3, 'PA', 'Viana/Zango3', '998336533', 'eliandrasatoliasatoliasa@gmail.com', 'xvcvcvc', '2020-09-16 19:19:02', '2020-09-16 19:19:02'),
(4, 'LO', 'ZANGO3QG', '991905818', 'elizeltonsatolia@gmail.com', 'skdlksdslkkdsl', '2020-09-16 19:33:46', '2020-09-16 19:33:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoCivil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nBi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `genero`, `estadoCivil`, `nBi`, `inss`, `nacionalidade`, `iban`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'Jaiandra Satolia', 'Femenino', 'Solteiro(a)', '0007825LD05', '0007825LD05', 'Angola', 'A004.345667677887', 17, '2020-09-16 08:07:18', '2020-09-16 08:07:18'),
(9, 'Alexandra Fuamba', 'Femenino', 'Casado(a)', '0007825LD05', '0007825LD05', 'Angola', '0006589745223', 18, '2020-09-16 08:16:50', '2020-09-16 08:16:50'),
(10, 'Sabino Negocio', 'Masculino', 'Casado(a)', '0007825LD05', '0007825LD05', 'Africa do Sul', 'fafafa', 19, '2020-09-16 20:41:12', '2020-09-16 20:41:12'),
(11, 'Alcides Neto', 'Masculino', 'Solteiro(a)', '0007825LD05', '0007825LD05', 'Angola', 'A004.345667677887', 20, '2020-09-16 20:45:05', '2020-09-16 20:45:05'),
(12, 'Silvio da Rocha', 'Masculino', 'Casado(a)', '0007825LD05', '0007825LD05', 'Angola', '0006589745223', 21, '2020-09-16 22:55:19', '2020-09-16 22:55:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicos`
--

CREATE TABLE `historicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` enum('I','O','T') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mount` double(10,2) NOT NULL,
  `total_before` double(10,2) NOT NULL,
  `total_after` double(10,2) NOT NULL,
  `user_id_transaction` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `impostos`
--

CREATE TABLE `impostos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentagem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `impostos`
--

INSERT INTO `impostos` (`id`, `descricao`, `percentagem`, `created_at`, `updated_at`) VALUES
(1, 'IVA', 13, '2020-08-30 11:09:25', '2020-08-30 11:09:25'),
(2, 'IPU', 5, '2020-09-16 16:55:13', '2020-09-16 16:55:13'),
(3, 'IPA', 1, '2020-09-16 16:59:52', '2020-09-16 16:59:52'),
(4, 'ITU', 1, '2020-09-16 17:00:51', '2020-09-16 17:00:51'),
(5, 'IPTU', 1, '2020-09-16 17:03:12', '2020-09-16 17:03:12'),
(6, 'A', 1, '2020-09-16 17:06:54', '2020-09-16 17:06:54'),
(7, 'Cereal', 1, '2020-09-16 17:07:34', '2020-09-16 17:07:34'),
(8, 'Natação', 1, '2020-09-16 17:09:45', '2020-09-16 17:09:45'),
(9, 'BTA', 5, '2020-09-16 17:11:08', '2020-09-16 17:11:08'),
(10, 'BK', 4, '2020-09-16 17:12:33', '2020-09-16 17:12:33'),
(11, 'JA', 5, '2020-09-16 17:13:46', '2020-09-16 17:13:46'),
(12, 'kl', 1, '2020-09-16 17:15:19', '2020-09-16 17:15:19'),
(13, 'LA', 3, '2020-09-16 17:15:29', '2020-09-16 17:15:29'),
(14, 'TNA', 5, '2020-09-16 17:16:25', '2020-09-16 17:16:25'),
(15, 'Bebida', 5, '2020-09-16 17:17:25', '2020-09-16 17:17:25'),
(16, 'Vestuario', 5, '2020-09-16 17:17:56', '2020-09-16 17:17:56'),
(17, 'Vestuario', 4, '2020-09-16 17:19:35', '2020-09-16 17:19:35'),
(18, 'CD', 3, '2020-09-16 17:19:56', '2020-09-16 17:19:56'),
(19, 'QW', 1, '2020-09-16 17:21:18', '2020-09-16 17:21:18'),
(20, 'W', 3, '2020-09-16 17:30:05', '2020-09-16 17:30:05'),
(21, 'm', 3, '2020-09-16 17:30:55', '2020-09-16 17:30:55'),
(22, 'o', 1, '2020-09-16 17:34:33', '2020-09-16 17:34:33'),
(23, 'v', 3, '2020-09-16 17:34:54', '2020-09-16 17:34:54'),
(24, 'e', 3, '2020-09-16 17:35:58', '2020-09-16 17:35:58'),
(25, 'Comida', 6, '2020-09-16 17:36:22', '2020-09-16 17:36:22'),
(26, 'KTM', 3, '2020-09-16 18:15:47', '2020-09-16 18:15:47'),
(27, 'Lk', 4, '2020-09-16 18:16:54', '2020-09-16 18:16:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lucros`
--

CREATE TABLE `lucros` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(45, '2014_10_12_000000_create_users_table', 1),
(46, '2014_10_12_100000_create_password_resets_table', 1),
(47, '2019_10_29_120414_create_historicos_table', 1),
(48, '2020_08_10_141053_create_clientes_table', 1),
(49, '2020_08_10_141325_create_fornecedors_table', 1),
(50, '2020_08_13_074943_create_categorias_table', 1),
(51, '2020_08_13_075428_create_impostos_table', 1),
(52, '2020_08_13_205654_create_lucros_table', 1),
(53, '2020_08_13_211251_create_funcionarios_table', 1),
(54, '2020_08_15_093934_create_produtos_table', 1),
(55, '2020_08_15_095631_create_vendas_table', 1),
(56, '2020_09_15_233741_create_roles_table', 2),
(58, '2020_09_15_234554_create_permissions_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alexandra@gmail.com', '$2y$10$SXse3xIiUW7sJHMiYEgXcejiPjTSJ/CKr6GN0r.mVMLO4lYwWhBXq', '2020-09-16 05:30:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lable` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `lable`, `created_at`, `updated_at`) VALUES
(1, 'cadastrar_funcionario', 'cadastrar funcionario', NULL, NULL),
(2, 'editar_funcionario', 'pode alterar os dados dos funcionarios', NULL, NULL),
(3, 'eliminar_funcionario', '', NULL, NULL),
(4, 'cadastrar_produto', 'pode adicionar um produto no sistema', NULL, NULL),
(5, 'editar_produto', 'pode editar dados do produto no sistema', NULL, NULL),
(6, 'eliminar_produto', 'pode eliminar um produto do sistema', NULL, NULL),
(7, 'criar_categoria', 'pode adicionar uma categoria ao sistema', NULL, NULL),
(8, 'editar_categoria', 'pode alterar dados de uma determinada categoria', NULL, NULL),
(9, 'eliminar_categoria', 'pode apagar uma categoria do sistema', NULL, NULL),
(10, 'cadastrar_imposto', 'pode cadastrar um imposto no sistema', NULL, NULL),
(11, 'editar_imposto', 'pode alterar dados de um imposto', NULL, NULL),
(12, 'eliminar_imposto', 'pode eliminar imposto do sistema', NULL, NULL),
(13, 'dar_permissoes', 'da permissoes aos utilizadores', NULL, NULL),
(14, 'retira_permissoes', 'revoga permissoes de utilizadores', NULL, NULL),
(15, 'edita_funcionalidades', 'pode ediar regras', NULL, NULL),
(16, 'vender_produto', 'vende produto no sistema', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 4, 2),
(14, 5, 2),
(15, 7, 2),
(16, 8, 2),
(17, 10, 2),
(18, 11, 2),
(19, 16, 2),
(20, 16, 1),
(21, 16, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precoVenda` double NOT NULL,
  `precoCusto` double NOT NULL,
  `validade` date NOT NULL,
  `quantidade` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `imposto_id` int(10) UNSIGNED NOT NULL,
  `fornecedor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `marca`, `tipo`, `precoVenda`, `precoCusto`, `validade`, `quantidade`, `categoria_id`, `imposto_id`, `fornecedor_id`, `created_at`, `updated_at`) VALUES
(1, 'Cerveja', 'Eka', 'Lata', 200, 10000, '2020-08-20', 24, 1, 1, 1, '2020-08-30 11:10:56', '2020-09-16 22:51:04'),
(2, 'Prego NO PRATO', 'Bife', 'vaca', 1500, 2000, '2020-09-16', 7, 2, 1, 3, '2020-09-16 22:59:03', '2020-09-16 23:02:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lable` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `lable`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'dono do negocio', NULL, NULL),
(2, 'gestor', 'gestor do negocio', NULL, NULL),
(3, 'atendente', 'vendedor de Produtos', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(10, 17, 3),
(11, 18, 2),
(12, 19, 3),
(13, 20, 3),
(14, 21, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Elizelton Satolia', 'elizeltonsatolia@gmail.com', '$2y$10$mvf2tdVFfMP5YQCaVXxDc.yPEPFpl5WYcH95nf.pBao.UqCNSK.v2', NULL, 'MjTOBmrX2XGakQjPygRKna6VQfepqUcqYsCBBzKppMKalk8qXhjT2lWQRSFP', '2020-08-30 11:06:54', '2020-08-30 11:06:54'),
(17, 'Eliandra', 'eliandra@gmail.com', '$2y$10$tH/YhwJOltULjFRRWVy58OPQ/fGriISmVg0dirU56XsPE8kn.WvZq', NULL, 'o6DvBxKHyX0QTvEYWz8jjcjVXWJSQNc0sDdkmDZ24QcxQlL3N9DL7JAwXwdV', '2020-09-16 08:07:17', '2020-09-16 08:07:17'),
(18, 'Xandinha', 'alexandra@gmail.com', '$2y$10$fqCnUONsQsDrKQp8T4gwhOgG9TW.TGDlQCfOiaB7RzVXD5/0bNDei', NULL, 'CF7cCo1WEvo41b4WpzxvWKM5i7cALxw7TQNMLx9traIlQ1XRH8js1iW0De1u', '2020-09-16 08:16:50', '2020-09-16 08:16:50'),
(19, 'Sabino Nego', 'sabino@gmail.com', '$2y$10$O97y8de1N/DZTaTVEQPQpONm56.UxppIb02kL4mIk0yQLAt3XbJ8i', NULL, NULL, '2020-09-16 20:41:12', '2020-09-16 20:41:12'),
(20, 'Netto', 'alcides@gmail.com', '$2y$10$30fNlMcD6KZSF7M2JtMBTOFRXt.QKlhBXBYXeovCMlzcomSU5vrMS', NULL, NULL, '2020-09-16 20:45:05', '2020-09-16 20:45:05'),
(21, 'silvio', 'silvio@gmail.com', '$2y$10$b3xsLi1sozRh8Omz8d2N0ui8WTaZKLErQ2yL7wjJ54mXnHMkOJZFy', NULL, 'vMlper5JiXZqXivbsrATvUgv1U0YnkBD4pSCYEN5KRtrlpuOsDWziAETU85d', '2020-09-16 22:55:19', '2020-09-16 22:55:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `produto_id` int(10) UNSIGNED NOT NULL,
  `funcionario_id` int(10) UNSIGNED NOT NULL,
  `valor` double(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `produto_id`, `funcionario_id`, `valor`, `quantidade`, `data`, `created_at`, `updated_at`) VALUES
(52, 1, 8, 400.00, 2, '2020-09-16', '2020-09-16 22:23:27', '2020-09-16 22:23:27'),
(53, 1, 8, 600.00, 3, '2020-09-16', '2020-09-16 22:23:46', '2020-09-16 22:23:46'),
(54, 1, 9, 3000.00, 15, '2020-09-16', '2020-09-16 22:49:39', '2020-09-16 22:49:39'),
(55, 2, 8, 4500.00, 3, '2020-09-16', '2020-09-16 23:02:14', '2020-09-16 23:02:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedors`
--
ALTER TABLE `fornecedors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funcionarios_id_user_foreign` (`user_id`);

--
-- Indexes for table `historicos`
--
ALTER TABLE `historicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historicos_user_id_foreign` (`user_id`);

--
-- Indexes for table `impostos`
--
ALTER TABLE `impostos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lucros`
--
ALTER TABLE `lucros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_categoria_id_foreign` (`categoria_id`),
  ADD KEY `produtos_imposto_id_foreign` (`imposto_id`),
  ADD KEY `produtos_fornecedor_id_foreign` (`fornecedor_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendas_produto_id_foreign` (`produto_id`),
  ADD KEY `vendas_funcionario_id_foreign` (`funcionario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedors`
--
ALTER TABLE `fornecedors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `historicos`
--
ALTER TABLE `historicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `impostos`
--
ALTER TABLE `impostos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lucros`
--
ALTER TABLE `lucros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_id_user_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `historicos`
--
ALTER TABLE `historicos`
  ADD CONSTRAINT `historicos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produtos_fornecedor_id_foreign` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produtos_imposto_id_foreign` FOREIGN KEY (`imposto_id`) REFERENCES `impostos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_funcionario_id_foreign` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendas_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
