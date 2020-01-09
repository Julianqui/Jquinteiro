<style>
    .slider-size {
        height: 450px;
    }

    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0.6;
        transition: all 0.2s ease-out;
    }


    .product, .product--blue, .product--orange, .product--red, .product--green {
      /*  box-shadow: 1px 5px 15px #CCC;*/
        width: 100%;
        height: auto;
        /*  border-radius: 3px;
       padding: 2em;*/
        padding: 1em 0em;
        margin: 0em;
        overflow: hidden;
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: auto;
        flex: auto;
    }
    .product--blue {

        background-image: url('img/slider/tecnologia-rpa.jpg');
        padding: 10em 0em;
        background-position: top center;
    }
      .product--orange {
          background-image: url('img/slider/tecnologia-app.jpg');
          padding: 10em 0em;
          background-position: top center;
    }
    .product--red {
        background-image: url('img/slider/tecnologia-ia.jpg');
        padding: 10em 0em;
        background-position: top center;
    }
    .product--green {
        background-image: url('img/slider/tecnologia-blockchain.jpg');
        padding: 10em 0em;
        background-position: top center;
    }

    .product img, .product--blue img, .product--orange img, .product--red img, .product--green img, .product--yellow img, .product--pink img {
        max-width: 100%;
        height: auto !important;
        text-align: center;
    }
    .product_inner {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-flow: column wrap;
        flex-flow: column wrap;
    }

    .product_inner button {
        border: 1px solid rgba(255, 255, 255, 0.5);
        color: #FFF;
        border-radius: 3px;
        padding: 1em 3em;
        margin: 1em 0 0 0;
        background: none;
        cursor: pointer;
        -webkit-transition: background ease-in .25s;
        transition: background ease-in .25s;
    }
    .product_inner button:hover {
        background: white;
        color: #2B2D42;
    }

    .product_inner button:hover:before {
        color: #2B2D42;
    }
    .product_overlay {
        background: black;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-500px);
        transform: translateY(-500px);
        opacity: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-flow: column wrap;
        flex-flow: column wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: left;
        /*padding: 1em;*/
    }
    .product_overlay button:hover{
        color: #adadad;
    }

    .btn:active:focus, .btn:focus{
        outline: 0px auto -webkit-focus-ring-color;
    }


    .product_overlay h4 {
        color: white;
       /* margin: 1em 0 0 0;*/
        font-size: 1.3em;
        padding: 0em 2em 0em 1.6em;
    }

    .product_overlay p {
        color: white;
        font-size: 1em;
        padding: 0em 2em 0em 2em;

    }


    /* Flexbox stuff */

    @media screen and (min-width: 40em) {
        .content-product {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product, .product--blue, .product--orange, .product--red, .product--green {

            flex: 0 1 calc(100% - 0em);
        }
    }

    @media screen and (min-width: 60em) {

        .product, .product--blue, .product--orange, .product--red, .product--green {

            flex: 0 1 calc(50% - 0em);
        }
    }


</style>


<section id="section-1" class="padding-0 p-b-0" style="background:#0b0b0b;">
     <!--   <h2 class="" style="text-align:center;color:white;">Nuevas tecnologías</h2>-->

    <div class='content-product'>
        <div class='product--blue'>
            <div class='product_inner'>
            
                <h4 class="text-center" style="color: white;"> Automatización Robótica de Procesos – RPA</h4>
                <button class="btn btn-outline-dark text-uppercase">¿Cómo la aplicamos?</button>
            </div>
            <div class='product_overlay'>
                <button type="button" class="closeCard btn btn-xs" style="font-size: 30px;top:10px;position: absolute;text-align: right;right: 10px; background: black;color:white;" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="header-tec" style="margin-left:35px;width:25%;">
                  <h4 class="bg-primary text-white t-12 text-uppercase" style="text-align:center;color: white;padding: 8px;font-weight:900;"> 
                        Nuevas tecnologías
                    </h4>
                </div>
            
                <h4 class="text-left" style="color: white;"> Automatización Robótica de Procesos – RPA</h4>
                <p>Hemos iniciado el camino de la  <strong>automatización de procesos de negocio</strong>, desarrollando aplicaciones
                    o robots de software que emulan la labor humana. Partiendo de la diagramación de un flujo de proceso
                    y la identificación de las reglas de negocio clave, se configura el mismo por código,
                    recurriendo a consultas de base de datos y cálculos que permitan la toma de decisiones autónoma.
                    Entre sus ventajas:<br><br>
                    <strong>Velocidad de resolución</strong>.<br>
                    <strong>Disponibilidad continua</strong> de trabajo. <br>Facilita la práctica de trabajo <strong>ex post</strong> de la administración pública.</p>
            </div>
        </div>

        <div class='product--orange'>
            <div class='product_inner'>
                <h4 class="" style="color: white;"> Aplicaciones móviles</h4>
                 <button class="btn btn-outline-dark text-uppercase">¿En qué te beneficia?</button>
             </div>
             <div class='product_overlay'>
                 <button type="button" class="closeCard btn btn-xs" style="font-size: 30px;top:10px;position: absolute;text-align: right;right: 10px; background: black;color:white;" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 <div class="header-tec" style="margin-left:35px;width:25%;">
                  <h4 class="bg-primary text-white t-12 text-uppercase" style="text-align:center;color: white;padding: 8px;font-weight:900;"> 
                        Nuevas tecnologías
                    </h4>
                </div>
                 <h4 style="color: white;"> Aplicaciones móviles</h4>

                     <p>Innovamos procesos administrativos incorporando nuevas tecnologías y
                         aplicaciones que se adapten a diferentes dispositivos móviles.
                     </p>

                     <p>Nuestro conocimiento y experiencia en los procesos del Estado,
                         nos permitió desarrollar <strong>soluciones móviles escalables</strong>, capaces de
                         resolver demandas provenientes de contextos muy variados.
                         Entre sus ventajas:<br></p>

                     <p>Operar <strong>con y sin internet</strong>.<br>
                         Acceso <strong>rápido y sencillo</strong> a la información necesaria.<br>
                         <strong>Versatilidad</strong> en cuanto a su utilización o aplicación práctica.<br>
                         <strong>Menor costo</strong> de infraestructura. </p>

             </div>
         </div>
         <div class='product--red'>
             <div class='product_inner'>
                 <h4 style="color: white;"> Inteligencia artificial</h4>
                 <button class="btn btn-outline-dark text-uppercase">¿Dónde la aplicamos?</button>
               </div>
               <div class='product_overlay'>
                   <button type="button" class="closeCard btn btn-xs" style="font-size: 30px;top:10px;position: absolute;text-align: right;right: 10px; background: black;color:white;" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
                   <div class="header-tec" style="margin-left:35px;width:25%;">
                       <h4 class="bg-primary text-white t-12 text-uppercase" style="text-align:center;color: white;padding: 8px;font-weight:900;"> 
                            Nuevas tecnologías
                        </h4>
                  </div>
                   <h4 class="" style="color: white;"> Inteligencia artificial</h4>
                   <p>Creamos una herramienta capaz de planificar operativos de fiscalización de manera diaria, automática, no discrecional y tiene la capacidad de aprender de los resultados de las fiscalizaciones ejecutadas, refinando su grado de exactitud en las predicciones.</p>

                   <p><strong>¿Cómo funciona?</strong><br>
                       El algoritmo se integra al producto Fiscaliz.ar, definiendo el
                       plan de fiscalización y aprendiendo de los resultados de las
                       fiscalizaciones realizadas.</p>
               </div>
           </div>
           <div class='product--green'>
               <div class='product_inner'>

                   <h4 style="color: white;"> Blockchain</h4>
                   <button class="btn btn-outline-dark text-uppercase">¿Qué desarrollamos?</button>
                 </div>
                 <div class='product_overlay'>
                     <button type="button" class="closeCard btn btn-xs" style="font-size: 30px;top:10px;position: absolute;text-align: right;right: 10px; background: black;color:white;" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                     <div class="header-tec" style="margin-left:35px;width:25%;">
                    <h4 class="bg-primary text-white t-12 text-uppercase" style="text-align:center;color: white;padding: 8px;font-weight:900;"> 
                            Nuevas tecnologías
                        </h4>
                    </div>
                     <h4 style="color: white;"> Blockchain</h4>
                     <p>Los compromisos entre el Estado y privados (empresas y ciudadanos) serán más transparentes, trazables y seguros gracias al módulo multiservicios y portal de validación de blockchain. Integrándonos a la Blockchain Federal Argentina, vamos a lograr:</p>
                     <p><strong>Cero papel:</strong> Los acuerdos se encuentran en formato digital.</p>
                     <p><strong>Cero costo:</strong> La publicación de los acuerdos en la blockchain es gratis.</p>
                     <p><strong>Transparencia:</strong> Asegura la veracidad (fecha, hora y firmante) de los documentos públicos disponibilizando a terceros interesados un portal para su validación.</p>

                 </div>
             </div>
         </div>

     </section>

     <script>
         $(document).ready(function() {
              //function cards

             $("button").on("click", function() {

                 $(this).parent().parent().find(".product_overlay").css({
                     'transform': ' translateY(0px)',
                     'opacity': '1',
                     //'border': '1px solid #FFF',
                     'transition': 'all ease-in-out .65s'
                 });
             });
                 $(".closeCard").on("click", function() {
                     $(this).parent().parent().find(".product_overlay").css({
                         'transform': 'translateY(-500px)',
                         'opacity': '0',
                         //'border': '1px solid #FFF',
                         'transition': 'all ease-in-out .65s'
                     })
             });


        });
     </script>
