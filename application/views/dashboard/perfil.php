<script src="<?php echo base_url('assets/js/perfil.js'); ?>"></script>
<script src="<?php echo base_url('assets/inputmask/inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/inputmask/jquery.inputmask.js'); ?>"></script>

<div class="col s12 m9 l10">
    <div class="section perfil">
        <div class="col s4">
            <img src="<?php echo gravatar($user->getEmail(), '60'); ?>" alt="" class="circle responsive-img">
            <p id="text-gravatar">
                <small>
                    Gravatar. 
                </small> 
            </p>
        </div>
        <div class="input-field col s8 m8">
            <input disabled value="<?php echo $user->getName(); ?>" id="name" type="text" class="validate">
            <label for="name">Nome</label>
        </div>
        <div class="input-field col s8 m8">
            <input disabled value="<?php echo $user->getEmail(); ?>" id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s8  l4 m4 right">
            <label class="active" for="birthdate">Nascimento</label>
            <input disabled id="birthdate" name="birthdate" class="datepicker " type="text" value="<?php echo $user->getBirthdate()->format('d/m/Y'); ?>">
        </div>
        <div class="input-field col s8 l4 m4 right">
            <input disabled value="<?php echo $user->getPhone(); ?>" id="phone" name="phone" type="tel" placeholder="99 99999-9999" class="validate">
            <label for="phone">Telefone</label>
        </div>
        <a id="btn-alterar-senha" class="waves-effect waves-teal btn-flat modal-trigger" href="#modal-alterar-senha">Alterar Senha</a>
    </div>
    <div class="col m12 s12 l12">
        <a id="btn-editar-perfil" class="waves-effect waves-light btn cyan lighten-2 right">Editar</a>
        <a id="btn-salvar-perfil" class="waves-effect waves-light btn btn-save right">Salvar</a>
        <a id="btn-cancelar-perfil" class="waves-effect waves-light btn white right">Cancelar</a>
    </div>
</div>

<div id="modal-alterar-senha" class="modal">
    <div class="modal-content">
        <h4>Alterar Senha</h4>
        <div class="row">
            <div class="input-field col s12">
                <i class="mdi-action-lock prefix"></i>
                <input id="old-password" name="old-password" type="password" class="validate">
                <label for="old-password">Senha Antiga</label>
            </div>
            <div class="input-field col s12">
                <i class="mdi-action-lock prefix"></i>
                <input id="old-password" name="old-password" type="password" class="validate">
                <label for="old-password">Senha Antiga</label>
            </div>
            <div class="input-field col s12">
                <i class="mdi-action-lock prefix"></i>
                <input id="old-password" name="old-password" type="password" class="validate">
                <label for="old-password">Senha Antiga</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a id="btn-cancelar-senha" class="modal-action modal-close waves-effect waves-red btn-flat " href="#!">Cancelar</a>
        <a id="btn-salvar-senha" class="modal-action modal-close waves-effect waves-green btn btn-save " href="#!">Salvar</a>
    </div>
</div>
