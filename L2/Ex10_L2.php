<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
   $d1  = isset ($_GET["tD1"])?$_GET["tD1"]:"00/00/0000";  
   $d2 =  isset ($_GET["tD2"])?$_GET["tD2"]:"00/00/0000";
   
   
   if ($d1>$d2){
   $time1 = strtotime ($d1);
   echo date("d/m/Y",$time1);
   }
   else{
   $time1 = strtotime ($d2);
   echo date("d/m/Y",$time1);	   
   }   


    

	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>