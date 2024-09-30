# Teste Técnico Backend - Ideal Trends

## Descrição

API backend feita em laravel com acesso a banco de dados SQLITE neste caso para teste somente para teste. a API fornece as informações através dos metodos HTTP POST, GET - Para consultar os usuarios cadastrados usando Template Engine Blade do laravel.

## Tecnologias Utilizadas

-   **Frontend:** [Javascript, HTML, CSS, React, Axios, Toads]
-   **backend:** [PHP, Laravel]
-   **Banco de dados:** [SQLite]
-   **Outras:** [Blade]

## Pré-requisitos

-   **Node.js:** [v18.20.4]
-   **npm:** [10.7.0]
-   **PHP:** [8.3.12]
-   **Laravel:** [x11]

## Instalação

1. **Clonar o repositório:**

    ```bash
    git clone https://github.com/dokatec/idealtrends-backend-teste.git

    ```

2. **Acessar a pasta via CLI:**

    ```bash
    cd backend

    ```

3. **Instalar as dependências com npm via CLI:**

    ```bash

    composer install ou composer update

    php artisan serve

    Ao iniciar a aplicação será criado as migrates para o banco de dados SQLITE.

    ```

4. **Metodos HTTP utilizados:**

    ```bash
    GET - Obter todos os cadastros com os campos id, nome, email.
    POST - Cria novos registros com nome, email, senha, confirma senha.

    URL: api/register



    ```

5. **Cadastrar registro via POST em JSON:**

    ```bash

     POST
    {
     "name":"cadastro usuario",
     "email":"usuario@gmail.com",
     "password":"minha_senha"
    }

    ```
