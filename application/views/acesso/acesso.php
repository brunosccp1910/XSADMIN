<form class="col s6 offset-s3" method="post" action="<?php echo site_url('/acesso/login'); ?>">
    <h3 class="header offset-s3">Acesso</h3>
    <div class="error"> 
    <?php
        $messages = $this->session->flashdata();
        if(count($messages)){?>
        <span class="red-text text-darken-2"><?php echo $messages['error']; ?></span>
        <?php }
    ?>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="mdi-action-account-circle prefix"></i>
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
            <i class="mdi-action-lock prefix"></i>
            <input id="password" name="password" type="password" class="validate">
            <label for="password">Senha</label>
        </div>
        <a href="#" id="forgot" class="right">Esqueceu sua senha?</a>
    </div>

    <button class="btn waves-effect waves-light" type="submit">Entrar
        <i class="mdi-content-send right"></i>
    </button>
</form>

