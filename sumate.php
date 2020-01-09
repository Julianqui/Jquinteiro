<!-- SUMATE A NUESTRO EQUIPO     -->
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .organismosumate, .msj-file, .mailsumate, .nombresumate, #responsesumate{
        display: none;
    }
    .file-upload-text{
        font-size:12px ;
    }
    .file-upload {
        position: absolute;
        top: 0;
        left: 0;
        width:100%;
        height:100%;
        opacity: 0;
        cursor: pointer;
    }



</style>

<section id="" class="margin-0 padding-0">
    <div class="container" style="border-top: 1px solid #cccccc">
        <br>
        <h2 class="h2 text-center margin-0 padding-0">Sumate al equipo</h2>
    </div>
</section>

<section id="" class="bg-celeste text-center sumateContenido">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h5 style="text-align: left" class="lead">Compartinos tu cv para sumarte a nuestros desafíos profesionales</h5>
                <br>
                <h5 style="text-align: left" class="h6">Campos de conocimiento</h5>
                <p style="text-align: left" class="t-14">Animate a cambiar el Estado, sin importar edad ni experiencias previas.</p>
                <br>
                <div id="grid" class="row">
                    <div class="col-md-6 col-xs-12 item">
                        <div class="panel panel-default" style="box-shadow: 0px 0px 0px 0px;border-left: 5px solid #873299;">
                            <div class="panel-body">
                                <p class="text-gray"><strong style="font-weight: 400">Desarrolladores</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 item">
                        <div class="panel panel-default" style="box-shadow: 0px 0px 0px 0px;border-left: 5px solid #82bc00 ;">
                            <div class="panel-body">
                                <p class="text-gray"><strong style="font-weight: 400">Analistas funcionales</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="grid" class="row">
                    <div class="col-md-6 col-xs-12 item">
                        <div class="panel panel-default" style="box-shadow: 0px 0px 0px 0px;border-left: 5px solid #008388;">
                            <div class="panel-body">
                                <p><strong style="font-weight: 400">Administradores de sistemas</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 item">
                        <div class="panel panel-default" style="box-shadow: 0px 0px 0px 0px;border-left: 5px solid #ff4338;">
                            <div class="panel-body">
                                <p><strong style="font-weight: 400">Diseñadores</strong></p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-xs-12 item">
                        <div class="panel panel-default" style="box-shadow: 0px 0px 0px 0px;border-left: 5px solid #ffce00;">
                            <div class="panel-body">
                                <p><strong style="font-weight: 400">Líderes de proyectos</strong></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading bg-cielo">
                        <h5 class="text-left"> ¡Queremos conocerte!</h5>
                    </div>

                    <div class="panel-body bg-white sombra">

                        <form method="post" class="p-x-0 p-y-2" enctype="multipart/form-data" id="form-sumate">
                            <div id="responsesumate">

                            </div>
                            <div class="">

                                <input id="sumatenombre" type="text" placeholder="Nombre y apellido" class="form-control required"  name="sumatenombre" required />

<!--                            <input id="sumatenombre" type="text" placeholder="Nombre y apellido" class="form-control"  name="sumatenombre" required />-->

                            </div>
                            <div class="organismosumate alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="">
                                <input id="sumatepuesto" type="text" placeholder="Puesto al que se postula" class="form-control"  name="sumatepuesto" required />
                            </div>
                            <div class="nombresumate alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="">
                                <input id="mailsumate" type="email" class="form-control" placeholder="tu@email.com"  name="mailsumate" required />
                            </div>
                            <div class="mailsumate alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="input-group">
                                 <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary file-upload-btn">
                                        Seleccionar<i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                        <input type="file" class="file-upload" onchange="ValidateSize(this)" name="file" type="file" id="exampleInputFile" required/>
                                    </button>
                                </span>
                                <input type="text" class="form-control file-upload-text" disabled placeholder="PDF, JPG o docxs máximo 2MB" required />

                            </div>
                            <div class="alert alert-danger alert-dismissible msj-file" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="text-left">
                                <button class="btn btn-success btn-group-xs" id="enviarsumate" name="send" type="submit" style="margin-top: 5%">Enviar</button>
                            </div>
                            <div class="clear"> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!--</div>
</div>
-->

<script src="js/envioMensajeSumate.js"></script>
