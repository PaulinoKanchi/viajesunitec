
<!DOCTYPE html>
<html>
	<head>
    	<meta charset="UTF-8">
    	<title></title>
    	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
	</head>
	<body>
		<table class="table">
			<tr>
				<td><strong>PRODUCTOS</strong></td>
				<td><strong>PRECIO</strong></td>
			</tr>
			<?php
			for($i = 0; $i < count($datos); $i++){
				?>
				<tr>
					<td><?php echo $datos[$i]["nombre"]; ?></td>
					<td><?php echo $datos[$i]["precio"]; ?></td>
				</tr>
				<?php
			}
			?>
		</table>
	</body>		
</html>
