<html>
    <head>
        <title>Cadastro de produtos</title>
    </head>
    
    <body bgcolor ="green">
        
<?php require_once("menu.php") ?><br><br>        
        
        <form action="cadastrar.php" method="post">
        <?php require_once("campos_produtos.php") ?>           
        <center><input type="submit" value="Enviar" /></center>
        </form>   
    </body>
  
</html> 
