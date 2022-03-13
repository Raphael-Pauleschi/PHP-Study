<html>
<head>
	<title>Resultado</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<div>
		<?php 
		$hi = isset($_GET["tHi"])?$_GET["tHi"]:"Sem valor";
		$mi = isset($_GET["tMi"])?$_GET["tMi"]:"Sem valor";
		$hf = isset($_GET["tHf"])?$_GET["tHf"]:"Sem valor";
		$mf = isset($_GET["tMf"])?$_GET["tMf"]:"Sem valor";
		$dh = $hf  - $hi;
		$dm = $mf-$mi ;
		if ($dh<0) {
			if($dm<0){
				$dh= $dh-1;
			}
			$dh=$oh+24;
		}if ($dm<0) {
			$dm=$dom+60;
		}
		echo "Duração: $dh horas e $dm minutos";

		?>
	</div>
</body>
</html>