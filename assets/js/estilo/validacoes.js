var emailExiste = false;
var telExiste = false;
var tel = $("#numeroRegistro");
var email = $("#emailRegistro");
var senhaLogin = $("#senhaLogin");
var emailLogin = $("#emailLogin");

$(".alert").hide();

// verificar se os validadores e verificações estão corretas

function validarCamposCadastro() {
    var retornoSenha = validarSenha('senha1', 'senha2');
    var retornoEmail = ValidarEmail('emailRegistro');
    var retornoNumero = validarNumero('numeroRegistro')

    if (retornoSenha == true &&
        retornoEmail == true &&
        retornoNumero == true &&
        emailExiste == true &&
        telExiste == true) {
        document.getElementById("form-registro").submit();
    }
}

// validadores dos campos de Senha, Email e telefone

function validarSenha(campoUm, campoDois) {
    var senhaUm = document.getElementById(campoUm).value;
    var senhaDois = document.getElementById(campoDois).value;

    if (!senhaUm == "" || !senhaDois == "") {
        if (senhaUm != senhaDois) {
            $(".alerta-senha").fadeIn();
            $("#msg-alerta-senha").text("Senhas Diferentes");
            temporizadorAlerta();
        } else {
            return true;
        }
    } else {
        $(".alerta-senha").fadeIn();
        $("#msg-alerta-senha").text("Insira uma senha");
        temporizadorAlerta();
    }
}

function ValidarEmail(idEmail) {
    var email = document.getElementById(idEmail).value;

    var mascaraEmail = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;

    if (mascaraEmail.test(email)) {
        return true;
    } else {
        $(".alerta-email").fadeIn();
        $("#msg-alerta-email").text("Email Inválido");
        temporizadorAlerta();
    }
}

function validarNumero(idNumero) {
    var numero = document.getElementById(idNumero).value;

    var mascaraNumero = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/;

    if (mascaraNumero.test(numero)) {
        return true;
    } else {
        $(".alerta-numero").fadeIn();
        temporizadorAlerta();
    }
}

email.change(function verificarEmailExistente() {
    $.ajax({
        url: '../assets/php/verificarDados.php',
        type: 'POST',
        data: {
            "email": email.val()
        },
        success: function(data) {
            var Verifica = JSON.parse(data);
            emailExistente(Verifica.email);
        }
    });
});

tel.change(function verificarTelefoneExistente() {
    $.ajax({
        url: '../assets/php/verificarDados.php',
        type: 'POST',
        data: {
            "numero": tel.val()
        },
        success: function(retorno) {
            var Verifica = JSON.parse(retorno);
            telefoneExistente(Verifica.telefone);
        }
    });
});

$("#btn-login").click(function verificarLogin() {
    $.ajax({
        url: '../assets/php/verificarDados.php',
        type: 'POST',
        data: {
            "emailLogin": emailLogin.val(), 
            "senhaLogin": senhaLogin.val()
         },
        success: function(data) {
            var verifica = JSON.parse(data);
            loginIncorreto(verifica.dados);
        }
    });
});

function loginIncorreto(verificador) {
    if(verificador == true){
        document.getElementById("form-login").submit();
    }
    else if(verificador == false){
        $(".alerta-login").fadeIn();
        temporizadorAlerta();
    }
}

function emailExistente(verificadorEmail) {
    if (verificadorEmail == true) {
        $(".alerta-email").fadeIn();
        $("#msg-alerta-email").text("Email Existente");
        temporizadorAlerta();
    } else if (verificadorEmail == false) {
        emailExiste = true;
    }
}

function telefoneExistente(verificadorTel) {
    if (verificadorTel == true) {
        $(".alerta-tel").fadeIn();
        $("#msg-alerta-tel").text("Número Existente");
        temporizadorAlerta();
    } else if (verificadorTel == false) {
        telExiste = true;
    }
}

// função que apaga o alerta depois de 4 segundos

function temporizadorAlerta() {
    setTimeout(function() {
        $(".alert").fadeOut();
    }, 4000);
}

// funções para validação de cep

$(document).ready(function() {

    $(".alert").hide();

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
    }

    function temporizadorAlerta() {
        setTimeout(function() {
            $(".alert").fadeOut();
        }, 4000);
    }

    $("#cep").blur(function() {
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
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
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

// formatacao de inputs

function formatar(formatacao, documento) {
    var i = documento.value.length;
    var saida = formatacao.substring(0, 1);
    var texto = formatacao.substring(i)

    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }

}
// para usar a função só passar o formato e o arquivo exemplo: formatar('##/##/####', this);