## Requisitos do Sistema

- PHP 8.1+
- Composer
- MySQL 5.7+ ou Qualquer outro banco de dados compatível com o Laravel

## Instalação

1. Clone o repositório
2. Instale as dependências do projeto rodando o comando `composer install` na pasta raiz do projeto
3. Copie o arquivo `.env.example` e renomeie para `.env`
4. Configure o arquivo `.env` com as informações de acesso do banco de dados
5. Gerar a chave de criptografia para o projeto rodando o comando `php artisan key:generate`
6. Execute as migrations do projeto rodando o comando `php artisan migrate`
7. Execute o comando `php artisan db:seed` para popular o banco de dados com dados de teste


## Execução
1. Execute o comando `php artisan serve` para iniciar o servidor
