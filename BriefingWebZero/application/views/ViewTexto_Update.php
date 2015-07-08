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

<div>
	<br><br>
	<div id="container" class="login">
	<h1>FORMULARIO DOS TEXTOS</h1>
		<?php
			echo form_open("CtrlTexto/update_texto/".$texto->id);
			echo form_fieldset("WebZero - Alterar Textos");
			echo("ID: ");
			echo form_hidden("id",set_value("id",$texto->id));
			echo("<br><br>");
			echo("Titulo: ");
			echo form_input("titulo",set_value("titulo",$texto->titulo));
			echo("<br><br>");
			echo("Texto: ");
			echo form_input("Texto",set_value("texto",$texto->texto));
			echo form_fieldset_close();
			echo("<br><br>");
			echo form_submit("submit","CONCLUIR","style=\"margin-top: 20px;\"");
			echo form_close();
		?>
	</div>
</div>

</body>
</html>
