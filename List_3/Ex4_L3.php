<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ;  
    $n2 = isset ($_GET["tN2"])?$_GET["tN2"]:"0" ;  
	$aux = ($n1*2) + ($n2*3);
	$mep = $aux/5;

 
	 echo "Média Ponderada: $mep"
  ?>
  
  
  <br />
<a href="FormEx4_L3.html">Voltar</a>


</body>
</html>