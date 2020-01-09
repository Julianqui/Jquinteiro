$('#enviar').click(function (ev) {
    ev.preventDefault();

    if (validarM()){
    var parametrosComentario = {
        "organismo" : $('#organismo').val(),
        "producto" : $('#producto').val(),
        "nombre" : $('#nombre').val(),
        "mail" : $('#mail').val(),
        "mensaje" : $('#mensajemodal').val()
    };
    console.log(parametrosComentario);
    // console.log(validarC());
    enviarMensajemodal(parametrosComentario)
    }
});

function enviarMensajemodal(parametrosComentario){
    $("#organismo").attr('disabled', true);
    $("#nombre").attr('disabled', true);
    $("#mail").attr('disabled', true);
    $("#mensajemodal").attr('disabled', true);
    $.ajax({
        data:  parametrosComentario, //datos que se envian a traves de ajax
        url:   'sendemailModal.php', //archivo que recibe la peticion
        type:  'post', //método de envio
        // beforeSend: function () {
        //     $("#resultado").html("Procesando, espere por favor...");
        // },
      //  context: this,
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
           // $("#responsemodal").html(response);
            //$('#modal-contacto').modal().hide();

            $("#organismo").attr('disabled', false);
            $("#nombre").attr('disabled', false);
            $("#mail").attr('disabled', false);
            $("#mensajemodal").attr('disabled', false);

            $('#closeModal').click();
            $('#modalmensajeok').click();
            $('#nombre-response').html(parametrosComentario.nombre);
            $('#producto-response').html(parametrosComentario.producto);
            $('#org-response').html(parametrosComentario.organismo);
            $('#mensaje-response').html(parametrosComentario.mensaje);
            $('#mail-response').html(parametrosComentario.mail);
            $('.modal').css('overflow-y', 'auto');


        }
    });
}


$('#modal-contacto').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});

function validarM(){
    $("#mail").css('border-color', 'green').focus();
    $("#organismo").css('border-color', 'green').focus();
    $("#nombre").css('border-color', 'green').focus();
    $("#mensajemodal").css('border-color', 'green').focus();
    $(".organismo").text("");
    $(".nombre").text("");
    $(".mail").text("");
    $(".mensajemodal").text("");

    var valid = true;
    if($('#organismo').val() == '')
    {
        $("#organismo").css('border-color', '#ff4338').focus();
        $(".organismo").text("El campo no puede estar vacio").css({'display':'block'}).delay(3200).fadeOut(400);
        valid = false;
    }
    if($('#nombre').val()  == '')
    {
        $("#nombre").css('border-color', '#ff4338').focus();
        $(".nombre").text("El campo no puede estar vacio").css({'display':'block'}).delay(3200).fadeOut(400);
        valid = false;
    }

    if( !isValidEmailAddress( $("#mail").val() ) )

    {
        $("#mail").css('border-color', '#ff4338').focus();
        $(".mail").text("El campo debe tener formato de mail").css({'display':'block'}).delay(3200).fadeOut(400);
        valid = false;
    }

    if( $('#mensajemodal').val()  == '')

    {
        $("#mensajemodal").css('border-color', '#ff4338').focus();
        $(".mensajemodal").text("El campo no puede estar vacio").css({'display':'block'}).delay(3200).fadeOut(400);
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

function imprimirDIV(contenido) {
    var ficha = document.getElementById(contenido);
    var ventanaImpresion = window.open(' ', 'popUp');
    ventanaImpresion.document.write(ficha.innerHTML);
    ventanaImpresion.document.close();
    ventanaImpresion.print();
    ventanaImpresion.close();
}



