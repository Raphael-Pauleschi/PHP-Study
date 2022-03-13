<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
     $pre = isset ($_GET["tPre"])?$_GET["tPre"]:1 ;
	 $vm  = isset ($_GET["tVm"])?$_GET["tVm"]:1 ;
     

    if (($vm < 500) && ($pre >=30)){
	$aux = $pre *(10/100) ;	
	$npre = $pre + $aux;
	}
     if (($vm >= 500) && ($vm <1200) && ($pre>=30) && ($pre <80)){
	$aux = $pre *(15/100) ;
	$npre = $pre + $aux;
	}	
    if (($vm >= 1200) && ($pre >=80)){
	$aux = $pre *(20/100) ;
	$npre = $pre - $aux;
	}	
	
	
	echo "Novo Preço: $npre"."<br />";
 
 
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>