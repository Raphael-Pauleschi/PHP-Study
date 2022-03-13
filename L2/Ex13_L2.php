<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $op  = isset ($_GET["tOp"])?$_GET["tOp"]:1;  
	$sal = isset ($_GET["tSal"])?$_GET["tSal"]:0;

 
	switch ($op){
	case 1:
	if ($sal <500){
	$imp = $sal * (5/100);
	}	
	if (($sal >= 500)&&($sal <= 850){
	$imp = $sal * (10/100);	
	}	
	if ($sal > 850){
	$imp = $sal * (15/100);		
	}	
	echo "Imposto: $imp";	
    break;
	
	case 2:
	if ($sal > 1500){
	$nsal = $sal + 25;
	}	
	if (($sal >= 750)&&($sal <= 1500){
	$nsal = $sal + 50;	
	}	
	if (($sal >= 450)&&($sal < 750){
	$nsal = $sal + 50;	
	}	
	if ($sal < 450){
	$nsal = $sal + 100;		
	}	
	echo "Novo Salário: $nsal";	
    break;
	
	case 3:
	if ($sal <= 750){
    echo "Mal remunerada";
	}	

	if ($sal > 750){
    echo "Bem remunerada";	
	}	
	break;
	}	
    

	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>