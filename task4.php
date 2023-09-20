<?php
function fibonacci($count) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $count; $i++) {
        echo $first . " ";
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

// Call the function to generate and print the first 15 Fibonacci numbers
fibonacci(15);

