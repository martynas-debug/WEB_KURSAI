<?php

$skaicius1 = -2;
$skaicius2 = 8;

if ($skaicius1 > 0 && $skaicius2 > 0) {
    echo "skaiciai teigiami";
} else if ($skaicius1 < 0 && $skaicius2 < 0) {
    echo "skaiciai neigiami";
} else if ($skaicius1 > 0 || $skaicius2 > 0) {
    echo "kazkuris skaicius teigiamas";
} else if ($skaicius1 < 0 || $skaicius2 < 0) {
    echo "kazkuris skaicius neigiamas";
}
