# 📘 README --- Configuração do Projeto Laravel com SQLite

## 🛠️ Tecnologias Utilizadas

Principais dependências e versões do projeto:

-   **Laravel:** 8.83.29\
-   **PHP:** 7.4.3\
-   **Composer:** 2.8.12\
-   **Bootstrap:** 4.3

------------------------------------------------------------------------

## 🗄️ Banco de Dados --- SQLite

Este projeto utiliza **SQLite** para simplificar o ambiente de
desenvolvimento.\
O arquivo do banco **não é commitado no Git** e deve ser criado
manualmente sempre que você clonar o projeto em outra máquina.

------------------------------------------------------------------------

## ⚙️ Como configurar o SQLite (passo a passo confiável)

### 1️⃣ Verifique se a pasta `database/` existe

É padrão do Laravel, mas caso não exista, crie:

    database/

### 2️⃣ Crie o arquivo do SQLite

No PowerShell (Windows) ou terminal (Linux/Mac), execute dentro do
diretório raiz do projeto:

-   **Windows (PowerShell):**

``` powershell
New-Item -Path "database/database.sqlite" -ItemType File
```

Você deve ver o arquivo com tamanho **0 bytes**.

> Obs.: O ícone do arquivo no VSCode pode aparecer como `.txt` por
> padrão --- isso **não** indica que o arquivo está inválido. O
> importante é que o arquivo tenha 0 bytes e tenha sido criado pelo
> comando acima.

------------------------------------------------------------------------

### 3️⃣ Configurar o `.env`

Ajuste estas linhas no arquivo `.env`:

    DB_CONNECTION=sqlite
    DB_DATABASE=database/database.sqlite

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
5.  VSCode não interfere no SQLite

------------------------------------------------------------------------
