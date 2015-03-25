<?php 




require_once '../php/reader.php';

$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read('archivo.xls');
echo("<table>");
for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	echo("<tr>");
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		echo("<td>".$data->sheets[0]['cells'][$i][$j] ."</td>");
	}
	echo("</tr>");

}
echo("</table>");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lienzo</title>
	<style type="text/css">

		#clienzo{

		}

	</style>
	<script type="text/javascript">
		window.addEventListener('load', inicial, false);

		var canvas=null;  ctx=null;

		function inicial(){
			canvas=document.getElementById("clienzo");
			ctx= canvas.getContext("2d");
			dibujar(ctx);


		}
		function dibujar(ctx){

			ctx.fillStyle="#0f0";
			ctx.fillRect(50,50, 100, 40);
			ctx.fillStyle="#f00";
			ctx.fillRect(100, 2, 60, 80);

		}


	</script>
</head>
<body>

	<canvas id="clienzo" width="500" heigth="350" >Actualizacion canvas </canvas>
</body>
</html>