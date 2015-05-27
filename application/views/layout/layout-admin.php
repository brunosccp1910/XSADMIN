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
        <script src="<?php echo base_url(); ?>/assets/js/xsauth.js"></script>
    </head>
    <body>
        <header class="admin-header">
            <nav class="blue-grey top-nav" role="navigation">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-title"><?php echo $title; ?></a>
                        <ul class="right hide-on-med-and-down">
                            <!-- Dropdown Trigger -->
                            <li>
                                <a class="dropdown-button" href="#!" data-activates="dropdown1">
                                    Bem vindo!
                                    <i class="mdi-navigation-arrow-drop-down right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">Perfil</a></li>
                <li><a href="<?php echo site_url('/acesso/logout'); ?>">Sair</a></li>
            </ul>

            <div class="container">
                <a class="button-collapse top-nav full" data-activates="nav-mobile" href="#">
                    <i class="mdi-navigation-menu"></i>
                </a>
            </div>
            <ul id="nav-mobile" class="side-nav fixed">
                <li class="logo">
                    <a id="logo-container" class="brand-logo" href="<?php echo site_url('/dashboard') ?>">
                        XSAUTH
                    </a>
                </li>
                <li class="bold">
                    <a class="waves-effect waves-light" href="#">Perfil</a>
                </li>
                <li class="bold">
                    <a class="waves-effect waves-light collapsible-header" href="#">Grupo</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="badges.html">Badges</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>


        </header>
        <main>
            <div class="container">

                <div class="row section">
                    <?php echo $contents; ?>
                </div>

            </div>   
        </main>


        <footer class="page-footer blue-grey admin-footer">
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
    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
    </script>
</html>
