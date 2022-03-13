<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $salm = isset ($_GET["tSal"])?$_GET["tSal"]:0 ;  
	$ht   = isset ($_GET["tHt"])?$_GET["tHt"]:0 ;
	$dep  = isset ($_GET["tDen"])?$_GET["tDen"]:0 ;
	$he   = isset ($_GET["tHe"])?$_GET["tHe"]:0 ;  
	
    $vht  = $salm/5;
    $mes  = $ht * $vht;	
	$vdep = $dep * 32;
	$vhe  = $he*($vht*1.5);
	
	$salb = $mes + $vdep + $vhe;
	
	if ($salb < 200){
	$irrf = $salb * (0/100);
	}
	if (($salb >= 200)&&($salb <= 500)){
	$irrf = $salb * (10/100);	
	}
	if ($salb > 500){
	$irrf = $salb * (20/100);		
	}
	
	$sall = $salb - $irrf;
	
	if ($sall <= 350){
	$grat = 100;
	}
	if ($sall > 350){
	$grat = 50;
	}	
	
	$salt = $sall + $grat;
	
	
	
	echo "Salario a Receber: ".round($salt, 2, PHP_ROUND_HALF_UP)."<br />";
	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>