# Agenda de Contatos - Avaliação Técnica Notre Dame


## Tecnologias Utilizadas

* **Back-end:** PHP 8.2, Laravel 11, MySQL
* **Front-end:** Vite, JavaScript (ES6), Bootstrap 5, SASS
* **Ferramentas:** Composer, Node.js & NPM
* **UI/UX:** Google Fonts (Poppins), Bootstrap Icons, SweetAlert2

---

## Funcionalidades Implementadas

-   **Página Inicial (Home):** Uma página de apresentação com acesso ao módulo da agenda.
-   **Create:** Formulário para criação de novos contatos.
-   **Read:** Listagem de todos os contatos em uma tabela.
-   **Read:** Página de detalhes para cada contato individual.
-   **Update:** Formulário para edição de contatos existentes.
-   **Delete:** Exclusão de contatos com diálogo de confirmação.
-   **Validações e Mensagens:** Todas as validações de formulário possuem mensagens de erro claras e em português (pt-BR).
-   **Seeders:** População inicial do banco de dados com dados de teste utilizando o Faker.
-   **UI/UX Aprimorada:** Para a melhor experiência do usuário
-   **Notificações 'Toast':** Feedbacks de sucesso utilizando SweetAlert2, de forma não intrusiva.
-   **Busca Dinâmica:** Filtragem em tempo real da tabela de contatos.
-   **Design Moderno:** Interface com ícones, tipografia aprimorada e layout responsivo.

---

## Critérios de Avaliação Atendidos

1.  **Uso de frameworks:** Foi utilizado o **Laravel** para o back-end e o **Vite** para o fluxo de front-end, seguindo as práticas mais modernas de desenvolvimento web.
2.  **Validações de campos, tratamentos e mensagens:** O `Laravel Validator` foi implementado no back-end, e as mensagens de sucesso foram aprimoradas no front-end com notificações elegantes.
3.  **Design, visual / Estrutura do HTML:** O **Bootstrap 5** foi a base, mas a UI foi elevada com um sistema de design coeso (ícones, fontes, cores e sombras), resultando em uma experiência de usuário superior.
4.  **Textos, ortografia:** Todos os textos da interface e este `README` foram revisados.
5.  **Modelagem do banco de dados e instruções DML (scripts SQL):** A estrutura do banco foi modelada com **Migrations** do Laravel. Os scripts SQL para replicação manual também estão disponíveis (`database.sql`).

---

## Como Rodar o Projeto (Produção)

Siga os passos abaixo para configurar e executar o projeto em um ambiente local.

### Pré-requisitos

Antes de começar, garanta que você tenha os seguintes softwares instalados:
* [PHP](https://www.php.net/) (versão 8.1 ou superior)
* [Composer](https://getcomposer.org/)
* [Node.js & NPM](https://nodejs.org/) (versão LTS recomendada)
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

3.  **Instale as Dependências do PHP**
    ```bash
    composer install
    ```

4.  **Configure o Arquivo de Ambiente**
    ```bash
    cp .env.example .env
    ```

5.  **Gere a Chave da Aplicação**
    ```bash
    php artisan key:generate
    ```

6.  **Instale as Dependências do Node.js**
    ```bash
    npm install
    ```

7.  **Compile os Assets de Front-end**
    Este comando irá compilar e otimizar os arquivos CSS e JS para produção.
    ```bash
    npm run build
    ```

8.  **Configure o Banco de Dados**
    Abra o arquivo `.env` e edite as seguintes variáveis com as credenciais do seu banco de dados MySQL local. Certifique-se de ter criado um banco de dados vazio com o nome que você definir abaixo.

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=agenda_contatos_nd
    DB_USERNAME=root
    DB_PASSWORD=sua_senha_aqui
    ```

9.  **Execute as Migrations e Seeders**
    Este comando irá criar a estrutura do banco e populá-la com dados de exemplo.
    ```bash
    php artisan migrate:fresh --seed
    ```

10. **Inicie o Servidor Local**
    ```bash
    php artisan serve
    ```

11. **Acesse a Aplicação**
    Abra seu navegador e acesse: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## Para Desenvolvimento

Se desejar rodar o projeto em modo de desenvolvimento com recarregamento automático (hot-reload), abra dois terminais:

* **Terminal 1:** `php artisan serve`
* **Terminal 2:** `npm run dev`
