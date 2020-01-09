<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>

</head>
<body>
<div class="modal fade bd-contacto-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-contacto">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div>
                <form id="prodmodal" method="post" class="p-x-2 p-y-2" action="sendemailModal.php">
                    <p class="text-center"><strong>Escribinos, ¡no seas timido!</strong></p>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <label for="defaultFormCardNameEx" class="text-muted" style="margin-top: 10%">Producto</label>
                            <select id="producto" class="form-control" name="producto" style="width: 100%">
                                <option value="Jimenez">Jimenez</option>
                                <option value="Fiscalizar">Fiscalizar</option>
                                <option value="Moto">Moto</option>
                                <option value="Tablero de gestión">Tablero de gestión</option>
                                <option value="Trámites municipales">Trámites municipales</option>
                                <option value="Trámites municipales">Concili.Ar</option>
                                <option value="Trámites municipales">Libro de reclamos y sugerencias</option>
                            </select>
                        </div>
                    </div>
                    <label for="" class="text-muted" style="margin-top: 40%">Organismo</label>
                    <br>
                    <input id="organismo" type="text" placeholder="Organismo" class="form-control"  name="organismo" required />
                    <div class="alert alert-danger alert-dismissible organismo" role="alert">
<!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    </div>
                    <label for="" class="text-muted">Nombre</label>
                    <br>
                    <input id="nombre" type="text" placeholder="Nombre y Apellido" class="form-control"  name="nombre" required />
                    <div class="alert alert-danger alert-dismissible nombre" role="alert">
<!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    </div>
                    <label for="" class="text-muted">Mail</label>
                    <br>
                    <input id="mail" type="email" class="form-control" placeholder="tu@email.com"  name="mail" required/>
                    <div class="alert alert-danger alert-dismissible mail" role="alert">
<!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    </div>
                    <label for="" class="text-muted">Mensaje</label>
                    <br>
                    <textarea maxlength="500" id="mensajemodal" name="mensaje" class="form-control" placeholder="Escribí tu mensaje ...." required /></textarea>
                    <div class="alert alert-danger alert-dismissible mensajemodal" role="alert">
<!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    </div>
                    <div class="enviar">
                        <div class="contact-check">
                        </div>
                        <div class="" style="text-align: right">
                            <a href="../index.php"><button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button></a>
                            <button class="btn btn-success btn-group-xs" id="enviar" name="send" type="submit">Enviar</button>
                        </div>
                        <div class="clear"> </div>
                        <div id="responsemodal"></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="js/envioModalMensaje.js"></script>

</body>
</html>