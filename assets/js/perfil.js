$(document).ready(function () {
    $('.modal-trigger').leanModal();
    
    $('#btn-editar-perfil').on('click', function(){
        $(this).hide();
        $('#btn-salvar-perfil, #btn-cancelar-perfil').show();
        $('input:disabled').prop('disabled', false);
    });
    
    $('#btn-cancelar-perfil').on('click', function(){
       $(this).hide(); 
       $('#btn-salvar-perfil').hide();
       $('#btn-editar-perfil').show();
       $('.section').find('input').prop('disabled', true);
    });
    
});

