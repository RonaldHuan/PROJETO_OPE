<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Login</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
        <link href="../static/css/bootstrap.css" rel="stylesheet">
        <link href="../static/css/estilo2.css" rel="stylesheet">
        <link rel="stylesheet" href="../static/css/estilo.css">
    </head>
    <body>
        <form class="form-signin" name="formlogin" method="POST" action="autenticacao.php">
            <div class="text-center mb-4" id="teste">
                <img class="mb-4" src="../static/images/logo.png" alt="" width="180" height="180">
                <!--<h3 id="label">LillyShoes</h3>-->
            </div>
            <div class="form-label-group">
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Usuário">
                <label for="inputEmail">Usuário</label>
            </div>

            <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Senha">
                <label for="inputPassword">Senha</label>
            </div>
            <?php
				if(isset($_SESSION['nao_autenticado'])):
			?>
			<!-- Usuário/Senha informado inválidamente -->
				<div id="senhaerrada">
					<p id="msgerrada">Usuário ou senha inválido</p>
				</div>	
			<?php
				unset($_SESSION['nao_autenticado']);
				endif;
			?>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>-
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2019 LillyShoes</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Facebook</a></li>
                    <li class="list-inline-item"><a href="#">Twitter</a></li>
                    <li class="list-inline-item"><a href="#">Instagram</a></li>
                </ul>
            </footer>
        </form>
    </body>
</html>
