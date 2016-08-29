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
var newsletter_field = ["nome-news","email-news"];
var newsletter_field_names = ["Nome","Email"];
function enviar_news(){
    if(check_input_filled(newsletter_field,newsletter_field_names,"msg-result-news")) {
        box_ajax_response("msg-result-news", "Enviando a mensagem...", "info");
        $.ajax({
            headers: {
                'X-CSRF-Token': $('#form-newsletter input[name="_token"]').val()
            },
            type: 'POST',
            url: "newsletter",
            data: $('#form-newsletter').serialize(),
            success: function (data) {
                $('#form-newsletter input').val("");
                box_ajax_response("msg-result-news", "Mensagem enviada com sucesso, obrigado pelo contato!", "success");
            },
            error: function (erro) {
                box_ajax_response("msg-result-news", "Ocorreu um erro no envio!", "danger");
            }
        });
    }
    return false;
}
function check_input_filled(inputs,inputs_names,id_warning_box){
    for(i = 0;i<inputs.length;i++){
        if($("#"+inputs[i]).val()== ""){
            box_ajax_response(id_warning_box,"Preencha o campo "+inputs_names[i],"danger");
            return false
        }
    }
    return true;
}
function box_ajax_response(id,msg,class_bootstrap){
    $("#"+id).hide({duration:200,
        msg:msg,
        class_bootstrap:class_bootstrap,
        complete:function(event) {
            $(this).html(msg).attr("class", "alert alert-" + class_bootstrap).show(200);
        }});
}