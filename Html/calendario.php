<html>
	<head> 
		<title> Formulario </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="../css/styleFormularios.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
    <?php include("../php/conectarmysql.php");
     $UserAuditado=$_POST['Usuarioauditado'];
    $UserAuditor=$_POST['Usuarioauditor'];
    $FechaAudi=$_POST['fechaauditoria'];?>
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
    		<!-- Cuerpo de auditorias-->
    		<center>
    			<h1>Auditorías <h1>
    		</center>

            <br>

            <form action="calendario.php" method="post">
                selecciona el filtro que mas se acomode a tu solicitud
                usuario Auditado: <input type="text" name="Usuarioauditado">
                usuario Auditor: <input type="text" name="Usuarioauditor">
                fecha auditoria: <input type="date" name="fechaauditoria">
                <input type="submit" value="Enviar y continuar" name="guardar">
            </form>

</body>
<div class="CSSTableGenerator1">
    <center>
<?php 

if(isset($_POST['FOGuardar'])){
    if($UserAuditado){
            include("../php/conectarmysql.php");
            $sql = "SELECT au.`id_auditoria`, au.`id_usuario`,au.`id_empresa`,au.`horainicio`,au.`horafinal`,au.`confirmadofecha`,au.`usuario_auditor`,au.`vistobueno`,re.fecha_auditoria,re.tipo_auditoria,re.aceptado FROM auditoriagacf1102a au INNER JOIN regauditoria re ON au.id_auditoria = re.id_auditoria WHERE au.`id_usuario`= '$UserAuditado'  GROUP BY au.id_auditoria;";
        }
        if($Usuarioauditor){
            include("../php/conectarmysql.php");
            $sql = "SELECT au.`id_auditoria`, au.`id_usuario`,au.`id_empresa`,au.`horainicio`,au.`horafinal`,au.`confirmadofecha`,au.`usuario_auditor`,au.`vistobueno`,re.fecha_auditoria,re.tipo_auditoria,re.aceptado FROM auditoriagacf1102a au INNER JOIN regauditoria re ON au.id_auditoria = re.id_auditoria WHERE au.`usuario_auditor`='$UserAuditor' GROUP BY au.id_auditoria;";
        }
        if($FechaAudi){
            include("../php/conectarmysql.php");
            $sql = "SELECT au.`id_auditoria` , au.`id_usuario` , au.`id_empresa` , au.`horainicio` , au.`horafinal` , au.`confirmadofecha` , au.`usuario_auditor` , au.`vistobueno` , re.fecha_auditoria, re.tipo_auditoria, re.aceptado FROM auditoriagacf1102a au INNER JOIN regauditoria re ON au.id_auditoria = re.id_auditoria GROUP BY au.id_auditoria ORDER BY  `au`.`confirmadofecha` ASC;";
        }
}
else{
     include("../php/conectarmysql.php");
        $sql = "SELECT au.`id_auditoria`, au.`id_usuario`,au.`id_empresa`,au.`horainicio`,au.`horafinal`,au.`confirmadofecha`,au.`usuario_auditor`,au.`vistobueno`,re.fecha_auditoria,re.tipo_auditoria,re.aceptado FROM auditoriagacf1102a au INNER JOIN regauditoria re ON au.id_auditoria = re.id_auditoria GROUP BY au.id_auditoria;";
}
        
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>
    <tr>
        <td>id_auditoria</td>
        <td>id_usuario</td>
        <td>id_empresa</td>
        <td>horainicio</td>
        <td>horafinal</td>
        <td>confirmadofecha</td>
        <td>scendente</td>
        <td>usuario_auditor</td>
        <td>vistobueno</td>
        <td>fecha_auditoria</td>
        <td>tipo_auditoria<td>
        <td>aceptado</td>
        <td>color</td>
    </tr>";
    while($row = $result->fetch_assoc()){
      echo "
      <tr>
        <td>".$row['id_auditoria']."</td>  
        <td>".$row['id_usuario']."</td>
        <td>".$row['id_empresa']."</td>
        <td>".$row['horainicio']."</td>
        <td>".$row['horafinal']."</td>
        <td>".$row['confirmadofecha']."</td>
        <td>".$row['scendente']."</td>
        <td>".$row['usuario_auditor']."</td>
        <td>".$row['vistobueno']."</td>
        <td>".$row['fecha_auditoria']."</td>
        <td>".$row['tipo_auditoria']."<td>
        <td>".$row['aceptado']."</td>
        <td> *** </td>
      </tr>";
    }
    echo "</table>";
  } ?>
  </div>
    </center>
</html>