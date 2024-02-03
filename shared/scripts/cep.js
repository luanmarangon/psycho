$(document).ready(function () {
    $('#cep').on('input', function () {
        var cep = $(this).val().replace(/\D/g, '');
        console.log(cep.length);
        if (cep.length === 8) {
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function (data) {
                if (!('erro' in data)) {
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    // $('#cidade').val(data.localidade);
                    // $('#uf').val(data.uf);
                    $('#cidade').val(data.localidade);
                    $('#uf').val(data.uf);
                } else {
                    alert('CEP não encontrado, informe o CEP novamente ou preencha manualmente o endereço.');
                }
            });

            // } else if (cep.length > 0 && cep.length < 8) {
            //     alert("CEP inválido, informe um CEP válido.");
        } else {
            // Limpa os campos
            $('#logradouro').val('');
            $('#bairro').val('');
            $('#cidade').val('');
            $('#uf').val('');
        }
        // else {
        //     alert("CEP inválido, informe um CEP com 8 dígitos.");
        // }
    });
});