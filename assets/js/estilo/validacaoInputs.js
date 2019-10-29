$(".alert").hide();

function validarCampos() {
    var retornoSenha =  validarSenha('senha1', 'senha2');
    var retornoEmail = ValidarEmail('email');
    var retornoNumero = validarNumero('numero')

    if (retornoSenha == true && retornoEmail == true && retornoNumero == true) {
        document.getElementById("form-registro").submit();
    }
}

function validarSenha(campoUm, campoDois) {
    var senhaUm = document.getElementById(campoUm).value;
    var senhaDois = document.getElementById(campoDois).value;

    if(!senhaUm == "" || !senhaDois == ""){
        if (senhaUm != senhaDois) {
            $(".alerta-senha").fadeIn();
            $("#msg-alerta-senha").text("Senhas Diferentes");
            temporizadorAlerta();
        }
        else{
            return true;
        }
    }
    else{
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
        temporizadorAlerta();
    }
}

function validarNumero(idNumero){
    var numero = document.getElementById(idNumero).value;

    var mascaraNumero = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/;

    if (mascaraNumero.test(numero)) {
        return true;
    } else {
        $(".alerta-numero").fadeIn();
        temporizadorAlerta();
    }
}

function temporizadorAlerta() {
    setTimeout(function () {
        $(".alert").fadeOut();
    }, 4000);
}