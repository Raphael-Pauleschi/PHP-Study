<html>
<head>
<meta charset="UTF-8"/>
<title>Resultadão</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:0 ;  
	$n2 = isset ($_GET["tN2"])?$_GET["tN2"]:0 ;
    

	
	if ($n1 > $n2) {
	echo "$n1 é maior que $n2";
	}
	if ($n2 > $n1) {
	echo "$n2 é maior que $n1";
	}
	if ($n1 == $n2){
	echo "$n1 é igual a $n2";
	}

	

	


  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>