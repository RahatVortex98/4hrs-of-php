<!-- 
hashing = transforming sensetive data(password)
        into letters,number, and /or symbols
        via a mathmetical process( similar 
        to encryption)
        hides the orginal data from 3rd parties.


-->

<?php
$password = "pizza123";

$hash = password_hash($password,PASSWORD_DEFAULT);

echo $hash;

?>