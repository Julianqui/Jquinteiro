<!--NAV BAR-->
<!--style="margin-left: -10.4%"-->

<!--<button type="button" class="close" aria-label="Close">-->
<!--    <span aria-hidden="true">&times;</span>-->
<!--</button>-->


<!--<header id="start" class="cabezagrande">-->
<!--    <div class="navbar navbar-default">-->
<!--        <div class="container" style="box-shadow: 1px 1px 1px 1px #dee2e6; width: 100%">-->
<!--            <div class="container-fluid" id="navbar2">-->
<!--                <div class="navbar-header logo">-->
<!--                    <a class="navbar-brand" href="index.php"><img src="img/min-prodytrab-logo.svg" height="50" alt="Ministerio de Producción y Trabajo"></a>-->
<!--                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">-->
<!--                        <span class="sr-only">Burger</span>-->
<!--                        <span class="icon-bar" class="visible-xs"></span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                    </button>-->
<!--                </div>-->
<!--                <div class="collapse navbar-collapse navegacion" id="bs-example-navbar-collapse-1" aria-hidden="true" style="width: 100%">-->
<!--                    <ul class="nav navbar-nav navbar-right text-center">-->
<!--                        <li><a href="#section-1">Nuevas tecnologias</a></li>-->
<!--                        <li><a href="#soluciones">Soluciones</a></li>-->
<!--                        <li><a href="#indicadores">Indicadores</a></li>-->
<!--                        <li><a href="#metodo">Metodología</a></li>-->
<!--                        <li><a href="#contacto">Contacto</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->



<header id="start" class="cabezafija">
    <div class="navbar navbar-default">
        <div class="container" style="box-shadow: 1px 1px 1px 1px #dee2e6; width: 100%">
            <div class="container-fluid" id="navbar2">
                <div class="navbar-header logo">
                    <a class="navbar-brand" href="index.php"><img src="img/min-prodytrab-logo.svg" class="hidden-sm" height="50" alt="Ministerio de Producción y Trabajo"></a>
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                        <span class="sr-only">Burger</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navegacion" id="bs-example-navbar-collapse-1" aria-hidden="true" style="width: 100%">
                    <ul class="nav navbar-nav navbar-right text-center">
                        <li><a href="#section-1" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">Nuevas tecnologías</a></li>
                        <li><a href="#soluciones" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">Soluciones</a></li>
                        <li><a href="#indicadores" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">Indicadores</a></li>
                        <li><a href="#metodo" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">Metodología</a></li>
                        <li><a href="#contacto" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!--<nav class="cabezac navbar navbar-default" style="position: absolute">
        <div class="container" id="navbar" style="box-shadow: 1px 1px 1px 1px #dee2e6">
            <div class="container-fluid">-->

</header>

<header id="start" class="cabezac" style="position: absolute">
                    <nav class="navbar navbar-default">
                        <div class="container" id="navbar" style="box-shadow: 1px 1px 1px 1px #dee2e6">
                            <div class="container-fluid">

                <div class="navbar-header logo">
                    <a class="navbar-brand" href="index.php"><img src="img/min-prodytrab-logo.svg" height="50" alt="Ministerio de Producción y Trabajo"></a>
                    <button type="button" class="navbar-toggle collapsed pull-right visible-sm" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                        <span class="sr-only">Burger</span>
                        <span class="icon-bar" class="visible-xs"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navegacion" id="bs-example-navbar-collapse-1" aria-hidden="true">
                    <ul class="nav navbar-nav navbar-right text-center">
                        <li><a href="#section-1">Nuevas tecnologías</a></li>
                        <li><a href="#soluciones">Soluciones</a></li>
                        <li><a href="#indicadores">Indicadores</a></li>
                        <li><a href="#metodo">Metodología</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>







<script>
     var prevScrollpos = window.pageYOffset;
     window.onscroll = function() {
         var currentScrollPos = window.pageYOffset;
         if (prevScrollpos > currentScrollPos) {
             document.getElementById("navbar").style.top = "0";
         } else if (prevScrollpos === currentScrollPos){
             document.getElementById("navbar").style.top = "0";
         }
         else {
             document.getElementById("navbar").style.top = "-90px";
         }
        prevScrollpos = currentScrollPos;
     }

     var prevScrollpos2 = window.pageYOffset;
     window.onscroll = function() {
         var currentScrollPos2 = window.pageYOffset;
         if (prevScrollpos2 > currentScrollPos2) {
             document.getElementById("navbar2").style.top = "0";
         } else if (prevScrollpos2 === currentScrollPos2){
             document.getElementById("navbar2").style.top = "0";
         }
         else {
             document.getElementById("navbar2").style.top = "-90px";
         }
         prevScrollpos2 = currentScrollPos2;
     }

     // togle
     $(document).ready(function(){
         $("#primero").click(function(){
             $("ul").slideToggle();
         });
     });
</script>
