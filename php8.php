<html>
  <head>
    <title>CTIT-CEFORES/UFTM</title>
  </head>
  <body>
    <h2>FUNCOES - Recebe uma frase e devolve a frase trocando vogal por * </h2>
    
    <?php
   
    
   function trocaVogal ($frase) {
      $novaFrase = " " ;
      for ($x = 0 ; $x < strlen ($frase) ; $x++) {
        if (substr ($frase , $x, 1) == "a" || substr ($frase, $x, 1) == "e" || substr ($frase, $x, 1) == "i" || substr ($frase, $x, 1) == "o" ||  substr ($frase, $x, 1)  == "u" ) {
          $novaFrase = $novaFrase. "*";
        } else {
          $novaFrase = $novaFrase.substr ($frase, $x, 1 );
        }
      }
      return $novaFrase;
    }
    $fraseOriginal = "A casa da Isabela é muito bela";
    $fraseSemVogal = trocaVogal($fraseOriginal);
    echo "<h2>" . $fraseOriginal . "</h2>" ; 
    echo "<h2>" . $fraseSemVogal . "</h2>";
    
    
    
    
     $fraseOriginal = "A casa da Isabela é muito bela";
    $fraseSemVogal = trocaVogal($fraseOriginal);
    echo "<h2>" . $fraseOriginal . "</h2>" ; 
    echo "<h2>"  .  $fraseSemVogal . "</h2>" ; 
    
    
    function trocaVogal2($frase) {
      $novaFrase = str_replace("a", "*", $frase);
      $novaFrase = str_replace("e", "*", $novaFrase);
      $novaFrase = str_replace("i", "*", $novaFrase);
      $novaFrase = str_replace("o", "*", $novaFrase);
      $novaFrase = str_replace("u", "*", $novaFrase);
      return $novaFrase;
      
    }
    
    $fraseSemVogal = trocaVogal2($fraseOriginal);
    echo "<h2>" . $fraseSemVogal . "</h2>";
   
    
    	
             
    
    ?>
    
  </body>
</html>