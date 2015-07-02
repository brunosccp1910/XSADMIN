<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title != '' ? $title . ' | ' : '' ?> XSADMIN</title>
        <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url(); ?>/assets/images/favicon16.ico' />
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/materialize/css/materialize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/xsadmin.css">
        <link href="<?php echo base_url(); ?>/assets/material-icons/material-icons.css" rel="stylesheet">

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
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?php echo site_url('/cadastro'); ?>"><i class="material-icons left">add</i>Cadastrar</a></li>
                        <li><a href="<?php echo site_url('/acesso'); ?>"><i class="material-icons left">input</i>Entrar</a></li>
                    </ul>
                    </div>
                    
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
                    <a class="grey-text text-lighten-4 right" href="https://github.com/lazarohcm/" target="_blank">
                        <strong>< />  </strong>
                            with
                        <i class="material-icons tiny">favorite_borders</i>by Lázaro Marques</a>
                </div>
            </div>
        </footer>
    </body>
</html>
