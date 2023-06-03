<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Teste de Classe \jacknpoe\GeraSenha (senhas com números, maiúsculas, minúsculas e símbolos)</title>
 		<link rel="stylesheet" href="php_testegerasenha.css"/>
		<link rel="icon" type="image/png" href="php_testegerasenha.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php
			header( "Content-Type: text/html; charset=ISO-8859-1", true);

			$tamanho = '';
			$resultado = '';

			if( isset( $_POST[ 'gerar']))
			{
				require_once( 'GeraSenha.php');
				$GeradorSenha = new \jacknpoe\GeraSenha();

				$tamanho =  $_POST['tamanho'];

				$resultado = 'Senha: ' . $GeradorSenha->GeraSenha( (int)$tamanho);
			}
		?>
		<h1>Gerador de Senhas</h1>

		<form action="php_testegerasenha.php" method="POST" style="border: 0px">
			<p>Tamanho: <input type="text" name="tamanho" value="<?php echo htmlspecialchars( $tamanho, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, "ISO-8859-1"); ?>" style="width: 50px" autofocus></p>
			<p><input type="submit" name="gerar" value="Gerar"></p>
		</form><br>
		<p><?php echo $resultado; ?></p>
		<br>

		<p><a href="https://github.com/jacknpoe/php_testegerasenha">Repositório no GitHub</a></p><br><br>
		<form action="index.html" method="POST" style="border: 0px">
			<p><input type="submit" name="voltar" value="Voltar"></p>
		</form>
	</body>
</html>