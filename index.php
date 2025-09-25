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

      </form> <br>
      <h1>Counting Circle radius</h1>
      <form action="index.php" method="post">
            <label >raidus of circle</label>
            <input type="text" name="radius">
            
            <input type="submit" value="Calculate">

      </form>
      <?php
            // $x=$_POST["x"];
            // $y=$_POST["y"];
            // $total = null;

            // $total = abs($x); -4 to 4
            // $total =round($x); 2.99 to 3
            // $total =floor($x); 2.99 to 2
            // $total =ceil($x); 3.99 to 4
            // $total =sqrt($x); 100 to 10
            // $total = max($x,$y); 10 or 30 = 30
            // $total = min($x,$y); 10 or 30 = 10
            // $total = pi();
            // $total = rand();
            // $total = rand(1,100);
            // echo $total;

            $radius = $_POST['radius'];
            $cicumfernce = null;
            $area = null;
            
            $cicumfernce = 2*pi()*$radius;
            $area = pi() * pow($radius,2); 
            $volume = 4/3 * pi()* pow($radius,3);
            //  echo $cicumfernce;
            echo "Circumference: " . round($cicumfernce, 2) . "<br>";
            echo "Area: " . round($area, 2) . "<br>";
            echo "Volume: " . round($area, 2);
      ?>
</body>
</html>
<hr>
 
<h1>If statement</h1>

<!-- if statement = if some conditions is true, do something
                    if condition is false,don't do it -->

               
<?php
      // $age = 21;
      // if ($age >=18){
      //       echo" You may enter this site:";
      // }
      // elseif($age == 0){
      //       echo "You are boring";
      // }
      // else{
      //       echo" Grow up then come";
      // }

      $hour = 40;
      $rate = 15;
      $weekly_pay = null;

      if($hour<=40){
            $weekly_pay = $hour*$rate;

      }
      echo"You made {$weekly_pay} this week"

?>

<hr>
 
<h1>Logical Operator</h1>

<!-- Logical operators = combine conditional statements
                        if(condition1 && condition2)
                        
                        && = True if both are true
                        || = Trues if at least one true
                        !  = true if false ,false if true.
-->

<?php
      $temp = 100;

      //if($temp >=0 || $temp <=30)
      if($temp >=0 && $temp <=30){
            echo"weather is cool!";
      }
      else{
            echo"Not cool";
      }

?>

<hr>
 
<h1>Switch</h1>

<!-- 
 switch = replacement to using many elseif statements more
          efficent way, less code to write!

-->

<?php

      $grade = "Pizza";

      switch($grade){
            case "A":
                  echo"You Did Great";
                  break;
            case "B":
                  echo"You Did GOOD";
                  break;
            case "C":
                  echo"You Did Maybe Good";
                  break;
            case "F":
                  echo"You Failed Like Rahat";
                  break;
            default:
                  echo"{$grade} 404 error";
      }

?>


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


<hr>
 
<h1>While Loop </h1>

<!-- While loop = Do some code infinitely while some
                  while some condition remains true -->


<?php
      $count = 0;

      while($count <=10){
            $count++;
            echo $count . "<br>";
      }


?>








 
