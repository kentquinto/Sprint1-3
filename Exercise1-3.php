<?php
$colors = ["Blue", "Yellow", "Black"];
$letter = "l";
function checkLetterInColors($colors, $letter) {
    foreach ($colors as $color) {
        if (stripos($color, $letter) === false) {
            return false;
        }
    }
    return true;
}
$result = checkLetterInColors($colors, $letter);
echo $result? "true": "false";
?>