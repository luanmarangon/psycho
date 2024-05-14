-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Fev-2024 às 02:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `psycho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `zipcode` varchar(45) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `complement` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` char(2) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `address`
--

INSERT INTO `address` (`id`, `zipcode`, `street`, `number`, `complement`, `district`, `city`, `state`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Rua A', 123, 'Apto 1', 'Centro', 'Presidente Prudente', 'SP', NULL, NULL, '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(2, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'Bloco 3 Apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 13:25:27', '2024-02-04 16:03:23'),
(3, NULL, 'Travessa C', 789, 'Sala 3', 'Jardim Paulista', 'Presidente Prudente', 'SP', NULL, NULL, '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(4, NULL, 'Alameda D', 1011, 'Bloco 4', 'Jardim Bongiovani', 'Presidente Prudente', 'SP', NULL, NULL, '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(5, '19035468', 'Rua João Pires de Campos', 1213, 'Lote 5', 'Parque Higienópolis', 'Presidente Prudente', 'SP', '-22.14783', '-51.40341', '2024-02-04 13:25:27', '2024-02-11 21:14:48'),
(6, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:35:26', '2024-02-04 14:35:26'),
(7, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:36:28', '2024-02-04 14:36:28'),
(8, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:37:24', '2024-02-04 14:37:24'),
(9, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:38:39', '2024-02-04 14:38:39'),
(10, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:39:16', '2024-02-04 14:39:16'),
(11, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:40:01', '2024-02-04 14:40:01'),
(12, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:40:13', '2024-02-04 14:40:13'),
(13, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:40:26', '2024-02-04 14:40:26'),
(14, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:40:48', '2024-02-04 14:40:48'),
(15, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:41:15', '2024-02-04 14:41:15'),
(16, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 14:41:36', '2024-02-04 14:41:36'),
(17, '19560000', 'Trv Francisco Gimenes', 44, 'casa', 'Centro', 'Indiana', 'SP', '-22.17134', '-51.25151', '2024-02-04 14:43:04', '2024-02-04 14:43:04'),
(18, '19560000', 'Trv Francisco Gimenes', 44, 'casa', 'Primavera', 'Indiana', 'SP', '-22.17134', '-51.25151', '2024-02-04 14:43:29', '2024-02-04 15:20:24'),
(19, '19033390', 'Avenida Presidente Juscelino Kubitschek', 1564, '1asa', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09275', '-51.39982', '2024-02-04 15:56:03', '2024-02-04 15:56:03'),
(20, '19500000', 'asa', 15, 'as', '15', 'Martinópolis', 'SP', '-22.14688', '-51.13763', '2024-02-04 16:00:09', '2024-02-04 16:00:09'),
(21, '19033390', 'Avenida Presidente Juscelino Kubitschek', 7899, 'Bloco 3 Apto 41', 'Jardim Guanabara', 'Presidente Prudente', 'SP', '-22.09757', '-51.38855', '2024-02-04 16:02:38', '2024-02-04 16:02:38'),
(22, '19560000', 'Trv Francisco Gimenes', 44, 'casa', 'jardim ', 'Indiana', 'SP', '-22.17134', '-51.25151', '2024-02-11 17:39:06', '2024-02-11 17:39:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `post_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `users_id`, `category_id`, `title`, `body`, `post_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'A Importância do Autoconhecimento', 'Descubra como o autoconhecimento pode impactar positivamente sua vida e bem-estar emocional.', '2023-01-15 13:30:00', '2024-02-04 13:25:39', '2024-02-04 13:25:39'),
(2, 2, 2, 'Dicas para Melhorar os Relacionamentos', 'Explore estratégias para construir relacionamentos saudáveis e fortalecer os laços interpessoais.', '2023-02-01 17:45:00', '2024-02-04 13:25:39', '2024-02-04 13:25:39'),
(3, 2, 3, 'Cuidando da Saúde Mental no Dia a Dia', 'Conheça práticas simples para promover o bem-estar emocional e manter uma boa saúde mental cotidiana.', '2023-02-28 15:15:00', '2024-02-04 13:25:39', '2024-02-04 13:25:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Autoconhecimento', '2024-02-04 13:25:17', '2024-02-04 13:25:17'),
(2, 'Relacionamentos', '2024-02-04 13:25:17', '2024-02-04 13:25:17'),
(3, 'Bem-Estar Emocional', '2024-02-04 13:25:17', '2024-02-04 13:25:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `socialReason` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stateRegistration` varchar(45) DEFAULT NULL,
  `responsible` varchar(255) DEFAULT NULL,
  `mail1` varchar(255) DEFAULT NULL,
  `mail2` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `company`
--

INSERT INTO `company` (`id`, `address_id`, `cnpj`, `socialReason`, `name`, `stateRegistration`, `responsible`, `mail1`, `mail2`, `phone1`, `phone2`, `created_at`, `updated_at`) VALUES
(1, 1, '01234567000189', 'Clinica Saude Mental Ltda Me', 'Clinica Saude Mental', 'Isento', 'Jessica Fernanda V. Marangon', NULL, NULL, NULL, NULL, '2024-02-04 13:25:27', '2024-02-04 13:25:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `companysocialmedia`
--

CREATE TABLE `companysocialmedia` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `socialMedia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `companysocialmedia`
--

INSERT INTO `companysocialmedia` (`id`, `company_id`, `socialMedia_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contact`
--

INSERT INTO `contact` (`id`, `type`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'email', 'contato1@email.com', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(2, 'email', 'contato2@email.com', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(3, 'email', 'contato3@email.com', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(4, 'email', 'contato4@email.com', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(5, 'email', 'contato5@email.com', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(6, 'whatsApp', '555-1111', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(7, 'whatsApp', '555-2222', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(8, 'whatsApp', '555-3333', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(9, 'whatsApp', '555-4444', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(10, 'whatsApp', '555-5555', '2024-02-04 13:25:27', '2024-02-04 13:25:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`id`, `people_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 12, 12, '2024-02-11 17:41:14', '2024-02-11 17:41:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `faq`
--

INSERT INTO `faq` (`id`, `users_id`, `question`, `response`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Como lidar com o estresse diário?', 'Lidar com o estresse diário pode envolver técnicas de relaxamento, como a respiração profunda e a meditação. Além disso, procurar apoio profissional pode ser útil.', 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(2, 2, 'Quais são algumas estratégias para melhorar a autoestima?', 'Melhorar a autoestima pode envolver práticas como o desenvolvimento de habilidades pessoais, a celebração de conquistas e o cuidado com o bem-estar emocional.', 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(3, 2, 'Como superar a ansiedade social?', 'Superar a ansiedade social pode incluir a prática de habilidades sociais, a exposição gradual a situações sociais e, em alguns casos, a busca por apoio terapêutico.', 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(4, 2, 'Quais são os sinais de um esgotamento emocional?', 'Sinais de esgotamento emocional podem incluir exaustão constante, distanciamento emocional, dificuldade de concentração e alterações no sono. É importante buscar ajuda se esses sinais persistirem.', 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(5, 2, 'Como melhorar a comunicação em relacionamentos?', 'Melhorar a comunicação em relacionamentos pode envolver práticas como ouvir ativamente, expressar-se de forma clara e respeitosa, e buscar compreensão mútua.', 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `licenses`
--

CREATE TABLE `licenses` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mailsettings`
--

CREATE TABLE `mailsettings` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `smtp` varchar(255) DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `settingsGenre_id` int(11) NOT NULL,
  `dateBirth` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `people`
--

INSERT INTO `people` (`id`, `address_id`, `firstName`, `lastName`, `cpf`, `rg`, `settingsGenre_id`, `dateBirth`, `phone`, `mail`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'JESSICA FERNANDA VIEIRA', 'MARANGON', '12345678900', '123456789', 1, '1998-10-01', '18888888888', 'jessica.marangon@pscyho.com', 'A', '2024-02-04 13:25:27', '2024-02-11 21:30:44'),
(2, 3, 'Lucas Silva', 'Oliveira', '98765432100', '987654321', 2, '1995-05-15', NULL, NULL, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(3, 4, 'Amanda Souza', 'Pereira', '34567890123', '345678901', 1, '2000-03-20', NULL, NULL, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(4, 5, 'CARLOS OLIVEIRA', 'SANTOS', '56789012345', '567890123', 2, '1980-12-05', '18999999999', 'carlos.oliveira@psyco.com', 'A', '2024-02-04 13:25:27', '2024-02-11 21:14:48'),
(11, 21, 'LUAN  DE LIMA ', 'TESTE MARANGON', '37969546854', '471417543', 2, '1990-09-21', '18997482397', 'luan.marangon@egestora.com.br', 'A', '2024-02-04 16:02:38', '2024-02-04 17:23:13'),
(12, 22, 'LYVIA DE MORAIS', 'MARANGON', '52525252222', '1111111111', 1, '2011-01-13', '18333333333', 'lyvia@marangon.com', 'A', '2024-02-11 17:39:06', '2024-02-11 17:39:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `peoplecontact`
--

CREATE TABLE `peoplecontact` (
  `id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `peoplecontact`
--

INSERT INTO `peoplecontact` (`id`, `people_id`, `contact_id`) VALUES
(1, 1, 2),
(2, 1, 7),
(3, 2, 3),
(4, 2, 8),
(5, 3, 4),
(6, 3, 9),
(7, 4, 5),
(8, 4, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `psychologist`
--

CREATE TABLE `psychologist` (
  `id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `crp` varchar(45) DEFAULT NULL,
  `issuanceDate` date DEFAULT NULL,
  `registration` varchar(255) DEFAULT NULL,
  `expirationDate` date DEFAULT NULL,
  `standard` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `psychologist`
--

INSERT INTO `psychologist` (`id`, `people_id`, `users_id`, `crp`, `issuanceDate`, `registration`, `expirationDate`, `standard`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '102153-SP', '2024-02-11', '002123364', '2026-02-11', 'S', '2024-02-04 13:25:27', '2024-02-11 12:12:39'),
(2, 2, 3, '4567', NULL, NULL, NULL, 'N', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(3, 3, 4, '4568', NULL, NULL, NULL, 'N', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(4, 11, 5, '23454-SP', '2000-01-01', '154040', '2024-02-15', 'S', '2024-02-04 17:43:14', '2024-02-11 12:37:02'),
(10, 4, 11, '002156', '2024-02-28', 'wqwqwq', '0000-00-00', 'N', '2024-02-05 17:20:38', '2024-02-05 17:20:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `psychologistservices`
--

CREATE TABLE `psychologistservices` (
  `id` int(11) NOT NULL,
  `psychologist_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `psychologistservices`
--

INSERT INTO `psychologistservices` (`id`, `psychologist_id`, `services_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 1, 4),
(5, 2, 5),
(6, 3, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `psychologistsocialmedia`
--

CREATE TABLE `psychologistsocialmedia` (
  `id` int(11) NOT NULL,
  `psychologist_id` int(11) NOT NULL,
  `socialMedia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `psychologistsocialmedia`
--

INSERT INTO `psychologistsocialmedia` (`id`, `psychologist_id`, `socialMedia_id`) VALUES
(1, 1, 3),
(2, 1, 4),
(38, 4, 24),
(39, 4, 25),
(40, 4, 26);

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `operation` text DEFAULT NULL,
  `sessions` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `atendence` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `operation`, `sessions`, `duration`, `atendence`, `created_at`, `updated_at`) VALUES
(1, 'Psicoterapia Online', 'Sessões de psicoterapia realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Psicoterapia, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(2, 'Aconselhamento Psicológico Online', 'Sessões de aconselhamento psicológico realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Aconselhamento Psicológico, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(3, 'Avaliação Psicológica Online', 'Sessões de avaliação psicológica realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Avaliação Psicológica, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(4, 'Orientação Profissional Online', 'Sessões de orientação profissional realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Orientação Profissional, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(5, 'Psicoterapia Individual Online', 'Sessões individuais de psicoterapia realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Psicoterapia Individual, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(6, 'Aconselhamento para Pais Online', 'Sessões de aconselhamento para pais realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Aconselhamento para Pais, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', '2024-02-04 13:26:48', '2024-02-04 13:26:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settingsgenre`
--

CREATE TABLE `settingsgenre` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `settingsgenre`
--

INSERT INTO `settingsgenre` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Feminino', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(2, 'Masculino', '2024-02-04 13:25:27', '2024-02-04 13:25:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `socialMedia` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `socialMedia`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/seu_perfil', '2024-02-04 13:25:48', '2024-02-04 13:25:48'),
(2, 'Instagram', 'https://www.instagram.com/seu_perfil', '2024-02-04 13:25:48', '2024-02-04 13:25:48'),
(3, 'Facebook', 'https://www.facebook.com/seu_perfil', '2024-02-04 13:25:48', '2024-02-04 13:25:48'),
(4, 'Instagram', 'https://www.instagram.com/seu_perfil', '2024-02-04 13:25:48', '2024-02-04 13:25:48'),
(24, 'Facebook', 'https://www.facebook.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25'),
(25, 'Instagram', 'https://www.instagram.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25'),
(26, 'Facebook', 'https://www.facebook.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25'),
(27, 'Instagram', 'https://www.instagram.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `active` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `active`, `created_at`, `updated_at`) VALUES
(1, 'administrador', '1234567890', 10, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(2, 'jessica.marangon', '$2y$10$EodACP8lBbwrX73DFvbAouSxiQpYeKPTJFIQ2b3qTlWW0byo2AhNW', 8, 'A', '2024-02-04 13:25:27', '2024-02-12 15:22:09'),
(3, 'psico2', '123456789', 6, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(4, 'psico3', '123456789', 4, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(5, 'luan.marangon', '$2y$10$wRpw12Ea8KeNYjLrNTBpRuLUZEUk82O4J/8jKZNVFcMXJNoHP/BeS', 6, 'I', '2024-02-04 17:43:14', '2024-02-11 13:02:30'),
(11, 'carlos.santos', '$2y$10$urV77dT8VJiniBFQXCrSOOKJ8xbzLwbptPjJee.rpKiVasmJ/nqay', 6, 'I', '2024-02-05 17:20:38', '2024-02-11 21:15:30'),
(12, 'lyvia.marangon', '$2y$10$mIw/vhKsQap.Md4O.G88pux9OkKisgZ4BLXH8JJn7.ABILsVyLeKK', 4, 'I', '2024-02-11 17:40:23', '2024-02-11 20:56:01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`,`users_id`,`category_id`),
  ADD KEY `fk_blog_users1_idx` (`users_id`),
  ADD KEY `fk_blog_category1_idx` (`category_id`);

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`,`address_id`),
  ADD KEY `fk_company_address1_idx` (`address_id`);

--
-- Índices para tabela `companysocialmedia`
--
ALTER TABLE `companysocialmedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_company_has_socialMedia_socialMedia1_idx` (`socialMedia_id`),
  ADD KEY `fk_company_has_socialMedia_company1_idx` (`company_id`);

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`,`people_id`,`users_id`),
  ADD KEY `fk_employee_users1_idx` (`users_id`),
  ADD KEY `fk_employee_people1_idx` (`people_id`);

--
-- Índices para tabela `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_faq_users1_idx` (`users_id`);

--
-- Índices para tabela `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mailsettings`
--
ALTER TABLE `mailsettings`
  ADD PRIMARY KEY (`id`,`company_id`),
  ADD KEY `fk_mailSettings_company1_idx` (`company_id`);

--
-- Índices para tabela `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`,`address_id`,`settingsGenre_id`),
  ADD KEY `fk_people_address1_idx` (`address_id`),
  ADD KEY `fk_people_settingsGenre1_idx` (`settingsGenre_id`);

--
-- Índices para tabela `peoplecontact`
--
ALTER TABLE `peoplecontact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_people_has_contact_contact1_idx` (`contact_id`),
  ADD KEY `fk_people_has_contact_people1_idx` (`people_id`);

--
-- Índices para tabela `psychologist`
--
ALTER TABLE `psychologist`
  ADD PRIMARY KEY (`id`,`people_id`,`users_id`),
  ADD KEY `fk_psychologist_people_idx` (`people_id`),
  ADD KEY `fk_psychologist_users1_idx` (`users_id`);

--
-- Índices para tabela `psychologistservices`
--
ALTER TABLE `psychologistservices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_psychologist_has_services_services1_idx` (`services_id`),
  ADD KEY `fk_psychologist_has_services_psychologist1_idx` (`psychologist_id`);

--
-- Índices para tabela `psychologistsocialmedia`
--
ALTER TABLE `psychologistsocialmedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_psychologist_has_socialMedia_socialMedia1_idx` (`socialMedia_id`),
  ADD KEY `fk_psychologist_has_socialMedia_psychologist1_idx` (`psychologist_id`);

--
-- Índices para tabela `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `settingsgenre`
--
ALTER TABLE `settingsgenre`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `companysocialmedia`
--
ALTER TABLE `companysocialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mailsettings`
--
ALTER TABLE `mailsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `peoplecontact`
--
ALTER TABLE `peoplecontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `psychologist`
--
ALTER TABLE `psychologist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `psychologistservices`
--
ALTER TABLE `psychologistservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `psychologistsocialmedia`
--
ALTER TABLE `psychologistsocialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `settingsgenre`
--
ALTER TABLE `settingsgenre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_blog_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_company_address1` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `companysocialmedia`
--
ALTER TABLE `companysocialmedia`
  ADD CONSTRAINT `fk_company_has_socialMedia_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_company_has_socialMedia_socialMedia1` FOREIGN KEY (`socialMedia_id`) REFERENCES `socialmedia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_people1` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `fk_faq_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `mailsettings`
--
ALTER TABLE `mailsettings`
  ADD CONSTRAINT `fk_mailSettings_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `fk_people_address1` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_people_settingsGenre1` FOREIGN KEY (`settingsGenre_id`) REFERENCES `settingsgenre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `peoplecontact`
--
ALTER TABLE `peoplecontact`
  ADD CONSTRAINT `fk_people_has_contact_contact1` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_people_has_contact_people1` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `psychologist`
--
ALTER TABLE `psychologist`
  ADD CONSTRAINT `fk_psychologist_people` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_psychologist_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `psychologistservices`
--
ALTER TABLE `psychologistservices`
  ADD CONSTRAINT `fk_psychologist_has_services_psychologist1` FOREIGN KEY (`psychologist_id`) REFERENCES `psychologist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_psychologist_has_services_services1` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `psychologistsocialmedia`
--
ALTER TABLE `psychologistsocialmedia`
  ADD CONSTRAINT `fk_psychologist_has_socialMedia_psychologist1` FOREIGN KEY (`psychologist_id`) REFERENCES `psychologist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_psychologist_has_socialMedia_socialMedia1` FOREIGN KEY (`socialMedia_id`) REFERENCES `socialmedia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
