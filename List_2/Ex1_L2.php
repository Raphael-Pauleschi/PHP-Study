<html>
<head>
<meta charset="UTF-8"/>
<title>Resultadão</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:0 ;  
	$n2 = isset ($_GET["tN2"])?$_GET["tN2"]:0 ;
    $n3 = isset ($_GET["tN3"])?$_GET["tN3"]:0 ;  
    
	$aux = $n1*2 + $n2*3 + $n3*5;
	$med = $aux/10;
	
	if (($med >= 8) && ($med <= 10)){
	$con = "A";
	}
	if (($med >= 7) && ($med < 8)){
	$con = "B";
	}
	if (($med >= 6) && ($med < 7)){
	$con = "C";
	}
	if (($med >= 5) && ($med < 6)){
	$con = "D";
	}
	if (($med >= 0) && ($med < 5)){
	$con = "E";
	}
	
	echo "Média do aluno: $med"."<Br />";
	echo "Conceito: $con"."<Br />";
	


  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>