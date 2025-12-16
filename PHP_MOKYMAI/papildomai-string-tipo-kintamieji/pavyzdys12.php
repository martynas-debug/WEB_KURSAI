<?php

$tekstas = "Krabas";
echo "'$tekstas' suhashintas: " . md5($tekstas) . "<br>";

if (md5($tekstas) == "9800ff5d678c3a7f1732a0b54142685f") {
    echo "Labas krabas!";
    exit;
}
