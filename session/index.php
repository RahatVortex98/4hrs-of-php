<!-- 
 
session = SGB used to store info on a user
         to be used accross multiple pages.
         A user is assigned a session-id
         ex.login credential.


-->
<?php
    session_start(); // Start a new session or resume an existing one
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- Simple login form -->
   <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <!-- The "name=login" is important because PHP will check $_POST["login"] -->
        <input type="submit" name="login" value="login">
   </form>
</body>
</html>

<?php
   // Check if the login button was clicked
   if (isset($_POST["login"])) {

        // Check if username AND password fields are not empty
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {

            // Save username and password in the session (stored on the server)
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // Output them directly (for testing only)
            echo "Username: " . $_SESSION["username"] . "<br>";
            echo "Password: " . $_SESSION["password"] . "<br>";

            // Show the session ID (side note: this is what links the user to their data)
            echo "Session ID: " . session_id();

            header("Location: home.php"); //redirect to home page
        }
        else {
            // If either username or password is empty
            echo "God damn it write it!";
        }
   }
?>

