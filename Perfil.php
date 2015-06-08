<html>
<head><link rel="stylesheet" href="main.css" type="text/css" /></head>
<body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script> 
		$(document).ready(function(){
		    colors = ['#FFB30C', '#58EC00', '#0087EC', '#EEEEEE', '#FF5A00' ];
		    var i = 0;
		    var x =1;
		    animate_loop = function() {
		    	$('body').animate({backgroundColor:colors[(i++)%colors.length]
		    	}, 900, function(){
		    		animate_loop();
		    	});
		    }
		    animate_loop();
		    //ver la linea de tiempo
		    $("button").click(function(){
		        $(".dias").animate({
		            height: 'toggle'
                });
		    });
		    //poner en rojo el dia
		    <?php
		    for ($i =1; $i <=31; $i +=1){
		    	?>$("#n"+<?php echo ''.$i ?>).click(function(){
		    		$("#n"+<?php echo ''.$i ?>).css({color: "#FFFFFF", background: "#FF0000"});
		    	});
		    <?php } ?>
		    //mouse over
		    $("#n1").mouseover(function() {
		    	$("#n1").append("<div class="+<?php echo 'generado'?>+">Hanleader for .mouseover called div </div>");
		    });
		    $("#n1").mouseout(function() {
		    	$("#n1").removeClass("generado");
		    });
		    
		});
	</script> 
	<style type="text/css">
	<?php 
	for($i =1; $i <=31; $i +=1){
		?>#n<?php echo ''.$i ?>{
			float:left;
			width: 30px;
  			height: 30px;
  			background-color: #D8D8D8;
		}
	<?php } ?>
		
	</style>
	<div id="mes">
		Selecciona el mes: <br>
		<select>
			<option value="1">Enero</option>
			<option value="2">Febrero</option>
			<option value="3">Marzo</option>
			<option value="4">Abril</option>
			<option value="5">Mayo</option>
			<option value="6">Junio</option>
			<option value="7">Julio</option>
			<option value="8">Agosto</option>
			<option value="9">Septiembre</option>
			<option value="10">Octubre</option>
			<option value="11">Noviembre</option>
			<option value="12">Diciembre</option>
		</select>
	</div>
	<div class="dias">
		<?php
			for($i = 1; $i <= 31; $i +=1){
				?><div class="number" id=<?php echo 'n'.$i ?>> <?php echo ''.$i ?></div><?php } ?>
	</div><br>
	<button>Ver linea de tiempo</button>
</body>
</html>