<script src="<?php echo base_url(); ?>/assets/js/materialPaginator.js"></script>
<div class="col s12">
    <div class="row section">
        <ul class="collection">
            <li class="collection-item avatar">
                <img src="images/yuna.jpg" alt="" class="circle">
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content">
                    <button class="dropdown-button btn cyan lighten-2" data-activates='dropdown1'>Ações</button>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">Editar</a></li>
                        <li><a href="#!">Remover</a></li>
                    </ul>
                </a>
            </li>
            <li class="collection-item avatar">
                <i class="mdi-file-folder circle"></i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content">
                    <button class="dropdown-button btn cyan lighten-2" data-activates='dropdown2'>Ações</button>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown2' class='dropdown-content'>
                        <li><a href="#!">Editar</a></li>
                        <li><a href="#!">Remover</a></li>
                    </ul>
                </a>
            </li>
            <li class="collection-item avatar">
                <i class="mdi-action-assessment circle green"></i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content">
                    <button class="dropdown-button btn cyan lighten-2" data-activates='dropdown3'>Ações</button>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown3' class='dropdown-content'>
                        <li><a href="#!">Editar</a></li>
                        <li><a href="#!">Remover</a></li>
                    </ul>
                </a>
            </li>
            <li class="collection-item avatar">
                <i class="mdi-av-play-arrow circle red"></i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content">
                    <button class="dropdown-button btn waves-effect waves-light cyan lighten-2" data-activates='dropdown4'>Ações</button>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown4' class='dropdown-content'>
                        <li><a href="#!">Editar</a></li>
                        <li><a href="#!">Remover</a></li>
                    </ul>
                </a>
            </li>
            <li class="collection-item avatar">
                <i class="mdi-av-play-arrow circle red"></i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content">
                    <button class="dropdown-button btn waves-effect waves-light cyan lighten-2" data-activates='dropdown4'>Ações</button>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown4' class='dropdown-content'>
                        <li><a href="#!">Editar</a></li>
                        <li><a href="#!">Remover</a></li>
                    </ul>
                </a>
            </li>
            <li class="collection-item avatar">
                <i class="mdi-av-play-arrow circle red"></i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content">
                    <button class="dropdown-button btn waves-effect waves-light cyan lighten-2" data-activates='dropdown4'>Ações</button>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown4' class='dropdown-content'>
                        <li><a href="#!">Editar</a></li>
                        <li><a href="#!">Remover</a></li>
                    </ul>
                </a>
            </li>
        </ul>
        
    </div> 
    <script>
        $(document).ready(function(){
           $('.collection').paginator(); 
        });
    </script>
</div>