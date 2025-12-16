<?php

$skaiciai = array(7, 5, 3, 9, 5, 8, 7, 1, 2, 6);

$ieskomas = rand(1, 10);
echo "ieskomas skaicius yra $ieskomas <br>";

echo "<ul>";
foreach ($skaiciai as $skaicius) {
    if ($ieskomas === $skaicius) {
        echo '<li style="color: red">'.$skaicius.'</li>';
    } else {
        echo "<li>$skaicius</li>";
    }
}
echo "</ul>";
