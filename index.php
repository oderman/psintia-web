<?php 
require_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <?php include("google-analytics.php"); ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="PLataforma educativa, software educativo, software de notas, 1000 matrículas en 10 segundos, PLataforma educativa en colombia, PLataforma educativa en Medellín, Software de notas para colegios en Colombia, plataforma académica, plataforma académica en colombia" />
    <meta name="description" content="La pLataforma educativa SINTIA es una plataforma para instituciones educativas. SINTIA valora tu tiempo y te garantiza 1.000 matrículas en 10 segundos. SINTIA les permite gestionar las áreas académicas, financieras, disciplinarias, social, administrativa y de mercadeo." />
    <meta name="author" content="ODERMAN" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta name="google-site-verification" content="uwa8pV65npIhf68OdLi3hQYyYecZHoBFEBA8pF3DSzY" />

    <title>PLataforma educativa SINTIA, una plataforma para colegios</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;Raleway:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" href="css/style-customizer.css" />

    <!-- custom style -->
    <link rel="stylesheet" href="css/custom.css" />

    <!-- exit popup --
	<link rel="stylesheet" type="text/css" href="librerias/exit-popup/style.css" />
	<script type="text/javascript" src="librerias/exit-popup/exit.js"></script>
-->



    <?php include("config-general/chatDrift.php"); ?>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '232703400481447');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=232703400481447&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->



    <script type='text/javascript'>
        window.smartlook || (function(d) {
            var o = smartlook = function() {
                    o.api.push(arguments)
                },
                h = d.getElementsByTagName('head')[0];
            var c = d.createElement('script');
            o.api = new Array();
            c.async = true;
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.src = 'https://rec.smartlook.com/recorder.js';
            h.appendChild(c);
        })(document);
        smartlook('init', '56e7d1b0b9823d88a5883c8cc79f3edc9524306e');
    </script>

</head>

