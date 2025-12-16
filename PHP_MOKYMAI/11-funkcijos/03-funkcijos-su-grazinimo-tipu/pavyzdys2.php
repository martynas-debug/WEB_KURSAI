<?php

function skaicius() {
    $skaicius = rand(1, 100);
    return $skaicius;
}

$skaic = skaicius();
echo $skaic;
