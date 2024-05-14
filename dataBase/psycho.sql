-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Maio-2024 às 20:52
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

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
-- Estrutura da tabela `aboutcompany`
--

CREATE TABLE `aboutcompany` (
  `id` int(11) NOT NULL,
  `inspiration` text DEFAULT NULL,
  `currentSituation` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `someWords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aboutcompany`
--

INSERT INTO `aboutcompany` (`id`, `inspiration`, `currentSituation`, `experience`, `someWords`, `created_at`, `updated_at`) VALUES
(1, 'Caminhamos lado a lado na jornada da autoconsciência e autodescoberta.\r\nCultivando um ambiente de crescimento, cura e transformação.\r\nEmpatia, compreensão e respeito - valores que guiam nosso trabalho.\r\nEncontrando luz nas sombras, esperança nos desafios e força na vulnerabilidade.\r\nCada passo é uma oportunidade para se reconectar consigo mesmo e com o mundo ao seu redor.\r\n', 'Minha jornada é marcada por experiências pessoais que me levaram à psicologia, onde encontrei minha paixão por ajudar os outros a superar obstáculos e descobrir seu potencial máximo.\r\nAnos de estudo, prática e aprendizado contínuo moldaram minha abordagem holística e compassiva à psicoterapia.\r\nCada desafio enfrentado ao longo do caminho fortaleceu minha dedicação em fornecer apoio e orientação aos meus clientes durante suas próprias jornadas de crescimento e cura.\r\n', 'Ofereço uma abordagem personalizada, centrada no cliente, que valoriza sua singularidade e promove uma parceria colaborativa em direção ao bem-estar emocional e mental.\r\nMinha experiência e formação em diversas áreas da psicologia me permitem oferecer uma gama ampla e eficaz de técnicas terapêuticas para atender às necessidades individuais de cada cliente.\r\nCom dedicação e empatia, estou comprometido em fornecer um ambiente seguro e de apoio onde você possa explorar suas preocupações, encontrar clareza e alcançar suas metas de saúde mental.', 'Sou apaixonado por ajudar os outros a descobrir sua força interior e resiliência.\r\nMinha abordagem é fundamentada na compreensão profunda e na aceitação incondicional.\r\nBusco constantemente expandir meu conhecimento e habilidades por meio de educação continuada e supervisão clínica.\r\nAcredito firmemente no poder da conexão humana e no potencial transformador das relações terapêuticas.\r\nEstou comprometido em promover a saúde mental e o bem-estar em minha comunidade e além.', '2024-02-18 22:13:00', '2024-02-19 10:30:11');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(22, '19560000', 'Trv Francisco Gimenes', 44, 'casa', 'jardim ', 'Indiana', 'SP', '-22.17134', '-51.25151', '2024-02-11 17:39:06', '2024-02-11 17:39:06'),
(23, '19500000', 'rua', 15, 'as', 'as', 'Martinópolis', 'SP', '-22.24039', '-51.15173', '2024-02-18 21:17:32', '2024-02-18 21:17:32'),
(24, '19500000', 'Rua Alcides Ramos da Silva', 315, 'casa', 'Jd. Paulista', 'Martinópolis', 'SP', '-22.15995', '-51.17445', '2024-03-03 22:57:26', '2024-03-03 22:57:26'),
(25, '19805000', 'Rodovia Miguel Jubran', 15, 'casa', 'CDA 3', 'Assis', 'SP', '-22.63713', '-50.43512', '2024-03-10 15:16:36', '2024-03-10 15:16:36');

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
  `post_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `users_id`, `category_id`, `title`, `body`, `post_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, ' A Importância do Autoconhecimento: Desvendando os Mistérios Internos para uma Vida Plena', '<p>O autoconhecimento &eacute; uma jornada &iacute;ntima e transformadora que nos leva a explorar os rec&ocirc;nditos da nossa mente, cora&ccedil;&atilde;o e alma. &Eacute; o processo de compreender quem somos, o que nos motiva e como interagimos com o mundo ao nosso redor. Embora essa jornada possa parecer desafiadora e at&eacute; mesmo assustadora &agrave;s vezes, seu impacto &eacute; profundamente gratificante e fundamental para uma vida plena e significativa.</p>\r\n<h3><strong>Explorando as Profundezas da Autoconsci&ecirc;ncia</strong></h3>\r\n<p>A jornada do autoconhecimento come&ccedil;a com a disposi&ccedil;&atilde;o de olhar para dentro e examinar nossos pensamentos, emo&ccedil;&otilde;es e padr&otilde;es de comportamento. &Eacute; um convite para nos tornarmos observadores imparciais de n&oacute;s mesmos, reconhecendo nossas virtudes e falhas com compaix&atilde;o e aceita&ccedil;&atilde;o.</p>\r\n<p>Ao nos tornarmos mais conscientes de nossos pensamentos e sentimentos, come&ccedil;amos a entender melhor o que nos impulsiona e o que nos impede de alcan&ccedil;ar nosso pleno potencial. Descobrimos padr&otilde;es repetitivos em nossos relacionamentos, cren&ccedil;as limitantes que nos seguram e medos que nos impedem de avan&ccedil;ar.</p>\r\n<h3><strong>Desenvolvendo Resili&ecirc;ncia e Autoconfian&ccedil;a</strong></h3>\r\n<p>O autoconhecimento n&atilde;o se trata apenas de compreender nossas fraquezas; tamb&eacute;m se trata de reconhecer nossas for&ccedil;as e recursos internos. &Agrave; medida que exploramos nossos pontos fortes e talentos &uacute;nicos, desenvolvemos uma maior autoconfian&ccedil;a e uma sensa&ccedil;&atilde;o mais profunda de prop&oacute;sito e dire&ccedil;&atilde;o na vida.</p>\r\n<p>Al&eacute;m disso, o autoconhecimento nos ajuda a cultivar resili&ecirc;ncia emocional, permitindo-nos lidar melhor com os desafios e adversidades que inevitavelmente encontramos ao longo do caminho. Quando nos conhecemos intimamente, somos capazes de navegar pelas &aacute;guas turbulentas da vida com mais gra&ccedil;a e equanimidade.</p>\r\n<h3><strong>Alinhando-se com Nossos Valores e Prop&oacute;sito</strong></h3>\r\n<p>Uma das maiores recompensas do autoconhecimento &eacute; a capacidade de viver uma vida alinhada com nossos valores mais profundos e nosso prop&oacute;sito mais elevado. Quando compreendemos o que &eacute; mais importante para n&oacute;s, somos capazes de tomar decis&otilde;es mais conscientes e significativas que refletem nossas verdadeiras aspira&ccedil;&otilde;es e inten&ccedil;&otilde;es.</p>\r\n<p>Consequentemente, vivemos com mais autenticidade e integridade, encontrando satisfa&ccedil;&atilde;o e realiza&ccedil;&atilde;o em tudo o que fazemos. Ao viver uma vida alinhada com nossos valores, experimentamos um senso mais profundo de significado e conex&atilde;o com o mundo ao nosso redor.</p>\r\n<h3><strong>Conclus&atilde;o</strong></h3>\r\n<p>Em &uacute;ltima an&aacute;lise, o autoconhecimento &eacute; uma jornada de autodescoberta cont&iacute;nua e infinita. &Agrave; medida que nos aprofundamos em nossa pr&oacute;pria psique e exploramos os mist&eacute;rios de quem somos, desbloqueamos um potencial ilimitado para crescimento pessoal, cura e transforma&ccedil;&atilde;o.</p>\r\n<p>Portanto, n&atilde;o subestime o poder do autoconhecimento. Ao se comprometer com essa jornada de explora&ccedil;&atilde;o interna, voc&ecirc; abrir&aacute; portas para uma vida mais plena, aut&ecirc;ntica e significativa. Permita-se mergulhar nas profundezas do seu ser e descobrir o tesouro que reside dentro de voc&ecirc;.</p>', '2024-02-17', '2024-02-04 13:25:39', '2024-02-17 18:29:24'),
