<hr>
 
<h1>Array </h1>
<!-- 
      array ="varible" which can hold more than one value at
            a time.

-->
<?php
      $food_1 = "apple"; 
      $food_2 = "orange";
      $food_3 = "banana";

      $foods = array("apple","orange","banana"); //4 elements

      echo $foods[0] ."<br>";
      echo $foods[2] ."<br>";

      foreach($foods as $food){
           echo  $food ."<br>";

      }


      $foods[0] = "pineaple";
       foreach($foods as $food){
           echo  $food ."<br>";

      }
      
      array_push($foods,"coconut","kiwwi");
       foreach($foods as $food){
           echo  $food ."<br>";

      }

      // array_push($foods,"coconut","nut")---> will add to the last
      //array_pop($foods) --> remove 1st elements
      //array_shift($doods)-->shift 1st element
      //count($foods)--> count elements

?>