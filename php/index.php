<?php
//session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
session_start();
//es la sentencia q usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
include("conectarmysql.php");
/*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer
una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/
date_default_timezone_set('UTC');
function verificar_login($user,$password,&$result){
        $sql = "SELECT * FROM  usuarios WHERE user = '$user' AND pass = '$password'";
        $rec = mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
        $count = 0;
        while ($row = mysql_fetch_object($rec)) {
            $count++;
            $result = $row;
        }
        if($count == 1){
          return 1;
        }
        else{
            return 0;
        }
    }

function getRealIP(){
  if(!empty($_SERVER['HTTP_CLIENT_IP']))
    return $_SERVER['HTTP_CLIENT_IP'];
  if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    return $_SERVER['HTTP_X_FORWARDED_FOR'];
  return $_SERVER['REMOTE_ADDR'];
}

/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y
cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/
if(!isset($_SESSION['id_usuario'])){
  //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
  if(isset($_POST['login'])){
    /*Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando
    si resulta verdadero y le pasamos los valores ingresados como parámetros.*/
    if(verificar_login($_POST['user'],$_POST['password'],$result) == 1){
      /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
      $_SESSION['id_usuario'] = $result->idusuario;
      /* Inserta el historial de la fecha de ingreso y el usuario que lo uso*/
      $date = date("y-m-d");
      $url = getRealIP();
      $query = "INSERT INTO  ingenium.historial (".
          "username ,".
          "fecha ,".
          "url)".
          "VALUES (".
          "'$user',".
          "'$date',".
          "'$url');";
        $resultado = mysql_query($query);
      header("location:menu.php");
    }
    else{
      //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
      echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
    }
  }

?>

<form action="" method="post" class="login">

    <div><label>Username</label><input name="user" type="text" ></div>

    <div><label>Password</label><input name="password" type="password"></div>

    <div><input name="login" type="submit" value="login"></div>

</form>
<?php
}else {
	echo 'Su usuario ingreso correctamente.';
	echo '<a href="logout.php">Logout</a>';
}
?>
