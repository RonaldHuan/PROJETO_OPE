<?php
session_start();
include('conexao.php');
if(empty($_POST['username']) || empty($_POST['pass'])){
    header("Location: login.php");
    exit();
}

$username = mysqli_real_escape_string($conexao, $_POST['username']);
$password = mysqli_real_escape_string($conexao, $_POST['pass']);
$query = "select * from login where usuario = '$username' and senha = '$password'";
$result = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
$row = mysqli_num_rows($result);
if($row == 1){
    $_SESSION['username'] = $username;
    header('Location: index.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header("Location: login.php");
    exit();
}

?>