(2, 2, 2, 'Dicas para Melhorar os Relacionamentos', '<p>Explore estrat&eacute;gias para construir relacionamentos saud&aacute;veis e fortalecer os la&ccedil;os interpessoais.</p>', '2024-02-18', '2024-02-04 13:25:39', '2024-02-17 20:22:23'),
(3, 2, 3, 'Cuidando da Saúde Mental no Dia a Dia: Priorizando o Bem-Estar Emocional', '<p style=\"text-align: justify;\">Em um mundo onde as demandas e press&otilde;es da vida cotidiana podem parecer esmagadoras, cuidar da sa&uacute;de mental tornou-se mais importante do que nunca. A sa&uacute;de mental n&atilde;o se limita apenas &agrave; aus&ecirc;ncia de doen&ccedil;as psicol&oacute;gicas; trata-se de cultivar um estado de bem-estar emocional que nos permita enfrentar os desafios da vida com resili&ecirc;ncia e equil&iacute;brio. Neste artigo, exploraremos algumas pr&aacute;ticas simples e eficazes para promover o bem-estar mental no dia a dia.</p>\r\n<ol style=\"text-align: justify;\">\r\n<li><strong>Praticar a Aten&ccedil;&atilde;o Plena (Mindfulness)</strong>A aten&ccedil;&atilde;o plena &eacute; uma pr&aacute;tica poderosa que envolve prestar aten&ccedil;&atilde;o consciente ao momento presente, sem julgamento. Atrav&eacute;s da medita&ccedil;&atilde;o mindfulness, podemos cultivar uma maior consci&ecirc;ncia de nossos pensamentos, emo&ccedil;&otilde;es e sensa&ccedil;&otilde;es f&iacute;sicas, permitindo-nos responder aos desafios com clareza e calma. Reserve alguns minutos todos os dias para praticar a aten&ccedil;&atilde;o plena, concentrando-se na sua respira&ccedil;&atilde;o ou em sensa&ccedil;&otilde;es corporais, e observe como isso afeta seu estado de esp&iacute;rito.</li>\r\n<li><strong> Manter uma Rotina de Autocuidado<br></strong>O autocuidado &eacute; essencial para manter uma boa sa&uacute;de mental. Isso inclui cuidar do seu corpo atrav&eacute;s de uma alimenta&ccedil;&atilde;o saud&aacute;vel, exerc&iacute;cios regulares e sono adequado. Al&eacute;m disso, reserve tempo para atividades que o tragam alegria e relaxamento, como hobbies, leitura ou passar tempo com entes queridos. Priorizar o autocuidado n&atilde;o &eacute; ego&iacute;sta; &eacute; uma forma de garantir que voc&ecirc; tenha a energia e o bem-estar necess&aacute;rios para enfrentar os desafios da vida.</li>\r\n<li><strong>Cultivar Relacionamentos Significativos</strong><br>Relacionamentos saud&aacute;veis e de apoio desempenham um papel crucial na nossa sa&uacute;de mental. Reserve tempo para cultivar conex&otilde;es significativas com amigos, familiares e colegas. Isso pode envolver compartilhar suas preocupa&ccedil;&otilde;es e experi&ecirc;ncias, oferecer apoio m&uacute;tuo e passar tempo de qualidade juntos. Lembre-se de que &eacute; importante estabelecer limites saud&aacute;veis em seus relacionamentos e buscar ajuda profissional quando necess&aacute;rio.</li>\r\n<li><strong>Praticar a Gratid&atilde;o</strong><br>A pr&aacute;tica da gratid&atilde;o envolve reconhecer e apreciar as coisas boas em nossas vidas, mesmo nos momentos dif&iacute;ceis. Manter um di&aacute;rio de gratid&atilde;o, onde voc&ecirc; escreve tr&ecirc;s coisas pelas quais &eacute; grato todos os dias, pode ajudar a promover sentimentos de contentamento e satisfa&ccedil;&atilde;o. A gratid&atilde;o n&atilde;o apenas nos ajuda a focar no positivo, mas tamb&eacute;m fortalece nossa resili&ecirc;ncia emocional e nos ajuda a lidar melhor com o estresse e a adversidade.</li>\r\n</ol>\r\n<h3 style=\"text-align: justify;\"><strong>Conclus&atilde;o</strong></h3>\r\n<p style=\"text-align: justify;\">Cuidar da sa&uacute;de mental no dia a dia &eacute; uma jornada cont&iacute;nua e multifacetada. Ao incorporar pr&aacute;ticas de autocuidado, aten&ccedil;&atilde;o plena, relacionamentos significativos e gratid&atilde;o em sua rotina di&aacute;ria, voc&ecirc; estar&aacute; investindo em seu bem-estar emocional e construindo uma base s&oacute;lida para uma vida mais equilibrada e significativa. Lembre-se de que buscar apoio profissional quando necess&aacute;rio &eacute; um sinal de for&ccedil;a, n&atilde;o de fraqueza. Priorize sua sa&uacute;de mental e colha os benef&iacute;cios de uma vida mais feliz e saud&aacute;vel.</p>\r\n<p style=\"text-align: justify;\"><img src=\"https://lucianaperfetto.com.br/wp-content/uploads/2023/07/autocuidado.jpg.webp\" width=\"1177\" height=\"657\"></p>', '2023-02-28', '2024-02-04 13:25:39', '2024-02-18 14:26:32'),
(9, 5, 5, 'A Importância da Escuta Ativa na Terapia', '<p>A escuta ativa &eacute; uma habilidade fundamental na terapia psicol&oacute;gica. Ela envolve n&atilde;o apenas ouvir as palavras do paciente, mas tamb&eacute;m compreender suas emo&ccedil;&otilde;es e pensamentos subjacentes. Atrav&eacute;s da escuta ativa, os terapeutas podem criar um ambiente seguro e emp&aacute;tico, permitindo que os pacientes se expressem livremente e explorem quest&otilde;es profundas. Esta pr&aacute;tica &eacute; essencial para estabelecer uma rela&ccedil;&atilde;o terap&ecirc;utica s&oacute;lida e promover o crescimento pessoal e a resolu&ccedil;&atilde;o de problemas.</p>', '2024-03-12', '2024-03-10 19:05:45', '2024-03-10 19:05:45'),
(10, 5, 6, 'O Papel do Autoconhecimento na Saúde Mental', '<p>O autoconhecimento &eacute; uma ferramenta poderosa para promover a sa&uacute;de mental e o bem-estar emocional. Ao entender nossas pr&oacute;prias emo&ccedil;&otilde;es, pensamentos e comportamentos, podemos tomar decis&otilde;es mais conscientes e alinhar nossas a&ccedil;&otilde;es com nossos valores e objetivos. Al&eacute;m disso, o autoconhecimento nos ajuda a reconhecer padr&otilde;es negativos e cren&ccedil;as limitantes, permitindo-nos fazer mudan&ccedil;as positivas em nossas vidas. Ao cultivar o autoconhecimento, podemos desenvolver uma maior autoestima, resili&ecirc;ncia e satisfa&ccedil;&atilde;o com a vida.</p>', '2024-03-10', '2024-03-10 19:06:52', '2024-03-10 19:06:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Autoconhecimento', '2024-02-04 13:25:17', '2024-02-04 13:25:17'),
(2, 'Relacionamentos', '2024-02-04 13:25:17', '2024-02-04 13:25:17'),
(3, 'Bem-Estar Emocional', '2024-02-04 13:25:17', '2024-02-04 13:25:17'),
(4, 'NovaCategoria', '2024-02-17 17:29:59', '2024-02-17 17:29:59'),
(5, 'Psicologia Clínica', '2024-03-10 19:05:45', '2024-03-10 19:05:45'),
(6, 'Psicologia Positiva', '2024-03-10 19:06:17', '2024-03-10 19:06:17');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Estrutura da tabela `depositions`
--

