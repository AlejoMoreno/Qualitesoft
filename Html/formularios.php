<html>
	<head> 
		<title> Formulario </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/styleFormularios.css" />
	</head>	
	<?php include("../php/conectarmysql.php"); ?>
	<body bgcolor="white">
		<ul id="menu-bar">
    			<li><a href="calendario.php">Calendario</a></li>
    			<li><a href="Cronograma.php">Cronograma Anual</a></li>
    			<li><a href="auditoria.php">Auditoria</a></li>
    			<li class="active"><a href="formularios.php">Formularios</a></li>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $(".CSSTableGenerator").hide();
    });
    $(".btn2").click(function(){
        $(".CSSTableGenerator").show();
    });
});
</script>

		<center>
			<h1> Formulario </h1>
		</center><br>
		<center>
			<div class="FCronograma">  
				<table border="1" width="80%">
					<tr>
						<td> <center><h2> ítems </h2></center> </td>
						<td> <center><h2> Referencia y cumplimiento </h2></center></td>
						<td> <center><h2> Listas de chequeo </h2></center>  </td>
					</tr>
					<tr>
						<td>
							<div class="items">
								<form class="Fitems" method="post" action="../php/insertPHP/addItems.php">
									<p>ítem # ...</p>
									Referencia:<br>
									<select name="ITReferencia" size 1> <br>
										<?php
										include("../php/conectarmysql.php");
										$sql = "SELECT * FROM referencias";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()) {
											?><option value=<?php echo "".$row['id_referencia'] ?>>
											<?php echo "".$row['nombre'] ?>
												</option><?php } $conn->close(); ?>
									</select><br><br>
									Requerimiento: <br>
									<input type="text" name="ITRequerimiento" size="20"><br><br>
									Cumplimiento <br>
									<select name="ITCumplimiento" size 1> <br><br>
										<?php
										include("../php/conectarmysql.php");
										$sql = "SELECT * FROM cumplimientos";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()) {
											?><option value=<?php echo "".$row['id_cumplimiento'] ?>>
											<?php echo "".$row['nombre'] ?>
										</option><?php } $conn->close(); ?>
									</select><br><br>
									Observaciones:<br>
									<textarea rows="6x" cols="20" name="ITObservacion" ></textarea><br><br>
									Tipo programa <br>
									<select name="ITTipo_programa" size 1> <br>
										<?php
										include("../php/conectarmysql.php");
										$sql = "SELECT * FROM tipos_programas";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()) {
											?><option value=<?php echo "".$row['id_tipo_programa'] ?>>
											<?php echo "".$row['nombre'] ?>
												</option><?php } $conn->close(); ?>
									</select><br><br><center>
									<input type="submit" value="Guardar" name="ITGuardar"></center>
								</form>
							</div>
						</td>
						<td>
							<div class="referencia">
								<form class="FReferencia" method="post" action="../php/insertPHP/addReferencia.php">
									<p>Referencia # ...</p>
									Cumplimiento
									<input type="text" name="RECumplimiento"><br><br>
									Tipo Programa
									<input type="text" name="RETipoprograma"><br><br>
									<center><input type="submit" value="Guardar" name="REGuardar"></center>
								</form>
							</div>
						</td>
						<td>
						<div class="Formularios">
							<form class="FFormularios" method="post" action="../php/insertPHP/addFormularios.php">
								<p>Formularios o listas de chequeo</p>
								<p>Formulario # ...</p><br>
								titulo formulario:<br><input type="text" name="FOTitulo"><br><br>
								Nombre Formulario:<br><input type="text" name="FONombre"><br><br>
								Revision:<br><input type="text" name="FORevision"><br><br>
								Subtitulo:<br><input type="text" name="FOSubtitulo"><br><br>
								Item: 
								<select name="FOItem" size 1> <br>
									<?php
									include("../php/conectarmysql.php");
									$sql = "SELECT * FROM items";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc()) {
										?><option value=<?php echo "".$row['id_item'] ?>>
										<?php echo "".$row['id_item'] ?>
									</option><?php } $conn->close(); ?>
								</select><br><br>
								Auditoria: 
								<select name="FOAuditoria" size 1> <br>
									<?php
									include("../php/conectarmysql.php");
									$sql = "SELECT * FROM auditoriagacf1102a";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc()) {
										?><option value=<?php echo "".$row['id_auditoria'] ?>>
										<?php echo "".$row['id_auditoria'] ?>
									</option><?php } $conn->close(); ?>
								</select><br><br>
								Contenido:
								<textarea rows="6x" cols="20" name="FOContenido"></textarea><br><br>
								<input type="date" name="FOFecha"><br><br><center>
								<input type="submit" value="Guardar" name="FOGuardar"></center>
							</form>
						</div>
					</td>
				</tr>
			</table>
		</div>
			<div class="CSSTableGenerator">
				<td colspan="4"> <center> 
					<?php 
					include("../php/conectarmysql.php");
					$sql = "SELECT * FROM ingenium.formularios";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
						echo "<table border=1>
						<tr>
						<td width='150'>Formulario</td>  
						<td width='150'>Items</td>  
						<td width='150'>Referencia</td>
						<td width='150'>Requerimiento</td>
						<td width='150'>Tipo Programa</td>
						</tr>";
						while($row = $result->fetch_assoc()){
							echo "
							<tr>
							<td width='150'>".$row['id_formulario']."</td>
							<td width='150'>".$row['id_item']."</td>  
							<td width='150'>"; 
							$sql2 = "SELECT * FROM items where id_item=".$row['id_item'].";";
							$result2 = $conn->query($sql2);
							if($result2->num_rows > 0){
								while($row2 = $result2->fetch_assoc()){
								/*$sql3 = "SELECT * FROM referencias where id_refencia=".$row2['id_referencia'].";";
								$result3 = $conn->query($sql3);
								if($result3->num_rows > 0){
								while($row3 = $result3->fetch_assoc()){
								echo "".$row3['nombre'];
								}
							}*/
							echo "".$row2['id_referencia'];
						}
					}
					echo "</td>  
					<td width='150'>";
					 $sql2 = "SELECT * FROM items where id_item=".$row['id_item'].";";
					 $result2 = $conn->query($sql2);
					 if($result2->num_rows > 0){
					 	while($row2 = $result2->fetch_assoc()){
					 		echo "".$row2['requerimiento'];
					 	}
					 }
					echo "</td>
					<td width='150'>";
					$sql2 = "SELECT * FROM items where id_item=".$row['id_item'].";";
					$result2 = $conn->query($sql2);
					if($result2->num_rows > 0){
						while($row2 = $result2->fetch_assoc()){
							echo "".$row2['id_tipo'];
						}
					}
					echo "</td>
					</tr>";
				}
				echo "</table>";
			} ?> </center>  </td>
		</div>
	</center>
</head>
<button class="btn1">Hide</button>
<button class="btn2">Show</button>
</body>
</html>