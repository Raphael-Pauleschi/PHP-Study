<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:0 ;  
	$n2 = isset ($_GET["tN2"])?$_GET["tN2"]:0 ;
	$op = isset ($_GET["tOp"])?$_GET["tOp"]:1 ;
 
	switch ($op){
	case 1:
	$vlr = $n1 + $n2;
	echo "A soma de $n1 e $n2: $vlr"."<br />";	
    break;
	case 2:
	$vlr = sqrt ($n1);
	echo "Raiz Quadrada de $n1: ".round($vlr, 2, PHP_ROUND_HALF_UP)."<br />";
    break;
	}	
    

	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>