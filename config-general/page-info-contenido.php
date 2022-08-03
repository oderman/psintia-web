<?php
if($_SERVER['HTTP_REFERER']=="" and $_GET["idmsg"]!=303){
	echo '<script type="text/javascript">window.location.href="page-info.php?idmsg=303";</script>';
	exit();
}

switch($_GET["idmsg"]){
	case 100:
		$color = 'blue';
		$titulo = 'SELECCIONAR ASIGNATURA';
		$texto = 'Debes seleccionar primero una asignatura';
		$url1 = 'cargas.php';
		$boton1 = 'IR A ASIGNATURAS';
	break;
									
	case 101:
		$color = 'blue';
		$titulo = 'NO HAY PREGUNTAS';
		$texto = 'La evaluación seleccionada no contiene preguntas en este momento. Intente más tarde.';
		$url1 = 'evaluaciones.php';
		$boton1 = 'IR A EVALUACIONES';
	break;	
										
	case 103:
		$color = 'green';
		$titulo = 'EVALUACIÓN ENVIADA';
		$texto = 'La evaluación fue enviada correctamente. Puedes ir a ver el resultado de una vez. ¿Qué esperas?';
		$url1 = 'evaluaciones-ver.php?idE='.$_GET["idE"];
		$boton1 = 'VER EL RESULTADO';
	break;
										
	case 104:
		$color = 'blue';
		$titulo = 'TERMINÓ EL TIEMPO';
		$texto = 'El tiempo de la evaluación que estabas realizando ha finalizado. Al parecer no alcanzaste a enviarla.';
		$url1 = 'evaluaciones.php';
		$boton1 = 'IR A EVALUACIONES';
	break;
										
	case 105:
		$color = 'blue';
		$titulo = 'ACTIVIDAD NO ENCONTRADA';
		$texto = 'La actividad a la que intentaste acceder no fue encontrada.';
		$url1 = 'actividades.php';
		$boton1 = 'IR A ACTIVIDADES';
	break;
										
	case 106:
		$color = 'blue';
		$titulo = 'EVALUACIÓN NO ENCONTRADA';
		$texto = 'La evaluación a la que intentaste acceder no fue encontrada.';
		$url1 = 'evaluaciones.php';
		$boton1 = 'IR A EVALUACIONES';
	break;
										
	case 107:
		$color = 'green';
		$titulo = 'ACTIVIDAD ENVIADA';
		$texto = 'La actividad fue enviada correctamente.';
		$url1 = 'actividades.php';
		$boton1 = 'IR A ACTIVIDADES';
	break;
		
	case 108:
		$color = 'yellow';
		$titulo = 'NO SE PUDO GENERAR';
		$texto = 'No se pudo generar el informe para esta carga porque faltan estudiantes por notas en algunas de las actividades. Por favor revisa al estudiante <b>'.$_GET["est"].'</b>. Solo tiene registrado el <b>'.$_GET["valorActual"]."%</b> de las notas.";
		$url1 = 'calificaciones-todas-rapido.php?idEst='.$_GET["idEst"].'#estudiante'.$_GET["idEst"];
		$boton1 = 'IR A VISTA RÁPIDA DE CALIFICACIONES';
	break;
		
	case 109:
		$color = 'green';
		$titulo = 'INFORME GENERADO';
		$texto = 'El informe fue generado correctamente para esta carga. Ahora estás en el siguiente periodo. Recuerda que también puedes programar la generación automática de estos informes en la configuración de la carga.';
		$url1 = 'cargas.php';
		$boton1 = 'IR A CARGAS';
	break;
		
	case 110:
		$color = 'green';
		$titulo = 'SOLICITUD ENVIADA';
		$texto = 'La solicitud de desbloqueo fue enviada correctamente. El paso a seguir es esperar que un directivo la revise, verifique y haga lo correspondiente.';
		$url1 = 'estudiantes.php';
		$boton1 = 'IR A ACUDIDOS';
	break;
		
	case 111:
		$color = 'green';
		$titulo = 'RESPUESTA ENVIADA';
		$texto = 'Su respuesta fue enviada a la directiva de la Institución. Si desea cambiar su respuesta debe comunicarse con la Institución directamente antes que inicien matrículas.';
		$url1 = 'estudiantes.php';
		$boton1 = 'IR A ACUDIDOS';
	break;
			
		
									
	//MENSAJES 200	
	case 200:
		$color = 'yellow';
		$titulo = 'NO SE ENVIÓ LA EVALUACIÓN';
		$texto = 'Al parecer la evaluación a la que intentaste acceder ya la has realizado. Verifica por favor.';
		$url1 = 'evaluaciones.php';
		$boton1 = 'IR A EVALUACIONES';
	break;
										
									case 201:
										$color = 'yellow';
										$titulo = 'EVALUACIÓN INICIADA PREVIAMENTE';
										$texto = 'Al parecer la evaluación a la que intentaste acceder ya la habías iniciado en otra ocasión. Tal vez cerraste, cambiaste o recargaste la pestaña sin haber enviado la evaluación. Debes pedirle al docente encargado que verifique este asunto y te la habilite nuevamente de ser necesario.';
										$url1 = 'evaluaciones.php';
										$boton1 = 'IR A EVALUACIONES';
									break;
									
									case 202:
										$color = 'yellow';
										$titulo = 'CLAVE INCORRECTA';
										$texto = 'La clave que ingresaste para la evaluación no es correcta. Verifica con el docente encargado que ésta sea correcta y vuelve a intentar.';
										$url1 = 'evaluaciones-clave.php?idE='.$_GET["idE"];
										$boton1 = 'VOLVER A INTENTAR';
									break;
										
									case 203:
										$color = 'yellow';
										$titulo = 'FALTA REALIZAR LA EVALUACIÓN';
										$texto = 'Para ver los detalles de la evaluación debes realizarla primero.';
										$url1 = 'evaluaciones.php';
										$boton1 = 'IR A EVALUACIONES';
									break;
										
									case 204:
										$color = 'yellow';
										$titulo = 'HO HA LLEGADO LA FECHA';
										$texto = 'La evaluación a la que intentaste acceder no está disponible hasta la siguiente fecha: <b>'.$_GET["fechaD"].'</b>. Faltan <b>'.$_GET["diasF"].'</b> días y <b>'.number_format($_GET["segundosF"],0,",",".").'</b> segundos.';
										$url1 = 'evaluaciones.php';
										$boton1 = 'IR A EVALUACIONES';
									break;
										
									case 205:
										$color = 'yellow';
										$titulo = 'LA FECHA YA PASÓ';
										$texto = 'La evaluación a la que intentaste acceder estuvo disponible hasta la siguiente fecha: <b>'.$_GET["fechaH"].'</b>. Hasta hace <b>'.($_GET["diasP"]*-1).'</b> días.';
										$url1 = 'evaluaciones.php';
										$boton1 = 'IR A EVALUACIONES';
									break;
										
									case 206:
										$color = 'yellow';
										$titulo = 'NO HA LLEGADO LA FECHA';
										$texto = 'La actividad a la que intentaste acceder no está disponible hasta la siguiente fecha: <b>'.$_GET["fechaD"].'</b>. Faltan <b>'.$_GET["diasF"].'</b> minutos.';
										$url1 = 'actividades.php';
										$boton1 = 'IR A ACTIVIDADES';
									break;
										
									case 207:
										$color = 'yellow';
										$titulo = 'LA FECHA YA PASÓ';
										$texto = 'La actividad que intentaste enviar estuvo disponible hasta la siguiente fecha: <b>'.$_GET["fechaH"].'</b>. Hasta hace <b>'.($_GET["diasP"]*-1).'</b> minutos.';
										$url1 = 'actividades.php';
										$boton1 = 'IR A ACTIVIDADES';
									break;
										
	case 208:
		$color = 'red';
		$titulo = 'SIN PERMISO DE EDICIÓN';
		$texto = 'En este momento no tienes permisos para hacer modificaciones en otros periodos diferentes al actual.';
		$url1 = 'cargas.php';
		$boton1 = 'IR A CARGAS ACADÉMICAS';
	break;
		
	case 209:
		$color = 'yellow';
		$titulo = 'LIMITE DE INDICADORES ALCANZADO';
		$texto = 'Has alcanzado el número máximo de indicadores permitidos para esta carga académica. Si requieres crear otros, puedes borrar uno de los existentes, módificarlo o solicitarle a un directivo encargado que te permita agregar más.';
		$url1 = 'indicadores.php';
		$boton1 = 'IR A INDICADORES';
	break;
	
	case 210:
		$color = 'yellow';
		$titulo = 'LIMITE DE PORCENTAJE ALCANZADO O SUPERADO';
		$texto = 'la suma de los indicadores no puede ser mayor al 100%. Verifica antes de continuar.';
		$url1 = 'indicadores.php';
		$boton1 = 'IR A INDICADORES';
	break;
		
	case 211:
		$color = 'yellow';
		$titulo = 'LIMITE DE CALIFICACIONES ALCANZADO';
		$texto = 'Has alcanzado el número máximo de calificaciones permitidas para esta carga académica. Si requieres crear otras, puedes borrar una de las existentes, módificarla o solicitarle a un directivo encargado que te permita agregar más.';
		$url1 = 'calificaciones.php';
		$boton1 = 'IR A CALIFICACIONES';
	break;
	
	case 212:
		$color = 'yellow';
		$titulo = 'LIMITE DE PORCENTAJE ALCANZADO O SUPERADO';
		$texto = 'la suma de las calificaciones no puede ser mayor al valor del indicador al cual pertenecen. Verifica antes de continuar.';
		$url1 = 'calificaciones.php';
		$boton1 = 'IR A CALIFICACIONES';
	break;
		
	case 213:
		$color = 'yellow';
		$titulo = 'USUARIO BLOQUEADO';
		$texto = 'Tu usuario se encuentra bloqueado para algunas opciones de la plataforma. Si tienes alguna inquietud al respecto puedes ponerte en contacto con la Institución.';
		$url1 = 'cargas.php';
		$boton1 = 'IR A MIS ASIGNATURAS';
	break;
		
	case 214:
		$color = 'yellow';
		$titulo = 'ENCUESTA SOBRE RESERVA DE CUPO PENDIENTE POR CONTESTAR';
		$texto = 'Su acudiente debe ingresar a la plataforma y responder si desea o no reservar el cupo para el siguiente año escolar. Despues de esto quedarán activas todas las opciones.';
		$url1 = 'index.php';
		$boton1 = 'IR AL INICIO';
	break;
		
	case 215:
		$color = 'yellow';
		$titulo = 'REPORTES DISCIPLINARIOS PENDIENTES POR TU FIRMA';
		$texto = 'Usted tiene reportes disciplinarios que debe verificar y firmar de forma digital para poder continuar trabajando.';
		$url1 = 'reportes-disciplinarios.php?new=1';
		$boton1 = 'VER REPORTES';
	break;	
	
	case 216:
		$color = 'yellow';
		$titulo = 'REPORTES DISCIPLINARIOS PENDIENTES POR TU FIRMA';
		$texto = 'Alguno de sus acudidos tiene reportes disciplinarios que usted debe verificar y firmar de forma digital para poder continuar trabajando.';
		$url1 = 'estudiantes.php';
		$boton1 = 'VER ACUDIDOS';
	break;
		
	case 217:
		$color = 'yellow';
		$titulo = 'ACCESO DESACTIVADO';
		$texto = 'La Institución se encuentra inactiva en este momento. Comuniquese con la empresa proveedora del servicio.';
		$url1 = 'https://oderman.com.co/contacto.php';
		$boton1 = 'VER DATOS DE CONTACTO';
	break;
		
	case 218:
		$color = 'yellow';
		$titulo = 'NOTAS NUMÉRICAS DESACTIVADAS';
		$texto = 'La notas numéricas ya no se están trabajando en la Institución por el momento.';
		$url1 = 'index.php';
		$boton1 = 'IR AL INICIO';
	break;	
		
	case 219:
		$color = 'red';
		$titulo = 'ACCIÓN NO PERMITIDA';
		$texto = 'Algunas acciones solo son permitidas en periodos anteriores al actual.';
		$url1 = 'cargas.php';
		$boton1 = 'IR A CARGAS ACADÉMICAS';
	break;	
		
	
	
	//MENSAJES 300	
	case 300:
		$color = 'red';
		$titulo = 'USUARIO NO VALIDO';
		$texto = 'No existe un usuario de consulta.';
		$url1 = 'index.php';
		$boton1 = 'IR AL INICIO';
	break;	
		
	case 301:
		$color = 'red';
		$titulo = 'NO TIENES PERMISOS';
		$texto = 'Usted no tiene permisos para acceder a la página a la que intentó acceder.';
		$url1 = 'index.php';
		$boton1 = 'IR AL INICIO';
	break;
		
	case 302:
		$color = 'red';
		$titulo = 'MÓDULO NO ASIGNADO';
		$texto = 'La institución no tiene este módulo asignado.';
		$url1 = 'index.php';
		$boton1 = 'IR AL INICIO';
	break;
		
	case 303:
		$color = 'red';
		$titulo = 'ACCESO INCORRECTO';
		$texto = 'Estás intentando a acceder de manera incorrecta.';
		$url1 = 'index.php';
		$boton1 = 'IR AL INICIO';
	break;	
		
		
		
	
										
										
										
									
	default:
		$color = 'red';
		$titulo = 'DESCONOCIDO';
		$texto = 'Desconocemos el motivo que lo ha traido a esta pagina informativa. Intente ir al escritorio o inicio de esta plataforma y continúe con su navegación.';
		$url1 = 'index.php';
		$boton1 = 'IR Al ESCRITORIO';
	break;
						
}
?>