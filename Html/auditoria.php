<html>
	<head> 
		<title> Formulario </title>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" /> 
	</head>

	<body bgcolor="white">

<center> Auditor&iacute;as </center> 
<center> <table border="1" width="80%"> 

<form class="Auditorias" method="post" action="../php/insertPHP/addAuditoria.php">
	<tr>
		<td colspan="2"> Auditor&iacute;a # <input type="number" name="Aauditoria" id="Aauditoria" size="20">  </td>
		<td colspan="2"> Empresa 
			<select name="Aempresa" id="Aempresa" size 1> <br>
				<?php
				$conn = new mysqli("localhost","root","admin","ingenium");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * FROM empresas";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_empresa'] ?>>
					<?php echo "".$row['razonsocial'] ?>
				</option><?php } $conn->close(); ?>
			</select>
		</td>
		<td colspan="2"> Alcance: </p>
			<textarea rows="6x" cols="40" name="Aalcance" id="Aalcance" ></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"> Usuario 
			<select name="Ausuario" id="Ausuario" size="1">
				<?php
				$conn = new mysqli("localhost","root","admin","ingenium");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * FROM usuarios where id_type='2'";//usuario auditado
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_usuario'] ?>>
					<?php echo "".$row['user'] ?>
				</option><?php } $conn->close(); ?>
			</select></td>
		<td colspan="2"> Hora inicio: <input type="datetime-local" name="Ahorainicio" id="Ahorainicio" step="1"> </td>
		<td colspan="2"> Criterio 
			<select name="Acriterio" id="Acriterio" size 1> <br>
				<?php
				$conn = new mysqli("localhost","root","admin","ingenium");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * FROM criterio";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_criterio'] ?>>
					<?php echo "".$row['nombre'] ?>
				</option><?php } $conn->close(); ?>
			</select>
		</td>
		<td colspan="2"> Aceptado <input type="checkbox" name="Aaceptado" id="Aaceptado" value="Aceptado"></td>
	</tr>
	<tr>
		<td colspan="2"> Calendario <input type="date" name="Acalendario" id="Acalendario" step="1" min="2015-01-01" max="2015-12-31" value="2015-01-01"> </td>
		<td colspan="2"> Hora final: <input type="datetime-local" name="Ahorafinal" id="Ahorafinal" step="1"> </td>
		<td colspan="2"> Actividades: </p>
			<textarea rows="6x" cols="40" name="Aactividad" id="Aactividad"></textarea>
		</td>
		<td colspan="2"> Auditor 
			<select name="Aauditor" id="Aauditor" size="1">
				<?php
				$conn = new mysqli("localhost","root","admin","ingenium");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * FROM usuarios where id_type='3'";//usuario auditor
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					?><option value=<?php echo "".$row['id_usuario'] ?>>
					<?php echo "".$row['user'] ?>
				</option><?php } $conn->close(); ?>
			</select></td>
	</tr>
	<tr>
		<td colspan="2"> </td>
		<td colspan="2"> Objetivo: </p>
			<textarea rows="6x" cols="40" name="Aobjetivo" id="Aobjetivo" ></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<center> 
				<button type="submit" onclick="validar()" name="guardar"> Enviar </button> 
			</center> 
		</td>
		<td colspan="2"> 
			<center> 
				<button type="submit" onclick="validar()" name="observar"> Observar </button>
			</center> 
		</td>
		<td colspan="3">
			<center>
				<button type="submit" onclick="validar()" name="limpiar"> Limpiar </button>
			</center> 
		</td> 
	</tr>
</form>
</table> 
</center>
<script type="text/javascript">
	function validar(){
		if(document.getElementsByName("LUsuario")==""){
			alert('La informaci&oacute;n ha sido enviada')
			return
		}
	}
</script>
</body>
</html>