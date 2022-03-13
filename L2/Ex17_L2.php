<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $a = isset ($_GET["tA"])?$_GET["tA"]:0 ;  
	$b = isset ($_GET["tB"])?$_GET["tB"]:0 ;
	$c = isset ($_GET["tC"])?$_GET["tC"]:0 ;  
	$n1 = pow ($b,2);
	$n2 = 4* $a * $b;
	$del = $n1 - $n2;
	
	if ($del < 0){
	echo "Não existe raiz real";	
	}	
	
    if ($del == 0){
	$x = (-1 * $b )/ (2* $a);
	echo "O valor da raiz é: ".round($x, 2, PHP_ROUND_HALF_UP);	
	}
	if ($del > 0){
    $x1 = ((-1 * $b) +  sqrt ($del) )/ (2* $a);
	$x2 = ((-1 * $b) - sqrt ($del) )/ (2* $a);
	echo "O valor da raiz 1 é: ".round($x1, 2, PHP_ROUND_HALF_UP)."<br />";	
	echo "O valor da raiz 2 é: ".round($x2, 2, PHP_ROUND_HALF_UP)."<br />";
    }
	

	


  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>