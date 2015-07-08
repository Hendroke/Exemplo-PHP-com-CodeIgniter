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

<section id="painel" class="section">
	<div class="conteudo-geral">
		<div id="container" class="login" style="transform: translate(-50%, 0%); width: 825px;">
			<h1>ENTRE EM CONTATO</h1>
			<?php
				echo form_open("CtrlContato/send_email");
				echo("Seu nome: ");
				echo form_input("nome","","style=\"box-shadow:0px 0px 1px; height: 25px; font-size: 16px; width: 290px;\"");
				echo("<br><br>");
				echo("Seu e-mail: ");
				echo form_input("email","","style=\"box-shadow:0px 0px 1px; height: 25px; font-size: 16px; width: 290px;\"");
				echo("<br><br>");
				echo("Assunto: ");
				echo form_input("assunto","","style=\"box-shadow:0px 0px 1px; height: 25px; font-size: 16px; width: 290px;\"");
				echo("<br><br>");
				echo("Mensagem: ");
				echo("<br>");
				echo form_textarea("mensagem","","style=\"box-shadow:0px 0px 1px; height: 250px; font-size: 16px; width: 400px; font: 17px/23px normal Helvetica,Arial,sans-serif;\"");
				echo("<br>");
				echo form_submit("submit","ENVIAR");
				echo("<a href=\"CtrlHome\" style=\"text-decoration: none;\"><input name=\"voltar\" value=\"HOME\" style=\"margin-top: 20px;\" type=\"button\"></a>");
				echo form_close();
			?>
		</div>
	</div>
</section>

</body>
</html>