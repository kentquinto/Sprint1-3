<?php
$wholeNumber = [ 1, 5, 10, 15, 20];
    function cube(int $number) {
        return $number * $number * $number;
    }
$cubedNumbers = array_map("cube", $wholeNumber);
    foreach ($cubedNumbers as $cubedNumber) {
     echo $cubedNumber . "\n";
    }
?>