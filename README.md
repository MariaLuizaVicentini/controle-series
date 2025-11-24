# 📘 README --- Configuração do Projeto Laravel com SQLite

## 🛠️ Tecnologias Utilizadas

Principais dependências e versões do projeto:

-   **Laravel:** 8.83.29\
-   **PHP:** 7.4.3\
-   **Composer:** 2.8.12\
-   **Bootstrap:** 4.3
-   **Fontawesome:** 5.8.1


------------------------------------------------------------------------

## 🗄️ Banco de Dados --- SQLite

Este projeto utiliza **SQLite** para simplificar o ambiente de
desenvolvimento.

------------------------------------------------------------------------

## ⚙️ Como configurar o SQLite (passo a passo confiável)

### 1️⃣ Verifique se a pasta `database/` existe

É padrão do Laravel, mas caso não exista, crie:

    database/

### 2️⃣ Crie o arquivo do SQLite

Seleciona a pasta 'database' e crie manualmente um arquivo com o nome:

    ``` bash
    database.sqlite
    ```

------------------------------------------------------------------------

### 3️⃣ Configurar o `.env`

Ajuste estas linhas no arquivo `.env`:

    ``` bash
    DB_CONNECTION=sqlite
    DB_DATABASE=C:\projetos-laravel\controle-series\database\database.sqlite
    ```

- O caminho BD_DATABASE precisar ser o caminho completo, se não o laravel apresentará um problema na conexão com o BD

------------------------------------------------------------------------

### 4️⃣ Essas configurações não vão pro Git

O arquivo `database/database.sqlite` é ignorado pelo Git.\
Cada máquina deve criar o seu próprio arquivo localmente.

------------------------------------------------------------------------

## 📁 Estrutura recomendada do projeto

    /app
    /bootstrap
    /config
    /database
        ├─ database.sqlite   ← criado manualmente, ignorado pelo Git
    /public
    /resources
    /routes
    /vendor
    .env

------------------------------------------------------------------------

## 🧪 Testar se tudo está funcionando

Execute:

``` bash
php artisan config:clear
php artisan migrate
php artisan serve
```

------------------------------------------------------------------------

## ✔️ Checklist rápido

1.  `.env` correto\
2.  arquivo criado via terminal\
3.  limpar cache\
4.  rodar migrations\

------------------------------------------------------------------------
