<!DOCTYPE html>
<html>
	<head>
		<title>bar and line | amCharts</title>
		<meta name="description" content="chart created using amCharts live editor" />

		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css" /> 
        <link rel="stylesheet" type="text/css" href="../css/styleFormularios.css" />

		<!-- amCharts javascript sources -->
		<script type="text/javascript" src="http://cdn.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="http://cdn.amcharts.com/lib/3/serial.js"></script>
		<script type="text/javascript" src="http://cdn.amcharts.com/lib/3/themes/patterns.js"></script>

		<ul id="menu-bar">
    			<li><a href="calendario.php">Calendario</a></li>
    			<li><a href="Cronograma.php">Cronograma Anual</a></li>
    			<li><a href="auditoria.php">Auditoria</a></li>
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
    			<li class="active"><a href="analisis.php">Análisis</a></li>
    			<li><a href="../php/logout.php">Salir</a></li>
    		</ul>

		<!-- amCharts javascript code -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"path": "http://www.amcharts.com/lib/3/",
					"categoryField": "category",
					"rotate": true,
					"autoMarginOffset": 40,
					"marginRight": 60,
					"marginTop": 60,
					"startDuration": 1,
					"fontSize": 13,
					"theme": "patterns",
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonText": "[[title]] of [[category]]:[[value]]",
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"labelText": "",
							"title": "graph 1",
							"type": "column",
							"valueField": "column-1"
						},
						{
							"balloonText": "[[title]] of [[category]]:[[value]]",
							"bullet": "round",
							"id": "AmGraph-2",
							"labelText": "",
							"lineThickness": 2,
							"title": "graph 2",
							"valueField": "column-2"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": ""
						}
					],
					"allLabels": [],
					"balloon": {},
					"titles": [],
					"dataProvider": [
						{
							"category": "category 1",
							"column-1": 8,
							"column-2": 5
						},
						{
							"category": "category 2",
							"column-1": 6,
							"column-2": 8
						},
						{
							"category": "category 3",
							"column-1": 2,
							"column-2": 5
						}
					]
				}
			);
		</script>
	</head>
	<body>
		<div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</body>
</html>