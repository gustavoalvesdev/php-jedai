<?php 

//$nome = 'Gustavo';

/* if (preg_match('/sta/', $nome)) {
	echo 'Verdade';
} else {
	echo 'Mentira';
}*/

//preg_match('/(.*?)ust(.*)/', $nome, $retorno);

//echo $retorno[2];

//print_r($retorno);
function cpfValido($cpf) {
	$expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
	return preg_match($expressao, $cpf);
}

if (isset($_POST['acao'])) {
	$cpf = $_POST['cpf'];

	if (cpfValido($cpf)) {
		echo 'O cpf é válido!';
	} else {
		echo 'O cpf não é válido!';
	}

}

?>

<form method="post">
	<input type="text" name="cpf" />
	<input name="acao" type="submit" />
</form>
