<?php
$guestList1 = [
    "Donald Trump", 
    "Elon Musk",
    "Jensen Huang",
    "Superman"];
$guestList2 = [
    "Floyd Mayweather", 
    "Manny Pacquiao", 
    "Ryan Garcia",
    "Superman"];
$repeated = null;
foreach ($guestList1 as $doubled) {
    if (in_array($doubled, $guestList2)) {
        $repeated = $doubled;
        break;
    }
}
echo "Repeated guest: " . $repeated . "\n";

$allGuests = array_merge($guestList1, $guestList2);
$allGuests = array_unique($allGuests);
echo "All guests combined without names being REPEATED: " . "\n" . implode("\n", $allGuests) . "\n";

$exclusive1 = array_diff($guestList1, [$repeated]);
$exclusive2 = array_diff($guestList2 , [$repeated]);

echo "Exclusives in the first guests: " . "\n";
foreach($exclusive1 as $exclusive) {
echo $exclusive . "\n";
}

echo "Exclusives in the second guests: " . "\n";
foreach($exclusive2 as $exclusive) {
echo $exclusive . "\n";
}
?>