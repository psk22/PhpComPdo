<?php
require_once "conexao.php";
header ('Content-Type: text/html; charset=utf-8');
$pdo=conectar();

$buscaNota=$pdo->prepare("select * from alunos order by nota desc limit 3");
$buscaNota->execute();

$busca=$pdo->prepare("SELECT * FROM alunos");
$busca->execute();

echo "<hr><h12>Lista de Alunos</h2><br>";
$listar=$busca->fetchAll(PDO::FETCH_CLASS);
foreach ($listar as $i){
    echo $i->id," - ".$i->nome." - ".$i->nota."<br>";
}
echo "<hr><h12>Maiores Notas</h2><br>";
$listaNota=$buscaNota->fetchAll(PDO::FETCH_CLASS);
foreach ($listaNota as $i2){
    echo $i2->id," - ".$i2->nome." - ".$i2->nota."<br>";
}
