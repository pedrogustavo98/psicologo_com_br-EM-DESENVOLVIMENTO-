/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `convenios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `mensagens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `empresa` varchar(150) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mensagem` longtext,
  `usuario_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

CREATE TABLE `minha_clinica` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `whatsapp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logradouro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `profissionais` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `registro` varchar(50) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE `quem_somos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sobre_posicao` longtext,
  `imagem` varchar(255) DEFAULT NULL,
  `texto_final` longtext,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario_id` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `workshops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome_evento` varchar(255) DEFAULT NULL,
  `imagem_um` varchar(255) DEFAULT NULL,
  `imagem_dois` varchar(255) DEFAULT NULL,
  `imagem_tres` varchar(255) DEFAULT NULL,
  `descricao` longtext,
  `usuario_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



INSERT INTO `mensagens` (`id`, `nome`, `empresa`, `telefone`, `email`, `mensagem`, `usuario_id`, `time`) VALUES
(1, 'Pedro Gustavo', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:09:44');
INSERT INTO `mensagens` (`id`, `nome`, `empresa`, `telefone`, `email`, `mensagem`, `usuario_id`, `time`) VALUES
(2, 'João Gomes', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31');
INSERT INTO `mensagens` (`id`, `nome`, `empresa`, `telefone`, `email`, `mensagem`, `usuario_id`, `time`) VALUES
(3, 'Gustavo Lima', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31');
INSERT INTO `mensagens` (`id`, `nome`, `empresa`, `telefone`, `email`, `mensagem`, `usuario_id`, `time`) VALUES
(4, 'Fernando ', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31'),
(5, 'Paulo', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31'),
(6, 'Luiz', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31'),
(7, 'Henrique', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31'),
(8, 'Claudia', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31'),
(9, 'Juliana', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31'),
(10, 'Bruna', 'Nike', '(11) 94950-2572', 'pedrogemeos13@gmail.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-10-15 13:11:31');

INSERT INTO `minha_clinica` (`id`, `whatsapp`, `telefone`, `email`, `facebook`, `logradouro`, `complemento`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `instagram`, `usuario_id`, `time`) VALUES
(1, '(11) 94950-2572', '(11) 4619-5554', 'versado@clinica.com.br', 'https://facebook.com.br/profile/', 'Rua Fernando Pessoa', 'Sala 1', '3500', 'Jardim Sorocabano', 'Jandira', 'SP', '06622-175', 'https://instagram.com/profile/', 1, NULL);


INSERT INTO `profissionais` (`id`, `nome`, `email`, `imagem`, `senha`, `tipo`, `registro`, `usuario_id`, `time`) VALUES
(1, 'Jonas Silva', 'jonas@gmail.com', NULL, '', 'Convidado', 'CRP 00/3152568 SP', 1, '2024-10-15 12:30:46');
INSERT INTO `profissionais` (`id`, `nome`, `email`, `imagem`, `senha`, `tipo`, `registro`, `usuario_id`, `time`) VALUES
(2, 'Jonas Silva', 'pedrogemeos13@gmail.com', NULL, '', 'Convidado', 'CRP 00/3152568 SP', 1, '2024-10-15 12:40:29');
INSERT INTO `profissionais` (`id`, `nome`, `email`, `imagem`, `senha`, `tipo`, `registro`, `usuario_id`, `time`) VALUES
(3, 'Jonas Silva', 'pedrogemeos13@gmail.com', NULL, '', 'Convidado', 'CRP 00/3152568 SP', 1, '2024-10-15 12:41:48');
INSERT INTO `profissionais` (`id`, `nome`, `email`, `imagem`, `senha`, `tipo`, `registro`, `usuario_id`, `time`) VALUES
(4, 'Jonas Silva', 'pedrogemeos13@gmail.com', NULL, '', 'Convidado', 'CRP 00/3152568 SP', 1, '2024-10-15 12:42:04'),
(5, 'Jonas Silva', 'pedrogemeos13@gmail.com', NULL, '', 'Convidado', 'CRP 00/3152568 SP', 1, '2024-10-15 12:42:10'),
(6, 'Jonas Silva', 'pedrogemeos13@gmail.com', NULL, '', 'Convidado', 'CRP 00/3152568 SP', 1, '2024-10-15 12:42:39');



INSERT INTO `usuarios` (`id`, `nome`, `email`, `tipo`, `senha`, `time`) VALUES
(1, 'Dono da Clínica', 'master@gmail.com', 'Master', '$2y$10$a.gYrycwWiE3if6Cac4qZOiRNjhU/2gWP9BZADvk5FyqKv8NJWL4W', '2024-10-29 19:01:23');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `tipo`, `senha`, `time`) VALUES
(2, 'Psicólogo / funcionario', 'convidado@gmail.com', 'Convidado', '$2y$10$a.gYrycwWiE3if6Cac4qZOiRNjhU/2gWP9BZADvk5FyqKv8NJWL4W', '2024-10-29 19:01:54');


INSERT INTO `workshops` (`id`, `nome_evento`, `imagem_um`, `imagem_dois`, `imagem_tres`, `descricao`, `usuario_id`, `time`) VALUES
(1, 'Teste simples', NULL, NULL, NULL, 'fuyfuiguigiugiugiuggiugiugiugiugiugiuguigiugiugiuguigugiuguigiugiugui', 1, '2024-10-10 14:39:13');
INSERT INTO `workshops` (`id`, `nome_evento`, `imagem_um`, `imagem_dois`, `imagem_tres`, `descricao`, `usuario_id`, `time`) VALUES
(2, 'Teste simples', NULL, NULL, NULL, 'fuyfuiguigiugiugiuggiugiugiugiugiugiuguigiugiugiuguigugiuguigiugiugui', 1, '2024-10-15 12:12:07');
INSERT INTO `workshops` (`id`, `nome_evento`, `imagem_um`, `imagem_dois`, `imagem_tres`, `descricao`, `usuario_id`, `time`) VALUES
(3, 'teste simples 1', NULL, NULL, NULL, 'teste teste teste teste teste', 1, '2024-10-15 12:12:48');
INSERT INTO `workshops` (`id`, `nome_evento`, `imagem_um`, `imagem_dois`, `imagem_tres`, `descricao`, `usuario_id`, `time`) VALUES
(4, 'Teste simples', NULL, NULL, NULL, 'teste teste teste teste teste ', 1, '2024-10-15 12:17:46'),
(5, 'Teste simples', NULL, NULL, NULL, 'teste teste teste teste teste ', 1, '2024-10-15 12:18:23'),
(6, 'teste simples 1', NULL, NULL, NULL, 'teste, teste, teste, teste', 1, '2024-10-15 12:19:12'),
(7, 'teste simples 1', NULL, NULL, NULL, 'teste, teste, teste, teste', 1, '2024-10-15 12:20:19'),
(8, 'teste simples 1', 'u', 'p', 'l', 'teste, teste, teste, teste', 1, '2024-10-15 12:27:22');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;