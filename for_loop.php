<hr>
 
<h1>For Loop </h1>
<!-- 
      for loops = repeat some code a certain # of time
-->


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <form action="index.php" method="post">
            <label>enter a number to count to:</label>
            <input type="text" name="counter">
            <input type="submit" value="start">
      </form>
</body>
</html>

<?php

      // for($i = 0;$i<=5;$i++){
      //       echo $i ."<br>";
      // }
      // for($i = 0;$i<=10;$i+=2){
      //       echo $i ."<br>";
      // }

      $counter = $_POST["counter"];

      // for($i = 0;$i<=$counter;$i++){
      //       echo $i ."<br>";

      // }
       for($i =$counter;$i>0;$i--){
            echo $i ."<br>";

      }
?>