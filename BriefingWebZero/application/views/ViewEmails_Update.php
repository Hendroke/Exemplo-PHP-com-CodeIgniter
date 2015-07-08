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
	<h1>FORMULARIO DOS EMAILS</h1>
		<?php
			echo form_open("CtrlEmails/update_emails/".$email->id,"enctype=\"multipart/form-data\"");
			echo form_fieldset("WebZero - Alterar Email");
			echo("Email: ");
			echo form_input("email",set_value("email",$email->email));
			echo form_fieldset_close();
			echo form_submit("submit","CONCLUIR","style=\"margin-top: 20px;\"");
			echo form_close();
		?>
	</div>
</div>

</body>
</html>
