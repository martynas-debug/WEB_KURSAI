<?php

function atsitiktiniaiSkaiciai($kiek) {
    $skaiciai = array();
    for ($i = 0; $i < $kiek; $i++) {
        array_push($skaiciai, rand(1, 100));
    }
    return $skaiciai;
}

$atsitiktiniai = atsitiktiniaiSkaiciai(10);
print_r($atsitiktiniai);
echo "<br><br>";

print_r(atsitiktiniaiSkaiciai(5));
