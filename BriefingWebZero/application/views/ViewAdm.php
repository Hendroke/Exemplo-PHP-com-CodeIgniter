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

<div class="sessao">
	<section id="painel" class="section">
		<div class="conteudo-geral">
			<section id="top" class="section">
				<div id="container">
					<h1>Paineis de cadastro</h1>
					<div id="body">
						<p>Para alterar o conteúdo dos texto, os cadastros dos banners, membros e e-mails, acesse o painel de cada um deles abaixo</p>
						<code><center>Isto foi improvisado porque o menu não estava funcionando direito</center></code>
						<?php
							echo form_open("CtrlLogin/sair","style=\"text-align: right; padding: 0px 0px 10px\"");
							echo form_submit("submit","SAIR","style=\"margin-top: 20px;\"");
							echo form_close();
						?>
					</div>
				</div>
			</section>
			<br><br>
			<section id="banner" class="section">
				<div id="container">
					<h1>CADASTRO DE BANNERS</h1>
					<?php
						echo form_open("CtrlBanner/create_banner");
						echo form_fieldset("Preencha os campos abaixo ");
						echo("Url/Endereço: ");
						echo form_input("foto");
						echo("<br><br>");
						echo form_submit("submit","ENVIAR");
						echo form_fieldset_close();
						echo form_close();
					?>
					
					<h1>TABELA DE BANNERS</h1>
					<?php
						$cont = 1;
						foreach($banners as $b){
							echo("
								<div class=\"linha\" style=\"justify-content: unset;\">
									<code style=\"float: left; width: 500px;\">".$cont."- ".$b->banner."</code>"."
									<div style=\"padding-top: 13px; padding-bottom: 13px;\">".
										anchor("CtrlBanner/delete_banner/$b->id", "<input name=\"btnDeletar".$cont."\" value=\"Deletar\" type=\"button\" style=\"float: right;\">")."
										<br>".
										anchor("CtrlBanner/update_banner/$b->id", "<input name=\"btnAlterar".$cont."\" value=\"Alterar\" type=\"button\" style=\"float: right;\">")."
									</div>
								</div>"
							);
							$cont++;
						}
					?>
				</div>
			</section>
			<br><br>
			<section id="membros" class="section">
				<div id="container">
					<h1>CADASTRO DE MEMBROS</h1>
					<?php
						echo form_open("CtrlMembro/create_membro");
						echo form_fieldset("Preencha os campos abaixo ");
						echo("Nome: ");
						echo form_input("nome");
						echo("<br><br>");
						echo("Foto: ");
						echo form_input("foto");
						echo("<br><br>");
						echo form_submit("submit","ENVIAR");
						echo form_fieldset_close();
						echo form_close();
					?>
					
					<h1>TABELA DE MEMBROS</h1>
					<?php
						$cont = 1;
						foreach($membros as $m){
							echo("
								<div class=\"linha\" style=\"justify-content: unset;\">
									<code style=\"float: left; width: 500px;\">".$cont."- ".$m->nome."</code>"."
									<div style=\"padding-top: 13px; padding-bottom: 13px;\">".
										anchor("CtrlMembro/delete_membro/$m->id", "<input name=\"btnDeletar".$cont."\" value=\"Deletar\" type=\"button\" style=\"float: right;\">")."
										<br>".
										anchor("CtrlMembro/update_membro/$m->id", "<input name=\"btnAlterar".$cont."\" value=\"Alterar\" type=\"button\" style=\"float: right;\">")."
									</div>
								</div>"
							);
							$cont++;
						}
					?>
				</div>
			</section>
			<br><br>
			<section id="textos" class="section">
				<div id="container">
					<h1>ATUALIZAÇÃO DE TEXTOS</h1>
					<?php
						echo form_open("CtrlTexto/update_texto");
						echo form_fieldset("Preencha os campos abaixo ");
						echo("ID: ");
						echo form_input("id_texto");
						echo("<br><br>");
						echo("Titulo: ");
						echo form_input("titulo");
						echo("<br><br>");
						echo("Texto: ");
						echo form_input("texto");
						echo("<br><br>");
						echo form_submit("submit","ENVIAR");
						echo form_fieldset_close();
						echo form_close();
					?>
					
					<h1>TABELA DE TEXTOS</h1>
					<?php
						foreach($textos as $t){
							echo("
								<div class=\"linha\" style=\"justify-content: unset;\">
									<code style=\"float: left; width: 500px;\"> ID:".$t->id."  Titulo: ".$t->titulo."</code>"."
									<div style=\"padding-top: 13px; padding-bottom: 13px;\">
									</div>
								</div>"
							);
						}
					?>
				</div>
			</section>
			<br><br>
			<br><br>
			<section id="emails" class="section">
				<div id="container">
					<h1>TABELA DE NEWSLETTER</h1>
					<?php
						$cont = 1;
						foreach($emails as $e){
							echo("
								<div class=\"linha\" style=\"justify-content: unset;\">
									<code style=\"float: left; width: 500px;\">".$e->email."</code>"."
									<div style=\"padding-top: 25px; padding-bottom: 25px;\">".
									anchor("CtrlEmails/delete_emails/$e->id", "<input name=\"btnDeletar".$cont."\" value=\"Deletar\" type=\"button\" style=\"float: right;\">")."
									</div>
								</div>"
							);
							$cont++;
						}
					?>
				</div>
			</section>
			<br><br>
		</div>
	</section>
</div>

</body>
</html>