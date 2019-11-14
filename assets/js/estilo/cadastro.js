// requisições para averiguaros dados Prestadora
var emailPrestadora = $("#emailRegistroPrestadora");
emailPrestadora.change(function verificarEmailPrestadoraExistente() {
    $.ajax({
        url: '../assets/php/scripts/verificarDados.php',
        type: 'POST',
        data: {
            "emailPrestadora": emailPrestadora.val()
        },
        success: function(data) {
            var Verifica = JSON.parse(data);
            emailExistente(Verifica.email);
        }
    });
});

var telPrestadora = $("#numeroRegistroPrestadora");
telPrestadora.change(function verificarTelPrestadoraExistente() {
    $.ajax({
        url: '../assets/php/scripts/verificarDados.php',
        type: 'POST',
        data: {
            "telPrestadora": telPrestadora.val()
        },
        success: function(retorno) {
            var Verifica = JSON.parse(retorno);
            telExistente(Verifica.telefone);
        }
    });
});

// requisições para averiguaros dados Cliente
var emailCliente = $("#emailRegistroCliente");
emailCliente.change(function verificarEmailClienteExistente() {
    $.ajax({
        url: '../assets/php/scripts/verificarDados.php',
        type: 'POST',
        data: {
            "emailCliente": emailCliente.val()
        },
        success: function(data) {
            var Verifica = JSON.parse(data);
            emailExistente(Verifica.email);
        }
    });
});

var telCliente = $("#numeroRegistroCliente");
telCliente.change(function verificarTelClienteExistente() {
    $.ajax({
        url: '../assets/php/scripts/verificarDados.php',
        type: 'POST',
        data: {
            "telCliente": telCliente.val()
        },
        success: function(retorno) {
            var Verifica = JSON.parse(retorno);
            telExistente(Verifica.telefone);
        }
    });
});

// avisa se existe o numero de telefone ou email
function emailExistente(verificadorEmail) {
    if (verificadorEmail == true) {
        $(".alerta-email").fadeIn();
        $("#msg-alerta-email").text("Email Existente");
        temporizadorAlerta();
    } else if (verificadorEmail == false) {
        emailExiste = true;
    }
}

function telExistente(verificadorTel) {
    if (verificadorTel == true) {
        $(".alerta-tel").fadeIn();
        $("#msg-alerta-tel").text("Número Existente");
        temporizadorAlerta();
    } else if (verificadorTel == false) {
        telExiste = true;
    }
}