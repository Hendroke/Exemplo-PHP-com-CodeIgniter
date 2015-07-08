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
	<div id="container" class="login" style="transform: translate(-50%, 0%); width: 725px;">
	<h1>FORMULARIO DOS BANNERS</h1>
		<?php
			echo form_open("CtrlBanner/update_banner/".$banner->id);
			echo form_fieldset("Preencha os campos abaixo ");
			echo("Foto: ");
			echo form_input("foto",set_value("foto",$banner->banner),"style=\"width: 90%;\"");
			echo form_fieldset_close();
			echo("<br><br>");
			echo form_submit("submit","CONCLUIR","style=\"margin-top: 20px;\"");
			echo form_close();
		?>
	</div>
</div>

</body>
</html>
