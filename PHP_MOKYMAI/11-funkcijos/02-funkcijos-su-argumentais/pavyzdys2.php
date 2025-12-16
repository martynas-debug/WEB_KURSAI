<?php

$vardas = "Gabriele";
$amzius = 22;

function informacija($vard, $amz) {
    echo "$vard ($amz m.) <br>";
}

informacija($vardas, $amzius);
informacija($vardas, 20);
informacija("Paulius", $amzius);
informacija("Giedrius", 70);
