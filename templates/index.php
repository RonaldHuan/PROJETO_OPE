<?php
include('verifica_login.php');
?>

<!--Alterar página index-->
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LILLYSHOES</title>

  <link rel="stylesheet" href="../static/css/bootstrap.min.css">
  <link rel="stylesheet" href="../static/css/flexslider.css">
  <link rel="stylesheet" href="../static/css/jquery.fancybox.css">
  <link rel="stylesheet" href="../static/css/main.css">
  <link rel="stylesheet" href="../static/css/responsive.css">
  <link rel="stylesheet" href="../static/css/animate.min.css">
  <link rel="stylesheet" href="../static/css/font-icon.css">
  <link rel="stylesheet" href="../static/css/estilo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<!-- header section -->
<section class="banner" role="banner"> 
  <!--header navigation -->
  <header id="header">
    <div class="header-content clearfix"> 
      <img src="../static/images/logo.png" alt="logo">
      <nav class="navigation" role="navigation">
        <ul id="olista" class="primary-nav">
          <li><a href="#intro">Intro</a></li>
          <li><a href="#services">Cursos</a></li>
          <li><a href="#works">Prêmios</a></li>
          <li><a href="#contact">Contatos</a></li>    
        
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                      <div style='background-color: black; opacity: 0.8;' class="dropdown-menu">
                        <a class="dropdown-item" ><a style="color:white;"href ="produto.php" ><br/>Produto<br/></a>
                        <a class="dropdown-item" ><a style="color:White;"href="fornecedor.php"><br/>Fornecedor<br/></a>
                        <a class="dropdown-item" ><a style="color:White; "href="cliente.php"><br/>Cliente<br/></a></a>
                        <a class="dropdown-item" ><a style="color:White; "href="logaut.php"><br/>Sair<br/></a></a>              
                      </div>                   
                  </ul>          
            </nav>
          </div>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!--header navigation --> 
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1 id="fonte">IMPACTA</h1>
        <p id="stitulo">FACULDADE DE TECNOLOGIA DE SÃO PAULO</p>
        <nav role="navigation"> <a href="#services" class="banner-btn"><img src="../static/images/down-arrow.png alt="></a></nav>
      </div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- about section -->
<section id="intro" class="section intro no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-6">
              <div class="avatar"> <img src="../static/images/intro-img1.jpg" alt="" class="img-responsive"> </div>
            </div>
            <div class="col-md-6">
              <blockquote>
                <h1>Faculdade Impacta</h1>
                <p>CONHEÇA NOSSOS CURSOS
                  Fundada em 2003, a Faculdade Impacta é considerada uma das melhores instituições
                  de tecnologia da América Latina devido ao seu intenso compromisso com a educação ao longo
                  dos anos e à transformação da sociedade através da tecnologia.
                  Referência nas áreas de TI, Gestão e Design, a Impacta conta com cursos de Graduação, 
                  Pós-Graduação, Extensão, MBA e cursos técnicos que preparam seus alunos para os desafios
                  do mercado de trabalho, além de um time de mestres e doutores com larga experiência
                  profissional. </p>
                <p> </p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-6">
              <div class="avatar"> <img src="../static/images/intro-img2.jpg" alt="" class="img-responsive"> </div>
            </div>
            <div class="col-md-6">
              <blockquote>
                <h1>Criamos Experiência Digital </h1>
                <p>O alto nível de empregabilidade é uma das principais características da Faculdade Impacta, que é reconhecida pelas maiores empresas do País, em que seus alunos garantem posições de destaque no mercado de trabalho após o término do curso.

                  A Instituição ainda conta com infraestrutura moderna, avaliação positiva do MEC, cursos estrelados no Guia do Estudante e parcerias estratégicas com grandes empresas para oferecer a melhor formação para os alunos. </p>
                <p></p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- about section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services"> <span class="icon icon-strategy"></span>
        <div class="services-content">
          <h5>Administração</h5>
          <p>Gerir equipes, negociar com fornecedores, solucionar diferentes problemas, atingir resultados positivos, 
            aumentar a produtividade e aplicar novas tecnologias nas organizações também são funções do administrador.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>Análise e Desenvolvimento de Sistemas</h5>
          <p>O curso é voltado para a criação de programas, softwares e sistemas para as empresas. As etapas do projeto 
            de sistemas de software, como análise, projeto, teste, gestão, implantação e manutenção de sistemas de informação 
            também estão entre os aprendizados da graduação.
          </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services"> <span class="icon icon-tools"></span>
        <div class="services-content">
          <h5>Produção Multimídia</h5>
          <p>O curso oferece uma formação abrangente baseada na fundamentação teórica e prática para efetiva aplicação do 
            conhecimento no campo do Design Digital, Multimídia, Artes Criativas e Comunicação. Para complementar a prática, o tecnólogo 
            em Produção Multimídia terá à disposição laboratórios, atelier de experimentação, estúdio de fotografia e vídeo.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services"> <span class="icon icon-genius"></span>
        <div class="services-content">
          <h5>Banco de Dados</h5>
          <p>O curso de Banco de Dados prepara o aluno para ser um profissional versátil e com habilidades para atuar com diversas plataformas 
            e estruturas de desenvolvimento e administração de sistemas de Banco de Dados, com acesso a todo o repertório técnico e teórico da área.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services"> <span class="icon icon-megaphone"></span>
        <div class="services-content">
          <h5>Processos Gerenciais</h5>
          <p>A graduação prepara você para conduzir o negócio de pequenas e médias empresas, liderar equipes, avaliar a 
            concorrência e criar diferenciais competitivos dentro de uma organização. Além disso, você também irá aprender a 
            lidar com questões comportamentais, solucionando problemas de comunicação e relacionamento.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services"> <span class="icon icon-trophy"></span>
        <div class="services-content">
          <h5>Jogos Digitais</h5>
          <p>A graduação de Jogos Digitais aborda as ferramentas práticas e teóricas para o aluno projetar, implementar e testar jogos. 
            Com a criação de personagens, ambientes, objetos, interfaces e regras, é possível aprender sobre tudo o que é necessário para 
            criar um jogo. Além disso, o profissional também pode aplicar técnicas de programação, áudio e elementos em 2D e 3D.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section --> 
