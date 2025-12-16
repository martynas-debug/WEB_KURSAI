<?php

function skaicius($min, $max) {
    return rand($min, $max);
}

$atsitiktinis = skaicius(5, 10);
echo "atsitiktinis skaicius: $atsitiktinis";
