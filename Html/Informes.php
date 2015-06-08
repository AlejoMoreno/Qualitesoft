<html>
<head>
	<title> Informes </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/styleFormularios.css" /> 
</head>
<?php include("../php/conectarmysql.php");?>
<body bgcolor="white">
	<ul id="menu-bar">
    			<li class="active"><a href="calendario.php">Calendario</a></li>
    			<li><a href="Cronograma.php">Cronograma Anual</a></li>
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
	<center> <h1>Informes</h1> </center> <br>
	<center>
		<div class="FCronograma"> 
		<div class="NC">
			<form class="NC" method="post" action="../php/insertPHP/addNC.php">
				<h2>NC<h2>
				<select name="NCAuditoria">
					<option>----Auditoria----</option><?php
					include("../php/conectarmysql.php");
				$sql = "SELECT * FROM auditoriagacf1102a";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_auditoria'] ?>>
					<?php echo "".$row['id_auditoria'] ?>
				</option><?php } $conn->close(); ?>
			</select><br><br>

				<select name="NCCriterio">
					<option>----Criterio-----</option>
				<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM criterio";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_criterio'] ?>>
					<?php echo "".$row['nombre'] ?>
				</option><?php } $conn->close(); ?>
			</select><br><br>

				Descripcion:<br>
				<input type="textarea" name="NCDescripcion"><br><br>
				Categoria:<br>
				<input type="text" name="NCCategoria"><br><br><br>
				
				<input type="submit" value="Guardar" name="NCguardar"><br><br><br>
			</form>
		</div>

		<div class="RegistroAuditoria">
			<form class="RegistroAuditoria" method="post" action="../php/insertPHP/addRegisterAuditoria.php">
				<h2>Registro Auditoria<h2>
				<select name="RAAuditoria">
					<option>----Auditoria----</option>
				<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM auditoriagacf1102a";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_auditoria'] ?>>
					<?php echo "".$row['id_auditoria'] ?>
				</option><?php } $conn->close(); ?>
			</select><br><br>

				<select name="RATipo">
					<option>----tipoAuditoria---</option>
				<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM tipos_programas";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_tipo_programa'] ?>>
					<?php echo "".$row['nombre'] ?>
				</option><?php } $conn->close(); ?>
			</select><br><br>
				Usuario:<br>
				<input type="text" name="RAUsuario"><br><br>
				Usuario Auditado:<br>
				<input type="text" name="RAUsuarioAuditado"><br><br>
				<input type="checkbox" name="RAAcepted" value="Aceptado"><br><br>

				<input type="submit" value="Guardar" name="RAguardar"><br><br><br><br>
			</form>
		</div>


		<div class="Informe">
			<form class="Informe" method="post" action="../php/insertPHP/addInformes.php">
				<h2>Informe<h2>
				<select name="INAuditoria">
					<option>----Auditoria----</option>
				<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM auditoriagacf1102a";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_auditoria'] ?>>
					<?php echo "".$row['id_auditoria'] ?>
				</option><?php } $conn->close(); ?>
			</select><br><br>

				<select name="INCriterio">
					<option>----Criterio---</option>
				<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM criterio";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_criterio'] ?>>
					<?php echo "".$row['nombre'] ?>
				</option><?php } $conn->close(); ?>
			</select><br><br>

				Seguimiento:<br>
				<input type="text" name="INSeguimiento"><br><br>
				Aspectos Favorables:<br>
				<input type="text" name="INAspectosF"><br><br>
				Resultados:<br>
				<input type="text" name="INResultados"><br><br>

				<select name="INNC">
					<option>----NC---</option>
				<?php
				include("../php/conectarmysql.php");
				$sql = "SELECT * FROM nc";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_NC'] ?>>
					<?php echo "".$row['id_NC'] ?>
				</option><?php } $conn->close(); ?>
			</select><br><br>
				
				<input type="submit" value="Guardar" name="INguardar"><br><br>
			</form>
		</div>
	</div> 
	</center>
</body>
</html>