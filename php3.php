<html>
    <body>
      
 <?php
      
      define ("ESCOLA", "UFTM - CEFORES : Centro de Educacao Profissional");
      
 	$x = 23465.768;  //variavel do tipo float
	$saldo = (int)$x;  // na variavel saldo foi usado "cast" transformando $x em integer
	echo "<h1> x " . $x . "saldo = " . $saldo . "</h1>";  
	echo "<h2> PI = " . pi() . "</h2>";
      
      

	$x = $x * -1;
    echo "<h3> x = " . $x . "abs(x) = " . abs($x) . " Raiz = " . sqrt (abs($x)) . 
      	"Arredondamento = " . round ($x , 1) . "</h3>";
     
      echo "<h2>" . ESCOLA . "</H2>";
      
      $nomeX = "Uberaba legal pra xuxu";
      $nomeX  = "Voce gosta? ";   //$nomeX = $nomeX . "Voce gosta ? ";
      
      echo "<h2>" . $nomeX . "</H2" ; 
      
      if ($saldo <1000) {
        	echo "<h1>Saldo magrinhoooo...... </h1>";
      } elseif ($saldo <5000) {
        	echo "<h1>Saldo magraooo..... </h1>";
      } elseif ($saldo < 20000) {
        	echo "<h1>Saldo Magrao..... </h1>";
      } elseif ($Saldo <30000) {
      		echo "<h1>Saldo bommm..... </h1>";
      } else {
        echo "<h1>Saldo gordaoooo...... </h1>";
      }
      
      
 	  $cor = "verde";
      switch ($cor) {
        case "vermelho":
      		echo "<h1>A cor é vermelha </h1>";
          	break;
        case "azul":
          	echo "<h1> A cor é azul </h1>";
          	break;
        case "verde":
          	echo "<h1> Não achei a cor </h1>";
      }
      
?>
  </body>
</html>