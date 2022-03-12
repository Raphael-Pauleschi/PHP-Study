<html lang="pt-br">
    <head>
     <meta charset="UTF-8" />
	 <title>Questionario</title>
	 
	 </head>
	 
	 <body>
	 <h1>Questionario</h1>
	   <br><br>
	   <p>1) -  O que é PHP?</p> 
	   <?php
	   echo "Resp: Hypertext Preprocessor, utilizado para manipulação de HTML  ";
	   
	  
	   ?>
	   <br><br>
	   <p>2) - Quem criou o PHP?</p> 
	   <?php
	   echo "Resp: Foi Ramus Lerdorf ";
	   
	  
	   ?>
	   <br><br>
	   <p>3) - Quais as vantagens do uso do PHP?</p> 
	   <?php
	   echo "Resp:  Tem bastante espaço no mercado, além de ter seu código aberto";
	   
	  
	   ?>
	   <br><br>
	   <p>4) - Quais as desvantagens do uso do PHP?</p> 
	   <?php
	   $texto= "Resp:  Como é de código aberto existem inumeras versões, \n\n assim fazendo com que varias empresas se divergem  ";
	    echo nl2br ($texto);
	  
	   ?>
	   <br><br>
	   <p>5) - Quais as principais diferenças ente o ASP e o PHP?</p> 
	   <?php
	   $texto= "Resp: O ASP pertence a Microsoft,é de código fechado, permitindo uma segurança maior e é pago \n\n Enquanto PHP ele é de codigo aberto e é gratuito";
	   echo nl2br ($texto);
	  
	   ?>
	   <br><br>
	   <p>6) -  Quais os requistos para a instalação do PHP?</p> 
	   <?php
	   $texto= "Resposta: PHP exige apenas a instalação de um servidor web compatível.\n \nCaso queira utilizar um banco de dados, instale um que seja compatível.\n \nRecomendamos a utilização do Servidor web Apache e do banco de dados MySQL, \n \npor terem suporte nativo ao PHP. ";
	   echo nl2br ($texto);
	  
	   ?>
	   <br><br>
	   <p>7) -  Qual Servidor e o Banco de Dados recomendado para a instalação do PHP?</p> 
	   <?php
	   echo "Resp:   Apache e MySql ";
	   
	  
	   ?>
	   <br><br>
	   <p>8) -  Faça um passo a passo de instalação PHP.</p> 
	   <?php
	    $texto= "Resp: O instalador irá configurar o ambiente completo para o PHP. 
		\n\nVocê só deverá informar o nome do servidor \n \n pode ser utilizado o wamp , além de outros recursos para administração de sites.  ";
	   echo nl2br ($texto);
	  
	   ?>
	   <br><br>
	   <p>9) -  O que são os servidores Wamp, Xampp ou PHP?</p> 
	   <?php
	   $texto= "Resp: Wamp é um software que efetua a instalação automática do PHP, MySql e Apache no computador, \n \nde modo a facilitar a configuração de um software interpretador de scripts local e um banco de dados no sistema windows 
	   XAMPP é um servidor independente de plataforma, software livre, \n \nque consiste principalmente na base de dados MySQL, o qual foi substituído pelo MariaDB, \n \no servidor web Apache e os interpretadores para linguagens de script: PHP e Perl.
	   PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento \n \nde aplicações presentes e atuantes no lado do servidor";
	   echo nl2br ($texto);
	  
	   ?>
	   <br><br>
	   <p>10) - Para que serve o seguinte código? </p>
	   <p><</p>
	   <p>?  php phpinfo() </p>
	   <p>?></p> 
	   <?php
	   echo "Resp: É utilizada para listar as configurações do PHP"; 
	 
	  
	   ?>
	  
	   
	 </body>
	 
	
</html>