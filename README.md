# Agenda de Contatos - Avaliação Técnica Notre Dame

Este projeto é uma aplicação web desenvolvida como parte do processo seletivo para a vaga de Desenvolvedor de Sistemas II na Congregação de Nossa Senhora. A aplicação consiste em um CRUD (Create, Read, Update, Delete) completo para gerenciar uma agenda de contatos.

## Tecnologias Utilizadas

* **PHP 8.2**
* **Laravel 11**
* **MySQL**
* **Composer**
* **Bootstrap 5** (para o front-end)

---

## Funcionalidades Implementadas

- [x] **Página Inicial (Home):** Uma página de apresentação com acesso ao módulo da agenda.
- [x] **Create:** Formulário para criação de novos contatos com validação de dados.
- [x] **Read (Listar):** Listagem de todos os contatos em uma tabela paginada.
- [x] **Read (Visualizar):** Página de detalhes para cada contato individual.
- [x] **Update:** Formulário para edição de contatos existentes.
- [x] **Delete:** Exclusão de contatos com diálogo de confirmação.
- [x] **Validações e Mensagens:** Todas as validações de formulário possuem mensagens de erro claras e em português (pt-BR).
- [x] **Seeders:** Populacão inicial do banco de dados com dados de teste utilizando o Faker.

---

## Critérios de Avaliação Atendidos

O projeto foi desenvolvido buscando atender a todos os critérios listados na avaliação:

1.  **Uso de frameworks:** Foi utilizado o **Laravel**, um dos mais robustos e populares frameworks PHP, para estruturar toda a aplicação (rotas, controllers, models, views).
2.  **Validações de campos, tratamentos e mensagens:** O `Laravel Validator` foi implementado nos métodos `store` e `update` do Controller para validar todos os campos. As mensagens de erro foram traduzidas para o português para uma melhor experiência do usuário.
3.  **Design, visual / Estrutura do HTML:** O framework **Bootstrap 5** foi utilizado para criar uma interface limpa, responsiva e agradável. A estrutura HTML é semântica e organizada utilizando o sistema de views do Blade.
4.  **Textos, ortografia:** Todos os textos da interface e este `README` foram revisados.
5.  **Modelagem do banco de dados e instruções DML (scripts SQL):** A estrutura do banco foi modelada e criada através do sistema de **Migrations** do Laravel, garantindo o versionamento e a reprodutibilidade do schema. Os scripts SQL para criação da tabela e inserção dos dados de exemplo também estão disponíveis no arquivo `database.sql`.

---

## Como Rodar o Projeto

Siga os passos abaixo para configurar e executar o projeto em um ambiente de desenvolvimento local.

### Pré-requisitos

Antes de começar, garanta que você tenha os seguintes softwares instalados em sua máquina:
* [PHP](https://www.php.net/) (versão 8.1 ou superior)
* [Composer](https://getcomposer.org/)
* [MySQL](https://www.mysql.com/) (ou um servidor de banco de dados compatível)
* [Git](https://git-scm.com/)

### Passo a Passo

1.  **Clone o Repositório**
    ```bash
    git clone [URL_DO_SEU_REPOSITORIO_GIT] AgendaContatosAvaliacaoTec_ND
    ```

2.  **Acesse a Pasta do Projeto**
    ```bash
    cd AgendaContatosAvaliacaoTec_ND
    ```

3.  **Instale as Dependências**
    ```bash
    composer install
    ```

4.  **Configure o Arquivo de Ambiente**
    Copie o arquivo de exemplo `.env.example` para um novo arquivo chamado `.env`.
    ```bash
    cp .env.example .env
    ```

5.  **Gere a Chave da Aplicação**
    Este comando é crucial para a segurança da aplicação.
    ```bash
    php artisan key:generate
    ```

6.  **Configure o Banco de Dados**
    Abra o arquivo `.env` e edite as seguintes variáveis com as credenciais do seu banco de dados MySQL local. Certifique-se de ter criado um banco de dados vazio com o nome que você definir abaixo.

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=agenda_contatos_nd
    DB_USERNAME=root
    DB_PASSWORD=sua_senha_aqui
    ```

7.  **Execute as Migrations e os Seeders**
    Este comando irá criar todas as tabelas no banco de dados e populá-las com 15 contatos de exemplo.
    ```bash
    php artisan migrate:fresh --seed
    ```

8.  **Inicie o Servidor Local**
    ```bash
    php artisan serve
    ```

9.  **Acesse a Aplicação**
    Abra seu navegador e acesse a URL: [http://127.0.0.1:8000](http://127.0.0.1:8000). Você será direcionado para a página inicial do projeto.

---
