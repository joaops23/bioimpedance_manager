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
