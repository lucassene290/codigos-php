<html>
  <head>
    <title>CTIT-CEFORES/UFTM</title>
  </head>
  <body>
    <h2>Arrays - </h2>
    
    <?php
    
     $pessoas = array ("Lucas", "Luciano", "Maria","Flávia");
    echo "<h2>No momento temos ".count($pessoas)." pessoas cadastradas";
    
    for ($x = 0; $x < count($pessoas); $x++ ) {
      echo "<h3> Pessoa".$x." = ".$pessoas[$x]."</h3>";
    }
    
    $cidades = array ("ub" => "Uberaba", "fr" => "Franca", "go" => "Goiania", "ar" => "Araguari", "co" => "Colombia", "ca" => "Conceicao das Alagoas");
    echo "<h3>ub=". $cidades["ub"] ." , go=" . $cidades["go"]."</h3>";
    
    foreach ($cidades as $idx => $nm_cidade) {
      echo "<br>Cidade: ".$idx." = ".$nm_cidade;
    }
    
    $empresas= array (
  array("Brastemp",22500,4500600),
  array("Coca Cola",152300,25680000),
  array("Padaria Tia Flavia",9,20000),
  array("Gontijo",1600,1500000)
);
    echo "<h1>Empresa:" . $empresas[2][0] . " , " . $empresas[2] [1] . " , " . $empresas[2][2] . " </h1>";
    
    ?>
    
  </body>
</html>