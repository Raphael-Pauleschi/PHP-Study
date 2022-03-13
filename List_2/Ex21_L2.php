<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $ori = isset ($_GET["tOri"])?$_GET["tOri"]:0 ;
    $pto = isset ($_GET["tTo"])?$_GET["tTo"]:0 ;	
	$car = isset ($_GET["tCar"])?$_GET["tCar"]:0 ;
	
	
    $pkg = $pto * 1000;
	
    if (($ori >= 10) && ($ori <= 20)){ 
	$pre = $pkg * 100;
	}
	if (($ori >= 21) && ($ori <= 30)){ 
	$pre = $pkg * 250;
	}
	if (($ori >= 31) && ($ori <= 40)){ 
	$pre = $pkg * 340;
	}

	
	switch ($car){
	case 1:
	$imp = $pre * (35/100);
	break;
	case 2:
	$imp = $pre * (25/100);	
	break;
	case 3:
	$imp = $pre * (15/100);	
	break;
	case 4:
	$imp = $pre * (5/100);
	break;
	case 5:
	$imp = $pre * (0/100);	
	break;	
	}
	
	$pret = $pre + $imp;
	
	echo "Peso em Quilos: ".round($pkg, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Preço da Carga: ".round($pre, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Impostos: ".round($imp, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Preço Total: ".round($pret, 2, PHP_ROUND_HALF_UP)."<br />";
	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>