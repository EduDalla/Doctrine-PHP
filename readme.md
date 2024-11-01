
# Curso Doctrine

---
# Códigos para lembrar:


## Criação de banco sql no Doctrine
php bin/doctrine.php orm:shema-tool:create

## Verificar se o código está com erros
    php bin/doctrine.php orm:info

## Rodar selects nas tabelas
    php bin/doctrine.php dbal:run-sql "SELECT * FROM
Student"

## Adicionando estudantes na tabela de Students
    php bin/insert-students.php "Nome do aluno"

## Lista os users na tabela de Students
    php bin/list-students.php 

## Renomeia o nome do usuário de acordo com o id
    php bin/rename-student.php  2 "John" 

## Deleta o usuário de acordo com o id
    php bin/delete-student.php 6 