<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Page Not Found</title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/materialize/css/materialize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/xsadmin.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.css">

        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.4.js"></script>
        <script src="<?php echo base_url(); ?>/assets/materialize/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/xsadmin.js"></script>
    </head>
    <body>
        <header>
            <nav class="blue-grey top-nav" role="navigation">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="<?php echo site_url(); ?>" class="brand-logo">XSADMIN</a>
                    </div>
                    
                </div>
            </nav>
            
            
        </header>

        <div class="container">

            <div class="row section" style="min-height: 325px;">
                <div class="col s8 m5">
                    <h1 class="header-404">404 <i class="fa fa-frown-o large"></i></h1>
                    <p class="message-404">A página solicitada não foi localizada.</p>
                    
                </div>
                <div class="col s12 m7 l7 card-panel blue-grey lighten-5">
                    <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/logo-petcomp.png">
                </div>
            </div>

        </div>

        <footer class="page-footer blue-grey">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">PETComp UFMA</h5>
                        <p class="grey-text text-lighten-4">Texto sobre o PETComp</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Página</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Sobre</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2015 PETComp/UFMA
                    <a class="grey-text text-lighten-4 right" href="https://github.com/lazarohcm/" target="_blank"> <strong>< /></strong> with <i class="mdi-action-favorite"></i>  by Lázaro Marques</a>
                </div>
            </div>
        </footer>
    </body>
</html>