CREATE TABLE `depositions` (
  `id` int(11) NOT NULL,
  `testimony` text DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`id`, `people_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 12, 12, '2024-02-11 17:41:14', '2024-02-11 17:41:14'),
(2, 13, 21, '2024-03-03 23:32:18', '2024-03-03 23:32:18');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `faq`
--

INSERT INTO `faq` (`id`, `users_id`, `question`, `response`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Como lidar com o estresse diário?', 'Lidar com o estresse diário pode envolver técnicas de relaxamento, como a respiração profunda e a meditação. Além disso, procurar apoio profissional pode ser útil.', 'A', '2024-02-04 13:25:27', '2024-02-14 22:31:13'),
(2, 2, 'Quais são algumas estratégias para melhorar a autoestima?', 'Melhorar a autoestima pode envolver práticas como o desenvolvimento de habilidades pessoais, a celebração de conquistas e o cuidado com o bem-estar emocional.', 'A', '2024-02-04 13:25:27', '2024-02-14 22:31:13'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `licenses`
--

INSERT INTO `licenses` (`id`, `code`, `expiration`, `created_at`, `updated_at`) VALUES
(73, '91632693d4b6736f25bfce5df57a0079', '2024-02-10', '2024-02-15 10:08:05', '2024-02-15 10:08:05'),
(74, 'bf0a6f605d62b5a590fc0c0be3c170df', '2024-02-15', '2024-02-15 10:08:17', '2024-02-15 10:08:17'),
(75, 'c730a4cba54d868f52e5e5cfd037aa92', '2024-02-25', '2024-02-15 10:10:04', '2024-02-21 18:14:16'),
(79, '1b84a08f28fbe8e', '2024-03-06', '2024-03-03 17:38:28', '2024-03-03 17:38:28'),
(80, 'c26358d5b0fbe2f', '2024-03-08', '2024-03-03 17:38:28', '2024-03-03 17:38:28'),
(81, 'dad334eae283093', '2024-03-10', '2024-03-03 17:38:28', '2024-03-03 17:38:28'),
(82, 'b3e39137d911cd0', '2024-03-12', '2024-03-03 17:38:28', '2024-03-03 17:38:28'),
(83, 'AKKA244AS1Q55Q1S1AS545', '2024-03-18', '2024-03-15 16:39:27', '2024-03-15 16:39:27'),
(85, 'AKKA244AS1Q55Q1S1AS550', '2024-03-30', '2024-03-15 23:18:42', '2024-03-15 23:18:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `operation` longtext DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `serverAddr` varchar(255) DEFAULT NULL,
  `serverProtocol` varchar(255) DEFAULT NULL,
  `remoteAddr` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id`, `operation`, `users_id`, `url`, `route`, `serverAddr`, `serverProtocol`, `remoteAddr`, `created_at`, `updated_at`) VALUES
