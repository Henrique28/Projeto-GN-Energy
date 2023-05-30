<div class="menu_sidebar mb-5">
	<h3>Serviços</h3>
	<nav>
		<ul>
			<li>
				<a href="<?php echo $url_site; ?>/instalacao_eletrica.php">Instalação Elétrica</a>
			</li>
			<li>
				<a href="<?php echo $url_site; ?>/manutencao_eletrica.php">Manutenção Elétrica</a>
			</li>
			<li>
				<a href="<?php echo $url_site; ?>/protecao_eletrica.php">Proteção Elétrica</a>
			</li>
		</ul>
	</nav>
</div>

<div class="sticky-top">
	<h3>Fale <span class="color-primary">conosco</span></h3>
	<script defer>
		$(function() {
			$('.form_contato').on('submit', function(e) {
				e.preventDefault();
				$.ajax({
					type: 'post',
					url: '<?php echo $url_site; ?>/envio_form/form.php',
					data: $('.form_contato').serialize(),
					beforeSend: function() {
						$("#msgLoader").css({
							display: 'block'
						});
					},
					success: function() {
						location.href = '<?php echo $url_site; ?>/obrigado-pelo-contato/';
						$("#msgLoader").css({
							display: 'none'
						});
						$("#msgSubmit").html("Formulario enviado com sucesso!");
						$("#msgSubmit").css({
							display: 'block'
						});
					},
					error: function() {
						$("#msgError").html("Formulario não enviado! Tente novamente.");
						$("#msgError").css({
							display: 'block'
						});
					}
				});
			});
		});
	</script>
	<form method="post">
		<input type="hidden" name="nome_form" value="Formulario: contato">
		<input type="text" id="nome_formulario" name="nome" placeholder="Nome" required>
		<input type="email" id="email_formulario" name="email" placeholder="E-mail" required></p>
		<input type="tel" id="celular_formulario" name="celular" placeholder="Celular" pattern="[0-9]{11}" required></p>
		<textarea rows="2" id="mensagem_formulario" name="mensagem" placeholder="Mensagem" required></textarea>
		<input id="botao_contato" name="submit" type="submit" value="ENVIAR"></p>
		<div id="msgLoader" style="display:none"><img src='<?php echo $url_site; ?>/img/load_02.gif' width='40' height='40'></div>
		<div id="msgSubmit" class="alert alert-success" role="alert" style="display:none"></div>
		<div id="msgError" class="alert alert-danger text-center" role="alert" style="display:none"></div>
	</form>
</div>