<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ; 
	$n2 = isset ($_GET["tN2"])?$_GET["tN2"]:"0" ;
	$a = $n1 * $n2;

     echo "Area : ";  
	 echo round($a, 2,PHP_ROUND_HALF_DOWN); 

  ?>
  
  
  <br />
<a href="FormEx10_L3.html">Voltar</a>


</body>
</html>