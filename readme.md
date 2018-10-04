# RITS (TESTE)

## Ferramentas

- [Laravel](https://laravel.com) (5.7)
- [MariaDB](https://mariadb.org/)
- [Docker](https://www.docker.com/)

## Configurando

Para criar o ambiente, foi utilizado a ferramenta [Laradock](http://laradock.io/getting-started/), que auxila a criação de ambientes PHP, isolados ou compartilhados, via containers Docker.

### 1 - Faça o clone projeto

```bash
# https
git clone https://github.com/jonaselan/teste-vagas-rits.git

# ssh
git clone git@github.com:jonaselan/teste-vagas-rits.git

```

### 2. Inicie o [submodule](https://git-scm.com/book/en/v2/Git-Tools-Submodules)

```bash
git submodule init && git submodule update
```

### 3 - Copie o `.env`

Há um exemplo do arquivo de configuração que deve ser tomado como exemplo. Para isso utilize os comandos:

```bash
cd ritsdock

cp env-example .env
```

### 4 - Configurar o `.env`

Aqui é onde vai ser definido os softwares necessários para o desenvolvimento do projeto. Eles irão ser referenciados no `docker-compose.yml`, então se for do seu interesse, pode verificar nesse arquivo também. Abaixo é exposto o modelo de como o seu `.env` deve estar:

```
### Application Path
# Seu código estará disponivel em `/var/www`.

APPLICATION=../

# Mudar nome do volume para que seja possí­vel criar outros ambientes laradock caso seja necessário
COMPOSE_PROJECT_NAME=ritsdock

### PHP Version
PHP_VERSION=7.2
[...]

```

### 5 - Construir e rodar ambiente

Os únicos containers que você precisará serão o NGINX (web server) e o Mariadb (banco de dados).

```bash
docker-compose up -d nginx mariadb
```

Mas você pode substituir pelo mysql e o apache2, mas por conversão, foi utilizado esses dois containers, por facilidade de configuração e desenvolvimento.

## Configurar aplicação Laravel

Quando você clonar a aplicação para sua máquina, alguns arquivos/pastas essenciais para a execução perfeita do projeto não são baixados, como o arquivo `.env` (contém as variáveis de ambiente, que pode mudar de acordo com cada ambiente, por isso não é recomendavél versioná-lo) e o diretório vendor (é onde fica o source code laravel, plugins e outras dependências. Tudo que você usar de terceiros fica aqui). Logo é preciso executar alguns comandos para gerar no seu ambiente. A seguir os comandos que você deve executar para configuração.

 ```bash
 # instalar dependências do PHP de acordo com o composer.lock (se existir)
 composer install

 # você deve adaptar o .env para suas necessidades
 cp .env.example .env

 # gera key unica da sua aplicação, por questãµes de segurança
 php artisan key:generate

 # após configurar o banco 
 # executar migration
 php artisan migrate

 # executar migration
 php artisan db:seed

 # instalar dependências javascript/estilo com base no package-lock.json
 npm install

# ou compilar assets (para o site)
 npm run dev

 ```
