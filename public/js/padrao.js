/**
 * Created by luizm on 19/07/2016.
 */
$(window).ready(function(){
    $("#btn-menu-rpsv").click(function () {
        if($(this).hasClass("is-active")){
            $(this).removeClass("is-active");
            $("#menu-principal").slideUp(500);
        }else {
            $(this).addClass("is-active");
            $("#menu-principal").slideDown(500);
        }
    })
})
function remove_class(classe){
    $("."+classe).removeClass(classe);
}