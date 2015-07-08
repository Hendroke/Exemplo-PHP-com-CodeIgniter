<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo($dados["titulo"])?></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/EntrevistaWebZero/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/EntrevistaWebZero/css/responsiveslides.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://localhost/EntrevistaWebZero/js/responsiveslides.min.js"></script>
	<style type="text/css">
	
	</style>
	
	<script>
		$(function() {
			$("#slider1").responsiveSlides({
				auto: true,             // Boolean: Animate automatically, true or false
				speed: 500,            // Integer: Speed of the transition, in milliseconds
				//timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
				pager: false,           // Boolean: Show pager, true or false
				nav: true,             // Boolean: Show navigation, true or false
				//random: false,          // Boolean: Randomize the order of the slides, true or false
				//pause: false,           // Boolean: Pause on hover, true or false
				//pauseControls: true,    // Boolean: Pause when hovering controls, true or false
				//prevText: "Previous",   // String: Text for the "previous" button
				//nextText: "Next",       // String: Text for the "next" button
				maxwidth: "3072",           // Integer: Max-width of the slideshow, in pixels
				//navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
				//manualControls: "",     // Selector: Declare custom pager navigation
				namespace: "centered-btns",   // String: Change the default namespace used
				//before: function(){},   // Function: Before callback
				//after: function(){}     // Function: After callback
			});
		});
</script>

</head>
<body>
<div class="sessao">
<header>
<nav class="navbar-fix">
	<div class="navbar-opcoes">
		<ul class="menu">
			<li><a href="#">HOME</a></li>
			<li><a href="#">MEMBROS</a></li>
			<li><a href="CtrlContato">CONTATO</a></li>
		</ul>
	</div>
	<div class="navbar-titulo">
		<p>
			WebZero - Briefing para projeto teste
		</p>
	</div>
	<div class="navbar-login">
		<ul class="menu">
			<li><a href="CtrlLogin">LOGIN</a></li>
		</ul>
	</div>
</nav>
<div class="sl1">
	<ul id="slider1" class="rslides">
		<?php
			foreach($banners as $b){
				echo("<li><img src=\"".$b->banner."\""."alt=''></li>");
			}
		?>
	</ul>
</div>
</header>

<section id="sobre" class="section">
<div class="conteudo-geral">
	<div class="linha">
		<div class="bloco" style="margin-left: 0px">
			<div class="icone">
				<div class="ic1"></div>
			</div>
			<h3 class="aligncenter">
				<?php
					echo($textos[0]->titulo);
				?>
			</h3>
			<p class="texto">
				<?php
					echo($textos[0]->texto);
				?>
			</p>
		</div>
		<div class="bloco">
			<div class="icone">
				<div class="ic2"></div>
			</div>
			<h3 class="aligncenter">
				<?php
					echo($textos[1]->titulo);
				?>
			</h3>
			<p class="texto">
				<?php
					echo($textos[1]->texto);
				?>
			</p>
		</div>
		<div class="bloco">
			<div class="icone">
				<div class="ic3"></div>
			</div>
			<h3>
				<?php
					echo($textos[2]->titulo);
				?>
			</h3>
			<p class="texto">
				<?php
					echo($textos[2]->texto);
				?>
			</p>
		</div>
	</div>
</section>
</div>
</div>

<div class="sessao">
	<section id="newsletter" class="section">
		<div class="conteudo-geral">
			<div class="linha">
				<div class="bloco1">
					<h3>
						<?php
							echo($textos[3]->titulo);
						?>
					</h3>
					<p class="texto">
						<?php
							echo($textos[3]->texto);
						?>
					</p>
					<div class="email">
						<?php
							echo form_open("CtrlEmails/create_emails");
							echo("Email: ");
							echo form_input("email","","style=\"box-shadow:0px 0px 1px; height: 25px; font-size: 16px; width: 290px;\"");
							echo form_submit("submit","ENVIAR");
							echo form_close();
						?>
					</div>
				</div>
				<div class="bloco2">
					<div class="player"></div>
				</div>
			</div>
		</div>
	</section>
</div>

</body>
</html>
