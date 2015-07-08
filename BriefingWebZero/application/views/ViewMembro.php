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

<div class="conteudo-geral">

<div>
	<?php
	if($this->session->flashdata("msg")){
		echo("<center><h1>".$this->session->flashdata("msg")."</h1></center><br><br>");
	}
	?>
</div>

<div id="container">
	<h1>Bem vindo ao painel de controle</h1>
	
	<ul class="menu linha">
		<li><a href="#">MEMBROS</a></li>
		<li><a href="#">BANNERS</a></li>
		<li><a href="#">EMAILS</a></li>
		<li><a href="#">TEXTOS</a>
			<ul>
				<li><a href="#">Texto 1</a></li>
                   <li><a href="#">Texto 2</a></li>
                   <li><a href="#">Texto 3</a></li>
				<li><a href="#">Texto Newsletter</a></li>
            </ul>
		</li>
    </ul>
</div>

<div>
	<br><br>
	<div id="container">
	<h1>FORMULÁRIO DOS MEMBROS</h1>
		<?php
			echo form_open("CtrlAdmMembro/create-membro");
			echo form_fieldset("WebZero - Novo Membro");
			echo("Nome: ");
			echo form_input("nome");
			echo("<br><br>");
			echo("Endereço da foto: ");
			echo form_input("foto");
			echo form_fieldset_close();
			echo("<br><br>");
			echo form_submit("submit","ACESSAR");
			echo form_close();
		?>
	</div>
</div>

<div>
	<br><br>
	<div id="container">
	<h1>MEMBROS CADASTRADOS</h1>
		<?php
			$cont = 1;
			foreach($membros as $m){
				echo "<code>".$cont."- ".$m->nome."</code>".
				anchor("CtrlMembro/delete_membro/$m->id", "<input name=\"btnDeletar".$cont."\" value=\"Deletar\" type=\"button\">").
				"<br>".
				anchor("CtrlMembro/update_membro/$m->id", "<input name=\"btnAlterar".$cont."\" value=\"Alterar\" type=\"button\">");
				$cont++;
			}
		?>
	</div>
</div>

</div>
</div>

</body>
</html>
