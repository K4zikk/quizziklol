<html>
<head?>
    <meta charset="UTF-8">
    <title>zadania phap</title>
    <link rel="stylesheet" href="style.css">
    
    </head?>
<body>
    <header>
    <div><h1>MEGA QUIZ TURNAMENT</h1></div>
    </header>
    <form action="wynik.php" method="post">
<?php
   $con = new mysqli("127.0.0.1", "root", "", "mydb");
    
    $res = $con ->query("SELECT * FROM questions WHERE id=1");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=1");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q1a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
     $res = $con ->query("SELECT * FROM questions WHERE id=2");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=2");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
      echo '<input type="checkbox" name="q2a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=3");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=3");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q3a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=4");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=4");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q4a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=5");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=5");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q5a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=6");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=6");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q6a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=7");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=7");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q7a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=8");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=8");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q8a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=9");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=9");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++)
       echo '<input type="checkbox" name="q9a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
    
    echo "<br>";
    
      $res = $con ->query("SELECT * FROM questions WHERE id=10");
    $rows = $res -> fetch_all(MYSQLI_ASSOC);
   for($i=0;$i<count($rows);$i++)
       echo $rows[$i]["question"]."<br>";
    $res = $con ->query("SELECT * FROM answers WHERE questions_id=10");
      $rows = $res -> fetch_all(MYSQLI_ASSOC);
       for($i=0;$i<count($rows);$i++){
           echo '<input type="checkbox" name="q10a'.$i.'" value="'.$rows[$i]["correct"].'"/>'.$rows[$i]["answer"]."<br>";
       }
           echo "<br>";

      ?>
<input type="submit">
</form>



</body>
    </html>