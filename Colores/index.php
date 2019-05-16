<?php 

	$color=$_POST['color'];
	if($color=="Rojo"&&$color=="rojo"&&$color=="ROJO"){
		$resultado="RED";
	}
	if($color=="verde"&&$color=="Verde"&&$color=="VERDE"){
		$resultado="GREEN";
	}
	if($color=="Amarillo"&&$color=="amarillo"&&$color=="AMARILLO"){
		$resultado="YELLOW";
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Colores</title>}
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Español-Inglés</h1>
	<section class="webdesigntuts-workshop">
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">		    
		<input type="search" placeholder="Search..." name="color">		    	
		<button>Traducir</button>
		<h2 style="color: white;"><?php $resultado ?></h2>		    	

	</form>
</section>
</body>
</html>