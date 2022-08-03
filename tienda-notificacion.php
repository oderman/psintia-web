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





    <!-- Header -->



    <?php include("menu2.php");?>





    <!-- Banner -->



	

    



    <!-- Banner End -->





    <!-- Main Content -->



    <div class="main-content">



        <!-- How it Works -->



        



        











        <!-- Counter -->



        



        <!-- Counter END -->



	

	

	

	



        <!-- Affordable Price -->



        <section  class="overview-block-ptb grey-bg iq-price-table">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="heading-title" style="margin-bottom: -10px;">

                            <h3 class="title iq-tw-7" id="pricing">Servicio de notificaciones</h3>

							<!--

                            <p>La inversión en SINTIA depende del número de estudiantes, y es realmente ecónomica teniendo en cuenta las bondades de la plataforma y el servicio post venta que ofrecemos. <b>Es un acompañamiento permanente.</b> Adicionalmente, el acudiente podrá ingresar con su propio PIN a la plataforma y recibir las notificaciones sin costo adicional. </p>

							-->



                        </div>



                    </div>

                </div>

                <div class="row">

                    

					<div class="col-sm-4 col-md-4">

						<div class="iq-pricing text-center">

                            <div class="price-title iq-bg iq-over-blue-80" style="background: url(images/bg/02.jpg);">

                                <span class="text-uppercase iq-font-white"><s>$1.500.000</s></span>

								<h1 class="iq-font-white iq-tw-7"><small>$</small>1.200.000</h1>

                                <span class="text-uppercase iq-tw-4 iq-font-white">ANUAL</span>

                            </div>

							<h3>INICIAL</h3>

                            <ul>

                                <li>5 Directivos</li>

								<li>10 Docentes</li>

								<li>Hasta 200 Estudiantes</li>

                            </ul>

							

                            <div class="price-footer">

                                <a class="button" href="prueba-gratis.php?p=1">PRUEBA GRATIS</a>

                            </div>

                        </div>

					</div>

					

                    <div class="col-sm-4 col-md-4 re4-mt-30 wow flipInY" data-wow-duration="1s">

                        <div class="iq-pricing text-center">

                            <div class="price-title iq-bg iq-over-blue-80" style="background: url(images/bg/02.jpg);">

								<span class="text-uppercase iq-font-white"><s>$3.000.000</s></span>

                                <h1 class="iq-font-white iq-tw-7"><small>$</small>2.400.000</h1>

                                <span class="text-uppercase iq-tw-4 iq-font-white">ANUAL</span>

                            </div>

							<h3>PROFESIONAL</h3>

                            <ul>

								<li>10 Directivos</li>

								<li>30 Docentes</li>

                                <li>Hasta 1.000 Estudiantes</li>

                            </ul>

							

                            <div class="price-footer">

                                <a class="button" href="prueba-gratis.php?p=2">PRUEBA GRATIS</a>

                            </div>

                        </div>

                    </div>

					

					<div class="col-sm-4 col-md-4 re4-mt-30">

						<div class="iq-pricing text-center">

                            <div class="price-title iq-bg iq-over-blue-80" style="background-color: purple;">

								<span class="text-uppercase iq-font-white"><s>$4.000.000</s></span>

                                <h1 class="iq-font-white iq-tw-7"><small>$</small>3.000.000</h1>

                                <span class="text-uppercase iq-tw-4 iq-font-white">ANUAL</span>

                            </div>

							<h3 style="color: purple;">AVANZADO</h3>

                            <ul style="color: purple;">

								<li>Directivos ilimitados</li>

								<li>Docentes ilimitados</li>

                                <li>Estudiantes ilimitados</li>

                            </ul>

							

                            <div class="price-footer">

                                <a class="button" href="prueba-gratis.php?p=3" style="background-color: purple;">PRUEBA GRATIS</a>

                            </div>	

                        </div>

					</div>

                </div>



				<div style="border: 1px solid #CCC; background-color: #FFF; padding: 10px; margin-bottom: 10px; margin-top: 20px;">

							<h5><b>COMPRE TRANQUILO:</b> En caso de no quedar satisfecho con el producto, tiene <b>90 días</b> para solicitar la devolución total de su dinero. <b>CERO RIESGOS PARA USTED</b>.</h5>

						</div>

						

						<div style="border: 1px solid #CCC; background-color: #FFF; padding: 10px; margin-bottom: 10px;">

							<h5><b>CANCELE CUANDO QUIERA:</b> Puede cancelar el servicio cuando ya no desee continuar. Usted decide cuando seguir y cuando parar.</h5>

						</div>

				

				<div style="border: 1px solid #CCC; background-color: #FFF; padding: 10px; margin-top: 20px;">

					<h6>

					Si su institución requiere un plan personalizado, contáctenos al<b> WhatsApp: (+57) 300 730 4428</b>.

					</h6>

                </div>

				

				<div style="border: 1px solid #CCC; background-color: #FFF; padding: 10px; margin-top: 20px; display: none;">

                	<h6>

                    Si deseas puedes hacer una trasnferencia directa a nuestras cuentas Bancolombia o Colpatria sin costo adicional. Contáctanos para hacer el proceso correspondiente. <b> WhatsApp: (+57) 300 730 4428</b>.

                   	</h6>

                </div>

				

				<div style="border: 1px solid #CCC; background-color: #31a95226; padding: 10px; margin-top: 20px;">

                	<h4 style="text-align: center; font-weight: bold;">Medios de pago</h4>

					<img src="files-general/mediospago/masterc.png">

					<img src="files-general/mediospago/visa.png">

					<img src="files-general/mediospago/americane.png">

					<img src="files-general/mediospago/safetypay.png" width="80">

					<img src="files-general/mediospago/pase.png" width="50">

					<img src="files-general/mediospago/paypal.png" width="80">

					<img src="files-general/mediospago/baloto.png">

					<img src="files-general/mediospago/bancoOcc.png">

					<img src="files-general/mediospago/davivienda.png">

					<img src="files-general/mediospago/daviplata.png">

					<img src="files-general/mediospago/diners.png">

					<img src="files-general/mediospago/efecty.png">

					<img src="files-general/mediospago/gana.png">

					<img src="files-general/mediospago/puntored.png">

					<img src="files-general/mediospago/redservi.png">

					<img src="files-general/mediospago/westerUnion.png" width="80">

					<img src="files-general/iconos/bacolombia.png" width="30">

					<img src="files-general/iconos/colpatria.png" width="30">

                </div>

				

            </div>

        </section>

		

		

		<?php //include("respaldo.php");?>



        <!-- Affordable Price END -->







        <!-- Frequently Asked Questions -->



        



        <!-- Frequently Asked Questions END -->





        <!-- Clients -->



        <?php //include("seccion-clientes.php");?>



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