<?php
    function checkDivision($begin = 1, $end = 60) {
        for ($i = $begin; $i <= $end; $i++) {
            if ($i % 3 == 0 && $i % 2 == 0 && $i % 10 == 0) 
                echo "The number ". $i. ' is divisible by 2, is divisible by 3, is divisible by 10'."\n";

            else if ($i % 2 == 0 && $i % 3 == 0) 
                echo "The number ". $i. ' is divisible by 2, is divisible by 3'."\n";

            else if ($i % 2 == 0 && $i % 10 == 0)
                echo "The number ". $i. ' is divisible by 2, is divisible by 10'."\n";

            else if ($i % 3 == 0 && $i % 10 == 0)
                echo "The number ". $i. ' is divisible by 3, is divisible by 10'."\n";

            else if ($i % 2 == 0) 
                echo "The number ". $i. ' is divisible by 2'."\n";

            else if ($i % 3 == 0)
                echo "The number ". $i. ' is divisible by 3'."\n";

            else if ($i % 10 == 0) 
                echo "The number ". $i. ' is divisible by 10'."\n";

            else 
                echo "The number ". $i. ' -'."\n";
        }
    }
    // echo "*** Range is 3 - 7 checkDivision(3,7) ***\n";
    // checkDivision(3,7);
    
    // echo"\n*** Range is 58 - ... checkDivision(58) ***\n";
    // checkDivision(58);
    
    // echo"\n*** Range is ... - ... checkDivision() ***\n";
    // checkDivision();
?>