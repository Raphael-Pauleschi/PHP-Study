<html>
<head>
<meta charset="UTF-8"/>
<title>Resposta</title>
</head>
<body>
  <?php 
    $n1 = isset ($_GET["tN1"])?$_GET["tN1"]:"0" ;  
    $n2 = isset ($_GET["tN2"])?$_GET["tN2"]:"0" ;  
	$sub = $n1 - $n2;

 
	 echo "$n1 - $n2 = $sub";
  ?>
  
  
  <br />
<a href="FormEx1_L3.html">Voltar</a>


</body>
</html>