<?php

$skaiciai = array(7, 8, 5, 3, 4);

print_r($skaiciai);
echo "<br>";

for ($i = 0; $i < count($skaiciai); $i++) {
    $skaiciai[$i] += rand(1, 5);
}

print_r($skaiciai);
