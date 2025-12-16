# 📘 Configuração do Projeto Laravel com SQLite

Este repositório contém um projeto desenvolvido em **Laravel**, configurado para utilizar **SQLite** como banco de dados, com foco em **simplicidade e agilidade no ambiente de desenvolvimento**.

---

## 🛠️ Tecnologias Utilizadas

Principais tecnologias e versões utilizadas no projeto:

* **Laravel:** 8.83.29
* **PHP:** 7.4.3
* **Composer:** 2.8.12
* **Bootstrap:** 4.3
* **Font Awesome:** 5.8.1

---

## 🗄️ Banco de Dados — SQLite

O projeto utiliza **SQLite** como banco de dados para facilitar a configuração local, evitando a necessidade de instalação e configuração de servidores como MySQL ou PostgreSQL.

> 📌 Cada desenvolvedor deve criar seu próprio arquivo de banco de dados localmente.

---

## ⚙️ Configuração do SQLite (Passo a Passo)

### 1️⃣ Verifique a existência da pasta `database/`

Essa pasta é padrão do Laravel. Caso não exista, crie-a manualmente na raiz do projeto:

```bash
database/
```

---

### 2️⃣ Crie o arquivo do banco SQLite

Dentro da pasta `database/`, crie manualmente um arquivo chamado:

```bash
database.sqlite
```

---

### 3️⃣ Configure o arquivo `.env`

No arquivo `.env`, ajuste as seguintes variáveis:

```bash
DB_CONNECTION=sqlite
DB_DATABASE=C:\projetos-laravel\controle-series\database\database.sqlite
```

🔹 **Importante:**
O valor de `DB_DATABASE` deve conter o **caminho absoluto completo** até o arquivo `database.sqlite`. Caso contrário, o Laravel poderá apresentar erro de conexão com o banco de dados.

---

### 4️⃣ Arquivos ignorados pelo Git

O arquivo `database/database.sqlite` **não é versionado** e está incluído no `.gitignore`.

✔️ Cada máquina deve criar o seu próprio banco localmente.

---

## 🔐 Geração da chave da aplicação

Ao clonar o projeto, a chave de criptografia do Laravel (**APP_KEY**) não vem configurada.

### Como gerar a chave:

No terminal, execute:

```bash
php artisan key:generate
```

Esse comando irá gerar automaticamente uma nova chave e salvá-la no campo `APP_KEY` dentro do arquivo `.env`.

---

## 📁 Estrutura recomendada do projeto

```text
/app
/bootstrap
/config
/database
    └─ database.sqlite   ← criado manualmente (ignorado pelo Git)
/public
/resources
/routes
/vendor
.env
```

---

## 🧪 Testando a aplicação

Após concluir as etapas acima, execute os comandos abaixo:

```bash
php artisan config:clear
php artisan migrate
php artisan serve
```

A aplicação estará disponível no endereço exibido no terminal (geralmente `http://127.0.0.1:8000`).

---

## ✅ Checklist rápido

Antes de rodar o projeto, confirme:

* ✔️ Arquivo `.env` configurado corretamente
* ✔️ Arquivo `database.sqlite` criado
* ✔️ `APP_KEY` gerada
* ✔️ Cache de configuração limpo
* ✔️ Migrations executadas

---
