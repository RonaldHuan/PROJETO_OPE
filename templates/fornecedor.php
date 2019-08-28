<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO DE FORNECEDOR</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
        <link rel="stylesheet" href="../static/css/flexslider.css">
        <link rel="stylesheet" href="../static/css/jquery.fancybox.css">
        <link rel="stylesheet" href="../static/css/main.css">
        <link rel="stylesheet" href="../static/css/responsive.css">
        <link rel="stylesheet" href="../static/css/animate.min.css">
        <link rel="stylesheet" href="../static/css/font-icon.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../static/css/bootstrap.min.css">
        <link rel="stylesheet" href="../static/css/estilo.css">
</head>
<body>
        <section class="banner" role="banner">
            <header id="header">
                <div class="header-content clearfix"> <a class="logo" href="#"><img src="{% static "images/logo.png" %}" alt=""></a>
                    <nav class="navigation" role="navigation">
                        <ul class="primary-nav">
                            <li><a href="index.php"><span class="glyphicon glyphicon-home"> Home</a></span></li>           
                        </ul>
                    </nav>
                    <a href="#" class="nav-toggle">Menu<span></span></a>
                </div>
            </header>
            <div class="container">
                <div class="col-md-10 col-md-offset-1"></div>
                <div class="banner-text text-center"></div>
            </div>
                <form id="aluno" onsubmit="javascrit: return validacao(cpf)">
                    <fieldset class="grupo">
                        <div class="campo">
                            <legend id="laluno">CADASTRO DE FORNECEDOR</legend>                                  
                            <p><label for="nome">Nome</label><br/>  <input type="text" id="nome" name="nome" size="30" maxlength="35" placeholder=" Nome completo (Obrigatório)"></p><br/>
                            <p><label for="endereco">Endereço</label><br/>  <input type="text" id="cpf" name="CPF" size="30" maxlength="11" placeholder=" Endereço"></p><br/>
                            <p><label for="email">E-mail</label><br/>  <input type="email" id="email" name="email" size="30" placeholder=" E-mail"></p><br/>                                                                                                     
                            <p><label for="telefone">Telefone</label><br/>  <input type="tel" id="telefone" name="telefone" size="30" placeholder=" Telefone"></p><br/>                                                      
                        </div><br/>                                 
                    </fieldset> 
                </form>
        </section>
</body>
</html>