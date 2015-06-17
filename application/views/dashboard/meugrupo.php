<div class="col s12">
    <div class="row section">
        <?php if ($grupos == NULL) { ?>
            <h3>Você ainda não possui nenhum grupo</h3>
            <div class="col s12 m5 marged-10">
                <a class="waves-effect waves-light btn btn-large" href="<?php echo site_url('/dashboard/grupos'); ?>">
                    Buscar Grupo
                    <i class="mdi-action-search right"></i>
                </a>
            </div>

            <div class="col s12 m5 marged-10">
                <a class="waves-effect waves-light btn btn-large green" href="<?php echo site_url('/grupo/criar'); ?>">
                    Criar Grupo
                    <i class="mdi-content-add right"></i>
                </a>
            </div>
            <?php
        } else {
            
        }
        ?>

    </div>
</div>
