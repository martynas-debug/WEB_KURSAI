<?php

function skaicius($min, $max) {
    return rand($min, $max);
}

echo skaicius(5, 10);
