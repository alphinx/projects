<?php
function check($number){
    if($number % 9 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}
  
$number = 39;
check($number)
?>