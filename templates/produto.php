<?php
include('verifica_login.php');
?>

<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CADASTRO DE PRODUTO</title>
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
        <script>
                function enviar(){
                    var nome = document.getElementById("nome");
                    var cpf = document.getElementById("cpf");
                    var tel = document.getElementById("telefone");
                    var email = document.getElementById("email");
                    var emailV = email.value.length;
                    var telV = tel.value.length;
                    var cpfV = cpf.value.length;
                    var nomeV = nome.value;
                    if(nomeV == ""){
                        alert("Preencha o campo NOME!")
                    }
                    else if(cpfV == ""){
                        alert("Campo CPF é obrigatório!")
                    }
                    else if(cpfV < 11){
                        alert("CPF deve conter no mínimo onze caracteres!")
                    }
                    else if(emailV == ""){
                        alert("Campo E-mail é obrigatório!")
                    }
                    else if(telV < 11){
                        alert("Telefone deve conter no mínimo onze caracteres!")
                    }                
                    else if(telV > 11){
                        alert("Telefone deve conter no máximo onze caracteres!")
                    }                
                }
        </script>
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
                    <div class="col-md-10 col-md-offset-1">
                    <div class="banner-text text-center">
                </div>
                <div>
                    <form id="aluno" onsubmit="javascrit: return enviar()">
                        <fieldset class="grupo">
                            <div class="campo">
                                <legend id="laluno">INFORMAÇÕES DO PROFESSOR</legend>                                  
                                <p><label for="nome">Nome</label><br/>
                                <input type="text" id="nome" name="nome" size="30" maxlength="35" placeholder=" Nome do produto(obrigatório)"></p><br/>
                                <p><label for="cpf">Valor</label><br/> 
                                <input type="text" id="valor" name="VALOR" size="30" maxlength="11" placeholder=" Valor(obrigatório)"></p><br/>                                                      
                            </div><br/>                                 
                        </fieldset> 
                    </form>                                        
        </select>
    </body>
</html>