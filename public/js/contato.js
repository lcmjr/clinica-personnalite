function ajax_contato(){return box_ajax_response("msg-result-contato","Enviando a mensagem...","info"),$.ajax({headers:{"X-CSRF-Token":$('#form-contato input[name="_token"]').val()},type:"POST",url:"contato",data:$("#form-contato").serialize(),success:function(o){box_ajax_response("msg-result-contato","Mensagem enviada com sucesso, obrigado pelo contato!","success")},error:function(o){box_ajax_response("msg-result-contato","Ocorreu um erro no envio!","danger")}}),!1}