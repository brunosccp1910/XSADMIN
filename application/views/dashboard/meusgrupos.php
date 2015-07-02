<script src="<?php echo base_url('assets/js/meusgrupos.js'); ?>"></script>
<div class="col s12">
    <div class="row section">
        <?php if ($grupos == NULL) { ?>
            <h3>Você ainda não possui nenhum grupo</h3>
            <div class="col s12 m5 marged-10">
                <a class="waves-effect waves-light btn btn-large" href="<?php echo site_url('/dashboard/grupos'); ?>">
                    Buscar Grupo
                    <i class="material-icons right">search</i>
                </a>
            </div>

            <div class="col s12 m5 marged-10">
                <a class="waves-effect waves-light btn btn-large green" href="<?php echo site_url('/grupo/novo'); ?>">
                    Criar Grupo
                    <i class="material-icons right">add</i>
                </a>
            </div>
        <?php
        } else { ?>
        <div class="row col m12">
            <a class="waves-effect waves-light btn  btn-large green right marged-10"
               href="<?php echo site_url('/grupo/novo'); ?>">
                <i class="material-icons">add</i>
            </a>

            <a class="waves-effect waves-light btn btn-large right marged-10"
               href="<?php echo site_url('/dashboard/grupos'); ?>">
                <i class="material-icons">search</i>
            </a>
        </div>
        <div class="row col s12 m12">
            <ul class="collapsible" data-collapsible="accordion">
                <?php foreach ($grupos as $userGroup) {
                    $grupo = $userGroup->getGroup();
                    ?>
                    <li data-id="<?php echo $grupo->getId(); ?>">
                        <div class="collapsible-header">
                            <i class="material-icons">launch</i>
                            <?php echo $grupo->getName();
                            if ($userGroup->getOwner()) { ?>
                                <a href="<?php echo site_url('/grupo/editar') . '/' . $grupo->getId(); ?>"
                                   class="right">
                                    <i class="material-icons tiny">settings</i>
                                </a>
                            <?php };
                            ?>
                        </div>
                        <div class="collapsible-body">
                            <div class="col l12 m12 s12">
                                <h6>Descrição </h6>

                                <p><?php echo $grupo->getDescription(); ?></p>
                            </div>

                            <a class="btn marged-10 modal-trigger membros" href="#modalMembros">Membros</a>
                            <?php
                            if (!$userGroup->getOwner()) { ?>
                                <button class="btn marged-10"> Sair do grupo</button>
                            <?php };
                            ?>

                        </div>
                    </li>
                <?php }
                }
                ?>
            </ul>
        </div>

    </div>
</div>

<div id="modalMembros" class="modal">
    <div class="modal-content">
        <h4>Membros do Grupo</h4>
        <div class="row">
            <ul class="collection">

            </ul>
        </div>
    </div>
    <div class="modal-footer">
        <a id="btn-fechar" class="modal-action modal-close waves-effect waves-red btn-flat " href="#!">Fechar</a>
    </div>
</div>

<div id="modalRemove" class="modal">
    <div class="modal-content">
        <h4>Deseja remover este usuário do grupo?</h4>
    </div>
    <div class="modal-footer">
        <a id="btn-remove" class="modal-action waves-effect waves-red btn-flat marged-10" href="#!">Sim</a>
        <a class="modal-action modal-close waves-effect btn-flat  marged-10" href="#!">Não</a>

    </div>
</div>
