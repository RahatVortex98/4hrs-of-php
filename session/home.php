<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="post">
        <label >Logout</label>
        <input type="submit" name="logout" value="logout">
    </form>
    this is Index page <a href="index.php">Index</a>
</body>
</html>

<?php
    // If you want to check the session values for debugging:
    // echo $_SESSION["username"] ."<br>";
    // echo $_SESSION["password"] ."<br>";

    // Check if logout button was clicked
    if (isset($_POST["logout"])) {
        // Destroy all session data (username, password, etc.)
        session_destroy();

        // Redirect the user back to index.php after logout
        header("Location:index.php");
    }
?>
