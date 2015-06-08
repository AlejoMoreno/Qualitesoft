<html>
<head> 
	<title>Cronograma</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/styleFormularios.css" />
</head>
<body bgcolor="white">
	<?php include("../php/conectarmysql.php");?>
	<!-- Menu-bar  -->
	<ul id="menu-bar">
		<li><a href="calendario.php">Calendario</a></li>
		<li class="active"><a href="Cronograma.php">Cronograma Anual</a></li>
		<li><a href="auditoria.php">Auditoria</a></li>
		<li><a href="formularios.php">Formularios</a></li>
		<li><a href="informes.php">Informes</a></li>
		<li><a href="#">Configuración</a>
			<ul>
				<li><a href="#">Services Sub Menu 1</a></li>
				<li><a href="#">Services Sub Menu 2</a></li>
				<li><a href="#">Services Sub Menu 3</a></li>
				<li><a href="#">Services Sub Menu 4</a></li>
			</ul>
		</li>
		<li><a href="analisis.php">Análisis</a></li>
		<li><a href="../php/logout.php">Salir</a></li>
	</ul>
	<!-- titulo y formulario-->
	<center><h1>Cronograma anual</h1></center><br>
	<center>
	<div class="FCronograma"> 
		<table border="1" width="90%">
			<tr>
				<td colspan="3">A&ntilde;o 2015 </td>
				<td colspan="3">  </td>
			</tr>
			<form class="Auditorias" method="post" action="../php/insertPHP/addCronograma.php">
				<tr>
					<td colspan="3"> Auditoria <br>
						<select name="Auditor" id="Auditor"> 
						  <?php
			    include("../php/conectarmysql.php");
				$sql = "SELECT * FROM auditoriagacf1102a";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_auditoria'] ?>>
					<?php echo "".$row['id_auditoria'] ?>
				</option><?php } $conn->close(); ?>
			</select>
					</td>
					<td colspan="3"> Fecha auditoría:<br> <input type="date" name="FechaAuditoria" step="1" min="2015-01-01" max="2015-12-31" value="2015-01-01"> </td>
				</tr>
				<tr><td colspan="3"> Usuario <br><input type="text" name="Usuario" size="20"> </td>
				</tr>
				<tr><td colspan="3"> Empresa <br>
					<select name="Empresa" id="Auditor"> 
						<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM empresas";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_empresa'] ?>>
					<?php echo "".$row['razonsocial'] ?>
				</option><?php } $conn->close(); ?>
			</select>
				</td>
				<td colspan="3"> Fecha confirmado: <br><input type="date" name="FechaConfirm" step="1" min="2015-01-01" max="2015-12-31" value="2015-01-01"> </td>
			</tr>
			<tr><td colspan="3"> Proceso <br>
				<select name="Proceso" id="Proceso"> 
					<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM procesos";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_proceso'] ?>>
					<?php echo "".$row['nombre'] ?>
				</option><?php } $conn->close(); ?>
			</select>
			</td>
		</tr>
		<tr>
			<td colspan="3"> Enviado <input type="checkbox" name="Enviado" value="1"></td>
			<td colspan="3"> Aprovado <input type="checkbox" name="Aprovado" value="1"></td>
		</tr>
		<tr>
			<td colspan="3"> </td>
			<td colspan="3"> <center> 
				<input type="submit" value="Enviar y continuar" name="guardar"></center> </td>
			</tr>
		</form>
		</table> </div>
		<div class="CSSTableGenerator"> 
					<center> 
		<?php 
  include("../php/conectarmysql.php");
  $sql = "SELECT * FROM ingenium.cronogramagacf1100_1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>
    <tr>
      <td width='150'>Auditoria</td>  
      <td width='150'>Usuario</td>  
      <td width='150'>Empresa</td>
      <td width='150'>Fecha_Auditoria</td>
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
      </tr>";
    }
    echo "</table>";
  } ?>
				</center></div>
	</center>
</body>
</html>