# Projeto CRUD em PHP com MySQL

![CRUD](.github/preview.jpg)

Este é um projeto básico de um sistema CRUD (Create, Read, Update, Delete) em PHP, onde é possível gerenciar filmes em um banco de dados MySQL por meio de uma aplicação web simples.

## Pré-requisitos

- Servidor web local (como XAMPP, WAMP, ou MAMP) configurado.
- MySQL instalado.
- Conhecimentos básicos em PHP e MySQL.

## Instalação e Configuração

1. Clone ou faça o download deste repositório.
2. Importe o arquivo `database.sql` para criar a estrutura do banco de dados e suas tabelas.
3. Configure as credenciais do banco de dados no arquivo `connect.php`.

## Funcionalidades

### 1. Listar Filmes

- `listDateMovies.php`: Lista todos os filmes cadastrados no banco de dados.

### 2. Inserir Filme

- `insertDateMovies.php`: Permite adicionar um novo filme ao banco de dados.

### 3. Atualizar Filme

- `alterDateMovies.php`: Permite atualizar os detalhes de um filme existente no banco de dados.

### 4. Excluir Filme

- `deleteDateMovies.php`: Remove um filme do banco de dados.

## Configuração do Ambiente de Desenvolvimento

1. Configure um servidor web local (XAMPP, WAMP, MAMP).
2. Clone ou baixe este repositório no diretório do servidor local.
3. Importe o arquivo `database.sql` para criar o banco de dados e suas tabelas.
4. Configure as credenciais do banco de dados no arquivo `connect.php`.
5. Acesse a aplicação via navegador web.

## Estrutura do Projeto

- `index.php`: Página inicial do projeto.
- `listDateMovies.php`: Lista todos os filmes cadastrados.
- `insertDateMovies.php`: Formulário para inserir um novo filme.
- `alterDateMovies.php`: Formulário para atualizar detalhes de um filme existente.
- `deleteDateMovies.php`: Remove um filme do banco de dados.
- `connect.php`: Arquivo de conexão com o banco de dados.
- `css/`: Diretório contendo arquivos CSS para estilização.

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir um pull request ou reportar problemas encontrados.