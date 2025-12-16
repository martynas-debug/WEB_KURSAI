<?php

$kiekis = 10;

while ($kiekis >= 0) {
    echo "turimas kiekis: $kiekis <br>";
    $kiekis -= rand(1, 3);
}
