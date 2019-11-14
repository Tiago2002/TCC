$("#btn-loginPrestadora").click(function verificarLoginPrestadora() {
    var senhaLoginPrestadora = $("#senhaLoginPrestadora");
    var emailLoginPrestadora = $("#emailLoginPrestadora");
    $.ajax({
        url: '../assets/php/scripts/verificarDados.php',
        type: 'POST',
        data: {
            "emailLoginPrestadora": emailLoginPrestadora.val(), 
            "senhaLoginPrestadora": senhaLoginPrestadora.val()
         },
        success: function(data) {
            var verifica = JSON.parse(data);
            loginPrestadoraIncorreto(verifica.dados);
        }
    });
});

// avisar se existe os dados da prestadora login está incorreto
function loginPrestadoraIncorreto(verificador) {
    if(verificador == true){
        document.getElementById("form-login").submit();
    }
    else if(verificador == false){
        $(".alerta-login").fadeIn();
        temporizadorAlerta();
    }
}

// Login Cliente
$("#btn-loginCliente").click(function verificarLoginCliente() {
    var senhaLoginCliente = $("#senhaLoginCliente");
    var emailLoginCliente = $("#emailLoginCliente");
    $.ajax({
        url: '../assets/php/scripts/verificarDados.php',
        type: 'POST',
        data: {
            "emailLoginCliente": emailLoginCliente.val(), 
            "senhaLoginCliente": senhaLoginCliente.val()
         },
        success: function(data) {
            var verifica = JSON.parse(data);
            loginClienteIncorreto(verifica.dados);
        }
    });
});

// avisar se existe os dados da cliente login está incorreto
function loginClienteIncorreto(verificador) {
    if(verificador == true){
        document.getElementById("form-login").submit();
    }
    else if(verificador == false){
        $(".alerta-login").fadeIn();
        temporizadorAlerta();
    }
}