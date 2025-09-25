<hr>
 
<h1>Array Associative</h1>

<!-- An array made if key => value pairs
      countries => capitals
      id => username
      item => price
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
            <label >Put Your country:</label>
            <input type="text" name="country">
            <input type="submit" value="search">
      </form>
</body>
</html>
<?php
      

      $capitals = array("USA" => "D.C",
                        "Japan"=> "kyoto",
                        "South Korea" =>"Seoul",
                        );

      //access key:
      //$capitals["USA"] ="Miami";

      //adding new value pair:
//       $capitals["China"] ="bejing";

      //$keys=array_key($capitals);
//       foreach($capitals as $key =>$value){
//             echo "{$key}=>{$value} <br>";

//       }

      $capital = $capitals[$_POST["country"]];
      echo "{$capital}";

      
?>