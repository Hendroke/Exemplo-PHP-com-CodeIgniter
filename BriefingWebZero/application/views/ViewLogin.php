<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo($dados["titulo"])?></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/EntrevistaWebZero/css/estilo.css">
	<style type="text/css">
	
	</style>
</head>
<body>

	<div id="container" class="login">
		<h1>CONTROLE DE ACESSO</h1>
		<?php
			echo form_open("CtrlLogin/login");
			echo form_fieldset("WebZero - Login");
			echo("Usuário: ");
			echo form_input("usuario");
			echo form_error("usuario");
			echo("<br><br>");
			echo("Senha: ");
			echo form_password("senha");
			echo form_error("senha");
			echo form_fieldset_close();
			echo form_submit("submit","ACESSAR","style=\"margin-top: 20px;\"");
			echo("<a href=\"CtrlHome\" style=\"text-decoration: none;\"><input name=\"voltar\" value=\"HOME\" style=\"margin-top: 20px;\" type=\"button\"></a>");
			echo form_close();
		?>
	</div>
</div>

</body>
</html>
