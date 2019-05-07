<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="../static/images/icons/favicon.ico"/>
	<link rel="stylesheet" href="../static/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../static/vendor/animate/animate.css">
	<link rel="stylesheet" href="../static/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" href="../static/vendor/select2/select2.min.css">
	<link rel="stylesheet" href="../static/css/util.css">
	<link rel="stylesheet" href="../static/css/main 2.css">
	<link rel="stylesheet" href="../static/css/estilo.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../static/images/img-01.png" alt="IMG">
				</div>
				<!-- Formulário de login para acesso ao sistema -->
				<form class="login100-form validate-form" name="formlogin" method="POST" action="autenticacao.php">
					<span class="login100-form-title">
						<h2>Bem vindo(a)</h2>
						<p>Informe seu usuário e senha para acessar</p>
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>			
					<?php
						if(isset($_SESSION['nao_autenticado'])):
					?>
					<div id="senhaerrada">
						<p id="msgerrada">Usuário ou senha inválidos</p>
					</div>	
					<?php
						unset($_SESSION['nao_autenticado']);
						endif;
					?>	
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Login"/>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../static/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../static/vendor/bootstrap/js/popper.js"></script>
	<script src="../staticvendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../static/vendor/select2/select2.min.js"></script>
	<script src="../static/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="../staticjs/main 2.js"></script>
</body>
</html>