<?php
    $username = "Vortex Voyeger";

    $user = array("bro","code","vortex");

    $phone = "123-456-789";
    
    //=> make string lower function:
    //$username = strtolower($username);

    //=> make string to Upper:
    //$username = strtoUpper($username);

    //=>remove white space:
    // $username = trim($username);

    // $username=str_pad($username,25,"0");

    //=>string replace function
    //$phone = str_replace("-","+",$phone);

    //=> string reverse
    //$username = strrev($username);

    //=>string shuffle
    //$username = str_shuffle($username);


    // make them array
    // $full_name = explode(" ",$username);

    // foreach($full_name as $name){
    //     echo $name ."<br>";
    // }


    //make those array into string
    $user = implode(" ",$user);

    echo $user;


?>