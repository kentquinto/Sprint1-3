<?php
$countries = array("Korea","France","Spain","Canada","Germany","Mexico");

$size = count($countries);

echo "Size of the Array: " . $size . "\n";

unset($countries[2]);

$countries = array_values($countries);

echo "Array content: "."\n";
foreach ($countries as $country) {
    echo $country . "\n";
}

?>