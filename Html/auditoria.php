<html>
	<head> 
		<title> Formulario </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css" /> 
        <link rel="stylesheet" type="text/css" href="../css/styleFormularios.css" />
	</head>
    <?php include("../php/conectarmysql.php");?>
	<body bgcolor="white">
		<ul id="menu-bar">
    			<li><a href="calendario.php">Calendario</a></li>
    			<li><a href="Cronograma.php">Cronograma Anual</a></li>
    			<li class="active"><a href="auditoria.php">Auditoria</a></li>
    			<li><a href="formularios.php">Formularios</a></li>
    			<li><a href="informes.php">Informes</a></li>
    			<li><a href="graf.php">Configuración</a>
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
    		<!-- Cuerpo de auditorias-->
    		<center>
    			<h1>Auditor&iacute;as <h1>
    		</center>
    		<center> 
    			<div class="FCronograma">
    				<center>
    				<table border="1" width="80%">
    					<form class="Auditorias" method="post" action="../php/insertPHP/addAuditoria.php">
    						<tr>
    							<td colspan="2"> Auditor&iacute;a # <input type="number" name="Aauditoria" id="Aauditoria" size="20">  </td>
    						</tr>
    						<tr>
    							<td colspan="2"> Empresa... 
    								<select name="Aempresa" id="Aempresa" size 1> 
    											<option>--------Empresa--------</option>
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
    							<td colspan="2"> Usuario 
    								<select name="Ausuario" id="Ausuario" size="1">
                                        <option>--------Usuario--------</option>
    											<?php
                                                include("../php/conectarmysql.php");
    											$sql = "SELECT * FROM usuarios where id_type='2'";//usuario auditado
    											$result = $conn->query($sql);
    											while($row = $result->fetch_assoc()) {
    												?><option value=<?php echo "".$row['id_usuario'] ?>>
    												<?php echo "".$row['user'] ?>
    											</option><?php } $conn->close(); ?>
    								</select>
    							</td>
    						</tr>
    						<tr>
    							<td colspan="2"> Hora inicio: <input type="datetime-local" name="Ahorainicio" id="Ahorainicio" step="1"> </td>
    							<td colspan="2"> Criterio 
    								<select name="Acriterio" id="Acriterio" size 1>
                                        <option>--------Criterio--------</option>
    											<?php
                                                include("../php/conectarmysql.php");
    											$sql = "SELECT * FROM criterio";
    											$result = $conn->query($sql);
    											while($row = $result->fetch_assoc()) {
    												?><option value=<?php echo "".$row['id_criterio'] ?>>
    												<?php echo "".$row['nombre'] ?>
    											</option><?php } $conn->close(); ?>
    								</select>
    							</td>
    						</tr>
    						<tr>
    							<td colspan="2"> Objetivo: </p>
    								<textarea rows="6x" cols="40" name="Aobjetivo" id="Aobjetivo" ></textarea>
    							</td>
    							<td colspan="2"> Alcance: </p>
    								<textarea rows="6x" cols="40" name="Aalcance" id="Aalcance" ></textarea>
    							</td>
    						</tr>
    						<tr>
    							<td colspan="2"> Actividades: </p>
    								<textarea rows="6x" cols="40" name="Aactividad" id="Aactividad"></textarea>
    							</td>
    							<td colspan="2"> Calendario 
    								<input type="date" name="Acalendario" id="Acalendario" step="1" min="2015-01-01" max="2015-12-31" value="2015-01-01"> 
    							</td>
    						</tr>
    						<tr>
    							<td colspan="2"> Hora final: 
    								<input type="datetime-local" name="Ahorafinal" id="Ahorafinal" step="1"> 
    							</td>
    							<td colspan="2"> Auditor 
    								<select name="Aauditor" id="Aauditor" size="1">
                                        <option>--------Auditor--------</option>
    											<?php
                                                include("../php/conectarmysql.php");
    											$sql = "SELECT * FROM usuarios where id_type='3'";//usuario auditor
    											$result = $conn->query($sql);
    											while($row = $result->fetch_assoc()) {
    												?><option value=<?php echo "".$row['id_usuario'] ?>>
    												<?php echo "".$row['user'] ?>
    											</option><?php } $conn->close(); ?>
    								</select>
    							</td>
    						</tr>
    						<tr>
    							<td colspan="3"> Aceptado 
    								<input type="checkbox" name="Aaceptado" id="Aaceptado" value="Aceptado">
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
    						</tr>
    					</form>
    				</table></center>
    			</div> 
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