<body data-spy="scroll" data-offset="80">

    <?php //include("exit-popup.php");
    ?>

    <!-- loading --

    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- loading End -->


    <!-- Header -->

    <?php include("menu.php"); ?>


    <!-- Banner -->


    <section id="iq-home" class="iq-banner overview-block-pt iq-bg iq-bg-fixed iq-over-blue-90" style="background: url(images/bg/02.jpg);">
        <div class="container">
            <div class="banner-text text-center" style="margin-top: -10px;">
                <div class="row">
                    <div class="col-md-12">

                        <h1 class="iq-tw-8" style="color: white;">LA PLATAFORMA DE GESTIÓN ESCOLAR, FÁCIL, COMPLETA Y SEGURA PARA LOS COLEGIOS</h1>


                        <a href="prueba-gratis.php" class="button bt-black iq-mt-10 iq-mb-50 page-scroll" style="background-color: #EB4132; color: white;"><img src="files-general/iconos/etiqueta.png" width="20"> PRUEBA GRATIS</a>

                        <a href="https://api.whatsapp.com/send?phone=573007304428&text=Hola, tengo una consulta sobre la Plataforma SINTIA." class="button bt-black iq-mt-10 iq-mb-50 page-scroll" target="_blank" style="background-color: #31A952; color: white;"><img src="files-general/iconos/whatsapp.png" width="20"> WhatsApp: 3007304428</a>

                    </div>
                    <div class="col-md-12">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/n2DYlwMgxuY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            <span class="banner-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-50px);">
                <img src="images/drive/03.png" alt="drive02">
            </span>


            <span class="banner-objects-02 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
            <span class="banner-objects-03 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
            <span class="banner-objects-04" data-bottom="transform:translatex(100px)" data-top="transform:translatex(-100px);">
                <img src="images/drive/04.png" alt="drive02">
            </span>
        </div>
    </section>

    <!-- Banner End -->


    <!-- Main Content -->

    <div class="main-content">

        <!-- How it Works -->



        <!-- How it Works END -->


        <!-- Software Features -->









        <!-- Counter -->



        <!-- Counter END -->



        <section id="how-it-works" class="overview-block-ptb it-works grey-bg">
            <div class="container">
                <div class="iq-box-shadow iq-pt-60 white-bg iq-mt-60">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="heading-title">
                                <h3 class="title iq-tw-7">¿POR QUÉ USAR SINTIA?</h3>
                                <p style="font-size: 20px; text-align: left;">
                                    <b>1.</b> Porque usted necesita una plataforma que le ahorre tiempo.<br>
                                    <b>2.</b> Porque su información estará segura y disponible cuando la requiera.<br>
                                    <b>3.</b> Porque si nuestra plataforma no lo satisface le devolvemos el 100% de su dinero.
                                </p>
                            </div>

                            <div style="border: 1px solid #CCC; background-color: #337ab7; padding: 10px; margin-top: 20px; margin: 20px;">
                                <h5 style="color: white; text-align: center;">
                                    QUEREMOS SU SATISFACCIÓN TOTAL.
                                </h5>
                            </div>

                        </div>
                    </div>

                    <p align="center"><a href="prueba-gratis.php" class="button bt-black iq-mt-10 iq-mb-50 page-scroll" style="background-color: #EB4132; color: white;"><img src="files-general/iconos/etiqueta.png" width="20"> PRUEBA GRATIS</a></p>

                </div>
            </div>

            <div class="iq-pt-80 iq-counter-box iq-bg iq-bg-fixed iq-over-black-80 iq-font-white" style="background: url(images/bg/02.jpg);">
                <div class="container">
                    <!--
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 text-left">
                        <div class="counter"> <i class="ion-ios-folder-outline " aria-hidden="true"></i>
                            <label class="iq-font-white text-uppercase">DESCARGAS</label>
                            <span class="timer iq-tw-7 iq-font-blue" data-to="1540" data-speed="10000">247000</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-left re4-mt-50">
                        <div class="counter"> <i class="ion-ios-paper-outline " aria-hidden="true"></i>
                            <label class="iq-font-white text-uppercase">CLIENTES FELICES</label>
                            <span class="timer iq-tw-7 iq-font-blue" data-to="1235" data-speed="10000">1235</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-left re-mt-50">
                        <div class="counter"> <i class="ion-ios-person-outline " aria-hidden="true"></i>
                            <label class="iq-font-white text-uppercase">USUARIOS ACTIVOS</label>
                            <span class="timer iq-tw-7 iq-font-blue" data-to="617500" data-speed="10000">617.500</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-left re-mt-50">
                        <div class="counter"> <i class="ion-ios-star " aria-hidden="true"></i>
                            <label class="iq-font-white text-uppercase">CIUDADES</label>
                            <span class="timer iq-tw-7 iq-font-blue" data-to="26" data-speed="10000">26</span>
                        </div>
                    </div>
                </div>
				-->

                    <div class="counter-info iq-mt-60 iq-pt-40">
                        <div class="row">
                            <div class="col-md-6">
                                <p>La plataforma SINTIA cuenta con un DEMO online, el cual usted puede ingresar de forma automática con las credenciales de acceso. También cuenta con video tutoriales por cada una de las pantallas y módulos para mejorar la experiencia del usuario.</p>
                                <p>Para hacer uso del DEMO GRATUITO puede contactarnos o <b>ingresar ahora mismo</b> haciendo click en el botón de abajo.</p>
                                <p><a href="prueba-gratis.php" class="button bt-black iq-mt-10 iq-mb-50 page-scroll" style="background-color: #EB4132; color: white;"><img src="files-general/iconos/etiqueta.png" width="20"> PRUEBA GRATIS</a></p>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-info-img">
                                    <img class="center-block" src="images/drive/07.png" alt="">
                                    <a href="https://www.youtube.com/watch?v=g2LSYPm7hR4" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
                                    <div class="iq-waves">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="iq-box-shadow iq-pt-60 white-bg iq-mt-60">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="heading-title">
                                <h3 class="title iq-tw-7">PASO A PASO</h3>
                                <p style="font-size: 16px; text-align: left;"></p>
                            </div>

                            <img src="files-general/imagenes/pasoapaso.png" width="100%">

                        </div>
                    </div>

                    <p align="center"><a href="prueba-gratis.php" class="button bt-black iq-mt-10 iq-mb-50 page-scroll" style="background-color: #EB4132; color: white;"><img src="files-general/iconos/etiqueta.png" width="20"> PRUEBA GRATIS</a></p>

                </div>
            </div>
        </section>



        <?php include("respaldo.php"); ?>


        <!-- Affordable Price -->



        <!-- Affordable Price END -->



        <!-- Frequently Asked Questions -->



        <!-- Frequently Asked Questions END -->


        <!-- Clients -->

        <?php include("seccion-clientes.php"); ?>

        <!-- Clients END -->
    </div>

    <!-- Main Content END -->


    <!-- Footer -->

    <footer>


        <!-- Footer Info -->


        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <?php include("seccion-footer.php"); ?>

        <!-- Footer Info END -->

    </footer>

    <!-- Footer END -->

    <!-- back-to-top -->

    <?php include("seccion-js.php"); ?>

</body>


<!-- Mirrored from iqonicthemes.com/themes/sofbox/v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 18:25:56 GMT -->

</html>