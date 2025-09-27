<!-- Validation Filters:Checking if the input is in the expected format.

FILTER_VALIDATE_EMAIL → valid email format

FILTER_VALIDATE_INT → is an integer

FILTER_VALIDATE_URL → is a valid URL

FILTER_VALIDATE_BOOLEAN → true/false values

Sanitization Filters:Cleaning up the input by removing unwanted characters or dangerous data.

FILTER_SANITIZE_STRING → removes HTML tags

FILTER_SANITIZE_EMAIL → removes illegal characters from email

FILTER_SANITIZE_URL → removes illegal characters from URLs

FILTER_SANITIZE_NUMBER_INT → keeps only digits, plus, minus

=>Sanitize first, then validate.

=>Use prepared statements when inserting into a database (to prevent SQL injection).

-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>

        <label >Age:</label>
        <input type="number" name="age">

        <label >Email:</label>
        <input type="text" name="email">

        <input type="submit" name="login" value="login">

    </form>
</body>
</html>

<?php

    //Sanitazaion:

    if(isset($_POST["login"])){
        $name = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

        //$age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        //echo "hello {$name}";
        // echo "You are  {$age} year old";

        //echo "This is your {$email}";
    }

    //Validation:
    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        if(empty($age)){
            echo"The number wasn't valid";

        }
        else{
            echo"You are $age years old ";
        }
    }

?>