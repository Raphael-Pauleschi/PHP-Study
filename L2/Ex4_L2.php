<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $a = isset ($_GET["tN1"])?$_GET["tN1"]:1 ;  
	$b = isset ($_GET["tN2"])?$_GET["tN2"]:2 ;
	$c = isset ($_GET["tN3"])?$_GET["tN3"]:3 ;  
    
	
	if (($a > $b)&&($a >$c)) {
	echo "$a"."<br />";
	if ($b > $c){
	echo "$b"."<br />";
    echo "$c"."<br />";
	}
	else{
    echo "$c"."<br />";
	echo "$b"."<br />";
	 }
	}
	if (($b > $a)&&($b >$c)) {
	echo "$b"."<br />";
	if ($a > $c){
	echo "$a"."<br />";
    echo "$c"."<br />";
	}
	else{
    echo "$c"."<br />";
	echo "$a"."<br />";
	 }
	}
	if (($c > $a)&&($c >$b)) {
	echo "$c"."<br />";
	if ($b > $a){
	echo "$b"."<br />";
    echo "$a"."<br />";
	}
	else{
    echo "$a"."<br />";
	echo "$b"."<br />";
	 }
	}
	
	

	


  ?>
  
  
  <br />
<a href="Formulario.html">Voltar</a>


</body>
</html>