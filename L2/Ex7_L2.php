<html>
<head>
<meta charset="UTF-8"/>
<title>Resultado</title>
</head>
<body>
  <?php 
    $a = isset ($_GET["tA"])?$_GET["tA"]:0 ;  
	$b = isset ($_GET["tB"])?$_GET["tB"]:0 ;
	$c = isset ($_GET["tC"])?$_GET["tC"]:0 ;  
	$i = isset ($_GET["tI"])?$_GET["tI"]:0 ;
    

	switch ($i){
	case 1:	
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
	 break;
	case 2:
	if (($a < $b)&&($a <$c)) {
	echo "$a"."<br />";
	if ($b < $c){
	echo "$b"."<br />";
    echo "$c"."<br />";
	}
	else{
    echo "$c"."<br />";
	echo "$b"."<br />";
	 }
	}
	if (($b < $a)&&($b < $c)) {
	echo "$b"."<br />";
	if ($a < $c){
	echo "$a"."<br />";
    echo "$c"."<br />";
	}
	else{
    echo "$c"."<br />";
	echo "$a"."<br />";
	 }
	}
	if (($c < $a)&&($c <$b)) {
	echo "$c"."<br />";
	if ($b < $a){
	echo "$b"."<br />";
    echo "$a"."<br />";
	}
	else{
    echo "$a"."<br />";
	echo "$b"."<br />";
	 }
	}
	 break;
	case 3:	
	if (($a > $b)&&($a >$c)) {
	echo "$b"."<br />";
	echo "$a"."<br />";
    echo "$c"."<br />";
	}
	if (($b > $a)&&($b > $c)) {
	echo "$a"."<br />";
	echo "$b"."<br />";
    echo "$c"."<br />";
	}
	if (($c > $a)&&($c > $b)) {
	echo "$a"."<br />";
	echo "$c"."<br />";
    echo "$b"."<br />";
	}
	 break;
	}

	

	


  ?>
  
<a href="Formulario.html">Voltar</a>


</body>
</html>