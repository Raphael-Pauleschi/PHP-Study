<html lang="pt-br"> 
<head> 
<meta charset="UTF-8" />
<title>Curso de Php </title> 
</head> 
<body>
<?php echo "LISTA DE EXERCÍCIOS 01 - NOME 01 Raphael - NOME 02 Ferraiolo." ."<p>";

// 01 - Faça um programa que receba quatro números inteiros, calcule e mostre a soma desses números.

$n1 =  $_GET["a"]; 
$n2 = $_GET["b"]; 
$n3 = $_GET["c"]; 
$n4 = $_GET["d"]; 
$soma = ($n1 + $n2 + $n3 + $n4);

echo "01 - Faça um programa que receba quatro números inteiros, calcule e mostre a soma desses números." ."<p>";
echo "Primeiro número = " .$n1 ."<br />" ."Segundo número = " .$n2 ."<br />" ."Terceiro  número = " .$n3 ."<br />" ."Quarto  número = " .$n4 ."<br />" ."A soma é = " .$soma ."<br />" ."<hr />";

// 02 - Faça um programa que receba três notas, calcule e mostre a média aritmética entre elas.

$n1 = $_GET["a1"]; 
$n2 = $_GET["c1"]; 
$n3 = $_GET["b1"];
$mediaA= ($n1 + $n2 + $n3)/3;

echo "02 - Faça um programa que receba três notas, calcule e mostre a média aritmética entre elas." ."<p>";
echo "Primeiro número = " .$n1 ."<br />" ."Segundo número = " .$n2 ."<br />" ."Terceiro  número = " .$n3 ."<br />" ."A média artmética é = ";
echo round($mediaA, 2, PHP_ROUND_HALF_UP); 
echo "<br />" ."<hr />";

// 03 - Faça um programa que receba três notas e seus respectivos pesos, calcule e mostre a média ponderada dessas notas.

$n1 = $_GET["a2"]; 
$n2 = $_GET["b2"]; 
$n3 = $_GET["c2"];
$mediaP= ($n1 + 2*$n2 + 3*$n3)/1+2+3;

echo "03 - Faça um programa que receba três notas e seus respectivos pesos, calcule e mostre a média ponderada dessas notas." ."<p>";
echo "Primeiro Peso = 1 Primeiro número = " .$n1 ."<br />" ."Segundo Peso = 2 Segundo número = " .$n2 ."<br />" ."Terceiro Peso = 3 Terceiro  número = " .$n3 ."<br />" ."A média ponderada é = ";
echo round($mediaP, 2, PHP_ROUND_HALF_UP); 
echo "<br />" ."<hr />";

// 04 - Faça um programa que receba o salário de um funcionário, calcule e mostre o novo salário, sabendo-se que sofreu um aumento de 25%.

$s = $_GET["a3"]; 
$a = $s*25/100; 
$ns = $s+$a;

echo "04 - Faça um programa que receba o salário de um funcionário, calcule e mostre o novo salário, sabendo-se que sofreu um aumento de 25%." ."<p>";
echo "Salario Antigo = " .$s ."<br />" ."Aumento = " .$a ."<br />" ."Salario Novo = ";
echo round($ns, 2, PHP_ROUND_HALF_UP); 
echo "<br />"."<hr />" ;

// 05 - Faça um programa que receba o salário de um funcionário e o percentual de aumento, calcule e mostre o valor do aumento e o novo salário.

$s = $_GET["a4"]*2000; 
$a = $s*70/100; 
$ns = $s + $a;
round ($ns);

echo "05 - Faça um programa que receba o salário de um funcionário e o percentual de aumento, calcule e mostre o valor do aumento e o novo salário." ."<p>";
echo "Salario Antigo = " .$s ."<br />" ."Aumento = " .$a ."<br />" ."Salario Novo = ";echo round($ns,2 , PHP_ROUND_HALF_UP); 
echo "<br />"."<hr />" ; 

