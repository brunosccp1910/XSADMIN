<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title != '' ? $title . ' | ' : '' ?> XSAUTH</title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/materialize/css/materialize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/xsauth.css">

        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.4.js"></script>
        <script src="<?php echo base_url(); ?>/assets/materialize/js/materialize.js"></script>

    </head>
    <body>
        <header>
            <nav class="blue-grey" role="navigation">
                <div class="nav-wrapper container">
                    <a href="<?php echo site_url(); ?>" class="brand-logo">XSAUTH</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?php echo site_url('/cadastro'); ?>"><i class="mdi-content-add left"></i>Cadastrar</a></li>
                        <li><a href="<?php echo site_url('/acesso'); ?>"><i class="mdi-action-input left"></i>Entrar</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">

            <div class="row section">
                <?php echo $contents; ?>
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
