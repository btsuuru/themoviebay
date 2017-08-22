$(document).ready(
  function(){
    $('.navbar').attr('data-offset-top',$('.cabecalho').height());
  }
);

function trocaAba(praOnde){
  var tab1 = document.getElementById("tab1");
  var tab2 = document.getElementById("tab2");
  var tab3 = document.getElementById("tab3");
  tab1.removeAttribute("class");
  tab2.removeAttribute("class");
  tab3.removeAttribute("class");
  switch(praOnde){
    case 1:
    tab1.setAttribute("class", "active");
    break;
    case 2:
    tab2.setAttribute("class", "active");
    break;
    case 3:
    tab3.setAttribute("class", "active");
    break;
  }
}

$(document).ready(function(){
    $window = $(window);
    //Captura cada elemento section com o data-type "background"
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);
            //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.
            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $scroll.data('speed'));
                var coords = '50% '+ yPos + 'px';
                $scroll.css({ backgroundPosition: coords });
            });
   });
});
