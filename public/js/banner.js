/**
 * Created by luizm on 21/07/2016.
 */

var animando_banner;
var tempo_banner = 7000;
var tempo_animacao_banner = 500;
var banner_atual = 0;
var timeout;
var contador_banner = 0;
$(window).ready(function(){
    $(".banner").each(function(){
       $("#container-controle-banner").append("<div data-banner='"+contador_banner+"' class=\"controle-banner\"/>");
        contador_banner++;
    });
    $(".controle-banner").click(function(){
        clearTimeout(timeout);
        if(!animando_banner) {
            animando_banner = true;
            anima_banner($(this).attr("data-banner"));
        }
        return false;
    });
    anima_banner(0);
});
function anima_banner(banner){
    $(".banner").fadeTo(tempo_animacao_banner,0);
    $(".banner[data-banner='"+banner+"']").fadeTo(tempo_animacao_banner,1,function (){
        animando_banner = false;
        var banner_next = (banner_atual == contador_banner-1)?0:banner_atual+1;
        timeout = setTimeout("anima_banner("+banner_next+")",tempo_banner);
    });
    remove_class("controle-banner-ativo");
    $(".controle-banner[data-banner='"+banner+"']").addClass("controle-banner-ativo");
    banner_atual = banner;
}