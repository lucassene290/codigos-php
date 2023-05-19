<html>
  <head>
    <title>CTIT-CEFORES/UFTM</title>
    <style>
      table, th, td {
        border:1px solid black;
      }
    </style>
  </head>
  <body>
    <h2>Mostrar dados da tabela Pessoas</h2>
    <table style="width:100%">
      <tr>
        <th>Codigo</th><th>Nome</th><th>Email</th><th>Nascimento</th><th>Salario</th><th>Senha</th><th>Sexo</th>
        <th>Veiculo</th>
      </tr>
   <?php
     $veiculos = array("f"=>"Fiat" , "v"=>"VW", "g"=>"GM", "b"=>BMW, "o"=>"Outros") ;
         $mysqli = new mysqli("localhost", "raphaela_usr20221107", "Senha@20221107", "raphaela_bd20221107");
         if ($mysqli -> connect_errno) {
          echo "<h2> Falha na conexão com o banco de dados : " . $mysqli ->connect_error."</h2>";
          die ();
        } else {
          $sql = "SELECT codigo, nome, veiculo, senha, sexo, nascimento , email, salario FROM pessoas order by nome "; 
         	 $resultado = $mysqli->query($sql);
             if ($resultado->num_rows > 0) {
              while($linha = $resultado->fetch_assoc()) {
               $nascF =     substr($linha["nascimento"], 8 ,2)."/".
                            substr($linha["nascimento"], 5 ,2)."/".
                            substr($linha["nascimento"], 0 ,4);
               echo "<tr>
                       <td>".$linha["codigo"]."</td>
                       <td>".$linha["nome"]."</td>
                       <td>".$linha["email"]."</td>
                       <td>".$nascF."</td>
                       <td>".$linha["salario"]."</td>
                       <td>".$linha["senha"]."</td>
                       <td>".$linha["sexo"]."</td>
                       <td>".$veiculos[ $linha{"veiculo"] ]."</td>
                     </tr>";
                }
             } else {
               echo "<tr><td colspan='8'>Nao tem dados na tabela pessoas</td></tr>";
             }
          }
   ?>
    </table>
        
   </body>
</html>