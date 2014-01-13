<html>
    <head>
        <title>Cadastro</title>
    </head>
    
    <body bgcolor ="green">
<?php

    require_once("menu.php");

?>      <center>     
        <form action="remover.php" method="post">
            <font color="white"><label>Digite Codigo do produto</label></font><br>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />
        </form>
        </center>   
    </body>
  
</html>    
    
    
<?php
   
    require_once("menu.php");
    
    session_start();
    
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produto){
            if($produto != null){
                echo "[$id] => " . $produto["produto"]  .  "<br>";
            }
            
        }
        
        
        
        
        
    }
    else{
        echo "Não existem livros cadastrados";
    }





    
?>
