<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lylli Shoes</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../static/css/base.css">
        <link rel="stylesheet" href="../static/css/vendor.css">
        <link rel="stylesheet" href="../static/css/main 3.css">
        <script src="../static/js/modernizr.js"></script>
        <script src="../static/js/pace.min.js"></script>
        <link rel="shortcut icon" href="B.ico" type="../static/image/x-icon">
        <link rel="icon" href="B.ico" type="../static/image/x-icon">
    </head>
    <body id="top">
        <header class="s-header">
            <nav class="header-nav">
                <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
                <div class="header-nav__content">
                    <h3>Menu de opções</h3>
                    <ul class="header-nav__list">
                        <li><a href="dashboard.php">Relatórios</a></li>
                        <li><a href="cliente.php" title="services">Cadastrar Cliente</a></li>
                        <li><a href="produto.php" title="works">Cadastrar Produto</a></li>
                        <li><a href="fornecedor.php" title="contact">Cadastrar Fornecedor</a></li>
                        <li><a href="logaut.php" title="contact">Sair</a></li> 
                    </ul>
                </div> 
            </nav>
            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-icon"></span>
            </a>
        </header> 
        <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="../static/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>
            <div class="shadow-overlay"></div>
            <div class="home-content">
                <div class="row home-content__main">
                    <h1>Lylli Shoes</h1>
                </div> 
            </div>
        </section>
        <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                        "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                        "Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                    "Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="preloader">
            <div id="loader">            
            </div>
        </div>
        <script src="../static/js/jquery-3.2.1.min.js"></script>
        <script src="../static/js/plugins.js"></script>
        <script src="../static/js/main 3.js"></script>
    </body>
</html> 