<?php
/** Conexão com o banco de dados MY SQL */
define('HOST', 'lillyshoes.mysql.dbaas.com.br');
define('USUARIO', 'lillyshoes');
define('SENHA', 'lillyshoes123');
define('DB', 'lillyshoes');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die("Não foi possível conectar ao banco de dados");
?>