<?php

try {
$conexao = new \PDO(
    "mysql:host=localhost;
    dbname=estudophp",
    "root",
    "123456"
    );
}
catch(\PDOException $e){
    echo "Não foi possivel conectar ao banco de dados. <br>Código Erro:"
    .$e->getCode();
}
