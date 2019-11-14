$(".alert").hide();

// validar se todos os campos possuem checagem e da um submit no form
var emailExiste = false;
var telExiste = false;
function validarCamposCadastroCliente() {
    var retornoSenha = validarSenha('senha1', 'senha2');
    var retornoEmail = ValidarEmail('emailRegistroCliente');
    var retornoNumero = validarNumero('numeroRegistroCliente')

    if (retornoSenha == true &&
        retornoEmail == true &&
        retornoNumero == true &&
        emailExiste == true &&
        telExiste == true) {
        document.getElementById("form-registro").submit();
    }
}

function validarCamposCadastroPrestadora() {
    var retornoSenha = validarSenha('senha1', 'senha2');
    var retornoEmail = ValidarEmail('emailRegistroPrestadora');
    var retornoNumero = validarNumero('numeroRegistroPrestadora')

    if (retornoSenha == true &&
        retornoEmail == true &&
        retornoNumero == true &&
        emailExiste == true &&
        telExiste == true) {
        document.getElementById("form-registro").submit();
    }
}

// verificar se formatação está correta
function validarSenha(campoUm, campoDois) {
    var senhaUm = document.getElementById(campoUm).value;
    var senhaDois = document.getElementById(campoDois).value;

    if (!senhaUm == "" || !senhaDois == "") {
        if (!senhaUm != senhaDois) {
            if(senhaUm.length < 8 || senhaDois.length < 8){
                $(".alerta-senha").fadeIn();
                $("#msg-alerta-senha").text("Mínimo de 8 caracteres");
                temporizadorAlerta();
            }
            else{
                return true;
            }
        } 
        else {
            $(".alerta-senha").fadeIn();
            $("#msg-alerta-senha").text("Senhas Diferentes");
            temporizadorAlerta();
        }
    } 
    else {
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
        $(".alerta-tel").fadeIn();
        temporizadorAlerta();
    }
}

// função que apaga o alerta depois de 4 segundos
function temporizadorAlerta() {
    setTimeout(function() {
        $(".alert").fadeOut();
    }, 4000);
}

// formatacao de inputs
function formatar(formatacao, documento) {
    var i = documento.value.length;
    var saida = formatacao.substring(0, 1);
    var texto = formatacao.substring(i)

    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }

} // para usar a função só passar o formato e o arquivo exemplo: formatar('##/##/####', this);