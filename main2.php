<?php
for ($num = 2; $num <= 100; $num++) {
    $status = true; 

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            $status = false; 
            break; 
        }
    }

    if ($status) {
        echo $num . " ";
    }
}