// 06 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, sabendo-se que o funcionário tem gratificação de 5% sobre 0 salário base e paga 7% sobre este salário.

$s = $_GET["a5"]; 
$g = $s * 5/100;
$ns = $s + $g; 
$p = $s*7/100;
$ts = $ns - $p;

echo "06 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, sabendo-se que o funcionário tem gratificação de 5% sobre 0 salário base e paga 7% sobre este salário." ."<p>";
echo "Salario Base = " .$s ."<br />" ."Gratificação = " .$g ."<br />" ."Salario Novo = " .$ns ."<br />"."Pagamento = " .$p ."<br />"."Salario Total = "; 
echo round($ts,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 07 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, sabendo-se que o funcionário tem gratificação de R$ 50,00 sobre 0 salário base e paga 10% sobre este salário.

$s = $_GET["a6"]; 
$g = 50;
$ns = $s + $g; 
$p = $s*10/100;
$ts = $ns - $p;

echo "07 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, sabendo-se que o funcionário tem gratificação de R$ 50,00 sobre 0 salário base e paga 10% sobre este salário." ."<p>";
echo "Salario Base = " .$s ."<br />" ."Gratificação = " .$g ."<br />" ."Salario Novo = " .$ns ."<br />"."Pagamento = " .$p ."<br />"."Salario Total = " ; 
echo round($ts,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 08 - Faça um programa que receba o valor de um depósito e valor da taxa de juros, calcule e mostre o valor do rendimento e o valor total depois do rendimento.
$d = $_GET["a7"];
$j = $_GET["b7"];
$r = $d * $j;
$t= $d + $r; 

echo " 08 - Faça um programa que receba o valor de um depósito e valor da taxa de juros, calcule e mostre o valor do rendimento e o valor total depois do rendimento.." ."<p>";
echo "Rendimento = " .$r ."<br />" ."Valor total = "; 
echo round($t,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;
// 09 - Faça um programa que calcule e mostre a área de um triangulo. Sabe-se que: Área = (base * altura)/2.
$h = $_GET["a8"];
$b = $_GET["b8"];
$a = ($b*$h)/2;

echo "09 - Faça um programa que calcule e mostre a área de um triangulo. Sabe-se que: Área = (base * altura)/2." ."<p>";
echo "Base = " .$b ."<br />" ."Altura = " .$h ."<br />" ."Area = " ; 
echo round($a,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 10 - Faça um programa que calcule e mostre a área de um círculo. Sabe-se que Área = PI * Raio.
$pi = 3.14;
$di= $_GET["a9"];
$a= $pi*($di/2);

echo "10 - Faça um programa que calcule e mostre a área de um círculo. Sabe-se que Área = PI * Raio." ."<p>";
echo "Pi = " .$pi ."<br />" ."Diametro = " .$di ."<br />" ."Area = " .$a ; 
echo round($a,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 11 - Faça um programa que receba um número positivo e maior que zero, calcule e mostre: A - o número ao quadrado; B - o número ao cubo; C - a raiz quadrada do número digitado.
$n = $_GET["a10"];
$a = $n * $n;
$b = $a * $n;
$c = sqrt ($n); 


echo "11 - Faça um programa que receba um número positivo e maior que zero, calcule e mostre: A - o número ao quadrado; B - o número ao cubo; C - a raiz quadrada do número digitado." ."<p>";
echo "Número = " .$n ."<br />" ."Ao Quadrado = " .$a ."<br />" ."Ao Cubo = " .$b ."<br />"."Raiz Quadrada = ";
echo round($c, 1, PHP_ROUND_HALF_UP); 
echo "<br />" . "<hr />";

// 12 - Faça um programa que receba dois números maiores que zero, calcule e mostre um elevado ao outro.
$n1 = $_GET["a11"];
$n2 = $_GET["b11"];
$e = pow ($n1,$n2);

echo "12 - Faça um programa que receba dois números maiores que zero, calcule e mostre um elevado ao outro"."<p>";
echo "Primeiro Número = " .$n1 ."<br />" ."Segundo Número = " .$n2 ."<br />" ."Elevado = " .$e . "<br />" ."<hr />";

// 13 - Sabe-se que: 1 pé = 12 polegadas; 1 jarda = 3 pés; 1 milha = 1.760 jardas - Faça um programa que receba uma medida em pés, faça as conversões a seguir e mostre os resultados. A - polegadas; B - jardas; C - milhas.

$pe = $_GET["a12"];
$po = $pe * 12;
$ja = $pe/3;
$mi = $ja/1760;

echo "13 - Sabe-se que: 1 pé = 12 polegadas; 1 jarda = 3 pés; 1 milha = 1.760 jardas - Faça um programa que receba uma medida em pés, faça as conversões a seguir e mostre os resultados. A - polegadas; B - jardas; C - milhas."."<p>";
echo "Medida em Pés = " .$pe ."<br />" ."Medida em Polegadas = " .$po ."<br />" ."Medida em Jardas = " .$ja . "<br />" ."Medida em Milhas = " .$mi ; 
echo round($mi,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 14 - Faça um programa que receba o ano de nascimento de uma pessoa e ano atual, calcule e mostre: A - a idade dessa pessoa; B - quantos anos ela terá em 2050.

$id = $_GET["a13"];
$ano = 2019;
$fu = $id + (2050-$ano);

echo "14 - Faça um programa que receba o ano de nascimento de uma pessoa e ano atual, calcule e mostre: A - a idade dessa pessoa; B - quantos anos ela terá em 2050."."<p>";
echo "Idade Atual = " .$id ."<br />" ."Ano Atual= " .$po ."<br />" ."Idade em 2050 (Futuro) = " .$fu . "<br />" ."<hr />";
 

// 15 - O custo ao consumidor de um carro é a soma de preço de fábrica com o percentual de lucro do distribuidor e dos impostos aplicados ao preço de fábrica. Faça um programa que receba o preço de fábrica de um veículo, o percentual de lucro do distribuidor e o percentual de impostos calcule e mostre: A - o valor correspondente ao lucro do distribuidor; B - o valor correspondente aos impostos; C - o preço final do veículo. 

$f = $_GET["a14"];
$l = $_GET["b14"];
$i = $_GET["c14"];
$ld = $f * $l/100;
$im = $f * $i/100;
$v = $f + $ld + $im;

echo "15 - O custo ao consumidor de um carro é a soma de preço de fábrica com o percentual de lucro do distribuidor e dos impostos aplicados ao preço de fábrica. Faça um programa que receba o preço de fábrica de um veículo, o percentual de lucro do distribuidor e o percentual de impostos calcule e mostre: A - o valor correspondente ao lucro do distribuidor; B - o valor correspondente aos impostos; C - o preço final do veículo."."<p>";
echo "Lucro do Distribuidor = " .$id ."<br />" ."Imposto= " .$im ."<br />" ."Preço Final do Veiculo = " ; 
echo round($v,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 16 - Faça um programa que receba o número de horas trabalhadas e valor do salário mínimo, calcule e mostre o salário a receber seguindo estas regras: A - a hora trabalhada vale a metade do salário mínimo; B - o salário bruto equivale ao número de horas trabalhadas multiplicado pelo valor da hora trabalhada; C - o imposto equivale a 3% do salário bruto; D - o salário a receber equivale ao salário bruto menos o imposto.

$h = $_GET["a15"];
$sm = $_GET["b15"];
$a = 1*($sm/2);
$b = $sm * $h;
$c = $b*3/100;
$d = $b - $c;

echo " 16 - Faça um programa que receba o número de horas trabalhadas e valor do salário mínimo, calcule e mostre o salário a receber seguindo estas regras: A - a hora trabalhada vale a metade do salário mínimo; B - o salário bruto equivale ao número de horas trabalhadas multiplicado pelo valor da hora trabalhada; C - o imposto equivale a 3% do salário bruto; D - o salário a receber equivale ao salário bruto menos o imposto."."<p>";

echo "Valor da Hora Trabalhada = " .$a ."<br />" ."Salário Bruto = " .$b ."<br />" ."Imposto = " .$c . "<br />" ."Salário a receber = " ; 
echo round($d,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 17 - Um trabalhador recebeu seu salário e o depositou em uma conta bancária. Esse trabalhador realizou dois saques e agora deseja saber o seu saldo atual. Sabe-se para cada operação bancária de retirada paga de imposto 0,38% e o saldo inicial da conta era zero. 

$s = $_GET["a16"];
$i = 0.38;
$sa1 = 200;
$sa2 = 100;
$sf = $s - $sa1 - $sa2 - ($s*($i*2)/100);
echo "17 - Um trabalhador recebeu seu salário e o depositou em uma conta bancária. Esse trabalhador realizou dois saques e agora deseja saber o seu saldo atual. Sabe-se para cada operação bancária de retirada paga de imposto 0,38% e o saldo inicial da conta era zero."."<p>"; 

echo "Saldo Atual = " ; 
echo round($sf,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ; 

// 18 - Pedro comprou um saco de ração com peso em quilos. Ele possui dois gatos, para os quais fornece a quatidade de ração em gramas. A quantidade diária de ração fornecida para cada gato é sempre a mesma. Faça um programa que receba o peso de saco de ração e a quantidade de ração fornecidda para cada gato, calcule e mostre quanto restará de ração no saco após cinco dias.

$r = $_GET["a17"];
$a = 2;
$d = $r*1000 - (($a*2)*5);
echo "18 - Pedro comprou um saco de ração com peso em quilos. Ele possui dois gatos, para os quais fornece a quatidade de ração em gramas. A quantidade diária de ração fornecida para cada gato é sempre a mesma. Faça um programa que receba o peso de saco de ração e a quantidade de ração fornecidda para cada gato, calcule e mostre quanto restará de ração no saco após cinco dias."."<p>";

echo "Resto de Ração = "; 
echo round($d,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 19 - Cada degrau de uma escada tem X de altura. Faça um programa que receba essa altura e a altura que o usuário deseja alcançar subindo a escada, calcule e mostre quantos degraus ele deverá subir para atingir seu objetivo, sem se preocupar com a altura do usuário. Todas as medidas fornecidas devem estar em metros.

$h = $_GET["a18"];
$e = $_GET["b18"];
$q = $e/$h;
echo "19 - Cada degrau de uma escada tem X de altura. Faça um programa que receba essa altura e a altura que o usuário deseja alcançar subindo a escada, calcule e mostre quantos degraus ele deverá subir para atingir seu objetivo, sem se preocupar com a altura do usuário. Todas as medidas fornecidas devem estar em metros."."<p>";

echo "Degraus Necessários = "; 
echo round($q,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;

// 20 - Faça um programa que receba o custo de um espetáculo teatral e preço do convite desse espetáculo. Esse programa deverá calcular e mostrar a quantidade de convites que devem ser vendidos para que pelo menos o custo do espetáculo seja alcançado.

$e = $_GET["a19"];
$c = $_GET["b19"];
$n = $e/$c;

echo "20 - Faça um programa que receba o custo de um espetáculo teatral e preço do convite desse espetáculo. Esse programa deverá calcular e mostrar a quantidade de convites que devem ser vendidos para que pelo menos o custo do espetáculo seja alcançado."."<p>";

echo "Convites Necessários = "; 
echo round($n,2 , PHP_ROUND_HALF_UP);
echo "<br />"."<hr />" ;
?> 
</body> 
</html>
