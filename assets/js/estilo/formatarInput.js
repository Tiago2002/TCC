function formatar(formatacao, documento) {
    var i = documento.value.length;
    var saida = formatacao.substring(0, 1);
    var texto = formatacao.substring(i)

    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }

}
// para usar a função só passar o formato e o arquivo exemplo: formatar('##/##/####', this);