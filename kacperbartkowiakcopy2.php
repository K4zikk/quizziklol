<html>
<head?>
    <meta charset="UTF-8">
    <title>Kacper Bartkowiak</title>
    <link rel="stylesheet" href="style.css">
    
    </head?>
<body>
    <header>
    </header>
    <?php
    session_start();
        $count=0;
   if(isset($_SESSION["count"])){
       $count=$_SESSION["count"];
       $count++;
       $_SESSION["count"]=$count;
   }
    else{
        $_SESSION["count"]=0;
    }
   
        
print_r($_SESSION["count"]);
    
      ?>
    <form action="" method="post">  
<input type="text" name="imie"/>  
   <input type="text" name="Nazwisko"/>  
<input type="submit" value="przeslij"/> 
<input type="hidden" name="count" value="<?php echo $count?>"/>
</form>  

</body>
    </html>