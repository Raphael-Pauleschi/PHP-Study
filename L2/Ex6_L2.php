<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $n = isset ($_GET["tN1"])?$_GET["tN1"]:1 ;  

   if ($n1 % 2 == 0){
    echo "$n é par";
   }
   else{
	echo "$n é impar";
   }
	   



  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>