<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	
<?php include("google-analytics.php");?>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="PLataforma educativa, software educativo, software de notas" />
    <meta name="description" content="La pLataforma educativa SINTIA es una plataforma para instituciones educativas, les permite gestionar las áreas académicas, financieras, disciplinarias, social y administrativa." />
    <meta name="author" content="ODERMAN" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>PLataforma educativa SINTIA, Adquirir la plataforma SINTIA</title>
    
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
  fbq('track', 'AddToCart');
</script>

<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=232703400481447&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


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
                    <a href="index.php" class="navbar-brand">
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

<?php
switch($_GET["p"]){
	case 1:
	$precio = 1200000;
	break;
		
	case 2:
	$precio = 2400000;
	break;
		
	case 3:
	$precio = 3000000;
	break;	
}
?>
     <!-- Frequently Asked Questions -->

        <section class="overview-block-ptb white-bg iq-asked">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">ADQUIRIR LICENCIA DE USO SINTIA</h3>
							<p>&nbsp;</p>
                        </div>
						
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
						<div>
							<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
							<script>paypal.Buttons().render('body');</script>
							
							<h6 class="title iq-tw-7">Inversión: $<?=number_format($precio,0,",",".");?> anual.</h6>
							<?php if($_GET["p"]==3){?>
							<h6 class="title iq-tw-7">Acceso a: Todos los módulos.</h6>
							<h6 class="title iq-tw-7">Bono extra.</h6>
							<?php }?>
							<h6 class="title iq-tw-7">Asistencia: 24/7/365.</h6>
							<h6 class="title iq-tw-7">Garantía: Permanente.</h6>
							
							
							
						</div>
						<p>&nbsp;</p>
						
						<iframe width="500" height="380" src="https://www.youtube.com/embed/g2LSYPm7hR4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="z-index: 9; position: relative;"></iframe>
					
						
						<img class="img-responsive" src="files-general/imagenes/devolucion100.jpg">
						
                    </div>
                    <div class="col-sm-12 col-md-6">
						<div class="iq-get-in">
                            <form class="form-horizontal" method="post" action="sql.php">
								<input type="hidden" name="idSQL" value="2">
								<input type="hidden" name="licencia" value="<?=$_GET["p"];?>">
								<input type="hidden" name="precio" value="<?=$precio;?>">
                                <div class="contact-form">
                                   
									<h4 align="center" class="title iq-tw-7">LA INSTITUCIÓN</h4>
									<div class="section-field">
                                        <input type="text" placeholder="Nombre de la institución*" name="institucion" required style="color: darkblue;">
                                    </div>
									
									<div class="section-field">
                                        <input type="text" placeholder="NIT de la institución*" name="nit" required style="color: darkblue;">
                                    </div>
									
									<div class="section-field">
                                        <input type="text" placeholder="Municipio de ubicación*" name="municipio" required style="color: darkblue;">
                                    </div>
									<!--
									<div class="section-field">
                                        <input type="text" placeholder="Cantidad de estudiantes actuales:*" name="cantEstudiantes" required style="color: darkblue;">
                                    </div>
									
									<p style="font-size: 11px; color: tomato;">
									* Esta es la cantidad de estudiantes por la que pagará.
									</p>
									-->
									
									<h4 align="center" class="title iq-tw-7">TU CONTACTO</h4>
									<div class="section-field">
                                        <input type="text" placeholder="Tu Nombre*" name="nombre" required style="color: darkblue;">
                                    </div>
                                    <div class="section-field">
                                        <input type="email" placeholder="Tu Email*" name="email" required style="color: darkblue;">
                                    </div>
                                    <div class="section-field">
                                        <input type="text" placeholder="Tu celular*" name="celular" required style="color: darkblue;">
                                    </div>
									
									<div class="section-field">
                                        <input type="text" placeholder="Cargo que ocupas en la institución*" name="cargo" required style="color: darkblue;">
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
									<?php
									$n1 = rand(1,9);
									$n2 = rand(1,9);
									$resultado = $n1+$n2;
									?>
                                    <input type="hidden" value="<?=$resultado;?>" name="resultado">
									<div class="section-field">
                                        <input type="text" placeholder="Cuanto es <?php echo $n1." + ".$n2;?>?" name="resultadoOP" required style="color: darkblue;">
                                    </div>
									<h4 align="center" class="title iq-tw-7">FORMA DE PAGO</h4>
									<div class="section-field" style="margin-bottom: 15px;">
										<select name="medioPago" style="height: 50px; width: 100%; border-radius: 5px;">
                                            <option value="">--Método de pago?*--</option>
											<option value="1">En línea (Aquí encontrarás varios métodos de pago)</option>
                                            <option value="2">Transferencia o consignación</option>
                                            <option value="3">En efectivo</option>
                                        </select>
									</div>
                                    <input type="hidden" name="action" value="sendEmail" />
                                    <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-30">CONTINUAR AL ÚLTIMO PASO</button>
                                </div>
                            </form>
						</div>
						
                    </div>
                </div>
            </div>
            <div class="iq-objects-asked">
                <span class="iq-objects-01">
                    <img src="images/drive/02.png" alt="drive02">
                </span>
                <span class="iq-objects-02">
                    <img src="images/drive/04.png" alt="drive02">
                </span>
                <span class="iq-objects-03 iq-fadebounce">
                    <span class="iq-round"></span>
                </span>
            </div>
        </section>

        <!-- Frequently Asked Questions END -->


        <!-- Clients -->

        <?php include("seccion-clientes.php");?>

        <!-- Clients END -->
    </div>

    <!-- Main Content END -->


    <!-- Footer -->

    <footer>


        <?php include("seccion-footer.php");?>

        <!-- Footer Info END -->

    </footer>

    <!-- Footer END -->

    <!-- back-to-top -->

    <?php include("seccion-js.php");?>

</body>


<!-- Mirrored from iqonicthemes.com/themes/sofbox/v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 18:25:56 GMT -->
</html>