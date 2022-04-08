<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ;  
    $aux = $n1 * (10/100);
	$des = $n1 - $aux;

     echo "Preço original: ". number_format ($n1,2). "<br/>";
	 echo "Desconto: 10%". "<br/>"."<hr/>";
	 
	 echo "Preço final: ". number_format ($des,2). "<br/>";
  ?>
  
  
  <br />
<a href="FormEx5_L3.html">Voltar</a>


</body>
</html>