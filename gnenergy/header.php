<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php include 'string.php'; ?>
	<meta charset="utf-8">
	<meta name="language" content="pt-BR">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $titulo; ?></title>
	<link rel="shortcut icon" href="<?php echo $url_site; ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo $url_site; ?>/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo $url_site; ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url_site; ?>/assets/css/bootstrap.min.css">
	<script src="<?php echo $url_site; ?>/assets/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body id="body_site">
	<?php $mobile = FALSE;

	$user_agents = array("iPhone", "iPad", "Android", "webOS", "BlackBerry", "iPod", "Symbian", "IsGeneric");

	foreach ($user_agents as $user_agent) {

		if (strpos($_SERVER['HTTP_USER_AGENT'], $user_agent) !== FALSE) {
			$mobile = TRUE;

			$modelo = $user_agent;

			break;
		}
	} ?>

	<header id="header-site-menu" class="row align-center ">
		<div class="col-sm-2 col-12">
			<a title="<?php echo $Nome; ?>" href="<?php echo $url_site; ?>"><img src="<?php echo $logo_footer; ?>" width="300" height="63" alt="<?php echo $Nome; ?>"></a>
		</div>
		<div class="col-sm-8 col-12 bg_menu">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-center" id="main_nav">
						<ul class="navbar-nav">
							<li class="nav-item active"> <a class="nav-link" href="<?php echo $url_site; ?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo $url_site; ?>/sobre.php">Sobre nós</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="<?php echo $url_site; ?>" data-bs-toggle="dropdown">Serviços</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?php echo $url_site; ?>/instalacao_eletrica.php">Instalação Elétrica</a></li>
									<li><a class="dropdown-item" href="<?php echo $url_site; ?>/manutencao_eletrica.php">Manutenção Elétrica</a></li>
									<li><a class="dropdown-item" href="<?php echo $url_site; ?>/protecao_eletrica.php">Proteção Elétrica</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?php echo $url_site; ?>/duvidas.php">Dúvidas</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo $url_site; ?>/contato.php">Entre em contato</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>