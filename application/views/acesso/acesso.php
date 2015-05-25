<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/materialize/css/materialize.css">
        <!-- JQuery -->
        <script src="<?php echo base_url(); ?>/assets/jquery-2.1.4.js"></script>
        <!-- Materialize Core JavaScript -->
        <script src="<?php echo base_url(); ?>/assets/materialize/js/materialize.js"></script>

    </head>
    <body>
        <header>
            <nav class="blue-grey">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="javascript.html">JavaScript</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                            <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>
