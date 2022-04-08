<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ;  
    $n2 = isset ($_GET["tN2"])?$_GET["tN2"]:"0" ;  
	$n3 = isset ($_GET["tN3"])?$_GET["tN3"]:"0" ; 
	$mul = $n1 * $n2 * $n3;

 
	 echo "$n1 * $n2 * $n3 = $mul";
  ?>
  
  
  <br />
<a href="FormEx2_L3.html">Voltar</a>


</body>
</html>