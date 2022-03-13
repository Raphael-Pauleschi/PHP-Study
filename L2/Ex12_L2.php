<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $cod = isset ($_GET["tCod"])?$_GET["tCod"]:1 ; 
    $sal = isset ($_GET["tSal"])?$_GET["tSal"]:1 ;
     

    if ($cod == 1){
	$au = $sal *(50/100) ;	
	$car = "Escriturária";
	}
    if ($cod == 2){
	$au = $sal *(35/100) ;
	$car = "Secretário";
	}	
    if ($cod == 3){
	$au = $sal *(20/100) ;
	$car = "Caixa";
	}	   
    if ($cod == 4){
	$au = $sal *(10/100) ;
	$car = "Gerente";
	}
    if ($cod == 5){
	$au = $sal *(0/100) ;
    $car = "Diretor";	
	}
	
	$nsal = $sal + $au;
	
	echo "Cargo: $car"."<br />";
	echo "Aumento: $au"."<br />";
	echo "Salário Atual: $nsal"."<br />";  
 
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>