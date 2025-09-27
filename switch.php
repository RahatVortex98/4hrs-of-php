<hr>
 
<h1>Switch</h1>

<!-- 
 switch = replacement to using many elseif statements more
          efficent way, less code to write!

-->

<?php

      $grade = "Pizza";

      switch($grade){
            case "A":
                  echo"You Did Great";
                  break;
            case "B":
                  echo"You Did GOOD";
                  break;
            case "C":
                  echo"You Did Maybe Good";
                  break;
            case "F":
                  echo"You Failed Like Rahat";
                  break;
            default:
                  echo"{$grade} 404 error";
      }

?>