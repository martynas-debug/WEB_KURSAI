<?php

function isvedimas($skaiciai) {
    echo "skaiciai: ";
    foreach ($skaiciai as $sk) {
        echo "[$sk] ";
    }
    echo "<br>";
    echo "siu skaiciu suma: " . suma($skaiciai);
}

function suma($skaiciai) {
    $sum = 0;
    foreach ($skaiciai as $skaicius) {
        $sum += $skaicius;
    }
    return $sum;
}

$skaiciai = array(8, 9, 7, 5, 3);
isvedimas($skaiciai);
