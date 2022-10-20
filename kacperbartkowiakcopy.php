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
        $count=0;
   if(isset($_COOKIE["count"])){
       $count=$_COOKIE["count"];
       $count++;
   }
    else{
        $count=0;
    }
    setcookie("count", $count);
        
print_r($_COOKIE["count"]);
    
      ?>
    <form action="" method="post">  
<input type="text" name="imie"/>  
   <input type="text" name="Nazwisko"/>  
<input type="submit" value="przeslij"/> 
<input type="hidden" name="count" value="<?php echo $count?>"/>
</form>  

</body>
    </html>