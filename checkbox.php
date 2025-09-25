<h1>Check Box</h1>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <form action="index.php" method="post">
            <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
            <input type="checkbox" name="burger" value="Burger">Burger<br>
            <input type="checkbox" name="meatbox" value="Meatbox">Meatbox<br>
            <input type="submit" name="submit" value="submit">

      </form>
</body>
</html>

<?php
      if(isset($_POST["submit"])){
            if(isset($_POST["pizza"])){
                  echo"You like Pizza <br>";
            }
            if(isset($_POST["burger"])){
                  echo"You like Burger <br>";
            }
            if(isset($_POST["meatbox"])){
                  echo"You like Meatbox <br>";
            }

      }


?>