<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
     $sal = isset ($_GET["tSal"])?$_GET["tSal"]:1 ;
     

    if ($sal <= 500){
	$bo = $sal *(5/100) ;	
	}
     if (($sal > 500) && ($sal <1200)){
	$bo = $sal *(12/100) ;
	}	
    if ($sal >= 1200){
	$bo = $sal *(0/100) ;
	}	
	
    if ($sal <= 600){
	$es = 150 ;
	}
    if ($sal > 600){
	$es = 100 ;
	}
	
	$nsal = $sal + $es + $bo;
	
	echo "Bonificação: $bo"."<br />";
	echo "Auxilio Escolar: $es"."<br />";
	echo "Salário Atual: $nsal"."<br />";  
 
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>