<?php

$skaiciai = array();

for ($i = 0; $i < 10; $i++) {
    $skaiciai[$i] = rand(1, 10);
}

foreach ($skaiciai as $skaicius) {
    echo "[$skaicius] ";
}
