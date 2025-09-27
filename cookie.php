<!-- 
Cookie = Information about a user 
         stored in a user's web browser
         targeted advertisements,browing 
         preferences and other non sensetive
         data

         varible=>fav_food; value =>pizza

        use "-0" =>to delete cookie
-->

<?php
    setcookie("fav_food","pizza",time()+(86400*2),"/"); 
    setcookie("fav_drink","coffee",time() -0,"/"); 
    setcookie("fav_desert","ice cream",time()+(86400*2),"/"); 

    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";
    }
?>