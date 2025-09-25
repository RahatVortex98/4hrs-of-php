<hr>
 
<h1>isset and empty()</h1>

<!-- isset() = returns True if varible is declared and not 
               null
      empty() = Returns True if a varible is not declared,false
            null,"" 
            1=True
            0= False
            -->

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <label>Username:</label>
      <input type="text" name="username"><br>

      <label>Password:</label>

      <input type="text" name="password"><br>
      <input type="submit" value="login"><br>
</body>
</html>
<?php
      //  $username = "harry";

      // if (isset($username)){
      //       echo"There is varible";
      // }
      // else{
      //       echo"There is no varible";
      // }
      //  if (empty($username)){
      //       echo"There is varible";
      // }
      // else{
      //       echo"There is no varible";
      // }

      // foreach($_POST as $key => $value){
      //       echo "{$key} ={$value}";
      // }

      if(isset($_POST["login"])){
            $username = $_POST["username"];
      }
?>