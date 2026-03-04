<?php
$colors = ["Blue", "Yellow", "Black"];
$letter = "l";
$containLetter = true;
foreach ($colors as $color) {
    if (stripos($color, $letter) === false) {
        $containLetter = false;
        break;
    }
}
echo $containLetter? "true": "false";

?>