<?php

$skaiciai = array(4, 7, 8, 3, 6, 5, 7, 4, 2);

$ieskomas = 5;

foreach ($skaiciai as $skaicius) {
    if ($ieskomas === $skaicius) {
        echo "skaicius $ieskomas rastas";
        break;
    }
}
