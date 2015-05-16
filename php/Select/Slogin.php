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
            echo "<script>alert('Bienvenido " . $usuario . "')</script>";
            //echo "nombre: " . $row["nombre"]. " - Pass: " . $row["pass"]. "<br>";
          }
          else{
            $count=$count+1;
          }
      }
    } else {
        echo "<script>alert('Tabla de usuarios vacia')</script>";
  }
  if($count>0)
        echo "<script>alert('Validacion invalida')</script>";
  $conn->close();
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
            echo "<script>alert('Se ha enviado un correo a " . $row["email"] . "')</script>";
            $correo = $row["email"];
            //echo "nombre: " . $row["nombre"]. " - Pass: " . $row["pass"]. "<br>";
          }
          else{
            $count=$count+1;
          }
      }
    } else {
        echo "<script>alert('Tabla de usuarios vacia')</script>";
  }
  if($count>0){echo "<script>alert('Validacion invalida')</script>";}        
  $conn->close();
}
?>