<?php
include 'header.php'; ?>

<div id="banner_page">
	<h1 class="text-center color-white">Contato</h1>
</div>

<section id="content-interno" class="row align-center pt-5 pb-5">
	<div class="col-sm-5">
		<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe>	
	</div>

	<div class="col-sm-5">
		<h2 class="text-center color mb-3">Entrar em <span class="color-primary">contato</span></h2>

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
</section>

<?php include 'footer.php'; ?>