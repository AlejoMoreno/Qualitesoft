<html>
  <body>
    <?php
      if ($enviar) {
        //echo "usuario:".$nombreusuario." proceso:".$proceso;
        include("conectarmysql.php");
        // register a new usuario
        $sql = "INSERT INTO  ingenium.tipos_programas (".
          "id_tipo_programa ,".
          "nombre)".
          "VALUES (".
            "NULL,".
            "'$tipoprograma');";
        $result = mysql_query($sql);
        if($result)
          echo "¡Gracias! Hemos recibido sus datos.\n";
        else
          echo "Hay un error";
      }
      else{
    ?>

    <form method="post" action="addtipoprograma.php">
      
      Nombre del programa a auditar:<input type="TextArea" name="tipoprograma"><br>
      <input type="Submit" name="enviar" value="GUARDAR">
    </form>
    <?php
    } //end if
    ?>
  </body>
</html>