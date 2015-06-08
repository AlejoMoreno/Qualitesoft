<?php
$usuario = $_POST['LUsuario'];
$password = $_POST['LContraseña'];
$Blogin = $_POST['login'];
$correo = $_POST['FUsuario'];
$count = 0;
//Conexion a la base de datos
if ($LUsuario) {
	$conn = new mysqli("localhost","root","admin","ingenium");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT user,pass FROM usuarios";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($usuario==$row["user"] && $password==$row["pass"]){
            include("../html/Session.php");
            //echo "nombre: " . $row["nombre"]. " - Pass: " . $row["pass"]. "<br>";
          }
          else{
            $count=$count+1;
          }
      }
    } else {
        echo "<script>alert('Tabla de usuarios vacia'); document.location=('/php/ingenium/html/menu.php');</script>";
  }
  $conn->close();
  echo "<script>alert('Tabla de usuarios vacia'); document.location=('logout.php');</script>";
}
//**********************************************+validacion de correo email******************************************************++
if ($FUsuario) {
  $conn = new mysqli("localhost","root","admin","ingenium");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    $sql = "SELECT email,user FROM usuarios";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($correo==$row["email"] || $correo==$row["user"]){
            //funcion envio de correo AQUI++++++++++++++++++++++++++++++++++++
            echo "<script language='javascript'>alert('Se ha enviado un correo a " . $row["email"] . "'); document.location=('../logout.php')</script>";
            $correo = $row["email"];
            //echo "nombre: " . $row["nombre"]. " - Pass: " . $row["pass"]. "<br>";
          }
          else{
            $count=$count+1;
          }
      }
    } else {
        echo '<script language="javascript">alert(" Bienvenido"); document.location =("../logout.php"); </script>';
  }
  if($count>0){echo "<script>alert('Validacion invalida'); document.location=('../logout.php');</script>";}        
  $conn->close();
}
?>
