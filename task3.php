<?php
$previous = 0;
$current = 1;
$count = 0;

while ($count < 10) {
    $next = $previous + $current;
    
    if ($next > 100) {
        break;
    }

    echo $next . "\n";
    
    $previous = $current;
    $current = $next;
    $count++;
}


