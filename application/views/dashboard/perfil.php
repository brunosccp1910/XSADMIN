<div class="col s12 m9 l10">
    <div class="section perfil">
        <div class="col s4">
            <img src="<?php echo gravatar($userData['email'], '60'); ?>" alt="" class="circle responsive-img">
            <p id="text-gravatar">
                <small>
                    Gravatar. 
                </small> 
            </p>
        </div>
        <div class="input-field col s8">
            <input disabled value="<?php echo $userData['name'] ?>" id="name" type="text" class="validate">
            <label for="name">Nome</label>
        </div>
        <div class="input-field col s8">
            <input disabled value="<?php echo $userData['email'] ?>" id="name" type="text" class="validate">
            <label for="name">Email</label>
        </div>
        <div class="input-field col s8  l4 m4 right">
            <label class="active" for="birthdate">Nascimento</label>
            <input disabled id="birthdate" name="birthdate" class="datepicker " type="text" value="<?php echo $userData['birthdate']; ?>">
        </div>
        <div class="input-field col s8 l4 m4 right">
            <input disabled value="<?php echo $userData['phone']; ?>" id="phone" name="phone" type="text" placeholder="99 99999-9999" class="validate">
            <label for="phone">Telefone</label>
        </div>
        <a id="btn-editar-perfil" class="waves-effect waves-light btn cyan lighten-2">Editar</a>
    </div>
</div>
