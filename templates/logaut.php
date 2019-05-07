<?php
/**Inicia e destroi sessão para logaut*/
session_start();
session_destroy();
header("Location: login.php");
?>