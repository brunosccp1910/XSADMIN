$(document).ready(function () {
    $('.modal-trigger').leanModal();
    $('#btn-salvar-perfil, #btn-cancelar-perfil').hide();
    $('.datepicker').pickadate({
        format: 'd/m/yyyy',
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 99 // Creates a dropdown of 15 years to control year
    });

    $('#phone').inputmask('(99) 9999[9]-9999');

    $('#btn-editar-perfil').on('click', function () {
        $(this).hide();
        $('#btn-salvar-perfil, #btn-cancelar-perfil').show();
        $('input:disabled').prop('disabled', false);
    });

    $('#btn-cancelar-perfil, #btn-salvar-perfil').on('click', function () {
        $('#btn-cancelar-perfil').hide();
        $('#btn-salvar-perfil').hide();
        $('#btn-editar-perfil').show();
        $('.section').find('input').prop('disabled', true);
    });

    $('#btn-salvar-perfil').on('click', function () {
        var dataPost = {name: $('#name').val(), email: $('#email').val(), birthdate: $('#birthdate').val(),
            phone: $('#phone').val()};
        $.post(site_url()+'usuario/editarperfil', dataPost);
    });

});

