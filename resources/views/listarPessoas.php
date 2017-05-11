<ul>
	<?php
		foreach ($pessoas as $pessoa) {

			echo ("<li>" . $pessoa->nome . "," . $pessoa->email . "," . $pessoa->cpf . "</li>");
		}
	?>
</ul>

<a href="/pessoas/cadastro"> Cadastro de Pessoas</a>