 $(function(){
        $("#form-perfil").validate({
            rules : {
                nome : {
                    required : true
                },
                cpf : {
                    required : true
                },

                senha : {
                    required : true,
                    minlength : 6
                },

                confirmar_senha : {
                    required : true,
                    minlength : 6,
                    equalTo: "#senha"
                }

            },
            messages : {
                nome : {
                    required : "Por favor, informe seu nome."
                },
                cpf : {
                    required : "É necessário informar um cpf valido."
                },
                senha : {
                    required : "Informe uma senha.",
                    minlength : "A senha deve possuir pelo menos 6 digitos."
                },

                confirmar_senha : {
                    required : "Informe uma senha.",
                    minlength : "A senha deve possuir pelo menos 6 digitos.",
                    equalTo: "Entre com a mesma senha acima"
                }
            }
        });
    });
