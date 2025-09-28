<!-- 
Web server: Apache or Nginx (if you installed XAMPP, WAMP, or Laragon → you already have Apache).

PHP: Installed and enabled mysqli or pdo_mysql extension.

MySQL server: Running locally (default host: localhost, port: 3306).

Xampp => mysql => admin =>database=>

-->

<?php

    include("database.php");

    $sql = "INSERT INTO users (user, password)
            VALUES ('Harry','admin1234')";
    
    mysqli_query($conn,$sql);

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    HEllO <br>
</body>
</html>