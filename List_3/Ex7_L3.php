<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ; 
    $aux1 = $n1*(15/100);
    $aux2 =	$n1*(20/100);
    $en = $n1 + $aux1;
	$em = $n1 - $aux2;

     echo "Peso: ";
	 echo round($n1, 2,PHP_ROUND_HALF_DOWN); 
	 echo "<br/>"."<hr />";
	 echo "Se emagrecer: ";
     echo round($em, 2,PHP_ROUND_HALF_DOWN); 	 
	 echo"<br/>";
	 echo "Se engordar: " ;
	 echo round($en, 2,PHP_ROUND_HALF_DOWN); 	 
	 echo"<br/>";
  ?>
  
  
  <br />
<a href="FormEx7_L3.html">Voltar</a>


</body>
</html>