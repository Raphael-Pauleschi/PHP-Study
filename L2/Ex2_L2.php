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
	
	if (($med >= 7) && ($med <= 10)){
	$con = "Aprovado";
	}
	if (($med >= 3) && ($med < 7)){
	$con = "Exame";
	$nes = 6 - $med; 
	}
	if (($med >= 0) && ($med < 3)){
	$con = "Reprovado";
	}

	
	echo "Média do aluno: $med"."<Br />";
	echo "Conceito: $con"."<Br />";
	if ($con=="Exame"){
	echo "Faltam : $nes";
	}
	


  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>