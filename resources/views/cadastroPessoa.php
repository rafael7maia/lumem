<!DOCTYPE html>

<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		if (count($errors)>0) {
		?>
			<div>
				<ul>
					<?php
						foreach ($errors->all() as $error) 
						{
							echo ("<li>" . $error . "</li>");
						} 
					?>
				</ul>
			</div>
		<?php
		}
		?>
		<form method="post" action="/pessoas/">
				
				<input type="text" name="nome" size="50" placeholder="João da Silva" maxlengt="128">
				<input type="text" name="email" size="50" placeholder="joao@dasilva.com.br " maxlengt="128">
				<input type="text" name="cpf" size="11" placeholder="97437760363" maxlengt="11">

				<input type="submit" name="cadastro" value="Cadastrar">
		</form>
			<a href="/pessoas/"> Lista de pessoas</a>
	</body>
</html>