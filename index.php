<?php
 echo "I am a pro Noob <br>";
 echo "I am a pro max Noob";
 // this a comment
 /*
    this 
    is what this 
    this
 */
?>
<br>

<?php
// Varible = a reuseble container that holds data sting , integer
//          float,boolean!            

// string:
            $name = "King Chaos";
            $food = "pizza";
            echo $name;
            echo "Hello {$name} <br>";
            echo "{$food} <br>";

//integar:
            $age = 21;
            $users = 2;
            echo "U are {$age} years old <br>";
            echo "right now  {$users} in online <br>";

//Float:
            $quantity = 2.5;
            $price = 4.99;

            echo"Full shopping {$quantity} <br>";
            echo"Full shopping total \${$price} <br> ";
        
//Boolean:
            $online = true ;
            $offline = false ;

            echo "Some are {$online} but no one {$offline} "
?>
<hr>
<?php

         $food1 = "pizza";
         $quantity1 = 3;
         $price = 4.99;
         $total = null ;
         
         echo " You have orderd {$quantity1}x {$food} <br>";
         $total = $quantity1 * $price;
         echo " Your total is : {$total}";

?>

<hr>

<?php
      // Arthimetic operators
      // + - * / ** % 
            $x =10;
            $y = 2;
            $z = null;

            // $z = $x + $y;
            // $z = $x - $y;
            // $z = $x * $y;
            $z = $x ** $y;
            echo $z;
         
      //increment and decrement operators
      // ++ --
      $counter =10;

      // $counter = +1;

      // $counter ++;
      $counter --;
      echo $counter;




      //Operator Precedence
      // ()
      //  **
      // * / %
      // + -

      $total = 1+2-3*4/5**6;
      echo $total;

?>

<hr>
<h1>Get and Post</h1>


<!-- // $_GET and $_POST are special PHP superglobals used to collect form data.
//
// $_GET:
// - Data is appended to the URL (query string)
// - Not secure (data visible in URL)
// - Limited character length
// - Can be bookmarked with values
// - Can be cached
// - Best for search pages or filters
// http://localhost/website/index.php?username=bro&password=123456

// $_POST:
// - Data is sent inside the request body
// - More secure than GET (use HTTPS for sensitive data)
// - No practical data limit
// - Cannot be bookmarked
// - Cannot be cached
// - Best for forms with credentials, file uploads, or large text
 // http://localhost/website/index.php
-->

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <form action="index.php" method="get">
       <label>Username:</label>
      <input type="text" name="username">

      <label>Password</label>
      <input type="password" name="password">

      <input type="submit" value="login">
      </form>

      
      <form action="index.php" method="post">
       <label>Username:</label>
      <input type="text" name="username">

      <label>Password</label>
      <input type="password" name="password">

      <input type="submit" value="login">
      </form>
      
      <?php
      //   echo "{$_GET["username"]} <br>";
      //   echo "{$_GET["password"]} <br>";
      ?>

        <?php
      //   echo "{$_POST["username"]} <br>";
      //   echo "{$_POST["password"]} <br>";
      ?>


      <form action="index.php" method="post">

      <label >Quantity</label>
      <input type="text" name="quantity">
      <input type="submit" value="total">

      </form>

      <?php
            $item = "pizza";
            $price = 5.99;
            $quantity = $_POST['quantity'];
            $total = null;

            $total = $quantity * $price;

            echo"Total : {$total}";
            echo"You ordered {$quantity} of pizza ";

      ?>
</body>
</html>

<hr>
<h1>Math Function</h1>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <form action="index.php" method="post">
            <label >X</label>
            <input type="text" name="x">
            <label >Y</label>
            <input type="text" name="y">
            <input type="submit" value="total">

      </form>
      <?php
            $x=$_POST["x"];
            $y=$_POST["y"];
            $total = null;

            // $total = abs($x); -4 to 4
            // $total =round($x); 2.99 to 3
            // $total =floor($x); 2.99 to 2
            // $total =ceil($x); 3.99 to 4
            // $total =sqrt($x); 100 to 10
            // $total = max($x,$y); 10 or 30 = 30
            // $total = min($x,$y); 10 or 30 = 10
            // $total = pi();
            $total = rand();
            echo $total;
      ?>
</body>
</html>

 