<!-- Function = write some code once,
     reuse when u need it type() after
     function name to invoke ex . add()
     substruct multiply() divide()-->

 <!-- parameter= first_name ,age
      argument = patrick,bob,31,30-->
 

<?php
    function happy_birthday($first_name,$age){

        echo "Happy birthday Noob shit!{$first_name}!You are {$age} years old...  <br>";

    }
    happy_birthday("patrick",31);
    happy_birthday("bob",30);
    
?>

<?php
    // function is_even($number){
    //     $result = $number % 2; 
    //     return $result;
    // }
    // echo is_even(11);
    
    
     function is_even($number){
       return $number % 2; 
        
    }
    echo is_even(11);
?>

<br>
<?php
    function hypotenuse($a,$b){
        $c = sqrt($a**2+$b**2);
        return $c;
    }
    echo hypotenuse(4,4);
?>