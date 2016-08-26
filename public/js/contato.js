var enviando=false;
function ajax_contato(){
    resposta_ajax_contato("Enviando a mensagem...","info");
    if(!enviando)
        $.ajax({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
            type: 'POST',
            url: "contato",
            data: $('#form-contato').serialize(),
            success: function (data) {
                resposta_ajax_contato("Mensagem enviada com sucesso, obrigado pelo contato!", "success");
            },
            error: function (erro) {
                resposta_ajax_contato("Ocorreu um erro no envio!", "danger");
            }
        });
    return false;
}
function resposta_ajax_contato(msg,class_bootstrap){
    $("#msg-result-contato").hide({duration:200,
        msg:msg,
        class_bootstrap:class_bootstrap,
        complete:function(event) {
            $(this).html(msg).attr("class", "alert alert-" + class_bootstrap).show(200);
        }});
}