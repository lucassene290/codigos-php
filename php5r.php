<html>
  <head>
    <title>CTIT-CEFORES/UFTM</title>
  </head>
  <body><h1>
    
    <?php
    
    	echo "Voce digitou vX = " . $_REQUEST ["vX"] .  " , vY = " . $_REQUEST["vY"] . "<hr>" ; 
    	while ($_REQUEST["vX"] <= $_REQUEST["vY"])   {
        echo $_REQUEST["vX"] . " , ";
        $_REQUEST ["vX"] ++;
          
        }
    
    ?></h1>
  </body>
</html>