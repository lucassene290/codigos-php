<!DOCTYPE html>
<html>
<body>
<?php
   /*
   Exemplo implementado na aula de LP1 dia 19/09/2022 para demonstrar que 
   o PHP trata letras minusculas e maiusculas de forma diferente 
   */
    $salario = 2000 ;  // essa variavel vai ser usada para calcular o salario do funcionario
    echo "1) Salario =  " . $salario . "<br>";
//    echo "2) Salario =  " . $SALARIO . "<br>";
    // nesse item 2 não vai funcionar porque foi escrito salario com letras maiusculas 
//    echo "3) Salario =  " . $SaLaRiO . "<br>";
  
   $nome = "Lucas Martins Sene";
   echo "<br>O nome do professor = $nome" ; 
   echo '<br> novamente o nome = $nome' ;
   print "<br> O nome $nome tem " . strlen($nome) ." letras e ". str_word_count($nome). "
   palavras, escrito ao contrario fica " . strrev($nome) ;
  
   $x = 54231;
   $y = 4;
   echo "<hr>";
   echo $x + $y;
   print "<hr>";
   echo strrev($x);
  
?>

</body>
</html>