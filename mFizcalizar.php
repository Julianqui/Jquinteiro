<div class="remodal-bg">
   <!-- <a href="#modal">Modal №1</a><br>-->
    <!--<a href="#modal2">Modal №2</a>-->
    <br><br>



    <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <p id="modal1Title" style="text-align: left">FISCALIZ.AR | <strong>Fiscalizaciones digitales</strong></p>
            <div style="width: 100%; background-color: grey; height: 1px"></div>
            <h3 style="position: absolute; margin-left: 25%">MINISTERIO DE PRODUCCION Y TRABAJO</h3>
            <img src="../img/min-prodytrab-logo.svg" style="position: relative; width: 20%; margin-left: -75%; margin-top: 1%">
            <H4 style="text-align: left;">DESCRIPCION</H4>
            <p style="text-align: left">Fiscalizar con papel paso a la historia, con esta aplicacion web y mobile, <strong>digitalizas todo tu operativo</strong> y logras su <strong>seguimiento en tiempo real</strong>/p>
                <br>
            <p style="text-align: left">Ademas, su versatilidad permite usarlos en escenarios de censos, examenes, relevamientos, encuestan.</p>
            <div style="margin-left: 0%; position: absolute">
                <img src="../img/cambio-tecnologico.svg">
                <p><strong>Configurar protocolos</strong></p>
                <p>Permite generar protocolos<br> de fiscalizacion online,<br> otorgando flexibilidad y<br> velocidad de respuesta al<br> organismo de controlar</p>
            </div>
            <div style="margin-left: -7%; position: relative;">
                <img src="../img/horas-extra.svg">
                <p><strong>Medicion y control</strong></p>
                <p>Permite al administrador<br>realizar un seguimiento de<br> las fiscalizaciones en tiempo<br>real.</p>
            </div>
            <div style="position: relative; margin-left: 55%; margin-top: -30%">
                <img src="../img/justicia.svg">
                <p><strong>Fin a la arbitariedad</strong></p>
                <p>Permite al administrador<br>realizar un seguimiento de<br> las fiscalizaciones en tiempo<br>real.</p>
            </div>
            <h3 style="text-align: left; margin-top: 5%">Funcion principal</h3>
            <p style="text-align: left"><strong>Se trata de una herramienta de gestion compuesta por dos modulos</strong></p>
            <p style="text-align: left">1) Una web de administracion y</p>
            <p style="text-align: left">2) una aplicacion movil, que permite la planificacion, ejecucion, y control de fiscalizaciones, medir su eficacia y evitar fraudes.</p>

            <h3 style="text-align: left; margin-top: 5%">Otras funcionalidades</h3>
            <p style="text-align: left">- Configurar protocolos de fiscalizacion en minutos</p>
            <p style="text-align: left">- Vincular protocolos de fiscalizacion con actas y automatizar resultados.</p>
            <p style="text-align: left">- Permite desde cualquier dispositivo movil la fiscalizacion de empresas y asociar cada acta labrada a un expediente</p>

            <div style="width: 100%; background-color: grey; height: 1px"></div>

            <h2 style="text-align: left">Estadisticas destacadas</h2>
            <div style="margin-left: 12%; position: absolute; margin-top: -2%">
                <p style="font-size: 80px; color: green; text-align: left"><strong> 3</strong></p>


            </div>

            <div style="margin-left: 40%; position: relative">
                <p style="font-size: 80px; color: blue; text-align: left"><strong> 1315</strong></p>
            </div>

            <div style="margin-left: 90%; position: relative; margin-top: -25%">
                <p style="font-size: 80px; color: blueviolet; text-align: left"><strong>7</strong></p>
            </div>
            <div style="width: 100%; background-color: grey; height: 1px"></div>

            <div style="margin-left: -38%;">
                <img src="../img/fiscalizar-modal-img-1.png" style="width: 50%;">

            </div>

            <div>
                <p style="margin-left: 50%"><strong>Lenguajes utilizados</strong></p>
            </div>

            <button class="btn btn-success">Contactanos</button>



        </div>
        <br>
        <div style="background-color: #E5EAEB; ">
            <div style="width: 30%; height: 200px; background-color: rebeccapurple">
                <p style="color: white; font-size: 30px; margin-top: 20%">Jimenez</p>
            </div>

        </div>
        <!--<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
        <button data-remodal-action="confirm" class="remodal-confirm">OK</button>-->
    </div>


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
        $('[data-remodal-id=modal2]').remodal({
            modifier: 'with-red-theme'
        });
    </script>
