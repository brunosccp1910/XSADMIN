<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title != '' ? $title . ' | ' : '' ?> XSAUHT</title>
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
                    <a href="#" class="brand-logo">XSAUTH</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="cadastor.php">Cadastro</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">

            <div class="row section">
                <?php echo $contents; ?>
            </div>
            
        </div>
    </body>
</html>
