<!-- 
$_SERVER = SGB (Super Global Variable) → contains headers, paths, and script location.
          These entries are created by the web server.
          Shows nearly everything you need to know about the current web page environment.

Examples:
PHP_SELF = /website/server.php   → current file path
REQUEST_METHOD = GET or POST     → tells whether the form was submitted with GET or POST
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 
        The form action uses $_SERVER["PHP_SELF"] (escaped with htmlspecialchars).
        This means the form will submit to the same page (server.php).
         But you forgot "echo" inside → it should be:
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
    -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Username:
        <input type="text" name="username">
        <input type="submit">
    </form>

</body>
</html>


<?php
    // Example: Print all $_SERVER keys & values
    // foreach ($_SERVER as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

    // Check if the form is submitted with POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "HELLO";
        // You can also access the submitted input:
        // echo "Username: " . $_POST['username'];
    }
?>
