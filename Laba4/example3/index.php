<?php
function printNumber($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "<p>" . $i . "</p>";
    }
}
printNumber(1, 10);