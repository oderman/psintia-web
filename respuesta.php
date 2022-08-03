<?php include("conexion.php");?>
<?php
$datos = mysql_fetch_array(mysql_query("SELECT * FROM datos_contacto WHERE dtc_id=1",$conexion));
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<?php include("google-analytics.php");?>
	
	<!-- Global site tag (gtag.js) - Google Ads: 700089648 PARA EL SEGUIMIENTO DE LAS CAMPAÑAS CON LA CUENTA DE oderman2020@gmail.com -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-700089648"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-700089648');
	</script>
	
	


	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="PLataforma educativa, software educativo, software de notas" />
    <meta name="description" content="La pLataforma educativa SINTIA es una plataforma para instituciones educativas, les permite gestionar las áreas académicas, financieras, disciplinarias, social y administrativa." />
    <meta name="author" content="ODERMAN" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>PLataforma educativa SINTIA, Respuesta de la plataforma SINTIA</title>
    
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
	
	
<?php 
	//inicia prueba de DEMO
	if($_GET["msg"]==1){?>
	<script>
	  fbq('track', 'StartTrial');
	</script>
<?php }?>
	
	
<?php 
	//inicia proceso de pago por transferencia o consignacion
	if($_GET["msg"]==2){?>
	<script>
	  fbq('track', 'InitiateCheckout');
	</script>
	
	<!-- Event snippet for Comenzar compra conversion page -->
	<script>
	  gtag('event', 'conversion', {'send_to': 'AW-700089648/SSJuCKiEi84BELCK6s0C'});
	</script>
<?php }?>	
	

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

    <!-- loading -->

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

    <header id="header-wrap">
        <div class="navbar navbar-default navbar-fixed-top menu-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">
                        <img class="img-responsive" src="images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <a href="#" class="button bt-black pull-right visible-lg"><i class="ion-ios-unlocked-outline"></i></a>
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php">Inicio</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Header End -->


    <!-- Banner -->

    <section id="iq-home" class="iq-banner overview-block-pt iq-bg iq-bg-fixed iq-over-blue-90" style="background: url(images/bg/02.jpg);">

    </section>

    <!-- Banner End -->


    <!-- Main Content -->

    <div class="main-content">


     <!-- Frequently Asked Questions -->

        <section class="overview-block-ptb white-bg iq-asked">
			<?php if($_GET["msg"]==1){?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">PRUEBA GRATIS ACTIVADA</h3>
							<p>Genial! Hemos creado su cuenta de prueba, que podrá utilizar gratuitamente durante los próximos <b>14 días</b>. Acceda a su correo registrado que ahí le enviamos sus credenciales de acceso a la cuenta.</p>
							
							<p>
								<b>ASESOR PERSONALIZADO</b><br>
								También le hemos asignado un asesor personalizado para que le ayude en lo que usted requiera.<br>
								Los datos del asesor también los podrá encontrar en su correo.
							</p>
                        </div>
                    </div>
                </div>
				
                <div class="row">
                    <div class="col-md-12">
						<iframe width="100%" height="380" src="https://player.vimeo.com/video/363173717" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="z-index: 9; position: relative;"></iframe>
                    </div>
					
                </div>
				
            </div>
			<?php }?>
			
			
			<?php if($_GET["msg"]==2){?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">PAGO</h3>
							<p>Puedes hacer el pago mediante transferencia o consignación bancaria. También lo puedes hacer mediante Efecty, GANA o BALOTO con el DNI del titular. Si deseas pagar en efectivo puedes comunicarte con nosotros a los números que están en el pie de página.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
						<iframe width="500" height="380" src="https://www.youtube.com/embed/g2LSYPm7hR4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="z-index: 9; position: relative;"></iframe>
                    </div>
					
                    <div class="col-sm-12 col-md-6">
						<div class="iq-get-in">
							<h6 class="title iq-tw-7">Saldo total a pagar: $<?=number_format($_GET["saldo"],0,",",".");?> COP.</h6>
							<h6 class="title iq-tw-7">Cantidad de estudiantes: <?=$_GET["est"];?></h6>
							<p>&nbsp;</p>
							<h6 class="title iq-tw-7">Cuenta de ahorros Bancolombia #: 431 565 88 254</h6>
							<h6 class="title iq-tw-7">Titular de la cuenta: JHON ODERMAN MEJÍA MARTINEZ</h6>
							<h6 class="title iq-tw-7">DNI del titular: 1.051.820.890</h6>
							<a href="recibo.php?est=<?=$_GET["est"];?>&saldo=<?=$_GET["saldo"];?>&nombre=<?=$_GET["nombre"];?>&email=<?=$_GET["email"];?>&inst=<?=$_GET["inst"];?>&ref=<?=$_GET["ref"];?>" class="button iq-mt-30" target="_blank">IMPRIMIR RECIBO</a>
						</div>
                    </div>
					
                </div>
            </div>
			<?php }?>
			

        </section>

        <!-- Frequently Asked Questions END -->

    </div>

    <!-- Main Content END -->


    <!-- Footer -->

    <footer>


		<?php include("seccion-footer.php");?>

    </footer>

    <!-- Footer END -->

    <!-- back-to-top -->

    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>

    <!-- back-to-top End -->

    <!-- style-customizer --
    <div class="iq-customizer closed">
        <div class="buy-button"> <a class="opener" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
        <div class="clearfix content-chooser">
            <h3 class="iq-font-black">Appino Awesome Color</h3>
            <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
            <ul class="iq-colorChange clearfix">
                <li class="color-1 selected" data-style="color-1"></li>
                <li class="color-2" data-style="color-2"></li>
                <li class="color-3" data-style="color-3"></li>
                <li class="color-4" data-style="color-4"></li>
                <li class="color-5" data-style="color-5"></li>
                <li class="color-6" data-style="color-6"></li>
                <li class="color-7" data-style="color-7"></li>
                <li class="color-8" data-style="color-8"></li>
            </ul>
            <a target="_blank" class="button" href="#">Purchase Now</a>
        </div>
    </div>
    <!-- style-customizer END -->


    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- owl-carousel -->
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Counter -->
    <script type="text/javascript" src="js/counter/jquery.countTo.js"></script>

    <!-- Jquery Appear -->
    <script type="text/javascript" src="js/jquery.appear.js"></script>

    <!-- Magnific Popup -->
    <script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Retina -->
    <script type="text/javascript" src="js/retina.min.js"></script>

    <!-- wow -->
    <script type="text/javascript" src="js/wow.min.js"></script>

    <!-- Countdown --
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
	-->

    <!-- Skrollr -->
    <script type="text/javascript" src="js/skrollr.min.js"></script>

    <!-- bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Style Customizer -->
    <script type="text/javascript" src="js/style-customizer.js"></script>

    <!-- Custom -->
    <script type="text/javascript" src="js/custom.js"></script>

</body>


<!-- Mirrored from iqonicthemes.com/themes/sofbox/v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 18:25:56 GMT -->
</html>