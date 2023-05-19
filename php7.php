<html>
  <head>
    <title>CTIT-CEFORES/UFTM</title>
  </head>
  <body>
    <h1>1) </h1>
    <?php
    $a = 5;
    while ($a <= $_REQUEST["vX"] ) {
      echo $a . " , ";
      $a = $a + 5 ;      
    }
  ?> 
    
    <h1>2) </h1>
    <?php
    $xn = $_REQUEST["vX"] * -1;
    while ($xn <= $_REQUEST["vX"] ) {
      echo $xn . " , ";
     $xn++;
    }
  ?>
    
    <h1>3) </h1>
   <?php
    $np = 0;
    $nu = 1;
    $na = $np + $nu;
    while ($na < $_REQUEST["vX"])  {
    echo $na . " , " ;
    $np = $nu;
    $nu = $na;
    $na = $np + $nu;
    }
   ?>
   
     <h1>4) </h1>
    <?php
    $n = $_REQUEST ["vX"];
    if ($n % 2 > 0 ) {
      $n--;
    }
  while ( $n >= 0 ) {
    echo $n . " , " ; 
    $n= $n -2 ;
  }
   ?>
      
     </body>
</html>