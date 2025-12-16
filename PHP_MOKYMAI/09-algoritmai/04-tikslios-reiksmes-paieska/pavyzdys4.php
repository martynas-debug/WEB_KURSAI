<?php

$skaiciai = array();

for ($i = 0; $i < 20; $i++) {
    $skaiciai[$i] = rand(1, 10);
}

$ieskomas = rand(1, 10);
$kiek = 0;

echo "<ul>";
foreach ($skaiciai as $skaicius) {
    if ($ieskomas === $skaicius) {
        echo '<li style="color: red">'.$skaicius.'</li>';
        $kiek++;
    } else {
        echo "<li>$skaicius</li>";
    }
}
echo "</ul>";

echo "ieskomas skaicius yra $ieskomas jis buvo rastas $kiek kartus";
