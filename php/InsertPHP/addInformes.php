<?php 
	$INAuditoria=$_POST['INAuditoria'];
	$INCriterio=$_POST['INCriterio'];
	$INSeguimiento=$_POST['INSeguimiento'];
	$INAspectosF=$_POST['INAspectosF'];
	$INResultados=$_POST['INResultados'];
	$INNC=$_POST['INNC'];
	$INguardar=$_POST['INguardar'];

	if(isset($_POST['INguardar'])) {
		define('DB_SERVER', 'localhost');
		define('DB_NAME','ingenium');
		define('DB_USER','root');
		define('DB_PASS','admin');
		//Este es un script para conectar a la base de datos
		$link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');
		// register a new usuari
		$sql = "INSERT INTO `informe` VALUES (
	NULL, '$INAuditoria', '2015-04-21', '2015-04-21', '', 'primer criterio', 'este es el consejo para esta empresa', 
	'los aspectos son todos buenos', 'los resultados fueron favorables', 1);";
		$result = mysql_query($sql);
		echo '<script language="javascript">alert(" Se ha registrado correctamente"); document.location =("/php/ingenium/html/informes.php"); </script>';
	}
	else{
		echo '<script language="javascript">alert(" Validacion invalida"); document.location =("/php/ingenium/html/informes.php"); </script>';
	}
	

?>