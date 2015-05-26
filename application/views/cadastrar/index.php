<form class="col s8 offset-s2" method="post"  action="<?php echo site_url('cadastro/cadastrar'); ?>">
    <h3 class="header offset-s3">Cadastro</h3>
    <div class="row">
        <div class="input-field col s12">
            <input id="name" name="name" type="text" placeholder="Nome Completo" class="validate">
            <label for="user">Nome</label>
        </div>
        <div class="input-field col s12">
            <input id="email" name="email" type="text" placeholder="email@email.com" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate" placeholder="Mínimo 6 caracteres">
            <label for="password">Senha</label>
        </div>
        <div class="input-field col s12">
            <input id="password-confirm" name="password-confirm" type="password" class="validate" placeholder="Mínimo 6 caracteres">
            <label for="password-confirm">Confirmação de senha</label>
        </div>
        <div class="input-field col s4">
            <label class="active" for="birthdate">Data de Nascimento</label>
            <input id="birthdate" name="birthdate" class="datepicker " type="text">
        </div>
        <div class="input-field col s4 right">
            <input id="phone" name="phone" type="text" placeholder="99 99999-9999" class="validate">
            <label for="phone">Telefone</label>
        </div>
    </div>

    <button class="btn waves-effect waves-light" type="submit" name="cadastrar">Cadastrar
        <i class="mdi-content-add right"></i>
    </button>
</form>

<script>
    $(document).ready(function () {

        $('.datepicker').pickadate({
            format: 'd/m/yyyy',
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 99 // Creates a dropdown of 15 years to control year
        });

    });
</script>