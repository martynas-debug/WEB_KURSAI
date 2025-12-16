<?php

$skaicius = 0;

while ($skaicius < 10) {
    $skaicius++;
    if ($skaicius == 2 || $skaicius == 7) {
        continue;
    }
    echo "$skaicius <br>";
}
