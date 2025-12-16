<?php

function skaicius($min, $max) {
    return rand($min, $max);
}

echo "atsitiktinis skaicius: " . skaicius(1, 100);
