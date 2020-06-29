## Instalação.

1 - Baixar o projeto utilizando "git clone link-project".

2 - Instalar os pacotes do laravel "composer install".

3 - Criar no banco uma tabela e configurar no ".env" as informações.

4 - Gerar a key, utilizando "php artisan key:generate".

5 - Criar os seeders e tabelas do banco "php artisan migrate --seed"

6 - Executar o projeto "php artisan serve".

## Requisitos realizados do projeto.

1 - Utilizei o PHP mas junto com o framework, achei que poderia entregar algo a mais já que o framework tem algumas funcionalidades prontas que demoraria horas para ser realizadas no php.

2 - Utilizei a biblioteca do CURL PHP Puro no método "info" na classe HomeController.

3 - Utilizei o banco de dados com dados para serem pré inseridos através dos Seeders, quando ser criado as tabelas se utilizar os seeders vai ter todas as tabelas para conseguir avaliar o teste. Em algumas funções, deixei como seria o comando em SQL Puro sem utilizar o Eloquent.

4 - Utilizei o ajax, no "form.blade.php", no momento em que é selecionado um estado, faz busca por cidades e cria os options do select.

5 - Os clientes estão nos seeders e criei uma tabela de categorias que também estão nos seeders e cada cliente pertence a uma categoria.

6 - Github.

# Obrigado.
