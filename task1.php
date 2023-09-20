<?php 
function printEvenNumberss($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
printEvenNumberss(2, 20, 2);
echo "\n";
echo "\n";
function doWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

doWhileLoop(2, 20, 2);

