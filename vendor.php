<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simplificación tecnológica</title>
    <!--color navegacion chrome, firefox os, opera------->
    <meta name="theme-color" content="#0695d6" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/01_Favicon_Estados.png">

    <!-- STYLE SHEETS
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://keaukraine.github.io/bootstrap-fs-modal/dist/css/fs-modal.min.css'>


    <link href="css/templates.css" rel="stylesheet">
    <link href="css/roboto-fontface.css" rel="stylesheet">
    <link href="css/poncho.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/icono-arg.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">



    <!-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
     <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
     <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
 --->
    <link rel="stylesheet" href="css/remodal.css">
 <!--    <link rel="stylesheet" href="css/remodal-default-theme.css">-->

    <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149850396-1"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149850396-1');
    </script>

    <style>

    .accordion-container{
            position: relative;
            /*max-width: 500px;*/
            height: auto;
            cursor: pointer;
            margin: 10px auto;
        }
        .accordion-container > h2{
            cursor: pointer;
            text-align: center;
            color: #fff;
            padding-bottom: 5px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }
        .set{
            position: relative;
            width: 100%;
            height: auto;
            /*  background-color: #f5f5f5;*/
        }
        .set > span{
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #555;
            font-weight: 600;
            border-bottom: 1px solid #ddd;
            -webkit-transition:all 0.2s linear;
            -moz-transition:all 0.2s linear;
            transition:all 0.2s linear;
        }
        .set > span i{
            float: right;
            margin-top: 2px;
        }
        .set > span.active, .fa-minus {
            color:#3399cc;
            background-color: #fff !important;
        }
        .content{
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            display:none;
        }
        .content p{
            padding: 10px 15px;
            margin: 0;
            color: #333;
            font-size: 15px!important;
        }

        .content > ul > li{
            line-height: 25px;
            font-size: 15px;
        }
    input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
        color:    #909;
    }
    input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color:    #909;
        opacity:  1;
    }
    input::-moz-placeholder { /* Mozilla Firefox 19+ */
        color:    #909;
        opacity:  1;
    }
    input:-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #909;
    }

    input::placeholder {
        color: red;
    }

    </style>
</head>