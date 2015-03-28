<html>
  <body>
    <?php
      if ($enviar) {
        //echo "usuario:".$nombreusuario." proceso:".$proceso;
        include("conectarmysql.php");
        // register a new usuario
        $sql = "INSERT INTO  ingenium.auditorias (".
          "id_auditoria ,".
          "id_usuario ,".
          "fecha_inicial ,".
          "fecha_auditoria ,".
          "id_proceso)".
          "VALUES (".
            "NULL,".
            "'$nombreusuario',".
            "'$startTime',".
            "'$TimeAuditoria',".
            "'$proceso');";
        $result = mysql_query($sql);
        if($result)
          echo "¡Gracias! Hemos recibido sus datos.\n";
        else
          echo "Hay un error";
      }
      else{
    ?>

    <form method="post" action="addauditoria.php">
      Usuario:
      <select name="nombreusuario">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM usuarios';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_usuario'] ?>>
          <?php echo "".$line['user'] ?>
          </option><?php
        }
        mysql_close($conexion);
        ?>
      </select><br>
      Fecha Inicial: <input type="date" name="startTime"><br>
      Fecha auditoria:<input type="date" name="TimeAuditoria"><br>
      Tipo: 
      <select name="proceso">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM procesos';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_proceso'] ?>>
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