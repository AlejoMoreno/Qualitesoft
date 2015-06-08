<?php
  // datos para la conexion
  define('DB_SERVER','localhost');
  define('DB_NAME','ingenium');
  define('DB_USER','root');
  define('DB_PASS','admin');
  //Este es un script para conectar a la base de datos
  $link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
  mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');

  $conn = new mysqli("localhost","root","admin","ingenium");
  if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
?>
