<html>
    <head>
        <title>Cadastro</title>
    </head>
    
    <body bgcolor ="green">
<?php

    require_once("menu.php");

?>       <center> 
        <form action="editar.php" method="post">
            
            <font color="white"><label>Digite Codigo para editar :</label><br>
            
            <label>Nº do Codigo</label><input type="text" name="id" />
            
            <br><br>
                
            <label>Digite o novo nome do produto :</label>
            <br></font>
                
            <?php require_once("campos_produtos.php") ?>                              
            <br>
            <input type="submit" value="Editar" />
        </form></center>     
    </body>
  
</html>    
    
    
<?php
   
    require_once("menu.php");
    
    session_start();
    
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $cadastros){
            if($produto != null){
                echo "[$id] => " . $cadastros["produtoNovo"] . "<br>";
            }
            
        }
        
        
        
        
        
    }
    
    else{
        echo '<br>';
        echo '<center>';
        echo "Não existem produto cadastrados";
        echo '</center>';
    }
    





    
?>
