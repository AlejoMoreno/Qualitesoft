<?php
	$RECumplimiento=$_POST['RECumplimiento'];
	$RETipoprograma=$_POST['RETipoprograma'];
	$REGuardar=$_POST['REGuardar'];

	if(isset($_POST['REGuardar'])) {
		define('DB_SERVER','localhost');
		define('DB_NAME','ingenium');
		define('DB_USER','root');
		define('DB_PASS','admin');
		//Este es un script para conectar a la base de datos
		$link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');
		// register a new usuari
		$sql = "INSERT INTO `referencias` VALUES (NULL, 'la primera referencia');";
		$result = mysql_query($sql);
		echo '<script language="javascript">alert(" Se ha registrado correctamente"); document.location =(""/php/ingenium/html/formularios.php""); </script>';
	}
	else{
		echo '<script language="javascript">alert(" Validacion invalida"); document.location =(""/php/ingenium/html/formularios.php""); </script>';
	}
?>