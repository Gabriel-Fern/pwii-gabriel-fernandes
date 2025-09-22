# pwii-gabriel-fernandes
Programação Web II por Prof Joao Siles e Najara 

Guia rápido para iniciar um projeto com Laravel.
Pré-requisitos:

Antes de começar, tenha certeza que sua maquina tenha: PHP, Composer, Laravel instaler e Node e NPM ou Bun.

Instalação:

Abra seu terminal PowerShell no modo de Administrador e copie o seguinte código:

Instalação do PHP e Composer:
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
Após a instalação, reinicie seu terminal, o fechando e abrindo novamente na pasta htdocs no Xamp. Baixe o Laravel Installer via Composer:

Baixando o Laravel Installer:
composer global require laravel/installer
Criando aplicação:

Laravel new exemplo-app
"Exemplo-app" é o nome do seu projeto.

Depois que o aplicativo for criado, você pode iniciar o servidor de desenvolvimento local do Laravel, o queue worker e o servidor de desenvolvimento Vite usando o script dev Composer:

cd exemplo-app

npm install && npm run build

composer run dev
Depois de iniciar o servidor de desenvolvimento, seu aplicativo estará acessível no seu navegador em http://localhost:8000.

Como abrir seu projeto Laravel após baixa-lo pelo Github
Pré-requisitos:

Novamente, antes de abrir seu projeto, tenha certeza que sua maquina tenha: PHP, Composer, Laravel instaler e Node e NPM ou Bun.

Primeiro passo(1/6) :

Abra seu terminal PowerShell na pasta onde está criado seu projeto Laravel, após abrir seu terminal, rode o comando:

 composer install
Ele baixa as dependências do projeto na pasta vendor.

Segundo passo(2/6):

Para instalar as dependências de um projeto que possui JavaScript você deve rodar o seguinte comando:

npm install
*Terceiro passo(3/6):

Caso o projeto possuia Vite e/ou WebPack, rode o seguinte comando:

npm run build
Quarto passo(4/6):

Entre no seu VsCode na sessão de arquivos, crie uma copia do arquivo .env.example e renomeie para .env.

Quinto passo(5/6):

Você precisa criar uma chave encriptada para o projeto, e para isso, utilize o comando:

php artisan key:generate
Sexto passo(6/6):

Chegamos no último passo, é necessário rodar as Migrations para criar o Banco de Dados, para isso, utilize o comando:

php artisan migrate
Após esses passos, basta utilizar o comando:

composer run dev
Pressionar Ctrl e selecionar o link para abrir o projeto no navegador, http://localhost:8000.
