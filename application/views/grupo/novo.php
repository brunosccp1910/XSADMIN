
<form class="col s8 offset-s2" method="post"  action="<?php echo site_url('grupo/cadastrar'); ?>">
    <div class="row">
        <br>
        <div class="input-field col s12">
            <input id="name" name="name" type="text" placeholder="Nome do Grupo" class="validate">
            <label for="user">Nome</label>
        </div>
        <div class="input-field col s12">
            <input id="acronym" name="acronym" type="text" placeholder="Sigla do Grupo" class="validate">
            <label for="acronym">Sigla</label>
        </div>
        <div class="input-field col s6">
            <input id="acronym" name="email" type="email" placeholder="Email do Grupo" class="validate">
            <label for="acronym">Email</label>
        </div>
        <div class="input-field col s6 right">
            <input id="phone" name="phone" type="tel" placeholder="99 99999-9999" class="validate">
            <label for="phone">Telefone</label>
        </div>
        <div class="input-field col s12">
            <input id="address" name="address" type="text" placeholder="Endereço do Grupo" class="validate">
            <label for="address">Endereço</label>
        </div>
        <div class="input-field col s12">
            <textarea id="description" class="materialize-textarea"></textarea>
            <label for="description">Descrição</label>
        </div>
    </div>
    <button class="btn waves-effect waves-light green" type="submit" name="cadastrar">Criar
        <i class="mdi-content-add right"></i>
    </button>
</form>
