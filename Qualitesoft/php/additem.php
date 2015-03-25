<html>
  <body>
    <?php
      if ($enviar) {
        //echo "usuario:".$nombreusuario." proceso:".$proceso;
        include("conectarmysql.php");
        // register a new usuario
        $sql = "INSERT INTO  ingenium.items (".
          "id_item,".
          "id_referencia,".
          "requerimiento,".
          "id_cumplimiento,".
          "observaciones,".
          "id_tipo)".
          "VALUES (".
            "NULL,".
            "'$referencia',".
            "'$requerimiento',".
            "'$cumplimiento',".
            "'$observaciones',".
            "'$tipo');";
        $result = mysql_query($sql);
        if($result)
          echo "¡Gracias! Hemos recibido sus datos.\n";
        else
          echo "Hay un error";
      }
      else{
    ?>

    <form method="post" action="additem.php">
      Referencia:
      <select name="referencia">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM referencias';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_referencia'] ?>>
          <?php echo "".$line['nombre'] ?>
          </option><?php
        }
        mysql_close($conexion);
        ?>
      </select><br>
      Requerimiento:<input type="TextArea" name="requerimiento"><br>
      Cumplimiento:
      <select name="cumplimiento">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM cumplimientos';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_cumplimiento'] ?>>
          <?php echo "".$line['nombre'] ?>
          </option><?php
        }
        mysql_close($conexion);
        ?>
      </select><br>
      Observaciones: <input type="TextArea" name="observacion"><br>
      Tipo:
      <select name="tipo">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM tipos_programas';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_tipo_programa'] ?>>
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