// funções para validação de cep
$(document).ready(function () {

    $(".alert").hide();

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
    }

    $("#cep").blur(function () {
        var cep = $(this).val().replace(/\D/g, '');

        var validacep = /^[0-9]{8}$/;

        if (cep != "") {
            //Valida o formato do CEP.
            if (validacep.test(cep)) {
                //Preenche os campos com "..." enquanto consulta webservice.
                $("#logradouro").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#estado").val("...");
                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                    if (!("erro" in dados)) {
                        $(".alerta-sucesso").fadeIn();
                        temporizadorAlerta()
                        $("#logradouro").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                    } //end if.
                    else {
                        $("#msg-alerta-erro").text("CEP não foi encontrado.");
                        $(".alerta-erro").fadeIn();
                        temporizadorAlerta()
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                $("#msg-alerta-erro").text("Formato de CEP inválido.");
                $(".alerta-erro").fadeIn();
                temporizadorAlerta()
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            $("#msg-alerta-erro").text("CEP sem Valor.");
            $(".alerta-erro").fadeIn();
            temporizadorAlerta()
        }
    });
});