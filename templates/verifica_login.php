<?php
/**Valida login para acesso*/
session_start();
if(!$_SESSION['username']){
    header("Location: login.php");
    exit();
}
?>