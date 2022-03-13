<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $sal = isset ($_GET["tSal"])?$_GET["tSal"]:0 ;
    $tem = isset ($_GET["tTs"])?$_GET["tTs"]:0 ;	
	
	if ($sal < 200){
	$imp = $sal * (0/100);	
	}	
	if (($sal >= 200)&&($sal <= 450)){
	$imp = $sal * (3/100);	
	}	
	if (($sal > 450)&&($sal < 720)){
	$imp = $sal * (8/100);	
	}		
	if ($sal >= 700){
	$imp = $sal * (12/100);	
	}	
	
	if ($sal > 500){
	 if ($tem <= 3){
		 $grat = 20; 
     }
     if ($tem > 3){
		 $grat = 30; 
     }	 
	}
	if ($sal <= 500){
	 if ($tem <= 3){
		 $grat = 23; 
     }
	 if (($tem > 3)&&($tem < 6)){
	     $grat = 35;	
	 }
     if ($tem >= 6){
		 $grat = 33; 
     }		
	}

	$sall = $sal - $imp + $grat;
	
	if ($sall <= 350){
	$cla = "A";	
	}	
	if (($sall > 350)&&($sal < 600)){
	$cla = "B";		
	}		
	if ($sall >= 600){
	$cla = "C";	
	}	
	
	
	echo "Imposto: ".round($imp, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Gratificação: $grat"."<br />";
	echo "Salario Liquido: ".round($sall, 2, PHP_ROUND_HALF_UP)."<br />";
	echo "Classificação: $cla";
	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>