(38, 'Exclusão da Rede Social 32 do Psicologo 2. Usuário: jessica.marangon', 2, '/psycho/admin/psicologo/2/rede-social', 'route=/admin/psicologo/2/rede-social', '::1', 'HTTP/1.1', '::1', '2024-03-07 23:07:08', '2024-03-07 23:07:08'),
(39, 'Exclusão da Rede Social 33 do Psicologo 2. Usuário: jessica.marangon', 2, '/psycho/admin/psicologo/2/rede-social', 'route=/admin/psicologo/2/rede-social', '::1', 'HTTP/1.1', '::1', '2024-03-07 23:07:08', '2024-03-07 23:07:08'),
(40, 'Exclusão da Rede Social 34 do Psicologo 2. Usuário: jessica.marangon', 2, '/psycho/admin/psicologo/2/rede-social', 'route=/admin/psicologo/2/rede-social', '::1', 'HTTP/1.1', '::1', '2024-03-07 23:07:22', '2024-03-07 23:07:22'),
(41, 'Exclusão da Rede Social 35 do Psicologo 2. Usuário: jessica.marangon', 2, '/psycho/admin/psicologo/2/rede-social', 'route=/admin/psicologo/2/rede-social', '::1', 'HTTP/1.1', '::1', '2024-03-07 23:07:22', '2024-03-07 23:07:22'),
(42, 'Exclusão da Rede Social 36 do Psicologo 2. Usuário: jessica.marangon', 2, '/psycho/admin/psicologo/2/rede-social', 'route=/admin/psicologo/2/rede-social', '::1', 'HTTP/1.1', '::1', '2024-03-07 23:07:22', '2024-03-07 23:07:22'),
(43, 'Criação da Rede Social 37 do Psicologo 2. Usuário: jessica.marangon', 2, '/psycho/admin/psicologo/2/nova-rede-social', 'route=/admin/psicologo/2/nova-rede-social', '::1', 'HTTP/1.1', '::1', '2024-03-07 23:08:56', '2024-03-07 23:08:56'),
(44, 'Atualização da Rede Social 37 do Psicologo 2. Usuário: jessica.marangon', 2, '/psycho/admin/psicologo/2/nova-rede-social', 'route=/admin/psicologo/2/nova-rede-social', '::1', 'HTTP/1.1', '::1', '2024-03-07 23:09:07', '2024-03-07 23:09:07'),
(45, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-10 11:15:01', '2024-03-10 11:15:01'),
(46, 'Atualizado o cadastro da pessoa  e endereço . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/13', 'route=/admin/pessoa/13', '::1', 'HTTP/1.1', '::1', '2024-03-10 13:44:38', '2024-03-10 13:44:38'),
(47, 'Cadastrado a pessoa 14 e endereço 25. Usuário: jessica.marangon', 2, '/psycho/admin/pessoa', 'route=/admin/pessoa', '::1', 'HTTP/1.1', '::1', '2024-03-10 15:16:36', '2024-03-10 15:16:36'),
(48, 'Atualizado o cadastro da pessoa  e endereço . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/14', 'route=/admin/pessoa/14', '::1', 'HTTP/1.1', '::1', '2024-03-10 15:20:18', '2024-03-10 15:20:18'),
(49, 'Atualizado o cadastro da pessoa  e endereço . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/14', 'route=/admin/pessoa/14', '::1', 'HTTP/1.1', '::1', '2024-03-10 15:23:11', '2024-03-10 15:23:11'),
(50, 'Atualizado o cadastro da pessoa  e endereço . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/14', 'route=/admin/pessoa/14', '::1', 'HTTP/1.1', '::1', '2024-03-10 15:28:09', '2024-03-10 15:28:09'),
(51, 'Login Efetuado! Usuário: marangon', 19, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-10 17:23:11', '2024-03-10 17:23:11'),
(52, 'Logout Efetuado! Usuário: marangon', 19, '/psycho/admin/logoff', 'route=/admin/logoff', '::1', 'HTTP/1.1', '::1', '2024-03-10 18:36:12', '2024-03-10 18:36:12'),
(53, 'Logout Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/logoff', 'route=/admin/logoff', '::1', 'HTTP/1.1', '::1', '2024-03-10 18:36:22', '2024-03-10 18:36:22'),
(54, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-10 18:41:15', '2024-03-10 18:41:15'),
(55, 'Login Efetuado! Usuário: luan.marangon', 5, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-10 19:02:56', '2024-03-10 19:02:56'),
(56, 'Logout Efetuado! Usuário: luan.marangon2', 5, '/psycho/admin/logoff', 'route=/admin/logoff', '::1', 'HTTP/1.1', '::1', '2024-03-10 19:03:37', '2024-03-10 19:03:37'),
(57, 'Login Efetuado! Usuário: luan.marangon2', 5, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-10 19:03:52', '2024-03-10 19:03:52'),
(58, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-10 19:33:34', '2024-03-10 19:33:34'),
(59, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-11 14:50:33', '2024-03-11 14:50:33'),
(60, 'Inativado o cadastro da pessoa . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/12', 'route=/admin/pessoa/12', '::1', 'HTTP/1.1', '::1', '2024-03-11 14:53:18', '2024-03-11 14:53:18'),
(61, 'Inativado o cadastro da pessoa 12. Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/12', 'route=/admin/pessoa/12', '::1', 'HTTP/1.1', '::1', '2024-03-11 14:57:25', '2024-03-11 14:57:25'),
(62, 'Inativado o cadastro da pessoa . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/12', 'route=/admin/pessoa/12', '::1', 'HTTP/1.1', '::1', '2024-03-11 14:58:14', '2024-03-11 14:58:14'),
(63, 'Ativado o cadastro da pessoa 12. Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/12', 'route=/admin/pessoa/12', '::1', 'HTTP/1.1', '::1', '2024-03-11 14:58:43', '2024-03-11 14:58:43'),
(64, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:07:50', '2024-03-11 15:07:50'),
(65, 'Inativado o cadastro da pessoa . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/13', 'route=/admin/pessoa/13', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:16:58', '2024-03-11 15:16:58'),
(66, 'Inativado o cadastro da pessoa . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/11', 'route=/admin/pessoa/11', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:16:59', '2024-03-11 15:16:59'),
(67, 'Ativado o cadastro da pessoa 13. Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/13', 'route=/admin/pessoa/13', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:17:52', '2024-03-11 15:17:52'),
(68, 'Ativado o cadastro da pessoa 11. Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/11', 'route=/admin/pessoa/11', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:17:54', '2024-03-11 15:17:54'),
(69, 'Inativado o cadastro da pessoa . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/11', 'route=/admin/pessoa/11', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:18:07', '2024-03-11 15:18:07'),
(70, 'Inativado o cadastro da pessoa . Usuário: jessica.marangon', 2, '/psycho/admin/pessoa/13', 'route=/admin/pessoa/13', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:18:09', '2024-03-11 15:18:09'),
(71, 'Login Efetuado! Usuário: luan.marangon2', 5, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:19:45', '2024-03-11 15:19:45'),
(72, 'Logout Efetuado! Usuário: luan.marangon2', 5, '/psycho/admin/logoff', 'route=/admin/logoff', '::1', 'HTTP/1.1', '::1', '2024-03-11 15:20:54', '2024-03-11 15:20:54'),
(73, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-11 16:51:45', '2024-03-11 16:51:45'),
(74, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-11 16:56:51', '2024-03-11 16:56:51'),
(75, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-12 14:50:23', '2024-03-12 14:50:23'),
(76, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-15 16:39:30', '2024-03-15 16:39:30'),
(77, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-15 23:10:34', '2024-03-15 23:10:34'),
(78, 'Logout Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/logoff', 'route=/admin/logoff', '::1', 'HTTP/1.1', '::1', '2024-03-15 23:18:42', '2024-03-15 23:18:42'),
(79, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-15 23:18:47', '2024-03-15 23:18:47'),
(80, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-16 18:48:46', '2024-03-16 18:48:46'),
(81, 'Login Efetuado! Usuário: vanda.lima', 21, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-16 21:50:35', '2024-03-16 21:50:35'),
(82, 'Login Efetuado! Usuário: carlos.santos', 11, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-16 21:52:25', '2024-03-16 21:52:25'),
(83, 'Login Efetuado! Usuário: jessica.marangon', 2, '/psycho/admin/login', 'route=/admin/login', '::1', 'HTTP/1.1', '::1', '2024-03-17 00:43:04', '2024-03-17 00:43:04');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `mailsettings`
--

INSERT INTO `mailsettings` (`id`, `company_id`, `mail`, `password`, `sender`, `smtp`, `port`, `created_at`, `updated_at`) VALUES
(3, 1, 'sandbox.smtp.mailtrap.io', 'e290026f5a3105', '7ed1ac69ecb34d', 'sandbox.smtp.mailtrap.io', 2525, '2024-02-18 21:53:05', '2024-02-18 21:53:05');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `people`
--

INSERT INTO `people` (`id`, `address_id`, `firstName`, `lastName`, `cpf`, `rg`, `settingsGenre_id`, `dateBirth`, `phone`, `mail`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'JESSICA FERNANDA VIEIRA', 'MARANGON', '12345678900', '123456789', 1, '1998-10-01', '18888888888', 'jessica.marangon@pscyho.com', 'A', '2024-02-04 13:25:27', '2024-02-11 21:30:44'),
(2, 3, 'Lucas Silva', 'Oliveira', '98765432100', '987654321', 2, '1995-05-15', NULL, NULL, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(3, 4, 'Amanda Souza', 'Pereira', '34567890123', '345678901', 1, '2000-03-20', NULL, NULL, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(4, 5, 'CARLOS OLIVEIRA', 'SANTOS', '56789012345', '567890123', 2, '1980-12-05', '18999999999', 'carlos.oliveira@psyco.com', 'A', '2024-02-04 13:25:27', '2024-02-11 21:14:48'),
(11, 21, 'LUAN  DE LIMA ', 'MARANGON2', '37969546854', '471417543', 2, '1990-09-21', '18997482397', 'luan.marangon@egestora.com.br', 'I', '2024-02-04 16:02:38', '2024-03-11 15:18:07'),
(12, 22, 'LYVIA DE MORAIS', 'MARANGON', '52525252222', '1111111111', 1, '2011-01-13', '18333333333', 'lyvia@marangon.com', 'A', '2024-02-11 17:39:06', '2024-03-11 14:58:43'),
(13, 24, 'VANDA MARIA', 'DE LIMA', '22546525688', '52350', 1, '1972-04-14', '18985236455', 'vanda@gmail.com', 'I', '2024-03-03 22:57:26', '2024-03-11 15:18:09'),
(14, 25, 'HJJG', 'TESTE', '11121364252', '00000212', 1, '2024-02-27', '18999999', '4@lasjk.com', 'A', '2024-03-10 15:16:36', '2024-03-10 15:28:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `peoplecontact`
--

CREATE TABLE `peoplecontact` (
  `id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `psychologistsocialmedia`
--

INSERT INTO `psychologistsocialmedia` (`id`, `psychologist_id`, `socialMedia_id`) VALUES
(38, 4, 24),
(39, 4, 25),
(40, 4, 26),
(50, 2, 37);

-- --------------------------------------------------------

--
-- Estrutura da tabela `scheduling`
--

CREATE TABLE `scheduling` (
  `id` int(11) NOT NULL,
  `psychologist_id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `scheduling`
--

INSERT INTO `scheduling` (`id`, `psychologist_id`, `people_id`, `description`, `date`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 13, 'TESTE', '2024-03-16', '08:00:00', NULL, '2024-03-16 19:50:38', '2024-03-16 19:50:38'),
(2, 1, 13, 'TESTE', '2024-03-16', '09:00:00', NULL, '2024-03-16 19:50:38', '2024-03-16 21:22:56'),
(3, 2, 13, 'TESTE', '2024-03-16', '10:00:00', NULL, '2024-03-16 19:50:38', '2024-03-16 19:50:38'),
(4, 2, 13, 'TESTE', '2024-03-17', '08:00:00', NULL, '2024-03-16 19:50:38', '2024-03-16 19:50:38'),
(5, 2, 13, 'TESTE', '2024-03-17', '14:00:00', NULL, '2024-03-16 19:50:38', '2024-03-16 19:50:38'),
(6, 2, 13, 'TESTE', '2024-03-20', '08:00:00', NULL, '2024-03-16 19:50:38', '2024-03-16 19:50:38'),
(7, 1, 13, 'TESTE', '2024-03-16', '08:00:00', NULL, '2024-03-16 20:05:16', '2024-03-16 21:22:56'),
(8, 1, 13, 'TESTE', '2024-03-16', '09:00:00', NULL, '2024-03-16 20:05:16', '2024-03-16 21:22:56'),
(9, 2, 13, 'TESTE', '2024-03-16', '10:00:00', NULL, '2024-03-16 20:05:16', '2024-03-16 20:05:16'),
(10, 2, 13, 'TESTE', '2024-03-17', '08:00:00', NULL, '2024-03-16 20:05:16', '2024-03-16 20:05:16'),
(11, 2, 13, 'TESTE', '2024-03-17', '14:00:00', NULL, '2024-03-16 20:05:16', '2024-03-16 20:05:16'),
(12, 2, 13, 'TESTE', '2024-03-20', '08:00:00', NULL, '2024-03-16 20:05:16', '2024-03-16 20:05:16'),
(13, 1, 13, 'TESTE', '2024-03-16', '08:00:00', NULL, '2024-03-16 20:07:14', '2024-03-16 21:22:56'),
(14, 2, 13, 'TESTE', '2024-03-16', '09:00:00', NULL, '2024-03-16 20:07:14', '2024-03-16 20:07:14'),
(15, 1, 13, 'TESTE', '2024-03-16', '10:00:00', NULL, '2024-03-16 20:07:14', '2024-03-16 21:22:56'),
(16, 2, 13, 'TESTE', '2024-03-17', '08:00:00', NULL, '2024-03-16 20:07:14', '2024-03-16 20:07:14'),
(17, 2, 13, 'TESTE', '2024-03-17', '14:00:00', NULL, '2024-03-16 20:07:14', '2024-03-16 20:07:14'),
(18, 2, 13, 'TESTE', '2024-03-20', '08:00:00', NULL, '2024-03-16 20:07:15', '2024-03-16 20:07:15'),
(19, 2, 13, 'TESTE', '2024-03-16', '08:00:00', NULL, '2024-03-16 20:07:29', '2024-03-16 20:07:29'),
(20, 2, 13, 'TESTE', '2024-03-16', '09:00:00', NULL, '2024-03-16 20:07:29', '2024-03-16 20:07:29'),
(21, 2, 13, 'TESTE', '2024-03-16', '10:00:00', NULL, '2024-03-16 20:07:29', '2024-03-16 20:07:29'),
(22, 2, 13, 'TESTE', '2024-03-17', '08:00:00', NULL, '2024-03-16 20:07:29', '2024-03-16 20:07:29'),
(23, 2, 13, 'TESTE', '2024-03-17', '14:00:00', NULL, '2024-03-16 20:07:29', '2024-03-16 20:07:29'),
(24, 2, 13, 'TESTE', '2024-03-20', '08:00:00', NULL, '2024-03-16 20:07:29', '2024-03-16 20:07:29'),
(25, 2, 13, 'TESTE', '2024-03-16', '08:00:00', NULL, '2024-03-16 20:26:24', '2024-03-16 20:26:24'),
(26, 2, 13, 'TESTE', '2024-03-16', '09:00:00', NULL, '2024-03-16 20:26:24', '2024-03-16 20:26:24'),
(27, 2, 13, 'TESTE', '2024-03-16', '10:00:00', NULL, '2024-03-16 20:26:24', '2024-03-16 20:26:24'),
(28, 2, 13, 'TESTE', '2024-03-17', '08:00:00', NULL, '2024-03-16 20:26:24', '2024-03-16 20:26:24'),
(29, 2, 13, 'TESTE', '2024-03-17', '14:00:00', NULL, '2024-03-16 20:26:24', '2024-03-16 20:26:24'),
(30, 2, 13, 'TESTE', '2024-03-20', '08:00:00', NULL, '2024-03-16 20:26:24', '2024-03-16 20:26:24'),
(31, 10, 13, 'TESTE', '2024-03-16', '08:00:00', NULL, '2024-03-16 20:44:58', '2024-03-16 21:23:31'),
(32, 10, 13, 'TESTE', '2024-03-16', '09:00:00', NULL, '2024-03-16 20:44:58', '2024-03-16 21:23:31'),
(33, 10, 13, 'TESTE', '2024-03-16', '10:00:00', NULL, '2024-03-16 20:44:58', '2024-03-16 21:23:31'),
(34, 2, 13, 'TESTE', '2024-03-17', '08:00:00', NULL, '2024-03-16 20:44:58', '2024-03-16 20:44:58'),
(35, 2, 13, 'TESTE', '2024-03-17', '14:00:00', NULL, '2024-03-16 20:44:58', '2024-03-16 20:44:58'),
(36, 10, 13, 'TESTE', '2024-03-20', '08:00:00', NULL, '2024-03-16 20:44:58', '2024-03-16 22:03:31'),
(37, 1, 2, 'Consulta', '2024-03-18', '08:00:00', 'A', '2024-03-17 20:47:18', '2024-03-17 20:47:18');

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
  `status` char(1) DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `operation`, `sessions`, `duration`, `atendence`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Psicoterapia Online', 'Sessões de psicoterapia realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Psicoterapia, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', 'A', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(2, 'Aconselhamento Psicológico Online', 'Sessões de aconselhamento psicológico realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Aconselhamento Psicológico, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', 'A', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(3, 'Avaliação Psicológica Online', 'Sessões de avaliação psicológica realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Avaliação Psicológica, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', 'A', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(4, 'Orientação Profissional Online', 'Sessões de orientação profissional realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Orientação Profissional, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', 'A', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(5, 'Psicoterapia Individual Online', 'Sessões individuais de psicoterapia realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Psicoterapia Individual, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', 'A', '2024-02-04 13:26:48', '2024-02-04 13:26:48'),
(6, 'Aconselhamento para Pais Online', 'Sessões de aconselhamento para pais realizadas de forma online em um ambiente seguro e sigiloso.', 'Faça seu cadastro e acesse a plataforma. No menu lateral, vá para Consultas > Agendar Consulta. Selecione a categoria Aconselhamento para Pais, escolha um horário disponível e depois um profissional. Na próxima tela, verifique as informações e clique em Confirmar Agendamento. Ao confirmar, será gerado um link para pagamento com o valor da sessão. Clique para abrir o link e realize o pagamento. Após o pagamento, a consulta será confirmada e no dia agendado a consulta será realizada dentro da plataforma em um ambiente seguro e sigiloso entre você e o profissional.', 'As sessões são semanais, ou seja, uma sessão por semana.', '40 minutos', 'Video Chamada', 'A', '2024-02-04 13:26:48', '2024-02-16 01:37:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settingsgenre`
--

CREATE TABLE `settingsgenre` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `socialMedia`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/seu_perfil', '2024-02-04 13:25:48', '2024-02-04 13:25:48'),
(2, 'Instagram', 'https://www.instagram.com/seu_perfil', '2024-02-04 13:25:48', '2024-02-04 13:25:48'),
(24, 'Facebook', 'https://www.facebook.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25'),
(25, 'Instagram', 'https://www.instagram.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25'),
(26, 'Facebook', 'https://www.facebook.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25'),
(27, 'Instagram', 'https://www.instagram.com/seu_perfil', '2024-02-11 15:47:25', '2024-02-11 15:47:25'),
(37, 'Instagram', 'instagram.com', '2024-03-07 23:08:56', '2024-03-07 23:09:07');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `active`, `created_at`, `updated_at`) VALUES
(1, 'administrador', '1234567890', 10, 'A', '2024-02-04 13:25:27', '2024-02-04 13:25:27'),
(2, 'jessica.marangon', '$2y$10$mETevkooaommadRVVNswzu18UoB8PHCSU90IGIX5QNBRx3ZZPjNWC', 8, 'A', '2024-02-04 13:25:27', '2024-03-10 18:59:52'),
(3, 'psico2', '$2y$10$mpPUcwFX8nN2yl6xO1lVLOWbW6cJ9I6jQEpEdQIH1Uz7oENiSid3a', 6, 'I', '2024-02-04 13:25:27', '2024-02-17 20:49:48'),
(4, 'psico3', '$2y$10$giu6yU10CIVnvXXCCidRdeCO7CELPuvXEShzGsdAkWF9Viqrd0JxK', 4, 'A', '2024-02-04 13:25:27', '2024-02-13 22:15:11'),
(5, 'luan.marangon2', '$2y$10$GqZYWBym29J.kMlXV2QwkeOvaurtrCMggUzJIrQcMxoflBT8Pe28i', 6, 'A', '2024-02-04 17:43:14', '2024-03-11 15:23:50'),
(11, 'carlos.santos', '$2y$10$lg36P80tzAu3EEg06.6WQOs2IU6wukH9CDFB0V8/z1zhRhRo73IE2', 6, 'A', '2024-02-05 17:20:38', '2024-03-16 21:51:54'),
(12, 'lyvia.marangon', '$2y$10$KMH0O3GX.yhRpM3ZS3tJHOXA4o21DwGvtddWbalpfLrMkjIMGi.GO', 4, 'A', '2024-02-11 17:40:23', '2024-02-13 22:17:39'),
(19, 'marangon', '$2y$10$odIWzeIMtLTjUcKLttXo4.TjtQzxxc3EjohkKCNKwKTPTKoNvyo.O', 10, 'A', '2024-03-03 20:17:18', '2024-03-03 20:17:18'),
(21, 'vanda.lima', '$2y$10$jl/mbxrVa6FmBglH6Wjta.7anLOHBdq.BdbRrMw3fBLB8MF0bJDOu', 4, 'A', '2024-03-03 23:32:18', '2024-03-16 21:50:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valuebeliefs`
--

CREATE TABLE `valuebeliefs` (
  `id` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `valuebeliefs`
--

INSERT INTO `valuebeliefs` (`id`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AUTENTICIDADE', 'Pratico a autenticidade, sendo genuína e transparente em minha abordagem terapêutica. Isso cria uma atmosfera onde os clientes se sentem à vontade para serem autênticos também.', '2024-02-19 16:26:54', '2024-02-19 16:30:38'),
(2, 'EMPATIA', 'Valorizo a capacidade de me colocar no lugar do cliente, compreendendo suas emoções e perspectivas. A empatia é a base para construir uma relação terapêutica sólida.', '2024-02-19 16:37:49', '2024-02-19 16:37:49'),
(3, 'CONFIDENCIALIDADE', 'Comprometo-me a manter a confidencialidade das informações compartilhadas durante as sessões, criando um ambiente seguro e de confiança para meus clientes.', '2024-02-19 16:38:31', '2024-02-19 16:38:31'),
(4, 'RESPEITO PELA DIVERSIDADE', 'Reconheço e respeito a diversidade de experiências, identidades e culturas. Minha prática é inclusiva, acolhendo a singularidade de cada indivíduo.', '2024-02-19 16:39:36', '2024-02-19 21:33:36');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aboutcompany`
--
ALTER TABLE `aboutcompany`
  ADD PRIMARY KEY (`id`);

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
-- Índices para tabela `depositions`
--
ALTER TABLE `depositions`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `code_2` (`code`),
  ADD UNIQUE KEY `code_3` (`code`),
  ADD UNIQUE KEY `code_4` (`code`);

--
-- Índices para tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_log_users1` (`users_id`);

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
ALTER TABLE `people` ADD FULLTEXT KEY `idx_fulltext` (`firstName`,`lastName`,`cpf`,`rg`);

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
-- Índices para tabela `scheduling`
--
ALTER TABLE `scheduling`
  ADD PRIMARY KEY (`id`,`psychologist_id`,`people_id`),
  ADD KEY `fk_scheduling_psychologist1_idx` (`psychologist_id`),
  ADD KEY `fk_scheduling_people1_idx` (`people_id`);

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
-- Índices para tabela `valuebeliefs`
--
ALTER TABLE `valuebeliefs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aboutcompany`
--
ALTER TABLE `aboutcompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT de tabela `depositions`
--
ALTER TABLE `depositions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `mailsettings`
--
ALTER TABLE `mailsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `scheduling`
--
ALTER TABLE `scheduling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `settingsgenre`
--
ALTER TABLE `settingsgenre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `valuebeliefs`
--
ALTER TABLE `valuebeliefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Limitadores para a tabela `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_log_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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

--
-- Limitadores para a tabela `scheduling`
--
ALTER TABLE `scheduling`
  ADD CONSTRAINT `fk_scheduling_people1` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_scheduling_psychologist1` FOREIGN KEY (`psychologist_id`) REFERENCES `psychologist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
