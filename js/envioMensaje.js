$('#enviarcomentario').click(function (ev) {
    ev.preventDefault();

    if(validarC())
    {
        var fdcomentario = new FormData();

        fdcomentario.append('organismocomentario', $('#organismocomentario').val());
        fdcomentario.append( 'nombrecomentario', $('#nombrecomentario' ).val());
        fdcomentario.append('mailcomentario', $('#mailcomentario').val());
        fdcomentario.append('mensajecomentario', $('#mensajecomentario').val());

        enviarMensajeC(fdcomentario)
    }
    /* var parametrosComentario = {
        "organismo" : $('#organismocomentario').val(),
        "nombre" : $('#nombrecomentario').val(),
        "mail" : $('#mailcomentario').val(),
        "mensaje" : $('#mensajecomentario').val()
    };
    console.log(parametrosComentario);
    if(validarC())
    {
       // console.log(validarC());
        enviarMensajeC(parametrosComentario)
    }*/
});

function enviarMensajeC(parametrosComentario){
    $("#mailcomentario").attr('disabled', true);
    $("#organismocomentario").attr('disabled', true);
    $("#nombrecomentario").attr('disabled', true);
    $("#mensajecomentario").attr('disabled', true);
    $("#enviarcomentario").addClass('state-loading');

    $.ajax({
        data:  parametrosComentario, //datos que se envian a traves de ajax
        url:   'sendemail.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        // beforeSend: function () {
        //     $("#resultado").html("Procesando, espere por favor...");
        // },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $("#response").html(response);
            $("#mailcomentario").attr('disabled', false).css('border-color', '#ccc').focus();
            $("#organismocomentario").attr('disabled', false).css('border-color', '#ccc').focus();
            $("#nombrecomentario").attr('disabled', false).css('border-color', '#ccc').focus();
            $("#mensajecomentario").attr('disabled', false).css('border-color', '#ccc').focus();
            $("#enviarcomentario").removeClass('state-loading');
            $("#response").css({'display':'block'}).delay(3200).fadeOut(400);

        },
        cache: false,
        contentType: false,
        processData: false
    });
}


function validarC()
{
    $("#mailcomentario").css('border-color', 'green').focus();
    $("#organismocomentario").css('border-color', 'green').focus();
    $("#nombrecomentario").css('border-color', 'green').focus();
    $("#mensajecomentario").css('border-color', 'green').focus();
    $(".organismocomentario").text("");
    $(".nombrecomentario").text("");
    $(".mailcomentario").text("");
    $(".mensajecomentario").text("");

    var valid = true;
    if($('#organismocomentario').val() == '')
    {
        $("#organismocomentario").css('border-color', '#ff4338').focus();
        $(".organismocomentario").text("El campo no puede estar vacio").css({'display':'block'}).delay(3200).fadeOut(400);;
        valid = false;
    }
    if($('#nombrecomentario').val()  == '')
    {
        $("#nombrecomentario").css('border-color', '#ff4338').focus();
        $(".nombrecomentario").text("El campo no puede estar vacío").css({'display':'block'}).delay(3200).fadeOut(400);
        valid = false;
    }

    if( !isValidEmailAddress( $("#mailcomentario").val() ) )

    {
        $("#mailcomentario").css('border-color', '#ff4338').focus();
        $(".mailcomentario").text("El campo debe tener formato de mail").css({'display':'block'}).delay(3200).fadeOut(400);
        valid = false;
    }

    if( $('#mensajecomentario').val()  == '')

    {
        $("#mensajecomentario").css('border-color', '#ff4338').focus();
        $(".mensajecomentario").text("El campo no puede estar vacío").css({'display':'block'}).delay(3200).fadeOut(400);

        valid = false;
    }

    return valid;

}

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}





    /*if($('#organismo').val() == '', $('#nombre').val() == '', $('#mail').val() == '', $('#mensajecomentario').val() == '')
    {
        $('#organismo').css('border-color', 'red'),  $('#nombre').css('border-color', 'red'), $('#mail').css('border-color', 'red'), $('#mensajecomentario').css('border-color', 'red');
        return false;
    }else{
        return true;
    }*/





