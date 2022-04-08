<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ;  
	$n2 = isset ($_GET["tN2"])?$_GET["tN2"]:"0" ;
    $com = $n2*(4/100);
	$sal = $n1 + $com;

     echo "Salario fixo: ";
	 echo round($n1, 2,PHP_ROUND_HALF_DOWN); 
	 echo "<br/>";
	 echo "Valor das vendas: ";
     echo round($n2, 2,PHP_ROUND_HALF_DOWN); 
	 echo "<br/>"."<hr />";
	 echo "Comissão: ";
     echo round($com, 2,PHP_ROUND_HALF_DOWN); 	 
	 echo"<br/>";
	 echo "Salario final: " ;
	 echo round($sal, 2,PHP_ROUND_HALF_DOWN); 	 
	 echo"<br/>";
  ?>
  
  
  <br />
<a href="FormEx6_L3.html">Voltar</a>


</body>
</html>