# Sistema de Cadastro e Login de Usuários

Este é um sistema simples de cadastro e login de usuários com autenticação básica, desenvolvido em **Laravel**. A aplicação permite que os usuários se registrem, façam login e editem seus perfis.

## Funcionalidades

-   **Cadastro de usuários**: Os usuários podem se registrar no sistema informando dados como nome, e-mail e senha.
-   **Login de usuários**: Usuários registrados podem acessar o sistema utilizando suas credenciais.
-   **Edição de perfil**: Usuários autenticados podem editar seu perfil (nome, e-mail, bio, foto, etc.).

## Tecnologias Utilizadas

-   **Laravel**: Framework PHP utilizado para o desenvolvimento.
-   **Bootstrap**: Framework CSS utilizado para a interface responsiva.
-   **MySQL**: Banco de dados relacional para armazenamento dos dados dos usuários.

## Instalação

### Requisitos

-   PHP >= 7.4
-   Composer
-   Banco de dados MySQL

### Passos para Instalação

1. **Clone o repositório**:

    ```bash
    git clone https://github.com/KaioBauer/ProjetoControleDeUsuarios.git
    cd ProjetoControleDeUsuarios
    ```

2. **Instale as dependências com o Composer**:

    ```bash
    composer install
    ```

3. **Configure o arquivo `.env`**:
   Copie o arquivo `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

    Edite o arquivo `.env` com suas configurações de banco de dados. Exemplo:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

4. **Gere a chave de aplicação**:

    ```bash
    php artisan key:generate
    ```

5. **Crie o banco de dados**:
   Certifique-se de que o banco de dados esteja criado. Se necessário, você pode criar o banco de dados manualmente ou utilizar migrações para criar as tabelas:

    ```bash
    php artisan migrate
    ```

6. **Inicie o servidor**:
   Após configurar tudo, inicie o servidor:

    ```bash
    php artisan serve
    ```

7. **Acesse a aplicação**:
   Abra o navegador e vá para `http://127.0.0.1:8000` para acessar o sistema.

## Estrutura de Pastas

-   **`app/Http/Controllers/Auth`**: Controladores de autenticação (Login, Registro, Logout).
-   **`resources/views`**: Views Blade para as páginas de login, registro e perfil.
-   **`routes/web.php`**: Definição das rotas principais do sistema, incluindo autenticação.

## Rotas

-   `/login`: Exibe o formulário de login.
-   `/login`: Envia os dados do formulário de login.
-   `/register`: Exibe o formulário de registro de novos usuários.
-   `/register`: Envia os dados do formulário de registro.
-   `/logout`: Realiza o logout do usuário autenticado.
-   `/profile`: Exibe o formulário para edição do perfil do usuário.
-   `/profile`: Atualiza os dados do perfil do usuário.

Esse README fornece uma visão geral da aplicação, além de instruções claras para instalação e contribuição. Se necessário, ajuste conforme a estrutura ou requisitos específicos do seu projeto.
