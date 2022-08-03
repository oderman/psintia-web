<?php
include("conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'librerias/phpmailer/Exception.php';
require 'librerias/phpmailer/PHPMailer.php';
require 'librerias/phpmailer/SMTP.php';


//DEMO
if ($_POST["idSQL"] == 1) {
	$nombre = $conexion->real_escape_string($_POST["nombre"]);
	$email = $conexion->real_escape_string($_POST["email"]);
	$celular = $conexion->real_escape_string($_POST["celular"]);

	if (trim($nombre) == "" or trim($email) == "") {
		echo '<span style="font-family:Arial; color:red;">Debes llenar todos los datos para continuar.<br>
		<a href="javascript:history.go(-1)">[Regresar]</a></span>';
		exit();
	}
	if ($_POST["resultado"] != $_POST["resultadoOP"]) {
		echo '<span style="font-family:Arial; color:red;">El resultado de la suma no concuerda. Verifica por favor en el último campo.<br>
		<a href="javascript:history.go(-1)">[Regresar]</a></span>';
		exit();
	}
	if ($_POST["razon"] == 4) {
		echo '<script type="text/javascript">window.location.href="https://plataformasintia.com/instituciones"</script>';
		exit();
	} else {

		$query = "SELECT * FROM sintia_demo.usuarios WHERE uss_usuario='" . $email . "'";
		$result = $conexion->query($query);
		$row_cnt = $result->num_rows;
		$getUsuarioByEmail = $result->fetch_array(MYSQLI_BOTH);

		if ($row_cnt > 0) {
			if ($getUsuarioByEmail['uss_institucion'] == "") {
				echo '<span style="font-family:Arial; color:navy;">Parece que ya tienes una cuenta DEMO asociada a este Email <b>' . $email . '</b>, la cual fue creada en la siguiente fecha: <b>' . $getUsuarioByEmail['uss_fecha_registro'] . '</b>.<br>
			Si tienes problemas para acceder al DEMO comunicate con nosotros al número de <strong>WhatsApp: 300 730 4428</strong>.<br>';
			} else {
				echo '<span style="font-family:Arial; color:red;">Parece que ya tienes una cuenta DEMO asociada a este Email <b>' . $email . '</b>, la cual fue creada en la siguiente fecha: <b>' . $getUsuarioByEmail['uss_fecha_registro'] . '</b>. Y al parecer ya has ingresado antes al DEMO.<br>
			De todas formas si tienes problemas para acceder al DEMO o alguna duda al respecto, puedes comunicarte con nosotros al número de <strong>WhatsApp: 300 730 4428</strong>.<br>';
			}

			echo '<br>
		<a href="javascript:history.go(-1)">[Regresar ' . $getUsuarioByEmail[0] . ']</a></span>';
			exit();
		} else {

			$medios = array("", "Facebook", "Google", "Youtube", "Email", "Radio", "TV", "Recomendación", "Otro");
			$motivo = array("", "Colegio", "Universidad", "Instituto", "Soy Estudiante", "Otra razón");

			$clave = rand(10000, 99999);
			mysql_query("INSERT INTO sintia_demo.usuarios(uss_usuario, uss_clave, uss_tipo, uss_nombre, uss_idioma, uss_email, uss_bloqueado, uss_fecha_registro, uss_solicitar_datos, uss_celular)VALUES('" . $email . "', '" . $clave . "', 5, '" . $nombre . "', 1, '" . $email . "', 0, now(), 1, '" . $celular . "')", $conexion);
				
			if (mysql_errno() != 0) {
				echo mysql_error();
				exit();
			}
			$idRegistro = mysql_insert_id();

			mysql_query("INSERT INTO demo(demo_fecha_ingreso, demo_usuario, demo_ip, demo_cantidad, demo_correo_enviado, demo_fecha_ultimo_correo, demo_nocorreos)VALUES(now(), '" . $idRegistro . "', '" . $_SERVER["REMOTE_ADDR"] . "', 0, 1, now(), 0)", $conexion);
			if (mysql_errno() != 0) {
				echo mysql_error();
				exit();
			}

			//INICIO ENVÍO DE MENSAJE
			$tituloMsj = "¡Bienvenido a la Plataforma SINTIA!";
			$bgTitulo = "#31a952";
			$contenidoMsj = '
			<p>
				Hola <b>' . strtoupper($nombre) . '</b>, Bienvenido a la Plataforma SINTIA. Hemos creado su cuenta como DIRECTIVO.<br>
				A continuación encontrará sus datos de acceso.<br>
				<b>Usuario:</b> ' . $email . '<br>
				<b>Contraseña:</b> ' . $clave . '<br>
			</p>
			
			
			
			<p>
				<h3 style="text-align: center;">
					<a href="https://plataformasintia.com/sql.php?get=1&usr=' . $idRegistro . '&user=' . $email . '&pass=' . $clave . '" target="_blank" style="color: #eb4132; font-weight:bold;">ACCEDER A MI CUENTA DE DIRECTIVO AHORA</a>
				</h3>
			</p>
			
			<p>
				<b>OTROS ROLES</b><br>
				También puedes acceder a la plataforma SINTIA con los siguientes roles:<br><br>
				<b>DOCENTE</b><br>
				<b>Usuario:</b> docentesintia<br>
				<b>Contraseña:</b> docentesintia<br>
				<br>
				<b>ESTUDIANTE</b><br>
				<b>Usuario:</b> 1025890380<br>
				<b>Contraseña:</b> 1025890380<br>
				<br>
				<b>ACUDIENTE</b><br>
				<b>Usuario:</b> 37393085<br>
				<b>Contraseña:</b> 37393085<br>	
			</p>
							 
			<p>
				<b>BONO EXTRA</b><br>
				Adjunto encontrará un archivo PDF con información adicional sobre la plataforma SINTIA.
			</p>
			
			<p>
				<b>ASESOR PERSONALIZADO</b><br>
				Si requiere ayuda adicional, puede comunicarse con el asesor personalizado que le hemos asignado.<br>
				<b>Asesor:</b> Jhon Mejía M.<br>
				<b>Email:</b> info@plataformasintia.com<br>
				<b>WhatsApp:</b> (+57) 300 730 4428<br>
			</p>
			<hr/>
			<p style="color:gray;">
				Sus datos ingresados son:<br>
				<b>Nombre:</b> ' . strtoupper($nombre) . '<br>
				<b>Celular:</b> ' . $celular . '<br>
				<b>Medio:</b> ' . $medios[$_POST["medioE"]] . '<br>
				<b>Motivo:</b> ' . $motivo[$_POST["razon"]] . '<br>
				<b>Motivo 2:</b> ' . $_POST["otraRazon"] . '<br>
				<b>Plan:</b> ' . $_POST["plan"] . '<br>
				<b>Ref:</b> ' . $_POST["urlRef"] . '<br>
			</p>
		';
			include("config-general/plantilla-email-1.php");

			// Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);
			echo '
		<div align="center" style="font-family:Arial; font-size:20px;">
			<p>Estamos creando su cuenta DEMO, Por favor espere unos segundos...</p>
			<p><img src="demo.gif"></p>
		</div>	
		';
			echo '<div style="display:none;">';
			try {
				include("config-general/mail.php");

				$mail->addAddress($email, $nombre);     // Add a recipient
				$mail->addBCC('company@plataformasintia.com');     // Add a recipient
				//$mail->addBCC('info@plataformasintia.com');     // Add a recipient

				// Attachments
				$mail->addAttachment('files-general/plan-sintia-info.pdf', 'Información SINTIA');    // Optional name


				// Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = $nombre . ', Bienvenido a la Plataforma SINTIA';
				$mail->Body = $fin;
				$mail->CharSet = 'UTF-8';

				$mail->send();
				echo 'Estamos creando su cuenta DEMO... Por favor espere un momento.';
			} catch (Exception $e) {
				echo "Error: {$mail->ErrorInfo}";
				exit();
			}
			echo '</div>';
			//FIN ENVÍO DE MENSAJE
		}
	}

	echo '<script type="text/javascript">window.location.href="https://plataformasintia.com/respuesta.php?msg=1"</script>';
	exit();
}

//COMPRAR DE SINTIA
if ($_POST["idSQL"] == 2) {
	$nombre = mysql_real_escape_string($_POST["nombre"]);
	$email = mysql_real_escape_string($_POST["email"]);
	$celular = mysql_real_escape_string($_POST["celular"]);
	$institucion = mysql_real_escape_string($_POST["institucion"]);
	$municipio = mysql_real_escape_string($_POST["municipio"]);
	if (trim($nombre) == "" or trim($email) == "" or trim($celular) == "") {
		echo '<span style="font-family:Arial; color:red;">Debes llenar todos los datos para continuar.<br>
		<a href="javascript:history.go(-1)">[Regresar]</a></span>';
		exit();
	}
	if ($_POST["resultado"] != $_POST["resultadoOP"]) {
		echo '<span style="font-family:Arial; color:red;">El resultado de la operación no concuerda.<br>
		<a href="javascript:history.go(-1)">[Regresar]</a></span>';
		exit();
	}
	$precio = ($_POST["precio"]);
	$medioE = array("", "Facebook", "Google", "YouTube", "Email", "Radio", "TV", "Recomedación");
	mysql_query("INSERT INTO instituciones(ins_nombre, ins_fecha_inicio, ins_contacto_principal, ins_cargo_contacto, ins_celular_contacto, ins_email_contacto, ins_ciudad, ins_nit, ins_medio_info)
	VALUES('" . $institucion . "', now(), '" . $nombre . "', '" . $_POST["cargo"] . "', '" . $celular . "', '" . $email . "', '" . $municipio . "', '" . $_POST["nit"] . "', '" . $_POST["medioE"] . "')", $conexion);
	$idPedido = mysql_insert_id();
	if (mysql_errno() != 0) {
		echo mysql_error();
		exit();
	}

	mysql_query("INSERT INTO instituciones_periodos(inspp_institucion, inspp_agno)
	VALUES('" . $idPedido . "', '" . date("Y") . "')", $conexion);
	if (mysql_errno() != 0) {
		echo mysql_error();
		exit();
	}

	$fin =  '<html><body style="background-color:#FEC;">';
	$fin .= '
					<center>
						<p align="center"><img src="https://plataformasintia.com/images/logoSintia.png" width="250"></p>
						<div style="font-family:arial; background:#FFF; width:600px; color:#000; text-align:justify; padding:15px; border-radius:10px;">
							Saludos!<br>
							' . strtoupper($_POST["nombre"]) . '! has registrado correctamente tu institución para recibir más información y/o utilizar la <b>Plataforma SINTIA</b>.<br>
							 Nos contactaremos contigo en un momento (Horario de lunes a viernes hasta las 6:00 p.m).<br>
							 A continuación los datos suministrados.<br>
							 <b>LICENCIA:</b> ' . $_POST["licencia"] . '<br>
							 <b>Nombre:</b> ' . $nombre . '<br>
							 <b>Celular:</b> ' . $celular . '<br>
							 <b>Email:</b> ' . $email . '<br>
							 <b>Municipio:</b> ' . $municipio . '<br>
							 <b>NIT:</b> ' . $_POST["nit"] . '<br>
							 <b>Institución:</b> ' . $institucion . '<br>
							 <b>Cargo:</b> ' . $_POST["cargo"] . '<br>
							 <b>Medio:</b> ' . $medioE[$_POST["medioE"]] . '<br>
							 <b>Pago:</b> ' . $_POST["medioPago"] . '<br>
							 <b>Resultado Operación:</b> ' . $_POST["resultadoOP"] . '<br>
							 <b>Si necesitas ayuda adicional puedes comunicarte con nosotros.</b>
							
							<p align="center" style="color:#399;">
								<img src="https://plataformasintia.com/images/logoSintia.png" width="250"><br>
								¡Te deseamos el mejor de los d&iacute;as!<br>
								<a href="https://plataformasintia.com">www.plataformasintia.com</a>
							</p>
						</div>
					</center>
					<p>&nbsp;</p>
				';
	$fin .= '';
	$fin .=  '<html><body>';

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);
	echo '<div style="display:none;">';
	try {
		include("config-general/mail.php");

		$mail->addAddress($email, $nombre);     // Add a recipient
		$mail->addAddress('jhooderman@gmail.com');     // Add a recipient
		//$mail->addAddress('info@plataformasintia.com');     // Add a recipient


		// Attachments
		//$mail->addAttachment('files/archivos/'.$ficha, 'FICHA');    // Optional name


		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'COMPRAR LICENCIA SINTIA ' . $_POST["licencia"];
		$mail->Body = $fin;
		$mail->CharSet = 'UTF-8';

		$mail->send();
		echo 'Todo bien';
	} catch (Exception $e) {
		echo "Error: {$mail->ErrorInfo}";
	}
	echo '</div>';


	if ($_POST["medioPago"] == 1 or $_POST["medioPago"] == 3) {
?>
		<form id="frm_botonePayco" name="frm_botonePayco" method="post" action="https://secure.payco.co/checkout.php">
			<input name="p_cust_id_cliente" type="hidden" value="14880">
			<input name="p_key" type="hidden" value="3a93994412f2be3002c58126a167d3614eb67b7e">
			<input name="p_id_invoice" type="hidden" value="<?= $idPedido; ?>">
			<input name="p_description" type="hidden" value="LICENCIA PLATAFORMA SINTIA">
			<input name="p_currency_code" type="hidden" value="COP">
			<input name="p_email" type="hidden" id="p_email" value="<?= $email; ?>" />
			<input name="p_amount" id="p_amount" type="hidden" value="<?= $precio; ?>">
			<input name="p_tax" id="p_tax" type="hidden" value="0">
			<input name="p_amount_base" id="p_amount_base" type="hidden" value="<?= $precio; ?>">
			<input name="p_test_request" type="hidden" value="FALSE">
			<input name="p_url_response" type="hidden" value="https://oderman.com.co/agradecimiento.php">
			<input name="p_url_confirmation" type="hidden" value="https://oderman.com.co/agradecimiento.php">
			<input name="p_signature" type="hidden" id="signature" value="<?php echo md5('14880' . '^' . '3a93994412f2be3002c58126a167d3614eb67b7e' . '^' . $idPedido . '^' . $precio . '^' . 'COP'); ?>" />
			<input name="p_billing_document" type="hidden" id="p_billing_document" value="<?= $documento; ?>" />
			<input name="p_billing_name" type="hidden" id="p_billing_name" value="<?= $nombre; ?>" />
			<input name="p_billing_country" type="hidden" id="p_billing_country" value="CO" />
			<input name="p_billing_email" type="hidden" id="p_billing_email" value="<?= $email; ?>" />
			<input name="p_billing_address" type="hidden" id="p_billing_address" value="<?= $direccion; ?>" />
			<input name="p_billing_phone" type="hidden" id="p_billing_phone" value="<?= $celular; ?>" />
			<input name="p_billing_cellphone" type="hidden" id="p_billing_cellphone" value="<?= $celular; ?>" />
		</form>

		<script type="text/javascript">
			document.frm_botonePayco.submit();
		</script>
	<?php
	}

	if ($_POST["medioPago"] == 2) {
		echo '<script type="text/javascript">window.location.href="respuesta.php?msg=2&saldo=' . $precio . '&est=' . $_POST["cantEstudiantes"] . '&inst=' . $institucion . '&nombre=' . $nombre . '&email=' . $email . '&ref=' . $idPedido . '"</script>';
	}
	exit();
}

//======================GET=====================
//MONITOREAR ACCESO AL DEMO
if ($_GET["get"] == 1) {
	mysql_query("INSERT INTO demo(demo_fecha_ingreso, demo_usuario, demo_ip)VALUES(now(), '" . $_GET["usr"] . "', '" . $_SERVER["REMOTE_ADDR"] . "')", $conexion);
	if (mysql_errno() != 0) {
		echo mysql_error();
		exit();
	}
	?>

	<form name="frm_login" action="https://plataformasintia.com/instituciones/v2.0/controlador/autentico.php" method="post">
		<input type="hidden" name="Usuario" value="<?= $_GET["user"]; ?>">
		<input type="hidden" name="Clave" value="<?= $_GET["pass"]; ?>">
		<input type="hidden" name="bd" value="12">
	</form>

	<script type="text/javascript">
		document.frm_login.submit();
	</script>
<?php
	//echo '<script type="text/javascript">window.location.href="https://plataformasintia.com/demo/v2.0/index.php"</script>';	
	exit();
}
?>