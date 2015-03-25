<html>
  <body>
    <?php
      if ($enviar) {
        include("conectarmysql.php");
        // register a new usuario
        $sql = "INSERT INTO  ingenium.usuarios (".
          "nombre,".
          "id_empresa,".
          "contacto,".
          "email,".
          "user,".
          "pass,".
          "id_type)".
          "VALUES (".
            "'$nombre',".
            "'$empresa',".
            "'$contacto',".
            "'$email',".
            "'$user',".
            "'$pass',".
            "'$tipo');";
        $result = mysql_query($sql);
        echo "¡Gracias! Hemos recibido sus datos.\n";
      }
      else{
    ?>

    <form method="post" action="adduser.php">
      Nombre   :<input type="Text" name="nombre"><br>   
      Empresa  :
      <select name="empresa">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM empresas';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_empresa'] ?>>
          <?php echo "".$line['nombre'] ?>
          </option><?php
        }
        mysql_close($conexion);
        ?>
      </select><br>
      Contacto:<input type="Text" name="contacto"><br>
      E-mail:<input type="Text" name="email"><br>
      Username:<input type="Text" name="user"><br>
      Password:<input type="Password" name="pass"><br>
      Tipo: 
      <select name="tipo">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM type';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_type'] ?>>
          <?php echo "".$line['nombre'] ?>
          </option><?php
        }
        mysql_close($conexion);
        ?>
      </select><br>
      <input type="Submit" name="enviar" value="GUARDAR">
    </form>
    <?php
    } //end if
    ?>
  </body>
</html>