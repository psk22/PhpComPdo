<?php

try {
$conexao = new \PDO(
    "mysql:host=localhost;
    dbname=phpcompdo",
    "phpcompdo",
    "1234"
    );
	$query = "Select * from alunos order by nome asc";

	$stmt = $conexao->query($query);
	$resultado = $stmt->fetchAll(PDO::FETCH_CLASS);
	echo "<table border='1'><caption>TURMA codeEducation</caption>
	<tr>
		<td></td>
		<td>Aluno</td>
		<td>Nota</td>
	</tr>";
	$i=1;
	foreach($resultado as $aluno){

		echo "<tr><td>".$i++."</td><td>".$aluno->nome."</td><td>".$aluno->nota."</td></tr>";
}
}
catch(\PDOException $e){
    echo "Não foi possivel conectar ao banco de dados. <br>Código Erro:"
    .$e->getCode();
}



//select * from alunos order by nota desc limit 3;
//update alunos set nota=11 where id=11;