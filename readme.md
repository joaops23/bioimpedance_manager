# Sistema de controle de anamnese / bioimpedância

## História

Uma empresa precisa cadastrar usuários em seu sistema interno, contendo no cadastro dados do usuário, informações sobre peso, altura, índice de gordura etc. Informação sobre a empresa que o funcionário trabalha, a plataforma precisa de autenticação para ser acessada.

## Casos de uso

- Login e recuperação de senha por email
- Cadastro de clientes - uma tela onde possa gerenciar o cadastro de clientes podendo filtrar, exportar, cadastrar, alterar etc.
- Cadastro de empresas - mesma feature, porém para as empresas
- Realizar o processamento de relatórios
- Importar clientes, empresas etc via planilha csv

## Tecnologias

PHP 8.*

MySQL

Slim

Slim/Twig

PSR7

JWT(autenticação)

JQuery

AJAX

Bootstrap 

## Métodos

SOLID 

MVC

POO

POO(herança de classes controladoras, modelos, repositories etc)

## Telas principais

- Login
- Home (adicionar alguns parâmetros e métricas)
- Cadastro de clientes
- Cadastro de empresas
- Relatórios

### Configurações

- SESSION['authorization'] -> chave jwt adquirida e registrada na sessão através do login.

### Passo a passo

- Baixar o projeto
- Importar as bibliotecas com PHP Composer
- Iniciar o projeto através do docker: 
~~~ sh
$ docker compose up
~~~
- acessar o container do serviço de banco de dados
- dentro do container, criar o banco de dados a partir do arquivo "database.sql"


## Tasks

- criar tela de cadastro de novo usuário
    O novo usuário não pode ter acesso a nada sem que um usuário administrador dê privilégio a ele, ele inicia com acesso básico

- Construir painel padrão da aplicação(quando logado) para seguir nas demais telas da aplicação, contendo o menu, links e estilização padrão

- criar telas de clientes e empresas, funções, unidades e cargos
- Criar exportações/relatórios.