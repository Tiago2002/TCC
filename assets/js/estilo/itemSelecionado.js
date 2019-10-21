 $(document).ready(function () {
     $('.item-servico-feito').click(function () {
         if ($(this).hasClass('itemSelecionado')) {
             $(this).removeClass("itemSelecionado");
         } else {
             $(this).addClass("itemSelecionado");
         }
     });
 });