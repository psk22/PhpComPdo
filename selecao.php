<?php
require_once "conexao.php";

$pdo=connectar();

$busca=$pdo->prepare("SELECT * FROM alunos");
$busca->execute();

$listar=$busca->fetchAll(PDO::FETCH_CLASS);
foreach ($listar as $i){
    echo $i->id," - ".$i->nome." - ".$i->nota;
}
