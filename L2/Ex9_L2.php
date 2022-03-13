<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  date_default_timezone_set('America/Sao_Paulo');
   echo date('d/m/Y')."<br />";
   echo strftime('%B e ', strtotime('today'));
   echo date('H:i');

    

	
  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>