<!-- work section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-1.png" class="work-box"> <img src="../static/images/work-1.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-2.png" class="work-box"> <img src="../static/images/work-2.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-3.png" class="work-box"> <img src="../static/images/work-3.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-4.png" class="work-box"> <img src="../static/images/work-4.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
<!-- our team section --> 
<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>Graduação em Administração </h1>
                <p>Nota 4 na avaliação do MEC – 10.ª maior nota entre as faculdades privadas da cidade de São Paulo.
                  3 estrelas na avaliação realizada pelo Guia do Estudante, da Editora Abril, que seleciona os melhores 
                  cursos para os estudantes que estão se preparando para o vestibular.</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>Graduação em Análise e Desenvolvimento de Sistemas</h1>
                <p>Nota 4 na avaliação do ENADE/MEC - 1.º melhor curso da cidade de São Paulo.</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>Graduação em Redes de Computadores </h1>
                <p>Nota 3 na avaliação do ENADE/MEC - 4.º melhor curso da cidade de São Paulo.</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>Graduação em Sistemas da Informação</h1>
                <p>Nota 4 na avaliação do ENADE/MEC - 3.º melhor curso da cidade de São Paulo.</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section --> 
<!-- Get a quote section -->
<section id="contact" class="section quote">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Procurando uma Faculdade ? Seja IMPACTA </h3>
      <a href="https://www.impacta.edu.br/" class="btn btn-large">Obtenha Informação</a> </div>
  </div>
</section>
<!-- Get a quote section --> 
<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>Localização</h5>
          <p>Unidade - Barra Funda
            Avenida Rudge, 315 - Barra Funda
            São Paulo / SP<br>
            Comercial:
            Tel: 11 3254-8300
            Secretaria
            Tel: 11 5593-5344</p>
          <p>Todos os direitos reservados.
        </div>
        <div class="footer-col col-md-3">
          <h5>Services</h5>
          <p>
          <ul>
            <li><a href="https://www.impacta.edu.br/graduacao">Graduação</a></li>
            <li><a href="https://www.impacta.edu.br/pos-e-mba">MBA</a></li>
            <li><a href="https://www.impacta.edu.br/tecnicos">TECNICO</a></li>
            <li><a href="https://www.impacta.edu.br/blog/">BLOG</a></li>
            <li><a href="https://www.impacta.edu.br/contato">CONTATO</a></li>
          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Siga REDES SOCIAIS</h5>
          <ul class="footer-share">
            <li><a href="https://www.facebook.com/FacImpacta/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/facimpacta"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://pt.linkedin.com/company/impacta-tecnologia"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://plus.google.com/+GrupoImpacta"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="../static/js/bootstrap.min.js"></script> 
<script src="../static/js/jquery.flexslider-min.js"></script> 
<script src="../static/js/jquery.fancybox.pack.js"></script> 
<script src="../static/js/retina.min.js"></script> 
<script src="../static/js/modernizr.js"></script> 
<script src="../static/js/main.js"></script>
</body>
</html>
