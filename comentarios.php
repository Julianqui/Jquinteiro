<style>
    .mensajecomentario,.mailcomentario, .nombrecomentario, .organismocomentario,#response{
        display: none;
    }
</style>
<section id="contacto" class="well derivador" style="background-image: url('img/dejanos-tu-comentario.png'); width: 100%; position: absolute; margin: 0px!important; ;">
    <div class="container">
        <div class="row">
                <div class=" " style=" ">
                    <div class="m-t-2 m-b-2" style="color: white; font-weight: 900">
                            <p>Si sos un organismo público o querés saber más de nuestros
                                    productos.
                                <br>
                                <br>
                                <strong>DEJANOS TU COMENTARIO.</strong>
                            </p>
                    </div>
                </div>
        </div>
    </div>

</section>
<section>
    <div class="container">
          <div class="row">
                <div class="col-sm-6 t-14">
                      <h5 style="margin-top: 5em;" class="h3 text-black">¡Estemos en contacto!</h5>
                       <p><strong>Dirección</strong>: Av. Roque Saenz Peña 555, Piso 8.<br>
                            Ciudad Autónoma de Buenos Aires.<br>
                           <strong> Código postal</strong>: C1035AAP<br>
                           <strong>Teléfono</strong>: 5985 - 8700<br>
                          <!-- <strong>Correo electrónico</strong>: <a href="mailto:rrhh.simplificacion@gmail.com">rrhh.simplificacion@gmail.com</a>-->
                            <br><br>

                        <!-- FIN CONTACTO -->
                    </div>
                <div class="col-sm-6">
                      <!-- Card -->
                        <div class="card">
                            <!-- Card body -->
                            <div class="card-body bg-white sombra" >

                                <form method="post" class="p-x-2 p-y-2">

                                    <div id="response"> </div>

                                    <label for="" class="text-muted" style="color:#333333;"> Organismo</label>

                                    <br>

                                    <input id="organismocomentario" type="text" placeholder="Organismo" class="form-control"  name="customer_name" required />
                                    <div class="alert alert-danger alert-dismissible organismocomentario" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <label for="" class="text-muted" style="color:#333333;">Nombre</label>

                                    <br>
                                    <input id="nombrecomentario" type="text" placeholder="Nombre y Apellido" class="form-control"  name="nombrecomentario" required />
                                    <div class="alert alert-danger alert-dismissible nombrecomentario" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <label for="" class="text-muted" style="color:#333333;">Mail</label>

                                    <br>

                                    <input id="mailcomentario" type="email" class="form-control" placeholder="tu@email.com"  name="mailcomentario" required />
                                    <div class="alert alert-danger alert-dismissible mailcomentario" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>

                                    <label for="" class="text-muted" style="color:#333333;">Mensaje</label>

                                    <br>

                                     <textarea maxlength="500" name="mensajecomentario" id="mensajecomentario" class="form-control" rows="4" placeholder="Escribí tu mensaje...." required /></textarea>
                                    <div class="alert alert-danger alert-dismissible mensajecomentario" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>

                                    <div class="">
                                        <button id="enviarcomentario" class="btn btn-success btn-group-xs" name="send" type="submit">Enviar</button>
                                    </div>

                                    <div class="clear"> </div>
                              </form>
                                </div>

                        </div>
                            <!-- Card body -->

                        </div>
                        <!-- Card -->
                    </div>
              </div>


</section>

<div style="background-color: #E5EAEB">

<!-- FIN COMENTARIOS -->
    <script src="js/envioMensaje.js"></script>
