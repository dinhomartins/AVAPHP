$(document).ready(function() {
    $('#salvar').click(function() {
        // alert('clicou');
        var campo_vazio;

        if ($('#nome').val() == '') {
            $('#nome').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#nome').css({ 'border-color': '#ccc' });
        }
        if ($('#nome').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#dataNascimento').val() == '') {
            $('#dataNascimento').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#dataNascimento').css({ 'border-color': '#ccc' });
        }
        if ($('#dataNascimento').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#cpf').val() == '') {
            $('#cpf').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#cpf').css({ 'border-color': '#ccc' });
        }
        if ($('#cpf').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#rg').val() == '') {
            $('#rg').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#rg').css({ 'border-color': '#ccc' });
        }
        if ($('#rg').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#endereco').val() == '') {
            $('#endereco').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#endereco').css({ 'border-color': '#ccc' });
        }
        if ($('#endereco').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#cep').val() == '') {
            $('#cep').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#cep').css({ 'border-color': '#ccc' });
        }
        if ($('#cep').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#bairro').val() == '') {
            $('#bairro').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#bairro').css({ 'border-color': '#ccc' });
        }
        if ($('#bairro').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#cidade').val() == '') {
            $('#cidade').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#cidade').css({ 'border-color': '#ccc' });
        }
        if ($('#cidade').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if ($('#estado').val() == '') {
            $('#estado').css({ 'border-color': '#a94442' });
            campo_vazio = true;
        } else {
            $('#estado').css({ 'border-color': '#ccc' });
        }
        if ($('#estado').val = '') {
            alert('campo vazio');
            campo_vazio = true;
        }

        if (campo_vazio) return false;
    });
})