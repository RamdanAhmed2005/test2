<?php
         //==This is a task for using Data Type==

// Data Type
$numbers = [10, 33, 1222, 4444, 0, -1111];

// You bring the largest number
$largest = max($numbers);

// You bring the smallest number
$smallest = min($numbers);

// Used for printing
echo "Largest number: " . $largest . "<br>";
echo "Smallest number: " . $smallest ."<br>";


              //==This task1 calculates the sum of all numbers from 1 to 1000==
         
        //A variable that stores the set of numbers that will satisfy the condition.
$num2 = 0;
  //Starting from 1 to 1000
 for ($i = 1; $i <= 1000; $i++) {

    /* Condition: The number must be a multiple of 3 or 5
     Not a multiple of 7
     Greater than 50 and less than 500 */
    if (($i % 3 == 0 || $i % 5 == 0) && $i % 7 != 0 && $i > 50 && $i < 500) {
        $num2 += $i;
     }
    }          
    // Used for printing    
    echo "The sum is: $num2";
?>