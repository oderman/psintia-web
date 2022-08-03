<?php 
include("conexion.php");
if(isset($_GET["p"]) and $_GET['p']!=""){
    $plan = $_GET["p"];
}
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

    <?php include("menu.php");?>


    <!-- Banner -->

	
    

    <!-- Banner End -->


    <!-- Main Content -->

    <div class="main-content">

        <!-- How it Works -->

        

        <!-- How it Works END -->





        <!-- Clients -->
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

        <!-- Clients END -->
    </div>

    <!-- Main Content END -->


    <!-- Footer -->

    <footer>


        <!-- Footer Info -->

        <section id="contact" class="footer-info white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        <div class="iq-get-in">
                            <h4 class="iq-tw-7 iq-mb-20">PRUEBA GRATIS SIN COMPROMISO</h4>
							<!--<p style="color: #31A952;">NO es necesario ingresar su tarjeta de crédito. <b>CERO RIESGOS PARA USTED</b>.</p>-->
                            <form class="form-horizontal" id="contactform" method="post" action="sql.php">
								<input type="hidden" name="idSQL" value="1">
								<input type="hidden" name="urlRef" value="<?=$_SERVER['HTTP_REFERER'];?>">
								<input type="hidden" name="plan" value="<?=$plan;?>">
                                <div class="contact-form">
                                    <div class="section-field">
                                        <input type="text" placeholder="Tu Nombre*" name="nombre" required>
                                    </div>
                                    <div class="section-field">
                                        <input type="email" placeholder="Tu Email*" name="email" required>
                                    </div>
									
                                    <div class="section-field">
                                        <input type="text" placeholder="Tu celular*" name="celular" required>
                                    </div>
									
									<div class="section-field" style="margin-bottom: 15px;">
										<select name="medioE" style="height: 50px; width: 100%; border-radius: 5px;" required>
                                            <option value="">--Cómo se enteró de SINTIA?*--</option>
											<option value="1">Facebook </option>
                                            <option value="2">Google</option>
                                            <option value="3">YouTube</option>
                                            <option value="4">Email</option>
                                            <option value="5">Radio</option>
                                            <option value="6">Televisión</option>
                                            <option value="7">Recomendación</option>
											<option value="8">Otro medio</option>
                                        </select>
									</div>
									
									<div class="section-field" style="margin-bottom: 15px;">
										<select name="razon" style="height: 50px; width: 100%; border-radius: 5px;" required onChange="razones(this)">
                                            <option value="">--Para qué requiere SINTIA?*--</option>
											<option value="1">Para un Colegio </option>
                                            <option value="2">Para una Universidad</option>
                                            <option value="3">Para un Instituto</option>
                                            <option value="6">Soy docente independiente</option>
                                            <option value="4">Soy un estudiante</option>
											<option value="5">Otra razón</option>
                                        </select>
									</div>
									
									<div id="razonDiv" class="section-field" style="display: none;">
                                        <input id="razonInput" type="text" placeholder="Qué otra razón tiene?*" name="otraRazon">
                                    </div>
									
									<script>
										function razones(dato){
											var razonDiv = document.getElementById("razonDiv");
											var razonInput = document.getElementById("razonInput");
											
											valorRecibido = dato.value;
											
											if(valorRecibido == 5){
											   razonDiv.style.display="block";
											   razonInput.required="required";
											   razonInput.style.border="solid";
												razonInput.style.borderColor="#EB4132";
											}else{
												razonDiv.style.display="none";
											   razonInput.required="";
											}
										}
									</script>
									
									<!--
									<div class="section-field">
                                        <input type="text" placeholder="Nombre de la institución*" name="institucion" required>
                                    </div>
									<div class="section-field">
                                        <input type="text" placeholder="Cargo que ocupas en la institución*" name="cargo" required>
                                    </div>
									<div class="section-field">
                                        <input type="text" placeholder="Municipio de ubicación*" name="municipio" required>
                                    </div>
									<div class="section-field" style="margin-bottom: 15px;">
										<select name="medioE" style="height: 50px; width: 100%; border-radius: 5px;">
                                            <option value="">--Cómo se enteró de SINTIA?*--</option>
											<option value="1">Facebook </option>
                                            <option value="2">Google</option>
                                            <option value="3">YouTube</option>
                                            <option value="4">Email</option>
                                            <option value="5">Radio</option>
                                            <option value="6">Televisión</option>
                                            <option value="7">Recomendación</option>
                                        </select>
									</div>
									-->
									<?php
									$n1 = rand(1,9);
									$n2 = rand(1,9);
									$resultado = $n1+$n2;
									?>
                                    <input type="hidden" value="<?=$resultado;?>" name="resultado">
									<div class="section-field">
                                        <input type="text" placeholder="Cuanto es <?php echo $n1." + ".$n2;?>?" name="resultadoOP" required autocomplete="off">
                                    </div>
                                    <input type="hidden" name="action" value="sendEmail" />
                                    <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-30">Iniciar prueba</button>
                                </div>
                            </form>
                            <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/logo.png" alt="#"></div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.425984517624!2d-75.57546476360811!3d6.216629827996305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428299b5aa6d9%3A0x2020c055ff96b671!2sEl+Poblado%2C+Medell%C3%ADn%2C+Antioquia!5e0!3m2!1ses!2sco!4v1526047963409" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
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