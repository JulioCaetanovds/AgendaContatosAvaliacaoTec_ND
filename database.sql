-- Descrição: Script para criação da tabela de contatos e inserção de dados de exemplo.

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Aluno','Responsável','Professor','Funcionário','Gestor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `contacts` (`name`, `phone`, `email`, `city_state`, `category`, `created_at`, `updated_at`) VALUES
('João da Silva', '(11) 98765-4321', 'joao.silva@example.com', 'São Paulo/SP', 'Aluno', NOW(), NOW()),
('Maria Oliveira', '(21) 91234-5678', 'maria.oliveira@example.com', 'Rio de Janeiro/RJ', 'Responsável', NOW(), NOW()),
('Carlos Pereira', '(31) 99999-8888', 'carlos.pereira@example.com', 'Belo Horizonte/MG', 'Professor', NOW(), NOW()),
('Ana Costa', '(41) 98888-7777', 'ana.costa@example.com', 'Curitiba/PR', 'Funcionário', NOW(), NOW()),
('Pedro Martins', '(51) 97777-6666', 'pedro.martins@example.com', 'Porto Alegre/RS', 'Gestor', NOW(), NOW());
