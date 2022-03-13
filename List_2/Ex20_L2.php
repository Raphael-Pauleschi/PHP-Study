<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $ori = isset ($_GET["tOri"])?$_GET["tOri"]:0 ;  
	$pro = isset ($_GET["tPro"])?$_GET["tPro"]:0 ;
	$pkg = isset ($_GET["tKg"])?$_GET["tKg"]:0 ;
	
    $pg = $pkg * 1000;
	
    if ($pro <= 4){
    $pre = $pg * 10; 		
	}
    if (($pro >= 5) && ($pro <= 7)){ 
	$pre = $pg * 25;
	}
    if ($pro >= 8){ 
	$pre = $pg * 35;	
	}
	
	switch ($ori){
	case 1:
	$imp = $pre * (0/100);
	break;
	case 2:
	$imp = $pre * (15/100);	
	break;
	case 3:
	$imp = $pre * (25/100);	
	break;	
	}
	
	$pret = $pre + $imp;
	
	echo "Peso em Gramas: ".round($pg, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Preço do Produto: ".round($pre, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Impostos: ".round($imp, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Preço Total: ".round($pret, 2, PHP_ROUND_HALF_UP)."<br />";
	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>