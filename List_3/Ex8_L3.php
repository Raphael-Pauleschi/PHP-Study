<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ; 
	$g = $n1 * 1000;

     echo "Area :";  
	 echo round($g, 2,PHP_ROUND_HALF_DOWN); 

  ?>
  
  
  <br />
<a href="FormEx8_L3.html">Voltar</a>


</body>
</html>