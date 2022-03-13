<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $x  = isset ($_GET["tX"])?$_GET["tX"]:1;  
	$y  = isset ($_GET["tY"])?$_GET["tY"]:0;
	$z  = isset ($_GET["tZ"])?$_GET["tZ"]:0;

    if (($x + $y == $z) && ($x + $z == $y) && ($z + $y==$x)){ 
	
	if (($x == $y) && ($y == $z)){
	echo "Triangulo Equilatero";
	}
	elseif (($x != $y) && ($y != $z)){
	echo "Triangulo Escaleno";
	}
	elseif (($x == $y) || ($x == $z)){
	echo "Triangulo Isósceles";
	}
	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>