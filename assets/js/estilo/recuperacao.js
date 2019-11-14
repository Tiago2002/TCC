//redefinição de senha
var emailRecuperacao = $('#emailRecuperacao');
var animacaoCarregando = $('.circle-loading');
animacaoCarregando.hide();
emailRecuperacao.change(function(){
    ValidarEmail('emailRecuperacao');
});
$("#btn-recuperacaoCliente").click(function(){
    $.ajax({
        url: '../assets/php/scripts/mudarSenhaCliente.php',
        type: 'POST',
        data: {
            "email": emailRecuperacao.val(),
        },
        beforeSend: function(){
            animacaoCarregando.fadeIn();
        },
        success: function(retorno) {
            animacaoCarregando.hide();
            var dados = JSON.parse(retorno);
            if(dados.envio !== undefined){
                verificarRecuperacao(dados.envio);
            }
            else if(dados.emailExiste !== undefined){
                $('.alerta-reset').fadeIn();
                $('#msg-alerta-reset').text('Email não está cadastradado');
                temporizadorAlerta();
            }
        }
    });
});

$("#btn-recuperacaoPrestadora").click(function(){
    $.ajax({
        url: '../assets/php/scripts/mudarSenhaPrestadora.php',
        type: 'POST',
        data: {
            "email": emailRecuperacao.val(),
        },
        beforeSend: function(){
            animacaoCarregando.fadeIn();
        },
        success: function(retorno) {
            animacaoCarregando.hide();
            var dados = JSON.parse(retorno);
            if(dados.envio !== undefined){
                verificarRecuperacao(dados.envio);
            }
            else if(dados.emailExiste !== undefined){
                $('.alerta-reset').fadeIn();
                $('#msg-alerta-reset').text('Email não está cadastradado');
                temporizadorAlerta();
            }
        }
    });
});

function verificarRecuperacao(verificador){
    if(verificador == true){
        $('.alerta-enviado').fadeIn();
        temporizadorAlerta();
    }else{
        $('.alerta-reset').fadeIn();
        $('#msg-alerta-reset').text('Ocorreu um erro, tente novamente');
        temporizadorAlerta();
    }
}