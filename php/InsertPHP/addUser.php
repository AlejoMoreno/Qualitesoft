<?php
$empresa = $_POST['RId_empresa'];
$telefono = $_POST['RTelefono'];
$usuario = $_POST['RUsuario']; 
$pass = $_POST['RContraseña']; 
$nombre = $_POST['RNombre'];
$apellido = $_POST['RApellido'];
$Bregistrer = $_POST['registrer'];
$correo = $_POST['RCorreo'];
$cargo = $_POST['RCargo'];

if(isset($_POST['registrer'])) {
  define('DB_SERVER','localhost');
  define('DB_NAME','ingenium');
  define('DB_USER','root');
  define('DB_PASS','admin');
  //Este es un script para conectar a la base de datos
  $link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
  mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');
  // register a new usuari
  $sql = "INSERT INTO  ingenium.usuarios (".
    "id_usuario ,".
    "nombre ,".
    "id_empresa ,".
    "contacto ,".
    "email ,".
    "user ,".
    "pass ,".
    "id_type ,".
    "apellido ,".
    "cargo)".
  "VALUES (".
"NULL ,  '$nombre',  '$empresa',  '$telefono',  '$correo',  '$usuario',  '$pass',  '1',  '$apellido',  '$cargo');";

  $result = mysql_query($sql);
  echo '<script language="javascript">alert(" Registro correcto"); document.location =("/php/ingenium/html/index.php"); </script>';
  $conn->close();
}else{
    } //end if
?>