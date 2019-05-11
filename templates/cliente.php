<?php
include('verifica_login.php');
?>

<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>CADASTRO DE CLIENTE</title>
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
                            <legend id="laluno">INFORMAÇÕES DO CLIENTE</legend>                                  
                            <p><label for="nome">Nome</label><br/>  <input type="text" id="nome" name="nome" size="30" maxlength="35" placeholder=" Nome completo (Obrigatório)"></p><br/>
                            <p><label for="endereco">Endereço</label><br/>  <input type="text" id="cpf" name="CPF" size="30" maxlength="11" placeholder=" Endereço"></p><br/>
                            <p><label for="email">E-mail</label><br/>  <input type="email" id="email" name="email" size="30" placeholder=" E-mail"></p><br/>                                                                                                     
                            <p><label for="telefone">Telefone</label><br/>  <input type="tel" id="telefone" name="telefone" size="30" placeholder=" Telefone"></p><br/>
                            <p><label for="aniversario">Data de Aniversário</label><br/> <input type="text" id="login" name="nome" size="30" maxlength="7" placeholder=" Data de Aniversário"></p><br/>                                                      
                        </div><br/>                                 
                    </fieldset> 
                </form>
            </div>                                       
        </select>
    </body>
</html>
