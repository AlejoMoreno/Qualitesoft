<?php
$autirotia = $_POST['Auditor'];
$FechaAuditoria = $_POST['FechaAuditoria'];
$usuario = $_POST['Usuario']; 
$FechaConfirm = $_POST['FechaConfirm']; 
$empresa = $_POST['Empresa'];
$proceso = $_POST['Proceso'];
$enviado = $_POST['Enviado'];
$aprovado = $_POST['Aprovado'];
$Bguardar = $_POST['guardar'];

if(isset($_POST['guardar'])) {
	define('DB_SERVER','localhost');
  define('DB_NAME','ingenium');
  define('DB_USER','root');
  define('DB_PASS','admin');
  //Este es un script para conectar a la base de datos
  $link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
  mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');
  // register a new usuari
  $sql = "INSERT INTO `cronogramagacf1100_1` VALUES (NULL, '2015', '$autirotia', '$usuario', '$empresa', '$FechaAuditoria', '$proceso', '$proceso', '$aprovado', '$FechaConfirm');";

  $result = mysql_query($sql);
  echo '<script language="javascript">alert(" Se ha registrado correctamente"); document.location =("/php/ingenium/html/Cronograma.php"); </script>';
}
else{
	echo '<script language="javascript">alert(" Validacion invalida"); document.location =("/php/ingenium/html/Cronograma.php"); </script>';
}


?>