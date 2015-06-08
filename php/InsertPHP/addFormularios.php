<?php
	$FOTitulo=$_POST['FOTitulo'];
	$FONombre=$_POST['FONombre'];
	$FORevision=$_POST['FORevision'];
	$FOSubtitulo=$_POST['FOSubtitulo'];
	$FOFecha=$_POST['FOFecha'];
	$FOItem=$_POST['FOItem'];
	$FOAuditoria=$_POST['FOAuditoria'];
	$FOContenido=$_POST['FOContenido'];
	$FOGuardar=$_POST['FOGuardar'];

	if(isset($_POST['FOGuardar'])) {
		define('DB_SERVER','localhost');
		define('DB_NAME','ingenium');
		define('DB_USER','root');
		define('DB_PASS','admin');
		//Este es un script para conectar a la base de datos
		$link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');
		// register a new usuari
		$sql = "INSERT INTO `formularios` VALUES (
	NULL, '$FOTitulo', '$FONombre', 'FORevision', 
	'$FOSubtitulo', '$FOFecha', '$FOItem', 'FOAuditoria', 1);
";
		$result = mysql_query($sql);
		echo '<script language="javascript">alert(" Se ha registrado correctamente"); document.location =("/php/ingenium/html/formularios.php"); </script>';
	}
	else{
		echo '<script language="javascript">alert(" Validacion invalida"); document.location =("/php/ingenium/html/formularios.php"); </script>';
	} 
?>