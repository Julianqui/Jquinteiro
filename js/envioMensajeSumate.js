$('#enviarsumate').click(function (ev) {
    ev.preventDefault();
    if(validar())
    {
        var fd = new FormData();
        var files = $('#exampleInputFile')[0].files[0];

        fd.append('file', files);
        fd.append('sumatenombre', $('#sumatenombre').val());
        fd.append('sumatepuesto', $('#sumatepuesto' ).val());
        fd.append('mailsumate', $('#mailsumate').val());
        enviarMensaje(fd)
    }
});

function enviarMensaje(parametros){
    $("#mailsumate").attr('disabled', true);
    $("#sumatenombre").attr('disabled', true);
    $("#sumatepuesto").attr('disabled', true);

    $("#enviarsumate").addClass('state-loading');


    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'sendemailSumate.php', //archivo que recibe la peticion
        type:  'post', //método de envioparametros
        // beforeSend: function () {
        //     $("#resultado").html("Procesando, espere por favor...");
        // },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $("#responsesumate").html(response);
            $("#mailsumate").attr('disabled', false).css('border-color', '#ccc').focus();
            $("#sumatenombre").attr('disabled', false).css('border-color', '#ccc').focus();
            $("#sumatepuesto").attr('disabled', false).css('border-color', '#ccc').focus();
            $("#enviarsumate").removeClass('state-loading');
            $("#responsesumate").css({'display':'block'}).delay(3200).fadeOut(400);

        },
        cache: false,
        contentType: false,
        processData: false
    });
}


function validar(){
    $("#mailsumate").css('border-color', 'green').focus();
    $("#sumatenombre").css('border-color', 'green').focus();
    $("#sumatepuesto").css('border-color', 'green').focus();
    $(".organismosumate").text("");
    $(".nombresumate").text("");
    $(".mailsumate").text("");

    var valid = true;
    if($('#sumatenombre').val() == '')
    {
        $("#sumatenombre").css('border-color', '#ff4338').focus();
        $(".organismosumate").text("Falta completar nombre y apellido").css({'display':'block'}).delay(3200).fadeOut(400);

        valid = false;
    }
    if($('#sumatepuesto').val()  == '')
    {
        $("#sumatepuesto").css('border-color', '#ff4338').focus();
        $(".nombresumate").text("Falta completar el puesto").css({'display':'block'}).delay(3200).fadeOut(400);

        valid = false;
    }
    if( !isValidEmailAddress( $("#mailsumate").val() ) )
    {
        $("#mailsumate").css('border-color', '#ff4338').focus();
        $(".mailsumate").text("Revise el campo mail").css({'display':'block'}).delay(3200).fadeOut(400);
        valid = false;
    }
    if ($('#exampleInputFile').get(0).files.length === 0) {
       //     console.log("No files selected.");
        $(".msj-file").text("Debe adjuntar un archivo").css({'display':'block'}).delay(3200).fadeOut(400);
        valid = false;
    }
    return valid;
}

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}

function ValidateSize(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MB
    if (FileSize > 2) {
        //alert('El archivo no puede superar los 2 MB');
        $('#exampleInputFile'); //for clearing with Jquery
        $(".msj-file").text("El archivo no debe superar los 2MB").css({'display':'block'}).delay(3200).fadeOut(400);
    } else {
        return true;
    }
}


// para que tome la seleccion del archivo y muestre en el input file
function initializeFileUploads() {
    $('.file-upload').change(function () {
        var file = $(this).val();
        $(this).closest('.input-group').find('.file-upload-text').val(file);
    });
    $('.file-upload-btn').click(function () {
        $(this).find('.file-upload').trigger('click');
    });
    $('.file-upload').click(function (e) {
        e.stopPropagation();
    });
}


// On document load:
$(function() {
    initializeFileUploads();
});

