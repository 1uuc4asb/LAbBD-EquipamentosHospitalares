# LAbBD-EquipamentosHospitalares
TRABALHO BD CORRERIA

COPIEI DO OUTRO 

# EquipamentosHospitalares-BancoDeDados
CRUD - Create Remove Update Delete.
Esta parte de meu trabalho de banco de dados consiste em desenvolver um sistema CRUD para acessar o banco de dados e realizar operações básicas em cima dele.

## Tecnologias utilizadas

- Puramente e simplesmente: Laravel.

## Requisitos

- Você deve ter (obviamente) laravel instalado na sua máquina, logo, deve ter o composer também.

## Criando o banco de dados

Crie um banco de dados com o nome de EquipamentosHospitalares (recomendado).
*** ALTERE O ENV PARA CONECTAR AO BANCO!!! ***

## Clonando o projeto

### Ao clonar o projeto você deve ir a pasta do projeto (nao lembro qual é o nome dela) e rodar os seguintes comandos.

Você deverá rodar este comando para instalar as dependências do laravel/composer.

```
$ composer install
```

Copie o .env-example para um arquivo com o nome de .env.
Nele você deverá setar o caminho para seu banco de dados assim como suas credenciais.
Recomendamos que crie um banco com o nome de XadrezDB, para seguir o padrão.

```
$ cp .env-example .env
```

Gere a chave do php artisan.

```
$ php artisan key:generate
```

Instale os pacotes do node e rode o node para ele compilar o CSS e o JS.

```
npm install && npm run dev
```

## Rodando a aplicação

Para rodar a aplicação basta rodar o comando:

```
$ php artisan serve
```

E acessar o endereço setada na sua máquina para o laravel (comumente 127.0.0.1:8000).
