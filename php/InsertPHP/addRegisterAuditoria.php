<?php
	
	$RAAuditoria=$_POST['RAAuditoria'];
	$RATipo=$_POST['RATipo'];
	$RAUsuario=$_POST['RAUsuario'];
	$RAUsuarioAuditado=$_POST['RAUsuarioAuditado'];
	$RAAcepted=$_POST['RAAcepted'];
	$RAguardar=$_POST['RAguardar'];
	 
	if(isset($_POST['RAguardar'])) {
		define('DB_SERVER', 'localhost');
		define('DB_NAME','ingenium');
		define('DB_USER','root');
		define('DB_PASS','admin');
		//Este es un script para conectar a la base de datos
		$link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');
		// register a new usuari
		$sql = "INSERT INTO `regauditoria` VALUES (NULL, '$RAAuditoria', '2015-04-20', '$RATipo', '$RAUsuario', '$RAUsuarioAuditado', '$RAAcepted');";
		$result = mysql_query($sql);
		echo '<script language="javascript">alert(" Se ha registrado correctamente"); document.location =(""/php/ingenium/html/informes.php""); </script>';
	}
	else{
		echo '<script language="javascript">alert(" Validacion invalida"); document.location =(""/php/ingenium/html/informes.php""); </script>';
	}
?>