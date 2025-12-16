<?php

function suma($skaiciai) {
    $sum = 0;
    foreach ($skaiciai as $skaicius) {
        $sum += $skaicius;
    }
    return $sum;
}

$skaiciai = array(4, 7, 5, 3, 6, 5, 4);
echo "skaiciai: ";
print_r($skaiciai);
echo "<br>siu skaiciu suma: " . suma($skaiciai);
