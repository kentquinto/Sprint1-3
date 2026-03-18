<?php
$stringNames = ["Barcelona", "Paris", "London", "Munich", "Milan"];
function nameLength($names) {
    return strlen($names) % 2 === 0;
};
$evenWords = array_filter($stringNames,"nameLength");
echo implode("\n",$evenWords);
?>