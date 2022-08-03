<?php include("conexion.php");?>
<?php
$datos = mysql_fetch_array(mysql_query("SELECT * FROM datos_contacto WHERE dtc_id=1",$conexion));
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	
<?php include("google-analytics.php");?>

	
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
	
	
	
	<?php include("config-general/chatDrift.php");?>
	
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '232703400481447');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=232703400481447&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
	
	
<script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '56e7d1b0b9823d88a5883c8cc79f3edc9524306e');
</script>
	
</head>

<body data-spy="scroll" data-offset="80">
	
	<?php //include("exit-popup.php");?>
	
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


<?php include("menu.php");?>


    <!-- Banner -->

	


    <!-- Main Content -->

    <div class="main-content">

        <!-- How it Works -->

        <section id="how-it-works" class="overview-block-ptb it-works grey-bg">
        <div class="container">
            <div class="iq-box-shadow iq-pt-60 white-bg iq-mt-60">
                <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-7">Promesas PSINTIA</h3>
                        <p>Como empresa pensamos en nuestros clientes y queremos brindarle la mayor seguridad y tranquilidad mediante nuestras 3 promesas principales.<br>
						<span style="font-size: 16px;"><b>NOTA:</b> Los puntos corresponden a porcentajes de descuento que se aplicarán en la renovación de la próxima licencia o en dinero al finalizar la licencia de uso.</p></span>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-md-4">
                    <div class="iq-works-box text-center">
                        <img src="images/services/icon1.png" alt="#">
                        <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Cumplimiento</h5>
                        <p>Si usted no se siente satisfecho con la plataforma <b>tiene 90 días para solicitar la devolución total de su dinero</b>. Queremos que usted compre con <b>tranquilidad y seguridad</b>.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="iq-works-box text-center">
                        <img src="images/services/icon2.png" alt="#">
                        <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Atención</h5>
                        <p>Responderemos su petición, queja o inquietud en un máximo de 10 minutos; de lo contrario le daremos 100 puntos.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="iq-works-box text-center">
                        <img src="images/services/icon3.png" alt="#">
                        <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Funcionalidad</h5>
                        <p>Si usted requiere un informe que la plataforma no tenga, lo solicita, y entre 1 y 7 días lo tendrá, de lo contrario le daremos 100 puntos.</p>
                    </div>
                </div>
            </div>
			
			<p align="center"><a href="prueba-gratis.php" class="button bt-black iq-mt-10 iq-mb-50 page-scroll" style="background-color: #EB4132; color: white;"><img src="files-general/iconos/etiqueta.png" width="20"> PRUEBA GRATIS</a></p>
			
            </div>
        </div>
    </section>

        <!-- How it Works END -->




        <!-- Clients -->

        <?php include("seccion-clientes.php");?>

        <!-- Clients END -->
    </div>

    <!-- Main Content END -->


    <!-- Footer -->

    <footer>


        <!-- Footer Info -->

        <p>&nbsp;</p><p>&nbsp;</p>
		<?php include("seccion-footer.php");?>

        <!-- Footer Info END -->

    </footer>

    <!-- Footer END -->

    <!-- back-to-top -->
	
	<?php include("seccion-js.php");?>

</body>


<!-- Mirrored from iqonicthemes.com/themes/sofbox/v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 18:25:56 GMT -->
</html>