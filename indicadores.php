<style>
    /*73%
    100%
    80%*/

    #progressPercent {
        position: absolute;
        top: 73px;
        left: 80px;
        font-size: 30px;
        z-index: 3;
    }
    #progressWrap {
        display: inline-block;
        padding: 5px;
        /*background: #eeeeee;*/
        position: relative;
        /* top: 100px;
        left: 80px;*/
    }

    .ind_dos{
        text-align: center;
    }

    #circleBg
    {
        position: absolute;
        z-index: 0;
        top: 20px;
        left: 20px;
        width: 170px;
        height: 170px;
        border: 30px solid #3267D0;
        border-radius: 100%;
        /* background: #01bdf2;
       -webkit-box-shadow: inset 2px 1px 13px 7px rgba(107, 81, 85, 0.59);
        -moz-box-shadow: inset 2px 1px 13px 7px rgba(107, 81, 85, 0.59);
        box-shadow: inset 2px 1px 13px 7px rgba(107, 81, 85, 0.59);*/
    }
    #percentBg
    {
        position: absolute;
        z-index: 0;
        top: 42px;
        left: 42px;
        width: 125px;
        height: 125px;
        border-radius: 100%;
    }

    #myCanvas
    {
        position: relative;
        z-index: 1;
        transform: rotate(-90deg);
    }
    #progressPercent2
    {
        position: absolute;
        top: 73px;
        left: 80px;
        font-size: 30px;
        z-index: 3;
    }
    #progressWrap2
    {
        display: inline-block;
        padding: 5px;
        /*background: #eeeeee;*/
        position: relative;
        /* top: 100px;
        left: 80px;*/
    }
    #circleBg2
    {
        position: absolute;
        z-index: 0;
        top: 20px;
        left: 20px;
        width: 170px;
        height: 170px;
        border: 30px solid #6A1B99;
        border-radius: 100%;
    }
    #percentBg2
    {
        position: absolute;
        z-index: 0;
        top: 42px;
        left: 42px;
        width: 125px;
        height: 125px;
        border-radius: 100%;
    }

    #myCanvas2
    {
        position: relative;
        z-index: 1;
        transform: rotate(-90deg);
    }

    #progressPercent3 {
        position: absolute;
        top: 73px;
        left: 80px;
        font-size: 30px;
        z-index: 3;
    }
    #progressWrap3 {
        display: inline-block;
        padding: 5px;
        /*background: #eeeeee;*/
        position: relative;
        /* top: 100px;
        left: 80px;*/
    }

    #circleBg3
    {
        position: absolute;
        z-index: 0;
        top: 20px;
        left: 20px;
        width: 170px;
        height: 170px;
        border: 30px solid #6EA100;
        border-radius: 100%;
    }
    #percentBg3
    {
        position: absolute;
        z-index: 0;
        top: 42px;
        left: 42px;
        width: 125px;
        height: 125px;

        border-radius: 100%;
    }

    #myCanvas3
    {
        position: relative;
        z-index: 1;
        transform: rotate(-90deg);
    }


    .mensajecomentario,.mailcomentario, .nombrecomentario, .organismocomentario{
        display: none;
    }
</style>



<!-- COMENTARIOS -->

<section id="indicadores" style="background: #E5EAEB">
    <div class="container">
        <div class="row">
            <h2 style="text-align: center">Indicadores de rendimiento</h2>
            <p class="t-16 text-center">A fines de mejorar nuestro desempeño medimos los resultados de los proyectos implementados</p>
                <br>

            <div class="col-xs-12 col-md-4">
                <div class="ind_dos">
                <div id="progressWrap" class="">
                    <span id="progressPercent" class="text-primary h4"></span>
                    <div id="circleBg"></div>
                    <div id="percentBg"></div>
                    <canvas id="myCanvas" width="200" height="200">
                        Your browser doesn't support fancy progressbar.
                    </canvas>
                </div>
                </div>
                <h5 class="text-center text-black">Satisfacción</h5>
                <p class="text-center t-14">Grado de cumplimiento con las especificaciones del producto y gestión del proyecto.</p>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="ind_dos">
                    <div id="progressWrap2">
                        <span id="progressPercent2" class="text-uva h4">70%</span>
                        <div id="circleBg2"></div>
                        <div id="percentBg2"></div>
                        <canvas id="myCanvas2" width="200" height="200">
                            Your browser doesn't support fancy progressbar.
                        </canvas>
                    </div>
                </div>
                <h5 class="text-center text-black">Calidad</h5>
                <p class="text-center t-14">Nivel de profesionalismo ponderado por <strong>nuestros clientes</strong>.</p>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="ind_dos">
                <div id="progressWrap3">
                    <span id="progressPercent3" class="text-verdin h4">70%</span>
                    <div id="circleBg3"></div>
                    <div id="percentBg3"></div>
                    <canvas id="myCanvas3" width="200" height="200">
                        Your browser doesn't support fancy progressbar.
                    </canvas>
                </div>
                </div>
                <h5 class="text-center text-black">Recomendaciones</h5>
                <p class="text-center t-14">Probabilidad de que nuestros clientes nos recomienden.</p>
            </div>

        </div>
    </div>
</section>
<script>

    let canvas = document.getElementById('myCanvas');
    let context = canvas.getContext('2d');
    let centerX = canvas.width / 2;
    let centerY = canvas.height / 2;
    let radius = 70;
    let per = (7.6/5)*1;
    document.getElementById("progressPercent").
        innerHTML =  Math.round((per/2)*100)+"%";
    context.beginPath();
    context.arc(centerX, centerY, radius,
        0, per* Math.PI,false);
    context.lineWidth = 30;
    context.lineCap = 'round';
    context.strokeStyle = '#70B2FB';
    //context.shadowBlur = 20;
    //context.shadowColor ="black";
    context.stroke();


    let canvas2 = document.getElementById('myCanvas2');
    let context2 = canvas2.getContext('2d');
    let centerX2 = canvas2.width / 2;
    let centerY2 = canvas2.height / 2;
    let radius2 = 70;
    let per2 = (9.3/5)*1;
    document.getElementById("progressPercent2").
        innerHTML = Math.round((per2/2)*100)+"%";
    context2.beginPath();
    context2.arc(centerX2, centerY2, radius2,
        0, per2* Math.PI, false);
    context2.lineWidth = 30;
    context2.lineCap = 'round';
    context2.strokeStyle = '#AB5ECF';
    context2.stroke();

    let canvas3 = document.getElementById('myCanvas3');
    let context3 = canvas3.getContext('2d');
    let centerX3 = canvas3.width / 2;
    let centerY3 = canvas3.height / 2;
    let radius3 = 70;
    let per3 = (8.0/5)*1;
    document.getElementById("progressPercent3").
        innerHTML = Math.round((per3/2)*100)+"%";
    context3.beginPath();
    context3.arc(centerX3, centerY3, radius3,
        0, per3* Math.PI, false);
    context3.lineWidth = 30;
    context3.lineCap = 'round';
    context3.strokeStyle = '#A8CD00';
    context3.stroke();
</script>
