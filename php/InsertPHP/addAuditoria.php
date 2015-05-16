<?php
$autirotia = $_POST['Aauditoria'];
$empresa = $_POST['Aempresa'];
$alcance = $_POST['Aalcance']; 
$usuario = $_POST['Ausuario']; 
$horainicio = $_POST['Ahorainicio'];
$criterio = $_POST['Acriterio'];
$aceptado = $_POST['Aaceptado'];
$calendario = $_POST['Acalendario'];
$actividad = $_POST['Aactividad'];
$horafinal = $_POST['Ahorafinal'];
$auditor = $_POST['Aauditor'];
$objetivo = $_POST['Aobjetivo'];
$Bguardar = $_POST['guardar'];
$Bobservar = $_POST['observar'];

if(isset($_POST['guardar'])) {
  define('DB_SERVER','localhost');
  define('DB_NAME','ingenium');
  define('DB_USER','root');
  define('DB_PASS','admin');
  //Este es un script para conectar a la base de datos
  $link = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('No se pudo conectar: ' . mysql_error());
  mysql_select_db(DB_NAME,$link) or die('No se pudo seleccionar la base de datos');
  // register a new usuari
  $sql = "INSERT INTO ingenium.auditoriagacf1102a VALUES".
  "(NULL, '$usuario', '$empresa', '$calendario', '$horainicio', '$horafinal', '$objetivo',".
    "'$alcance', '$criterio', '$actividad', '$aceptado', '$auditor');";

  $result = mysql_query($sql);
  echo "¡Gracias! Hemos recibido sus datos.\n";
  $conn->close();
}
else{
} //end if


if(isset($_POST['observar'])) {
  echo "hola que tal";
  $conn = new mysqli("localhost","root","admin","ingenium");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM ingenium.auditoriagacf1102a";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>
    <tr>
      <td width='150'>auditoria</td>  
      <td width='150'>usuario</td>  
      <td width='150'>empresa</td>
      <td width='150'>confirmadofecha</td>
      <td width='150'>horainicio</td>
      <td width='150'>horafinal</td>
      <td width='150'>objetivo</td>
      <td width='150'>alcance</td>
      <td width='150'>criterio</td>
      <td width='150'>Actividades</td>
      <td width='150'>vistobueno</td>
      <td width='150'>usuario_auditor</td>
    </tr>";
    while($row = $result->fetch_assoc()){
      echo "
      <tr>
        <td width='150'>".$row['id_auditoria']."</td>  
        <td width='150'>"; 
        $sql2 = "SELECT * FROM usuarios where id_usuario=".$row['id_usuario'].";";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0){
          while($row2 = $result2->fetch_assoc()){
            echo "".$row2['user'];
          }
        }
      echo "</td>  
        <td width='150'>";
        $sql2 = "SELECT * FROM empresas where id_empresa=".$row['id_empresa'].";";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0){
          while($row2 = $result2->fetch_assoc()){
            echo "".$row2['razonsocial'];
          }
        }
      echo "</td>
        <td width='150'>".$row['confirmadofecha']."</td>
        <td width='150'>".$row['horainicio']."</td>
        <td width='150'>".$row['horafinal']."</td>
        <td width='150'>".$row['objetivo']."</td>
        <td width='150'>".$row['alcance']."</td>
        <td width='150'>".$row['criterio']."</td>
        <td width='150'>".$row['Actividades']."</td>
        <td width='150'>"; if($row['vistobueno']==1) echo "OK"; else echo"NO"; echo "</td>
        <td width='150'>";
        $sql2 = "SELECT * FROM usuarios where id_usuario=".$row['id_usuario'].";";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0){
          while($row2 = $result2->fetch_assoc()){
            echo "".$row2['user'];
          }
        }
      echo "</td>  
        <td width='150'></td>
      </tr>";
    }
    echo "</table>";
  }
  $conn->close();
}
?>