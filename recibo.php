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

</head>

<body>

	<div>
		<p align="center"><img class="img-responsive" src="images/logo.png" alt="logo" width="100"></p>
		<h4 class="title iq-tw-7" align="center">RECIBO A PAGAR</h4>
		<h6 class="title iq-tw-7">REF: #<?=$_GET["ref"];?></h6>
		<h6 class="title iq-tw-7">Saldo total a pagar: $<?=number_format($_GET["saldo"],0,",",".");?> COP.</h6>
		<h6 class="title iq-tw-7">Cantidad de estudiantes: <?=$_GET["est"];?></h6>
		<h6 class="title iq-tw-7">Institución: <?=$_GET["inst"];?></h6>
		<h6 class="title iq-tw-7">Nombre de contacto: <?=$_GET["nombre"];?></h6>
		<h6 class="title iq-tw-7">Email de contacto: <?=$_GET["email"];?></h6>
		<p>&nbsp;</p>
		<h6 class="title iq-tw-7">Cuenta de ahorros Bancolombia #: 431 565 88 254</h6>
		<h6 class="title iq-tw-7">Titular de la cuenta: JHON ODERMAN MEJÍA MARTINEZ</h6>
		<h6 class="title iq-tw-7">DNI del titular: 1.051.820.890</h6>
		<p>&nbsp;</p>
		<p align="center">
			+57 (4) 585 3755<br>
			Medellín, Colombia<br>
			www.plataformasintia.com
		</p>
	</div>

   
                        
                    

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
	
	<script type="text/javascript">print();</script>
</body>

</html>