<?php
/**Inicia e destroi à sessão para login e logaut*/
session_start();
session_destroy();
header("Location: login.php");
?>