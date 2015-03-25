<html>
  <body>
    <?php
      if ($enviar) {
        //echo "usuario:".$nombreusuario." proceso:".$proceso;
        include("conectarmysql.php");
        // register a new usuario
        $sql = "INSERT INTO  ingenium.formularios (".
          "titulo,".
          "nombre,".
          "revision,".
          "subtitulo,".
          "fecha,".
          "id_item,".
          "id_auditoria,".
          "aceptado)".
          "VALUES (".
            "'$titulo',".
            "'$nombre',".
            "'$revision',".
            "'$subtitulo',".
            "'$fecha',".
            "'$item',".
            "'$auditoria',".
            "'$aceptado');";
        $result = mysql_query($sql);
        if($result)
          echo "¡Gracias! Hemos recibido sus datos.\n";
        else
          echo "Hay un error";
      }
      else{
    ?>

    <form method="post" action="addformulario.php">
      Titulo: <input type="text" name="titulo"><br>
      nombre: <input type="text" name="nombre"><br>
      revision: <input type="text" name="revision"><br>
      subtitulo: <input type="text" name="subtitulo"><br>
      fecha: <input type="date" name="fecha"><br>
      item:
      <select name="item">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM items';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_item'] ?>>
          <?php echo "".$line['id_item'] ?>
          </option><?php
        }
        mysql_close($conexion);
        ?>
      </select><br>
      Auditoria: 
      <select name="auditoria">
        <?php
        $conexion = mysql_connect("localhost","root","admin");
        mysql_select_db("ingenium",$conexion);
        $query = 'SELECT * FROM auditorias';
        $result = mysql_query($query,$conexion);
        while ($line = mysql_fetch_array($result)) {
          ?><option value=<?php echo "".$line['id_auditoria'] ?>>
          <?php echo "".$line['id_auditoria'] ?>
          </option><?php
        }
        mysql_close($conexion);
        ?>
      </select><br>
      Aceptado: 
      <select name="aceptado">
        <option value="1">Si</option>
        <option value="2">No</option>
      </select>
      <input type="Submit" name="enviar" value="GUARDAR">
    </form>
    <?php
    } //end if
    ?>
  </body>
</html>