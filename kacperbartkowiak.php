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
    print_r($_POST);
    if(isset($_POST["count"])){
     $count=$_POST["count"];
        $count++;
   
    }
    else {
        $count=0;
    }
      ?>
    <form action="" method="post">  
<input type="text" name="imie"/>  
   <input type="text" name="Nazwisko"/>  
<input type="submit" value="przeslij"/> 
<input type="hidden" name="count" value="<?php echo $count?>"/>
</form>  

</body>
    </html>