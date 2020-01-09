<!-- FOOTER -->

<footer class="main-footer bg-white">
    <div class="container aligner">
        <a id="top" href="#start" class="btn btn-primary btn-sm back-to-top" role="button" style=""><span class="glyphicon glyphicon-chevron-up"></span></a>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <!--  <img src="images/01.logoMinProdTrabajo_Nuevo.svg" height="60" widht = "60" alt="" style="margin-bottom: 20px">-->
            <img class="image-responsive" src="img/min-prodytrab-logo.svg" alt="Ministerio de Producción y Trabajo">
            <p class="text-primary"></p>
            <img class="margin-20" src="img/logo.svg" alt="Dirección Nacional de Simplificación Tecnológica" width="15%">
            <p class="text-muted small">Los contenidos de Produccion.gob.ar están licenciados bajo <a href="https://creativecommons.org/licenses/by/2.5/ar/">Creative Commons Reconocimiento 2.5 Argentina License</a></p>
        </div>
        <div class="col-sm-6 text-right" style="margin-top: 10px">
            <table class="table" style="margin-bottom: 10px; text-align: left;">
                <thead>
                </thead>
                <tbody style=" font-size: 17px">
                <tr style="border: hidden">
                    <td class="text-primary"><a href="https://www.argentina.gob.ar/produccion" target=_blank>Ministerio</a></td>
                    <td class="text-primary"><a href="https://www.argentina.gob.ar/acerca" target=_blank>Acerca de este sitio</a></td></tr>
                <tr style="border: hidden">

                    <td class="text-primary"><a href="https://www.argentina.gob.ar/produccion/autoridades/secretaria-de-simplificacion-productiva" target=_blank>Secretaría de Simplificación Productiva </a></td>
                    <td class="text-primary"><a href="https://www.argentina.gob.ar/terminos-y-condiciones" target=_blank>Términos y condiciones</a></td>  </tr>
                <tr style="border: hidden">
                    <td class="text-primary"><a href="https://www.argentina.gob.ar/produccion/datos-productivos" target=_blank>Datos productivos</a></td>
                    <td class="text-primary"><a href="https://www.argentina.gob.ar/ayuda" target=_blank>Ayuda</a></td>   </tr>

                </tbody>
            </table>
        </div>
    </div>

</footer>

<!-- JS -->
<script src="js/nav.js"></script>


<script>
    /*
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })*/


    // IOS FIX FOR FULL HEIGHT JUMBO
    if ($(window).width() < 769) {

        var bg = $(".intro");
        function resizeBackground() {
            bg.css('height', window.innerHeight - 64);
            bg.css('min-height', window.innerHeight - 64);
        }

        resizeBackground();
    };

</script>



<script src="js/jquery.jscroll.min.js" type="text/javascript"></script>


<script type="text/javascript">
    $('.scroll').jscroll({
        autoTrigger: false,
        loadingHtml: '<img class="loader" src="../img/loader.gif"><img>'
    });
</script>


<script src="js/remodal.js"></script>

<!-- Events -->
<script>
    $(document).on('opening', '.remodal', function () {
        console.log('opening');
    });

    $(document).on('opened', '.remodal', function () {
        console.log('opened');
    });

    $(document).on('closing', '.remodal', function (e) {
        console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
    });

    $(document).on('closed', '.remodal', function (e) {
        console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
    });

    $(document).on('confirmation', '.remodal', function () {
        console.log('confirmation');
    });

    $(document).on('cancellation', '.remodal', function () {
        console.log('cancellation');
    });

    //  Usage:
    //  $(function() {
    //
    //    // In this case the initialization function returns the already created instance
    //    var inst = $('[data-remodal-id=modal]').remodal();
    //
    //    inst.open();
    //    inst.close();
    //    inst.getState();
    //    inst.destroy();
    //  });

    //  The second way to initialize:
    $('[data-remodal-id=modal]').remodal({
        modifier: 'with-red-theme'
    });
    $('.contactanos').click(function () {
        $('.modal').css('overflow-y', 'auto');
    })

    //btn top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#top').fadeIn();
        } else {
            $('#top').fadeOut();
        }
    });

    //scroll bottom || top
    $('a[href^="#"]').on('click', function(event) {
        let target = $( $(this).attr('href') );
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top,
                scrollBottom: target.offset().bottom
            }, 2000);
        } });

</script>


<script src="js/landing.js"></script>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://keaukraine.github.io/bootstrap-fs-modal/dist/js/fs-modal.min.js'></script>

