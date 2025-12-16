<?php

function isvedimas($skaiciai) {
    echo "skaiciai: ";
    foreach ($skaiciai as $sk) {
        echo "[$sk] ";
    }
    echo "<br>";
}

function suma($skaiciai) {
    $sum = 0;
    foreach ($skaiciai as $skaicius) {
        $sum += $skaicius;
    }
    return $sum;
}

$skaiciai = array(7, 5, 8, 3);
isvedimas($skaiciai);
echo "siu skaiciu suma: " . suma($skaiciai);
