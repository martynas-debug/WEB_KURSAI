<?php

function skaicius($min, $max) {
    $skaicius = rand($min, $max);
    return $skaicius;
}

echo skaicius(5, 10);
