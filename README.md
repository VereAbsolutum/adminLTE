# Projeto CRUD

Listagem de fornecedores ligando a uma empresa.

## Getting Started

### Dependencies

* YiiFramework
* AdminLTE

### Installing

* Baixe o aplicativo para a pasta www do wampserver (ou para a pasta das aplicações que constuma usar).

### Executing program

* Dentro da pasta app execute o comando php yii serve (vai rodar no localhost:80);
* Para a aplicação rodar é preciso criar as tabelas de fornecedor e empresa;
* - fornecedor tem os campos: id, nome, n_inscricao, criado_em, fone, empresa_id (chave estrangeira - id da empresa); 
* - empresa tem os campos: id, fantasia, n_inscricao, endereco, cep;
* Precisa alterar o [app/config/db.php](base de dados) para conectar com o banco;
