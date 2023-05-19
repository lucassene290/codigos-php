<html>
  <head>
    <title>CTIT-CEFORES/UFTM</title>
  </head>
  <body>
    <h2>Arrays - EXERCÍCIOS </h2>
    
 
    
   <h1> a) </h1> 
     <?php
    
    $elementos = array ("Bola", "Paçoca", "Zebra", "Amora", "Ovo", "Casa", "Teto");
    echo "<h2> A ordem alfabética dos elementos são ";
    
     asort($elementos);
    
    foreach ($elementos as $x => $val) {
    echo "<h3>".$x."-" . $val ."</h3>";
    
    }
    
    ?> 
    
  <h1> b) </h1> 
    
    <?php
    $elementos = array ("Bola", "Paçoca", "Zebra", "Amora", "Ovo", "Casa", "Teto");
    echo "<h2> A ordem alfabética dos elementos são ";
    
     arsort($elementos);
    
    foreach ($elementos as $x => $val) {
    echo "<h3>".$x."-" . $val ."</h3>";
    
    }
    
    ?> 
    
    <h1> c) </h1>
    
    <?php
    $elementos = array ("Bola", "Paçoca", "Zebra", "Amora", "Ovo", "Casa", "Teto");
    echo "<h2> Os elementos embaralhados são ";
    
     shuffle($elementos);
    
    foreach ($elementos as $x => $val) {
    echo "<h3>".$x."-" . $val ."</h3>";
    
    }
    
    ?> 
    
    
    
    
    
    
    
    
    ?> 
    
    
  </body> 
  </html>