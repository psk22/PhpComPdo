<?php
	header('Content-Type: text/html; charset=utf-8');
	function conectar(){
	try {
		$conexao = new \PDO(
			"mysql:host=localhost;dbname=phpcompdo","phpcompdo","1234"
			);
		$conexao -> setAttribute(PDO::ATTR_ERRMODE, ERRMODE_EXCEPTION);
		}
		catch(\PDOException $e){
			echo "Não foi possivel conectar ao banco de dados. <br>Código Erro:"
			.$e->getCode();
		}

		return $conexao;
		
}
