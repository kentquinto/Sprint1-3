<?php
$studentGrade = [
    "Harry" => [5,6,7,8,9],
    "Ron" => [4,5,6,7,8],
    "Hermione" => [10,10,10,10,10],
    "Weasley" => [5,5,5,5,5],
    "Draco" => [1,2,3,1,2]
];
function calculateAverageStudent($grades) {
    return array_sum($grades) / count($grades);
}
foreach ($studentGrade as $name => $grade) {
    $average = calculateAverageStudent($grade);
    echo "Average grade of " . 
    $name . ": " . $average . "\n";
}

function calculateAverageClass($studentGrade) {
    $totalAverage = 0;
    foreach ($studentGrade as $grade) {
        $totalAverage += calculateAverageStudent($grade);
    }
    return $totalAverage / count($studentGrade);
}
$classAverage = calculateAverageClass($studentGrade);
echo "Average grade of the class: " . $classAverage . "\n";
?>