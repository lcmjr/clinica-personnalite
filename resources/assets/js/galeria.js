var animando_galeria;
var tempo_animacao_galeria = 500;
var foto_atual;
var foto_grande;
var titulo;
$(window).ready(function(){
    $('.container-imgs-controle img').click(function(){
        var key = $(this).attr('data-key');
        if(!animando_galeria && foto_atual!=key) {
            foto_grande = $(this).attr('data-foto');
            titulo = $(this).attr('alt');
            troca_banner(key);
        }
    }).bind("animationend",function(){
        if($(this).hasClass('photo-out-in'))
            $('.container-imgs-controle').append($(this).removeClass('photo-out-in'));
        else
            $(this).removeClass('photo-in-out');
    });
    $('.arrow-gallery-1').click(function(){galeria_up_left();});
    $('.arrow-gallery-2').click(function(){galeria_right_down()});
    $('.container-imgs-controle').on("swipeleft",function(){
        if($('.arrow-gallery').css('display')!="none")
            galeria_up_left();
    }).on("swiperight",function(){
        if($('.arrow-gallery').css('display')!="none")
            galeria_right_down()
    });
    $('.container-imgs-controle img[data-key="0"]').click();
});
function troca_banner(key){
    animando_galeria=true;
    $("#foto-principal").fadeTo(tempo_animacao_galeria,0,function(){
        $(this).attr('src',"uploads/galeria/"+foto_grande);
        $(this).fadeTo(tempo_animacao_galeria,1);
    });
    $("#titulo-foto").fadeTo(tempo_animacao_galeria,0,function(){
        $(this).html(titulo);
        $(this).fadeTo(tempo_animacao_galeria,1);
        animando_galeria=false;
    });
    foto_atual = key;
}
function galeria_up_left(){
    if(!$('.container-imgs-controle img:first-child').hasClass('photo-in-out'))
    $('.container-imgs-controle img:first-child').addClass('photo-out-in');
}
function galeria_right_down(){
    if(!$('.container-imgs-controle img:first-child').hasClass('photo-out-in'))
    $('.container-imgs-controle img:last-child').addClass('photo-in-out').insertBefore('.container-imgs-controle img:first-child');
}