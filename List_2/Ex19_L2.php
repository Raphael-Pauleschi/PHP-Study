<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $h = isset ($_GET["tH"])?$_GET["tH"]:0 ;  
	$m = isset ($_GET["tM"])?$_GET["tM"]:0 ;
	
	if ($h < 1.2){
		
	if ($m < 60){
	echo "Classificação: A";	
	}
	if (($m > 60) && ($m <= 90){
	echo "Classificação: B";
	}
	if ($m > 90){
	echo "Classificação: C";
	}
	
	}	
	
	if (($h >= 1.2) && ($h <= 1.7)){
		
	if ($m < 60){
	echo "Classificação: D";	
	}
	if (($m > 60) && ($m <= 90){
	echo "Classificação: E";
	}
	if ($m > 90){
	echo "Classificação: F";
	}
	
	}
	
	if ($h > 1.7){
		
	if ($m < 60){
	echo "Classificação: G";
	}
	if (($m > 60) && ($m <= 90){
	echo "Classificação: H";
	}
	if ($m > 90){
	echo "Classificação: I";
	}
	
	}	

	


  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>